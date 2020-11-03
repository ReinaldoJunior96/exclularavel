<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <title>Exclusiva Isenções</title>
</head>

<body class="">
@include('componentes.navbar')
<div class="text-center">
    <img src="{{ asset('images/profile.png') }}" width="300" class="img-fluid" alt="Imagem responsiva">
    <!-- <div class="text-center">
    <h1 class="cinzel-decorative text-home">Exclusiva Isenções</h1>
</div> -->
</div>
<div class="container-fluid">

    <h3 class="roboto-condensed text-center text-black-50 mt-4"> Quem Somos</h3>
    <div class="container text-justify">
        <p>
            Uma empresa de consultoria/despachante documentalista,
            especializada na área de isenções tributarias para compra de carro 0k com
            isenção de impostos para PCD, que conta com uma equipe de atendimento
            qualificada e empenhada em garantir que os direitos de seus clientes sejam
            exercidos de acordo com a legislação brasileira. <br>
            Tendo como objetivo facilidade e agilidade para nossos clientes acerca
            da burocracia que envolve esse tipo de processo. O respeito e exercício de
            nossos direitos como cidadãos é a nossa preocupação! <br>
            Conquiste seu direito à isenção de impostos com a Exclusiva Isenções.
            Com atendimento exclusivo para cada cliente, iremos assessorar você a
            conquista do seu carro 0KM.
        </p>
        <hr>
        <h4 class="roboto-condensed text-black-50 mt-4"> Missão</h4>
        <p>
            Gerar uma grande mudança dentro do cenário do mercado atual,
            principalmente em relação ao modo como o serviço é ofertado ao público,
            usando como aliada a comunicação. Buscando maneiras de levar informações
            ao público.
        </p>
        <hr>
        <h4 class="roboto-condensed text-black-50 mt-4"> Visão </h4>
        <p>
            Desenvolver um trabalho com excelência, buscando entregar um
            serviço diferenciado, buscando se tornar uma empresa referência no segmento
            de isenções e no atendimento ao cliente.
        </p>
        <hr>
        <h4 class="roboto-condensed text-black-50 mt-4"> Valores</h4>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Integridade;</li>
            <li class="list-group-item">Inteligência;</li>
            <li class="list-group-item">Valorização do ser humano;</li>
            <li class="list-group-item">Responsabilidade social;</li>
            <li class="list-group-item">Acessibilidade ao direito.</li>
        </ul>
    </div>
</div>



@include('componentes.footer')






<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
