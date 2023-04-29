@extends('Layout.layout')

@section('conteudo')
    <style>
        body {
            background-image: url('img/.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
         <center>

                @csrf
                <div class="container">
                    <a href="{{ route('dashboard') }}" >
                          <img style="margin-top:5%;" class="mb-4"src="img/logo.png" alt="" width="170" height="120"></a>
                    <h1 class="h3 mb-4 fw-normal"></h1>
                <br>
                    <p >
                    <div style=" color:black; padding-left:2%; text-align: justify;width:600px">
                    A plataforma InfoNow foi criada para solucionar o problema da manutenções em máquinas  ocorre em diversas empresas que necessitam em algum momento 
      realizar a manutenção de suas máquinas. sendo assim ocorreria essa manutenção no melhor momento para não prejudicar a produção. 
      Com o InfoNow será possível verificar qual o tempo de vida de cada equipamento envolvido no processo e assim criar uma forma
      de programar horários e dias especificos.  
                        </div>
                        </p>
                 </div>
                <p class="mt-5 mb-4 text-muted">Desenvolvido por : Jhonatan Matos da Silva</p>
    </center>
@endsection
