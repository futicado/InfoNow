@extends('Layout.layout')
@section('conteudo')
    {{-- validar se usuário com a session ative --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

    <style>
        .twitter-share-button{
    display: inline-block;
    width: 40px;
    height: 40px;
    margin: 5px;
    background-size: 100% 100%; /* ou 'contain' */
    background-image: url("[URL-DO-ICONE]");
    background-repeat: no-repeat;
    background-position: center;
}


    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    var url = encodeURIComponent(window.location.href);
    var titulo = encodeURIComponent(document.title);
    //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
    //altera a URL do botão
    document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo;

    //se for usar o atributo via, utilize a seguinte url
    document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
}, false);

    </script>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dashboard') }}">Plataforma de Livros</a>
        <div style="width:50%"><input class="form-control" disabled style="visibility:hidden" type="text" placeholder="Buscar Livros" aria-label="Buscar Livros">
        </div>

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button"
                data-toggle="dropdown">Usuário Convidado
                <span class="caret"></span></button>
            <ul class="dropdown-menu">

                <a class="nav-link" href="{{ route('sair') }}">
                    <center>    Login </center>
                </a>
            </ul>
        </div>
        </div>

    </nav>

    <div class="container-fluid">


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Anúncios recentes</h1>


                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>

                    </div>
                </div>

                <div class="album py-5 bg-light">
                    <div class="container">

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                            @if (session('mensagem'))
                                <script>
                                    alert('Anúncio pertence a outro usuário e não pode ser deletado!');
                                </script>
                            @endif

                            @foreach ($lista as $res)
                                <div class="col-sm">
                                    <div class="card shadow-sm">
                                        <label>{{ $res->Nomeliv }}</label>
                                        <img src="{{ $res->Pathliv }}"
                                            class="bd-placeholder-img card-img-top" width="50px" height="255"
                                            focusable="false" target_blank>

                                        <rect width="100%" height="100%" fill="#55595c"></rect>

                                        <div class="card-body">
                                            <p class="card-text" style="font-size:14px">{{ $res->Descricaoliv }}</p>
                                            <br>
                                            <label>Ano:</label>{{ " ". $res->Anoliv}}<br>
                                            <label>Autor(a):</label>{{" ".  $res->Autorliv}}<br>
                                            <label>Gênero:</label>{{" ". $res->Generoliv}}<br>
                                            <label>ISBN:</label>{{ " ".$res->Isbnliv}}

                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://plataformadelivros2.000webhostapp.com/Dashboardl#cp{{$res->Pkcodliv}}"
                                                    Title="facebook" class="btn btn-sm btn-outline-secondary">
                                                    <img width="25" height="25" src="https://ayltoninacio.com.br/img/s/18w50.jpg" alt="">
                                                    </a>

                                                    <a class="btn btn-sm btn-outline-secondary"  id="twitter-share-btt" rel="nofollow" class="twitter-share-button" href="https://twitter.com/intent/tweet?text=https://plataformadelivros2.000webhostapp.com/Dashboardl#cp{{$res->Pkcodliv}}">
                                                     <img width="25" height="25" src="https://cdn-icons-png.flaticon.com/512/889/889147.png" alt="">
                                                    </a>
                                                </div>
                                                <small class="text-muted">Tipo: {{ $res->Statusliv }}</small>
                                                <small class="text-muted">9 mins</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>

        @foreach ($lista as $res)
            <div id='{{$res->Pkcodliv }}' class="overlay">

                <style>
                    .share button {
                        padding: 0.5rem;
                        margin: 1rem 2rem 1rem 0;
                        background: none;
                        border: none;
                        color: #333;
                    }

                    .share button svg {
                        height: 30px;
                        width: 30px;
                    }

                    .share button:hover {
                        color: red;
                    }

                    .cpy {
                        border: none;
                        background-color: #e6e2e2;
                        border-bottom-right-radius: 4px;
                        border-top-right-radius: 4px;
                        cursor: pointer;
                    }

                    <style>
        .box {
            width: 40%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        .button {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid #06D85F;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .button:hover {
            background: #06D85F;
        }

        .overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlay:target {
            visibility: visible;
            opacity: 1;
        }

        .popup {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 30%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popup h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popup .close:hover {
            color: #06D85F;
        }

        .popup .content {
            max-height: 30%;
            overflow: auto;
        }

        @media screen and (max-width: 700px) {
            .box {
                width: 70%;
            }

            .popup {
                width: 70%;
            }
        }
                </style>

                <div class="popup">
                    <a class="close" href="#">&times;</a>
                    <label style="font-weight: 600">Compartilhe </label> &nbsp <label style="margin-left:20%;font-weight: 600">Link do Site </label><br />
                    <div class="share">
                        <button id="share-fb" class="sharer button"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-facebook"
                                viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></button>
                        <button id="share-tw" class="sharer button"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-twitter"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></button>
                            <input type="text" id="url" width="30px" onclick="myFunction()" value="plataformadelivros.com.br">
                    </div>

                    <div>


                    </div>
                </div>


                    <script>
                        function myFunction() {
                            $("#url").click(function() {
                                $(this).select();

                                document.execCommand('copy');
                            });
                        }
                </script>

            </div>
    </div>
    @endforeach

    <style>
        .boxs {
            width: 40%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.2);
            padding: 35px;
            border: 2px solid #fff;
            border-radius: 20px/50px;
            background-clip: padding-box;
            text-align: center;
        }

        .buttons {
            font-size: 1em;
            padding: 10px;
            color: #fff;
            border: 2px solid #06D85F;
            border-radius: 20px/50px;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
        }

        .buttons:hover {
            background: #06D85F;
        }

        .overlays {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            transition: opacity 500ms;
            visibility: hidden;
            opacity: 0;
        }

        .overlays:target {
            visibility: visible;
            opacity: 1;
        }

        .popups {
            margin: 70px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 80%;
            position: relative;
            transition: all 5s ease-in-out;
        }

        .popups h2 {
            margin-top: 0;
            color: #333;
            font-family: Tahoma, Arial, sans-serif;
        }

        .popups .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }

        .popups .close:hover {
            color: #06D85F;
        }

        .popups .content {
            max-height: 30%;
            overflow: auto;
        }

        @media screen and (max-width: 700px) {
            .boxs {
                width: 70%;
            }

            .popups {
                width: 70%;
            }
        }
    </style>


    @foreach ($lista as $res)
        <div id='{{ 'cp' .  $res->Pkcodliv }}' class="overlays">
            <div class="popups">
                <h2></h2>
                <a class="closes" href="#">&times;</a>
                <div class="content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                              <img class="rounded-circle" src="{{ $res->Pathliv }}" alt="Imagem do livro" width="140" height="140">
                              <h2>{{$res->Nomeliv}}</h2>
                              <label>Ano:</label>{{ " ". $res->Anoliv}}<br>
                              <label>Autor(a):</label>{{" ".  $res->Autorliv}}<br>
                              <label>Gênero:</label>{{" ". $res->Generoliv}}<br>
                              <label>ISBN:</label>{{ " ".$res->Isbnliv}}

                            </div>

                            <div  class="col-lg-4">
                            <h5 class="card-header">Descrição</h5>
                            <div class="card-body">
                              <h5 class="card-title"></h5>
                              <p class="card-text">
                                {{ $res->Descricaoliv }}
                              </p>

                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


<script>
    document.addEventListener("DOMContentLoaded", function(event) {


        var shareUrl = window.location.href;
        var shareTitle = document.title;
        var shareSubject = "Ótima página para doar ou trocar seus Livros ";
        var shareImage = "PlataformadeLivros@gmail.com.br";
        var shareDescription = "PlataformadeLivros@gmail.com.br";


        //facebook
        $('#share-fb').attr('data-url', shareUrl).attr('data-sharer', 'facebook');
        //twitter
        $('#share-tw').attr('data-url', shareUrl).attr('data-title', shareTitle).attr('data-sharer', 'twitter');

        window.Sharer.init();

    });
</script>
@endsection
