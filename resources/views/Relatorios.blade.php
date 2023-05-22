@extends('Layout.layout')
@section('conteudo')
    {{-- validar se usuário com a session ative --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dashboard') }}">InfoNow</a>
        <div style="width:50%">
        </div>
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button"
                data-toggle="dropdown">{{ session()->get('email') }}
                <span class="caret"></span></button>
            <ul class="dropdown-menu">

                <a class="nav-link" href="{{ route('sair') }}">
                    <center>Sair</center>
                </a>
            </ul>
        </div>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashboard') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastroitem') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                Aplicar Checklist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('relatorios') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-binary" viewBox="0 0 16 16">
                                    <path d="M7.05 11.885c0 1.415-.548 2.206-1.524 2.206C4.548 14.09 4 13.3 4 11.885c0-1.412.548-2.203 1.526-2.203.976 0 1.524.79 1.524 2.203zm-1.524-1.612c-.542 0-.832.563-.832 1.612 0 .088.003.173.006.252l1.559-1.143c-.126-.474-.375-.72-.733-.72zm-.732 2.508c.126.472.372.718.732.718.54 0 .83-.563.83-1.614 0-.085-.003-.17-.006-.25l-1.556 1.146zm6.061.624V14h-3v-.595h1.181V10.5h-.05l-1.136.747v-.688l1.19-.786h.69v3.633h1.125z"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                  </svg>
                                Relatórios
                            </a>
                        </li>



                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Contato</span>
                    </h6>

                    <ul class="nav flex-column mb-2">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobre') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Sobre
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <h1 class="h2">Relatórios</h1>

                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                        </div>
                    </div>
                </div>
               
                <div class="row g-3">
                  <form  method="POST" action="{{route('relatorio')}}">
                    @csrf
                    <div class="col">
                     <label>Selecione um item para a predição: </label>
                    <br>
                    <select name="nomeitem" class="form-control">
                    @foreach ($list as $a )
                        <option value='{{$a->nome}}' >{{$a->nome}}</option>
                    @endforeach
                    </select>
                    <br>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <br>

                  </div>
                      <?php if(@$status == 1){?>


                        <h1 class="center">Resultado</h1>



                        <div  style="padding-top:3%"class="col-auto my-1">
                            @if ($result == 1)

                            <div class="alert alert-success" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                <h4 class="alert-heading">Status - Conformidade</h4>
                                <p><B>Realizado a predição com sucesso:</B> A Manutenção do item - <B>{{$nome}}</B> está em conformidade.</p>
                                <hr style="height:2px;">
                                <p class="mb-0">Continue realizando checklists periodicamente assim mantendo os equipamentos funcionando.</p>

                              </div>
                            @endif

                            @if ($result == 0)

                            <div class="alert alert-danger" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                <h4 class="alert-heading">Status - Inconformidade</h4>
                                <p><B>Realizado a predição com sucesso:</B> A Manutenção do item - <B>{{$nome}}</B> não está em conformidade.<br>
                                    <B>Sugestão:</B> Realize a manutenção imediatamente  evitando a parada inesperada</p>

                                <hr style="height:2px;">
                                <p class="mb-0">Continue realizando checklists periodicamente assim evitando que os equipamentos parem de funcionar.</p>
                              </div>
                            @endif

                        <div class="card-header">
                          </div>
                          <div class="card-body">
                            {{-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> --}}
                            <blockquote class="blockquote mb-0">
                              <p> A "feature_importances" identifica quais variáveis(Características) têm um impacto significativo no resultado final. <br>
                                Essas características-chave podem ser exploradas para obter
                                uma compreensão do resultado predito.</p>
                                <br>
                                <var>
                                   <pre> {{@$info}}</pre>
                                </var>
                                <br>
                                <p>Checklists realizados sobre item avaliado: {{$cont}}</p><br>

                                     <p id="demo">
                                     <button onclick="myFunction()">Mais informações clique aqui</button>
                                     </p>

                                    <script>
                                    function myFunction() {
                                    document.getElementById("demo").innerHTML = "<br><figure class='figure'><figcaption style='font-size:15px;'class='figure-caption'><b>Árvore de decisão</b></figcaption><img src='{{asset('img/arvore.png')}}' height='375px' width='475px' style='float:left' class='figure-img img-fluid rounded' alt=''></figure>";
                                    }
                                    </script>
                            </blockquote>
                          </div>
                        </div>
                        <?php }else {

                        }?>



                     </div>
                     </div>
                    <div style="padding-left:20%">
                    </div>
                  </form>
                    </div>



                </div>
        </div>




@endsection
