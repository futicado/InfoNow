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
                        Este trabalho tem como proposta criar uma ferramenta web para trabalhar com os dados de inspeções de máquinas e, com o uso de machine learning, avaliar e descrever o estado dos itens que estão sendo avaliados. Diante de tais dados, busca-se, quando possível, saber de antemão quando um destes itens poderá vir a falhar, com base nas informações obtidas na análise dos técnicos.

                        </div>
                        </p>
                 </div>
                <p class="mt-5 mb-4 text-muted">Desenvolvido por : Jhonatan Matos da Silva</p>
    </center>
@endsection
