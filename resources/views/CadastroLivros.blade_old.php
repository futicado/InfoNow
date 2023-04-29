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
            <h2>Cadastro do Livro</h2>
            <p class="lead">Realize o cadastro do livro para doação ou troca, utilizando os campos abaixo: </p>
        </div>



        <div class="row">

            <center><div class="card-body">
                <div class="col-md-6 order-md-1">

                <h4 class="mb-3">Informações</h4>
                <hr class="mb-4">
                <form class="needs-validation" novalidate action="{{route('cadastrolivrosubmissao')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nome do Livro</label>
                            <input type="text" class="form-control" id="firstName" name="nomeliv" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Necessário inserir o nome do livro
                            </div>

                        </div>
                        <div class="col-md-3 mb-2">
                            <label>Ano</label>
                            <input type="date" class="form-control" name="ano"  required>
                            </select>
                            <div class="invalid-feedback">
                                Data do lançamento do livro
                            </div>
                        </div>

                        <div class="col-md-3 mb-2">
                            <label>Imagem</label>
                            <input type="file" class="form-control" name="path" required >
                            </select>
                            <div class="invalid-feedback">
                                Selecione uma imagem
                            </div>
                        </div>

                </div>



                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com.br"
                            name="email"  required>
                        <div class="invalid-feedback">
                            Insira um e-mail válido
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Autor</label>
                        <input type="text" class="form-control" id="address" name="autor" placeholder="Autor" required>
                        <div class="invalid-feedback">
                            Por favor insira o nome do Autor.
                        </div>
                    </div>

                    <div class="row">


                    <div class="col-md-5 mb-3">
                        <label for="address2">ISBN
                        <input type="text" class="form-control"
                         id="address2" placeholder="ex: 978-3-16-148410-0"  name="isbn" >
                    </div>

                        <div class="col-md-4 6 mb-3">
                            <label for="state">Gênero</label>
                            <select class="form-control" required name="genero">
                                <option value''> </option>
                                <option value'Ação e aventura'>Ação e aventura</option>
                                <option value"Arte e Fotografia">Arte e Fotografia</option>
                                <option value"Autoajuda">Autoajuda</option>
                                <option value"Biografia">Biografia</option>
                                <option value"Conto">Conto</option>
                                <option value"Crimes Reais">Crimes Reais</option>
                                <option value"Distopia">Distopia</option>
                                <option value"Ensaios">Ensaios</option>
                                <option value"Fantasia">Fantasia</option>
                                <option value"Ficção científica">Ficção científica</option>
                                <option value"Ficção Contemporânea">Ficção Contemporânea</option>
                                <option value"Ficção Feminina">Ficção Feminina</option>
                                <option value"Ficção histórica">Ficção histórica</option>
                                <option value"Ficção Policial">Ficção Policial</option>
                                <option value"Gastronomia">Gastronomia</option>
                                <option value"Gêneros de não ficção">Gêneros de não ficção</option>
                                <option value"Graphic Novel">Graphic Novel</option>
                                <option value"Guias & Como fazer ">Guias & Como fazer </option>
                                <option value"História">História</option>
                                <option value"Horror">Horror</option>
                                <option value"Humanidades e Ciências Sociais">Humanidades e Ciências Sociais</option>
                                <option value"Humor">Humor</option>
                                <option value"Infantil">Infantil</option>
                                <option value"LGBTQ+">LGBTQ+</option>
                                <option value"Memórias e autobiografia">Memórias e autobiografia</option>
                                <option value"New adult – Novo Adulto ">New adult – Novo Adulto </option>
                                <option value"Paternidade e família">Paternidade e família</option>
                                <option value"Realismo mágico">Realismo mágico</option>
                                <option value"Religião e Espiritualidade">Religião e Espiritualidade</option>
                                <option value"Romance">Romance</option>
                                <option value"Tecnologia e Ciência">Tecnologia e Ciência</option>
                                <option value"Thriller e Suspense">Thriller e Suspense</option>
                                <option value"Viajem">Viajem</option>
                                <option value"Young adult – Jovem adulto">Young adult – Jovem adulto</option>

                            </select>
                            <div class="invalid-feedback">
                                Selecione um gênero
                            </div>
                        </div>
                        <div class="col-md-3 6 mb-3">
                            <label for="state">Tipo</label>
                            <select class="form-control" required name="tipo">
                            <option value""></option>
                            <option value"1">Doação</option>
                            <option value"2"> Troca </option>

                        </select>
                        <div class="invalid-feedback">
                            Selecione um Tipo
                        </div>
                        </div>

                </div>

                <div class="row">
                        <div class="col-md-13 mb-3">
                            <label for="zip">Descrição</label>
                            <textarea class="form-control" name="descricao" required  placeholder="Descreva um pouco sobre o livro." cols="18" rows="10" maxlength="600"></textarea>
                            <div class="invalid-feedback">
                               Necessário inserir uma breve descrição
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar</button>
                </form>
            </div>
        </div>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy;2022</p>

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
