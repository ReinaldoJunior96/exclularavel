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
<div class="text-center">
    <img src="{{ asset('images/servicos.png') }}" width="300" class="img-fluid" alt="Imagem responsiva">
    <!-- <div class="text-center">
    <h1 class="cinzel-decorative text-home">Exclusiva Isenções</h1>
</div> -->
</div>
<div class="container-fluid">

    <h2 class="roboto-condensed text-center text-black-50 mt-4"> Serviços</h2>
    <div class="container text-justify">
        <h4 class="roboto-condensed  text-black-50 mt-4"> Isenção tributária para a pessoa com deficiência</h4>
        <p>
            Os portadores de necessidades especiais e doenças crônicas, inclusive
            crianças, podem requerer o benefício de isenções fiscais (IPI, IOF, ICMS e IPVA de
            acordo com cada caso).
        </p>
        <hr>
        <h4 class="roboto-condensed  text-black-50 mt-4"><img src="{{ asset('images/receita-federal.jpg') }}"
                                                              width="100" class="img-fluid" alt="Imagem responsiva">
            Isenção de Imposto sobre Produtos Industrializados (IPI), imposto de esfera federal. </h4>
        <p>
            Somente terá direito ao benefício o interessado que se enquadre nas
            condições previstas na IN RFB nº 1.769/2017 (pessoa com deficiência física,
            visual, mental severa ou profunda, ou autista)
        </p>
        <hr>
        <h4 class="roboto-condensed text-black-50 mt-4"> Isenção de Imposto Sobre Circulação de Mercadorias e Serviços
            (ICMS), imposto de esfera estadual.</h4>
        <p>
            Enquadrado nos Convênios 38/2012 e 135/2013 e 107/2015, ficam isentas
            do ICMS as saídas internas e interestaduais de veículo automotor novo quando
            adquirido por pessoas portadoras de deficiência física, visual, mental severa ou
            profunda, ou autistas, diretamente ou por intermédio de seu representante legal. <br>

            O benefício previsto neste artigo somente se aplica a veículo automotor
            novo cujo preço de venda ao consumidor sugerido pelo fabricante, incluídos os tributos
            incidentes, não seja superior a R$ 70.000,00 (setenta mil reais).

            Após a liberação do ICMS, já pode ser feita a solicitação do pedido do

            veículo.
        </p>
        <hr>
        <h4 class="roboto-condensed text-black-50 mt-4"> Isenção de Imposto Sobre a Propriedade de Veículos Automotores
            (IPVA), imposto de esfera estadual.</h4>
        <p>
            O pedido é feito após a compra do veículo mediante a NF (nota fiscal), com informações da isenção de IPI e
            ICMS. <br>

            Na Lei 7.799/2002, alterada pela Lei nº 10.308/15. Art. 92, da Lei 7.799
            com redação da Lei nº 10.308/15. Art. 92. São isentos do pagamento do imposto -
            IPVA: VII – automóvel de passageiro, de fabricação nacional, destinado a pessoa
            portadora de deficiência física, visual, mental severa ou profunda, ou a autistas, ainda
            que menores de 18 (dezoito) anos, adquirido, diretamente ou por intermédio de seu
            representante legal, com a isenção do ICMS. NR Lei nº 10.308/15. Após a liberação do ICMS, já pode ser feita
            a solicitação do pedido do

            veículo.
        </p>
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
