<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
<?php
    $cor = isset($_GET["cor"])?$_GET["cor"] :"red";
 ?>
    <style>
    span.nota{
        color:<?php echo $cor; ?>
    }

    </style>
</head>
<body>
<?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1+$nota2)/2;
    echo "A média entre <span class='nota'>$nota1</span> e <span class='nota'>$nota2</span> é igual a <span class='nota'>$m</span><br>";
    if($m <=4){
        $res = "Reprovado";
        echo "Situação do aluno :<font color='red'> $res</font>";
    }if($m >=5 && $m <=7){
        $res ="O aluno esta em recuperação";
        echo "Situação do aluno :<font color='#9acd32'> $res</font>";
    }if($m >=8 && $m<=10){
        $res = "Aprovado";
        echo "Situação do aluno :<font color='#006400'> $res</font>";
    }
    ?>
    <br>
    <a href="infoaluno.html">Voltar</a>
</body>
</html>