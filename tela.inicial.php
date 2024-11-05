<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
  <div style="">
  <?php
         session_start();
         if (isset($_SESSION['id'])) {
           $id = $_SESSION['id'];
           echo "olá $id";
            } else{
             echo "<script>alert('Usuário precisar logar'); history.back();</script>";
            }
  ?>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-90 col-md-100">
          
        </div>         
          <div class="col-sm-90 col-md-100" style="margin-top: 10%;">
            <i class="fa-brands fa-github"></i>
            <form>
                <h1>SEJA BEM VINDO</h1>
                <p>Escolha a opção a baixo de acordo como desejar:</p>
                <div class="button">
                <a href="categoria.html" type="submit" class="btn btn-primary">Cadastra Categoria</a>
                <a href="lançamento.html" type="submit" class="btn btn-dark" >Cadastrar Lançamento</a>
            </div>
              </form>
          </div>
          <div class="col-sm-90 col-md-100">

          </div>
        </div>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>