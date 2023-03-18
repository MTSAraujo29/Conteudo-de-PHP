<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matheus</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        echo "<h2>Hoje é dia " . date("d/M/Y</h2> \n");
        echo "<h2>E a hora atual é " . date("G:i:s </h2> \n");
        const PAIS = "Brasil";
        echo "Olá Matheus você é do \n" . PAIS; 
        $n1 = 2;
        $n2 = 2;
        $soma = ($n1 + $n2) / 2;
        if ($soma == 1)
        echo "Aprovado \n";
        else
        echo "Reprovado \n";
        $idade = 22;
        $peso = 72.8;
        echo "Matheus seus dados são: $idade , $peso \n";
        $nome = "Matheus";
        $sobren = "Ferreira";
        echo "$nome\"Mts\" $sobren \n "
    ?>
</body>
</html>