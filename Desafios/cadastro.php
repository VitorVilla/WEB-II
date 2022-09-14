<?php

if (isset($_POST['name']) and (isset($_POST['cpf']))) {
    $name =  $_POST['name'];
    $cpf = $_POST['cpf'];

    $filename = "senhas.txt";
    if (!file_exists("senhas.txt")) {
        $handle = fopen("senhas.txt", "w");
    } else {
        $handle = fopen("senhas.txt", "a");
    }

    fwrite($handle, $name . $cpf . "\n");
    fflush($handle);
    fclose($handle);
}


?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf"><br><br>
        <input type="submit" value="Enviar">
    </form>

</body>

</html>