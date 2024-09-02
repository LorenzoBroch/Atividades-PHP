<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade dois Triângulo</title>
</head>
<body>
    <section id="VerificadorMassa">
        <form method="POST" action="">
            <label for="base_tri">Informe a base do Triângulo: </label>
            <input type="number" id="base_tri" name="base_tri"required>
            <br>
            <label for="altura_tri">Informe a altura do Triângulo: </label>
            <input type="number" id="altura_tri" name="altura_tri"required>
            <br>
            <button type="submit" name="verify_test">Verificar</button>
        </form>
    </section>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['verify_test'])){ // 
            $numeroBase = $_POST['base_tri'];
            $numeroAltura = $_POST['altura_tri'];
            $areaTri = ($numeroBase*$numeroAltura)/2;

            if($areaTri >= 100) {
            echo 'A área do seu triângulo é:', $areaTri, ', essa área ultrapassou o limite de 100.';
            } else {
            echo 'A área do seu triângulo é: ', $areaTri; 
            }

        }
    }
    ?>
</body>
</html>