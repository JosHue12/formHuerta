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

    <form action = "datos.php" method = "get">
        <div class="row">
          <div class="col-6">
            <label class="form-label">Cedula</label>
          </div>
          <div class="col-6">
            <label class="form-label">Credencial Civica</label>
          </div>
        </div>
          <div class="row">
            <div class="col-6">
              <input type = "text" name = "cedula" placeholder = "cedula">
            </div>
            <div class="col-1">
              <input type = "text" name = "serie" placeholder = "serie">
            </div>
            <div class="col-5">
                <input type = "number" name = "numero" placeholder = "numero c">
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <label class="form-label">Nombre</label>
            </div>
            <div class="col-6">
              <label class="form-label">Apellido</label>
            </div>
          <div class="row">
            <div class="col-6">
              <input type = "text" name = "nombre" placeholder = "nombre">
            </div>
            <div class="col-6">
                <input type = "text" name = "apellido" placeholder = "apellido">
            </div>
          </div>   
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type = "email" name = "correo" placeholder = "pepe@gmail.com">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>