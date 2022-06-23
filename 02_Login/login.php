<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form.css">
    <style>

body {

background: #030924;

display: flex;

justify-content: center;

align-items: center;

height: 80vh;

flex-direction: column;

}

*{

font-family: Arial;

box-sizing: padding-box;

}

form {

width: 1000px;

border: 3px solid #ffffff;

padding: 20px;

background: #2763c4;

border-radius: 20px;

}

h2 {

color: #ffffff;

text-align: center;

margin-bottom: 40px;

}

input {

display: block;

border: 2px solid #ccc;

width: 95%;

padding: 10px;

margin: 10px auto;

border-radius: 5px;

}

label {

color: #ffffff;

font-size: 18px;

padding: 10px;

}

button {

float: right;

background: rgb(35, 174, 202);

padding: 10px 15px;

color: #fff;

border-radius: 5px;

margin-right: 10px;

border: none;

}

button:hover{

opacity: .10;

}

.error {

background: #F2DEDE;

color: #0c0101;

}

h1 {

text-align: center;

color: #ffffff;

}

a {

float: right;

background: rgb(183, 225, 233);

padding: 10px 15px;

color: #fff;

border-radius: 10px;

margin-right: 10px;

border: none;

text-decoration: none;

}

a:hover{

opacity: .7;

}
    </style>

</head>

<body>
    
    <?php
    $userError = $passError = "";
    $user = $pass = "";
    const minLength = 3;
    const maxLength = 10;
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user"])) {
            $userError = "El usuario es requerido";
        } else {
            $user = test_input($_POST["user"]);
            // check if name only contains letters and whitespace
            if (strlen($user) < minLength || strlen($user) > maxLength) {
                $userError = "El usuario debe tener entre 3 y 10 caracteres";
            }
        }
        
        if (empty($_POST["pass"])) {
            $passError = "La contraseña es requerida";
        } else {
            $pass = test_input($_POST["pass"]);
            // check if last name only contains letters and whitespace
            if (strlen($pass) < minLength || strlen($pass) > maxLength) {
                $userError = "La contraseña debe tener entre 3 y 10 caracteres";
            }
        }

        if ($user == "admin" && $pass == "123") {
            session_start();
            $session['user'] = $user;
            header("location:enter.php");
        } else {
                echo "Usuario y/o contraseña incorrectos";
        }
        
    }

    function test_input($data) {
        $data = trim(stripslashes(htmlspecialchars($data)));
        return $data;
      }
?>

<form action="login.php" method="POST">   
<h2>LOGIN</h2>
<label>Usuario</label>
<input type="text" name="user" placeholder="Usuario" value="<?php echo $user;?>">
<label>Contraseña</label>
<input type="password" name="pass" placeholder="Contraseña" value="<?php echo $pass;?>">
<button type="submit">Entrar</button>
<span class="error"> <?php echo $userError;?></span>
<span class="error"> <?php echo $passError;?></span>
</form>

</body>
</html>