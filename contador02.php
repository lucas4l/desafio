!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
    <style>

    </style>
</head>
<body>


    <?php
    $inicio = isset($_GET["ini"])?$_GET["ini"]:1;
    $fim = isset($_GET["fini"])?$_GET["fini"]:1;
    $incremento = isset($_GET["selec"])?$_GET["selec"]:1;

    while ($inicio <= $fim){
        echo "$inicio <br>";
        $inicio+= $incremento;
    }
    while ($inicio >= $fim) {
        echo "$inicio<br>";
        $inicio -= $incremento;
    }
        ?>

    </br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>