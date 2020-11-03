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
    <img src="{{ asset('images/direito.png') }}" width="300" class="img-fluid" alt="Imagem responsiva">
    <!-- <div class="text-center">
    <h1 class="cinzel-decorative text-home">Exclusiva Isenções</h1>
</div> -->
</div>
<div class="container-fluid">

    <h3 class="roboto-condensed text-center text-black-50 mt-4"> Quem tem direito</h3>
    <div class="container text-justify">
        <p>
            Para saber se você tem direito indicamos que entre em contato com nosso
            atendimento, para iniciarmos os primeiros passos, que é verificar com um médico especialista,
            se sua deficiência ou doença lhe concede o benefício.<br>
        </p>
        <p>
            A isenção é concedida à pessoa com deficiência (PCD): condutores ou não
            condutores. E também a pessoas com patologias crônicas que causem diminuição da força ou
            da sensibilidade de membros ou segmentos do corpo pode requerer isenção de impostos.
        </p>
        <p>
            O benefício não é dado apenas em casos mais conhecidos de deficiências,
            também engloba patologias ortopédicas, neurológicas, oncológicas. Além disso, pessoas que
            sofram de dor crônica ao fazer movimentos diários também podem ter direito às isenções.
        </p>
        <p>
            Você pode ter direito à isenção independente da sua idade, ou da idade do PCD.
            Sua patologia lhe garantindo o direito, junto com a documentação, é só você adquirir seu
            veículo.
        </p>
        <p>
            As doenças abaixo podem lhe garantir direito à isenção, porém
            cada caso é um caso e deve ser analisado por um médico
            especialista.
        </p>
    </div>


    <div class="text-center">
        <img src="{{ asset('images/doencas.png') }}" width="100%" class="img-fluid" alt="Imagem responsiva">
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
