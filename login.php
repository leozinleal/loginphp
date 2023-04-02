<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
}

.telalogin{
    background-color: rgba(0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    border-radius: 15px;
    color: white;
}

input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 20px;
    border-radius: 10px;
}

.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
}

.inputSubmit:hover{
    background-color: deepskyblue;
}

    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="telalogin">
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="email">
            <br><br>
            <input type="password"  name="senha" placeholder="senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value:"Enviar">
        </form>
    </div>
</body>
</html>