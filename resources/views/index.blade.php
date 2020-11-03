<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <title>Exclusiva Isenções</title>
</head>

<body class="">
@include('componentes.navbar')
<div class="">
    <img src="{{ asset('images/663894.jpg') }}" class="img-fluid" alt="Imagem responsiva">
    <!-- <div class="text-center">
    <h1 class="cinzel-decorative text-home">Exclusiva Isenções</h1>
</div> -->
</div>
<div class="container-fluid roboto-condensed">
    <div class="row">
        <div class="card border-0 text-center p-3 carta-custom col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="text-center">
                <img class="card-img-top " src="{{asset('images/reliable.png')}}" alt="Imagem de capa do card"
                     style="width: 80px;">
            </div>
            <div class="card-body ">
                <h5 class="card-title">Confiabilidade</h5>
                <hr>
                <p class="card-text ">Acompanhe seu processo de perto e tire todas suas dúvidas.</p>
            </div>
        </div>
        <div class="card border-0 rounded rounded-top text-center p-3 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="text-center">
                <img class="card-img-top " src="{{ asset('images/team.png') }}" alt="Imagem de capa do card"
                     style="width: 80px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">Assessoria Completa</h5>
                <hr>
                <p class="card-text">Oferecemos todos os serviços necessários para você obter seu carro 0 KM com as
                    isenções necessárias.</p>
            </div>
        </div>
        <div class="card border-0 rounded text-center p-3 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="text-center">
                <img class="card-img-top " src="{{ asset('images/proposal.png') }}" alt="Imagem de capa do card"
                     style="width: 80px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">Avaliação Gratuíta</h5>
                <hr>
                <p class="card-text ">Envie seu laudo médico ou exames e nós avaliamos gratuitamente.</p>
            </div>
        </div>
        <div class="card border-0 rounded text-center p-3 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="text-center">
                <img class="card-img-top " src="{{ asset('images/stamp.png') }}" alt="Imagem de capa do card"
                     style="width: 80px;">
            </div>
            <div class="card-body">
                <h5 class="card-title">Indice de Aprovação</h5>
                <hr>
                <p class="card-text">Com equipe altamente qualificada, temos um alto índice de aprovações dos processos.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="">
    <img src="{{ asset('images/arte-1.png') }}" class="img-fluid" alt="Imagem responsiva">
</div>

@include('componentes.footer')


<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
