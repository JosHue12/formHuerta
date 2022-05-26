<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="images/.png">
</head>

<body>

<?php
// Inicio las variables vacias
$nameErr = $lastNameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $lastName = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "El nombre es requerido";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Solo se permiten letras y espacios";
    }
  }

  if (empty($_POST["lastName"])) {
    $lastNameErr = "El apellido es requerido";
  } else {
    $lastName = test_input($_POST["lastName"]);
    // check if last name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
      $lastNameErr = "Solo se permiten letras y espacios";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "El mail es requerido";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Mail invalido";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "URL invalido";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "El genero es requerido";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Formulario PHP c/Bootstrap</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nombre: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Apellido: <input type="text" name="lastName" value="<?php echo $lastName;?>">
  <span class="error">* <?php echo $lastNameErr;?></span>
  <br><br>
  Mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Sitio Web: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comentario: <br>
  <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Genero:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Mujer") echo "checked";?> value="Mujer">Mujer
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Hombre") echo "checked";?> value="Hombre">Hombre
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Otro") echo "checked";?> value="Otro">Otro  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Enviar">  
</form>

<?php
echo "<p class = 'resp' >Tu nombre: </p>".$name;
echo "<br>";
echo "<p class = 'resp' >Tu apellido: </p>".$lastName;
echo "<br>";
echo "<p class = 'resp' >Tu mail: </p>".$email;
echo "<br>";
echo "<p class = 'resp' >Tu sitio web: </p>".$website;
echo "<br>";
echo "<p class = 'resp' >Tu comentario: </p>".$comment;
echo "<br>";
echo "<p class = 'resp' >Tu genero: </p>".$gender;
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>