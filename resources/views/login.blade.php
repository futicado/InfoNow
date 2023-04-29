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
            <form class="form-control" method="post" action="{{ Route('submissao') }}">
                @csrf
                <div class="container">
                    <img class="mb-4"src="img/logo.png" alt="" width="170" height="120">
                    <!--<h1 class="h3 mb-4 fw-normal">InfoNow</h1>-->

                    <div class="form-control">
                        <label>E-mail</label>
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" value="{{ old('email') }}" height="120px">
                    </div>
                    <br>
                    <div class="form-control">
                        <label>Senha</label>
                        <input type="password" class="form-control" id="floatingPassword" name="senha"
                            placeholder="Password" value="{{ old('senha') }}">
                    </div>
                    <br>
                    <center><button class="form-control" type="submit">Entrar</button></center>

                </div>
                <p class="mt-5 mb-4 text-muted">© 2023</p>
            </form>
    </div>
    </center>

    </div>
@endsection
