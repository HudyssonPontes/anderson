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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container bg-light p-4">
        <div class="row">
            <div class="col-md-2 div_imagem_logotipo">
                <img class="img-fluid" src="https://img.freepik.com/vetores-gratis/modelo-de-logotipo-da-marca-coyote_23-2149207680.jpg?w=740" alt="">
            </div>
            <div class="col-md-6">
                <p class="titulo_index"><b>blingers</b><br />analytics</p>
            </div>
            <div class="col-md-4 text-center">
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
</body>
</html>