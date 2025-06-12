<?php
//realizando o include do arquivo funcoes.php
include 'funcoes.php';

//atribuindo o valor de $_POST á variavel $acao
$acao = $_POST['acao'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body class="bg-light ">
    <main class="container-fluid">
        <section class="row mt-5 justify-content-center ">
            <div class="alert alert-iinfo col-4 border border-black m-2 object-fit-none rounded text-center">
                <?php echo (processar($acao)); ?>
            </div>
        </section>
        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-1">
                <button class="btn btn-outline-dark"><a href="index.php">Voltar</a></button>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>