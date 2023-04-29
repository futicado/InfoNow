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
            <a href="{{ route('dashboard') }}" ><img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="150" height="110"></a>
            <h2>Aplicação do Checklist</h2>
            <p class="lead">Realize a avaliaçao do item utilizando as opções abaixo: </p>
        </div>
        <div class="row">

            <center><div class="card-body">
                <div class="col-md-6 order-md-1">

                <h4 class="mb-3">Informações</h4>
                <hr class="mb-4">
                <form class="needs-validation" novalidate action="{{route('cadastrolivro
                submissao')}}" method="post">
                    @csrf
                    <div class="row">
                    <table class="table">
            <tbody>
              <tr>

                  <div class="col-md-15 mb-3">
                            <label for="firstName">Nome do Item</label>
                            <input class="form-control" id="firstName" name="nomeitem" list="textos" />
                        <datalist id="textos">
                            <option value="" name="item">
                        </datalist>
                            <div class="invalid-feedback">
                                Necessário inserir o nome do Item
                </div>
              </tr>
              <tr>
                <p class="lead"> 1- Existem trincas? </p>
                <p class="lead">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-warning ">
                      <input type="radio" name="options0" id="option1"  autocomplete="off" value="1" > <span style='font-size:20px;'>&#128578;</span></label>
                    <label class="btn btn-warning">
                      <input type="radio" name="options0" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
                  </div></p>
              </tr>
              <tr>
                <p class="lead"> 2 - Pintura? </p>
                <p class="lead">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-warning ">
                    <input type="radio" name="options1" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options1" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options1" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
                </div></p>
            </tr>
            <tr>
              <p class="lead"> 3 - Sem corrosões? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options2" id="option1"  autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options2" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options2" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
              </div></p>
          </tr>
          <tr>
            <p class="lead"> 4 - Cabos? </p>
            <p class="lead">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-warning ">
                <input type="radio" name="options3" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
              <label class="btn btn-warning">
                <input type="radio" name="options3" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
              <label class="btn btn-warning">
                <input type="radio" name="options3" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
            </div></p>
        </tr>
        <tr>
          <p class="lead"> 5 - Travas de segurança?</p>
          <p class="lead">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-warning ">
              <input type="radio" name="options4" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
            <label class="btn btn-warning">
              <input type="radio" name="options4" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
            <label class="btn btn-warning">
              <input type="radio" name="options4" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
          </div></p>
          </tr>
          <tr>
            <p class="lead"> 6 - Nível do óleo? </p>
            <p class="lead">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-warning ">
            <input type="radio" name="options5" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
              <label class="btn btn-warning">
              <input type="radio" name="options5" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
              <label class="btn btn-warning">
              <input type="radio" name="options5" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
              </div></p>
              </tr>
              <tr>
                <p class="lead"> 7 - Sem vazamentos? </p>
                <p class="lead">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-warning ">
                    <input type="radio" name="options6" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options6" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                  <label class="btn btn-warning">
                    <input type="radio" name="options6" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
                </div></p>
            </tr>
            <tr>
              <p class="lead"> 8 - Pressão do óleo? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options7" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options7" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options7" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
              </div></p>
            </tr>
            <tr>
              <p class="lead"> 9 - Rotação? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options8" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options8" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options8" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
              </div></p>
            </tr>
            <tr>
              <p class="lead"> 10 - Partes soltas ? </p>
              <p class="lead">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-warning ">
                  <input type="radio" name="options9" id="option1" autocomplete="off" value="1"> <span style='font-size:20px;'>&#128578;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options9" id="option2" autocomplete="off" value="2"> <span style='font-size:20px;'>&#128528;</span></label>
                <label class="btn btn-warning">
                  <input type="radio" name="options9" id="option3" autocomplete="off" value="0"> <span style='font-size:20px;'>&#128577;</span></label>
              </div>
              </p>
            </tr>
            </tbody>
            </table>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
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
