<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 15px;
            color: #380B61;
            background-image: linear-gradient(to right, #ffffff, rgb(76, 4, 94));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(216,191,216, 0.8);
            border-radius: 15px;
            padding: 10px;
            width: 30%;
        }
        fieldset{
            border: none;
            padding: 12px;
        }
        legend{
            background: none;
            text-align: center;
            color: #380B61;
            padding: 3px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .dados{
            position: relative;
        }
        .inputDados{
            background: none;
            width: 100%;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: rgb(76, 4, 94);
            font-size: 15px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            border-color: #380B61;
        }
        .inputLabel{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputDados:focus ~ .inputLabel, 
        .inputDados:valid~.inputLabel{
            top: -20px;
            font-size: 12px;
            color: rgb(139,0,139);
        }
        #cadastrar{
            background-image: linear-gradient(to right, rgb(176, 78, 201), rgb(76, 4, 94));
            color: white;
            width: 100%;
            border: none;
            border-radius: 20px;
            padding: 8px;
            cursor: pointer;
            position: relative;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #cadastrar:hover{
            background-image: linear-gradient(to right, rgb(176, 78, 201), rgb(139,0,139));
        }
        .link{
            position: relative;
            text-align: center;
            border-radius: 5px;
            width: 100%;
            font-size:12px;
        }
        .alerta{
            text-align: center;
            color: rgb(139,0,139);
        }
        .logo{
            text-align: center;
        }
        p{
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="processaCadastro.php" method="POST">
            <fieldset>
                <div class="logo">
                    <img src="logo.png" width="190">
                </div>
                <p><b>Cadastro de Alunos</b></p>
                <br>
                <div class="alerta">
                <?php
                    session_start();
                    if(isset($_SESSION["mensagem"])){
                        echo "<b>$_SESSION[mensagem]</b><br><br>";
                        unset($_SESSION["mensagem"]);
                    }
                ?>
                </div>
                <br>
                <div class="dados">
                    <input type="text" name="nome" id="nome" class="inputDados" required>
                    <label for="nome" class="inputLabel"><b>Nome</b></label>
                </div>
                <br><br>
                <div class="dados">
                    <input type="number" name="matricula" id="matricula" class="inputDados" required>
                    <label for="matricula" class="inputLabel"><b>Matrícula</b></label>
                </div>
                <br><br>
                <div class="dados">
                    <input type="text" name="nota1" id="nota1" class="inputDados" required>
                    <label for="nota1" class="inputLabel"><b>Nota 1</b></label>
                </div>
                <br><br>
                <div class="dados">
                    <input type="text" name="nota2" id="nota2" class="inputDados" required>
                    <label for="nota2" class="inputLabel"><b>Nota 2</b></label>
                </div>
                <br><br>
                <input type="submit" name ="cadastrar" id="cadastrar">
                <br><br>
                <div class ="link">
                    <a href="exibirAlunos.php"><b>Alunos Cadastrados</b></a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>