@extends('Layout.layout')

@section('conteudo')
    <style>
        body {
            background-image: url('img/fundoc.png');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }
    </style>
    <br>


    @if ($errors->any())
            <center>
                @foreach ($errors->all() as $mensagem_erro)
                 <span class="alert alert-danger " role="alert">
                        {{ $mensagem_erro }}
                 </span>
                @endforeach
            </center>
        @endif
        <br>
    <div class="d-flex justify-content-center">

        {{-- Erros   Erros no formulário. --}}

        <center>
            <form class= "form-control" method="post" action="{{ Route('verificacadastro') }}">
                @csrf
                <div class="container-sm">
                    <img class="mb-4"src="img/logo.png" alt="" width="170" height="120">
                    <h1 class="h3 mb-4 fw-normal">Cadastro de usuário</h1>


                    <div class="form-control">
                        <label for="floatingInput">Nome&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <input type="text" class="form-control" id="floatingInput" name="nome"
                            placeholder="João da Silva" value="{{ old('nome') }}" required>

                    </div>
                    <br>
                    <div class="form-control">
                        <label for="floatingInput">Email&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" value="{{ old('email') }}" required>
                    </div>
                    <br>
                    <br>
                    <div class="form-control
                    ">
                        <label for="floatingPassword">Senha:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <input type="password" class="form-control" id="floatingPassword" name="senha"
                            placeholder="Password" value="{{ old('senha') }}" required>
                    </div>
                    <br>
                    <center><button type="submit">Entrar</button></center>
                    <br>
                    <br>
                </div>
                <p class="mt-5 mb-4 text-muted">© 2022</p>
            </form>
    </div>
    </center>
</div>


