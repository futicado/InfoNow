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

    <div class="container" >
        <div class="py-5 text-center">
            <a href="{{ route('dashboard') }}" ><img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="275" height="175"></a>
            <h2>Aplicação do Checklist</h2>
            <p class="lead">Realize a avaliação do item utilizando as opções abaixo:<br><br>
                SIM<span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span>
                N/A<span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span>
                NÃO<span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span>
            </p>

        </div>
        <div class="row">

            <center><div class="card-body">
                <div class="col-md-6 order-md-1">

                <h4 class="mb-3">Insira as informações</h4>
                <hr class="mb-4">
                <form class="needs-validation" novalidate action="{{route('cadastrosubmissao')}}" method="post">
                    @csrf
                    <div class="row">
                    <table class="table">
            <tbody>
              <tr>

                  <div class="col-md-15 mb-3">
                            <label for="firstName">Nome do item</label>
                            <input class="form-control" id="firstName" name="nomeitem" list="textos" required />
                        <datalist id="textos">
                            @foreach ($list as $i )
                             <option value='{{$i->nome;}}' name="item">
                            @endforeach

                        </datalist>
                            <div class="invalid-feedback">
                                Necessário inserir o nome do Item
                </div>
              </tr>
              <tr>
                <p class="lead"> 1- Existem rachaduras? </p>
                <p class="lead">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-warning ">
                      <input type="radio" name="options0" id="option1"  autocomplete="off" value="0" required ><span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>

                    <label class="btn btn-warning">
                      <input type="radio" name="options0" id="option3" autocomplete="off" value="1" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
                  </div></p>
              </tr>
              <tr>
                <p class="lead"> 2 - A pintura está boa? </p>
                <p class="lead">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-warning ">
                    <input type="radio" name="options1" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options1" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span>
                </label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options1" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
                </div></p>
            </tr>
            <tr>
              <p class="lead"> 3 - Possui corrosões? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options2" id="option1"  autocomplete="off" value="0" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options2" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options2" id="option3" autocomplete="off" value="1" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
              </div></p>
          </tr>
          <tr>
            <p class="lead"> 4 - Os cabos estão conectados? </p>
            <p class="lead">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-warning ">
                <input type="radio" name="options3" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
              <label class="btn btn-warning">
                <input type="radio" name="options3" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
              <label class="btn btn-warning">
                <input type="radio" name="options3" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
            </div></p>
        </tr>
        <tr>
          <p class="lead"> 5 - As travas de segurança estão funcionando?</p>
          <p class="lead">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-warning ">
              <input type="radio" name="options4" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
            <label class="btn btn-warning">
              <input type="radio" name="options4" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
            <label class="btn btn-warning">
              <input type="radio" name="options4" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
          </div></p>
          </tr>
          <tr>
            <p class="lead"> 6 - O nível do óleo está bom? </p>
            <p class="lead">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-warning ">
            <input type="radio" name="options5" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
              <label class="btn btn-warning">
              <input type="radio" name="options5" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
              <label class="btn btn-warning">
              <input type="radio" name="options5" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
              </div></p>
              </tr>
              <tr>
                <p class="lead"> 7 - Tem vazamento aparente? </p>
                <p class="lead">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-warning ">
                    <input type="radio" name="options6" id="option1" autocomplete="off" value="0" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options6" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options6" id="option3" autocomplete="off" value="1" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
                </div></p>
            </tr>
            <tr>
              <p class="lead"> 8 - A pressão do óleo está boa? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options7" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options7" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options7" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
              </div></p>
            </tr>
            <tr>
              <p class="lead"> 9 - A rotação do equipamento está funcionando? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options8" id="option1" autocomplete="off" value="1" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options8" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="26px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options8" id="option3" autocomplete="off" value="0" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
              </div></p>
            </tr>
            <tr>
              <p class="lead"> 10 - Possui alguma parte solta? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options9" id="option1" autocomplete="off" value="0" required> <span style='font-size:20px;'> <img src={{ asset('img/01.png') }} height="24px" width="24px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options9" id="option2" autocomplete="off" value="2" required><span style='font-size:20px;'> <img src={{ asset('img/03.png') }} height="26px" width="24px"></span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options9" id="option3" autocomplete="off" value="1" required><span style='font-size:20px;'> <img src={{ asset('img/02.png') }} height="24px" width="24px"></span></label>
              </div>
              </p>
            </tr>
            </tbody>
            </table>

                    <div>
                        <button class="btn btn-primary btn-block" style="width: 85px"  onclick="history.back()">Cancelar</button>
                        <button class="btn btn-primary btn-block" style="width: 85px"  type="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy;2023</p>

        </footer>
    </div>
    </div> </center>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
