<?php
if (isset($_POST["submit"]))
{
    include("config.php");

    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    $dado = mysqli_query($conexao, "INSERT INTO cliente(email,cep,endereco,cidade,estado) VALUES ('$email','$cep','$endereco','$cidade','$estado')");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Document</title>
</head>

<body>
    <main>
        <form action="formulario.php" method="post">
            <div class="layout">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">

                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-senha">

                <div class="layout-cep">
                    <label for="cep">CEP</label>
                    <input type="number" name="cep" class="form-cep" placeholder="(Apenas números)">

                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-endereco" placeholder="">

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" class="form-control">

                    <label for="estado">Estado</label>
                    <input name="estado" class="form-estado">
                </div>
                <div class="botao">
                    <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>
