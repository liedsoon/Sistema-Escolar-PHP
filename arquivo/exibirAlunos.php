<?php include "conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Alunos Cadastrados</title>
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 15px;
            color: #380B61;
            background-image: linear-gradient(to right, #ffffff, rgb(76, 4, 94));
        }
        .table{
            background-color: rgba(216,191,216, 0.8);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            border-color: #380B61;
        }
        .link{
            position: relative;
            text-align: center;
            border-radius: 20px;
            padding: 8px;
            font-size:12px;
            background-image: linear-gradient(to right, rgb(176, 78, 201), rgb(76, 4, 94));
            width: 10%;
        }
    </style>
</head>
<body>
     <div class="m-5">
        <img src="logo2.png" style="float:left; width:70px">
        <h1><p><b>Alunos Cadastrados</b></p></h1>
    </div>

    <div class="m-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Média</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM alunos";
                $resultado = $conexao->query($sql);

                while ($linha = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><b>" . $linha["nome"] . "</b></td>";
                    echo "<td><b>" . $linha["matricula"] . "</b></td>";
                    echo "<td><b>" . $linha["nota1"] . "</b></td>";
                    echo "<td><b>" . $linha["nota2"] . "</b></td>";
                    echo "<td><b>" . number_format($linha["media"], 1) . "</b></td>";
                    echo "</tr>";
                }

                $conexao->close();
                ?>
            </tbody>
        </table>

        <div class="link">
            <a href="formularioArq.php"><b>Cadastrar Aluno</b></a>
        </div>
    </div>
</body>
</html>
