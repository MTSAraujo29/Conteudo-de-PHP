<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           $nome = $_GET["nome"] ?? "sem nome";
           $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
           echo "<h2>E um prazer esta conversando com você, $nome $sobrenome! Este é meu site </h2>";
        ?>
        <p><a href="javascript:history.go(-1)">Volta para o inicio</a></p>
    </main>
</body>
</html>