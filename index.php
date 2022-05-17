<?php
if(!isset($_SESSION['user']) && 1!=1){
    die("<script>window.location.href='https://".$_SERVER['HTTP_HOST']."/login.php'</script>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container bg_verde p-4">
        <div class="row">
            <div class="col-md-2 div_imagem_logotipo">
                <img class="img-fluid" src="https://img.freepik.com/vetores-gratis/modelo-de-logotipo-da-marca-coyote_23-2149207680.jpg?w=740" alt="">
            </div>
            <div class="col-md-6">
                <p class="titulo_index"><b>blingers</b><br />analytics</p>
            </div>
            <div class="col-md-4 text-center align-self-center">
                <div class="div_detalhes_loja_versao_atualizacao">
                    <p class="">
                        <b>Nome da Loja:</b> Driled
                    </p>
                    <p class="">
                        <b>Versão:</b> v02.0
                    </p>
                    <p class="">
                        <b>Atualizado em:</b> 11/05/2022 01:37:31
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">                
                <div class="slide_lojas align-itens-center bg-white py-3">
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://http2.mlstatic.com/frontend-assets/ui-navigation/5.18.9/mercadolibre/logo-pt__large_plus.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://seeklogo.com/images/S/shopee-logo-9143622F5F-seeklogo.com.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://seeklogo.com/images/O/olist-logo-9DCE4443F8-seeklogo.com.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://seeklogo.com/images/A/amazon-logo-86547BFB54-seeklogo.com.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://www.abcdacomunicacao.com.br/wp-content/uploads/Nuvemshop_logo-baixa.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://magecommerce.co/wp-content/uploads/2020/07/Logo-B2WMarketplace.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://ae01.alicdn.com/kf/S46f745032e6e4f3da94f1a3df564f238K/398x92.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://images.tcdn.com.br/static_inst/site/vendedor/tray-cdn/uploads/logo-header.svg" alt="">
                    </div>
                    <div class="px-4 ">
                        <img class="img-fluid align-self-center" src="https://seeklogo.com/images/M/magalu-logo-4C8BBA7DE9-seeklogo.com.png" alt="">
                    </div>
                    <div class="px-4 align-self-center">
                        <img class="img-fluid align-self-center" src="https://magecommerce.co/wp-content/uploads/2020/07/Logo-B2WMarketplace.png" alt="">
                    </div>
                </div>
            </div>  
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-house"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Home</b><br />
                                Evolução de faturamento, vendas por categoria, por loja.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-tag"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Vendas</b><br />
                                Análise de vendas por produto, por marca, quantidade de vendas
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Estoque</b><br />
                                Análise detalhada de estoque com sugestão de compra
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-store"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Marketplace</b><br />
                                Análise de lojas evolução de faturamento por Marketplace
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Clientes</b><br />
                                Vendas por região, estado.<br />Top 10 clientes e cidades
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 div_cards_home mt-3">
                <a href="">
                    <div class="row">
                        <div class="col-md-4 text-center align-self-center">
                            <div class="div_icon_home">
                                <i class="fa-solid fa-sack-dollar"></i>
                            </div>
                        </div>
                        <div class="col-md-8 div_texto_cards_home align-self-center py-2">
                            <p class="m-0">
                                <b>Financeiro</b><br />
                                Evolução de Contas a Pagar e Receber Despesas por categorias
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4 px-5">
                <img class="text-center img-fluid" src="https://www.elirodrigues.com/wp-content/uploads/2016/11/sample-logo-black.png" alt="">
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script>
$('.slide_lojas').slick({
    arrows: false,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,
    slidesToShow: 9,
    slidesToScroll: 1
});
</script>
</html>