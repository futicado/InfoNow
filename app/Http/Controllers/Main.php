<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Mail\Mailer as MailMailer;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\Break_;
use PhpParser\Node\Stmt\Else_;
use Symfony\Component\Console\Input\Input;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class Main extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function cadastro()
    {
        return view('cadastro');
    }
    public function relatorios()
    {

        return view('relatorios');
    }
    public function cadastroitem()
    {
        $list = DB::select('select distinct(n.nome) from tbitens as t INNER join tbnome as n on t.nome= n.codigonome;');

        return view('cadastroitem', ['list' => $list]);
    }
    public function sair(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function dashboard(Request $request)
    {
        if ($request->session()->has('email') == null) {
            return redirect()->route('dashboardl');
        } else {
            ///$lista = DB::select('select * from tblivro');
            // buscar no banco as informações e comparar.
            //return view('Dashboard', ['lista' => $lista]);
            return view('Dashboard');
        }
    }

    public function dashboardl(Request $request)
    {
        if ($request->session()->has('email') == null) {
            //$lista = DB::select('select * from tblivro');
            // buscar no banco as informações e comparar.
            //return view('Dashboardl', ['lista' => $lista]);
            return view('Dashboardl');
        }
    }



    public function cadastrosubmissao(Request $request)
    {


          // realizar o cadastro no banco de dados - Dados obtidos do formulário
          $nome = $request->input('nomeitem');
          $op[0]= $request->input('options0');
          $op[1]= $request->input('options1');
          $op[2]= $request->input('options2');
          $op[3]= $request->input('options3');
          $op[4]= $request->input('options4');
          $op[5]= $request->input('options5');
          $op[6]= $request->input('options6');
          $op[7]= $request->input('options7');
          $op[8]= $request->input('options8');
          $op[9]= $request->input('options9');
          $usercad= session()->get('email');

          //status é a conformidade do item baseado nas respostas do usuário
          //1 conformidade
          //0 inconformidade

          for($i=0; $i<10; $i++){
            if($op[$i]==0){
                $acum=0;
            }else{$acum=1;}
          }

          if($acum==0){
            $status=0;
          }else{
            $status=1;
          }

          $lista = DB::select('select Pkcodu from tbusuario where emailu = ?', [$usercad]);
          $user = $lista[0]->Pkcodu;

          try {
              $inserir= DB::insert('insert into tbnome (nome) values (?)', [$nome]); // inserindo o nome e uma tabela separada
              $nome=strtoupper($nome);

          } catch (\Throwable $th) {

          }

          $lista = DB::select('select codigonome from tbnome where upper(nome) = ?', [$nome]);
          $nomeInt = $lista[0]->codigonome;
          //var_dump($lista);

          DB::table('tbitens')->insert([

            'nome' => $nomeInt,'trinca' => $op[0],'pintura' => $op[1],'corrosao' => $op[2],'cabos' => $op[3],
            'travas' => $op[4], 'oleo' => $op[5],'vazamento' => $op[6],'pressoleo' => $op[7],'rotacao' => $op[8],'partesoltas' => $op[9],
            'usercad' => $user, 'conformidade' => $status]);


        //fazer a inserção no banco de dados
        return redirect()->route('dashboard') ->with('alert','CheckList aplicado como sucesso.');

    }



    
    public function submissao(Request $request)
    {
        // verificar problema de voltar a página.
        $email = $request->input('email');
        $senha = $request->input('senha');

        /*  if ($request->session()->has('email')) {
            $request->session()->flush();
            return redirect()->route('login');
        }*/


        //validação
        $request->validate(
            // regras de validação
            [
                'email' => 'required|max:30',
                'senha' => 'required|max:30'
            ],
            [
                'email.required' => 'O campo :attribute é obrigatório !!',
                'email.min' => 'O campo :attribute é limitado a 30 caracteres !!',
                'senha.required' => 'O campo senha é obrigatório !!'
            ]
        );

        //Informações vinda do formulário



        $listau = DB::select('select emailu, senhau from tbusuario');
        //$lista = DB::select('select * from tblivro');
        $a = 0;

        foreach ($listau as $dado) {
            if ($dado->emailu == $email and  $dado->senhau == $senha) {
                    $a = 1;
                }
        }

        if ($a == 1) {

            $senha = "";
            $request->session()->put('email', $email); // criando a variavel da sessão
            $email = "";
            return redirect()->route('dashboard');   // enviando os dados para o view do Dashboard.

        } else {
            echo "<script>alert('Você não possui cadastro na plataforma, redirecionando... ')</script>";
            return redirect()->route('cadastro'); // enviando os dados para o view do Dashboard.
        }
    }


    public function verificacadastro(Request $request)
    {

        $request->validate(
            // regras de validação
            [
                'email' => 'required|max:30',
                'senha' => 'required|max:30',
                'nome' => 'required|min:10'
            ],

            [
                'email.required' => 'O campo :attribute é obrigatório !!',
                'email.min' => 'O campo :attribute é limitado a 30 caracteres !!',
                'senha.required' => 'O campo senha é obrigatório !!',
                'nome.min' => 'Verifique o nome é muito curto!!',
                'nome.required' => 'Necessário inserir o nome!!'

            ]
        );


        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        try {
            $request->session()->put('email', $email);
            $list = DB::insert('insert into tbusuario (Nomeu, emailu, senhau) values (?, ?, ?)', [$nome, $email, $senha]);

            return redirect()->route('login');
        } catch (\Illuminate\Database\QueryException $ex) {

            echo "<script> alert('E-mail já esta sendo utilizado por outro usuário !!!');</script>";
            return view('cadastro');
        }

        //$lista = DB::select('select * from tblivro');
        // buscar no banco as informações e comparar.
        //return view('Dashboard', ['lista' => $lista]);
        return view('Dashboard');
    }

    public function excluir(Request $request, $id)
    {

        $lista = DB::select("select Emailliv from tblivro where pkcodliv=$id");

        $emailCadastro = $lista[0]->Emailliv;

        $email = $request->session()->get('email');

        if ($emailCadastro == $email) {
            DB::delete("delete From tblivro where pkcodliv=$id");
            echo "<script>alert('Anuncio do livro excluído com sucesso !!!');</script>";

            //$lista = DB::select('select * from tblivro');
            // buscar no banco as informações e comparar.
            //return redirect()->route('dashboard');
            return redirect()->route('dashboard');


        }else {
            echo "<script>alert('Anuncio do livro não pode ser excluído, pois pertence a outro usuário !!!');</script>";
           // $lista = DB::select('select * from tblivro');

            // buscar no banco as informações e comparar.
            return redirect()->route('dashboard');
        }
    }
}
