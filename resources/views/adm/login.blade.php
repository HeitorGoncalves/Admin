<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="{{ asset('css/adm.css') }}" rel="stylesheet"> 

    <title>Admin</title>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-sm-6 col-md-6">

          <div class="row login">

            <div class="col-12 col-sm-2 col-md-2"></div>
            <div class="col-12 col-sm-8 col-md-8">
              <img src="{{ asset('imagens/logo.png') }}" />
              <h4>Bem vindo de volta!</h4>
              <p>Feliz em ver você de novo!</p>
            </div>
            <div class="col-12 col-sm-2 col-md-2"></div>


            <div class="col-12 col-sm-2 col-md-2"></div>
            <div class="col-12 col-sm-8 col-md-8">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="row">
                <div class="col-6 col-sm-6 col-md-6">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Manterconectado</label>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6">
                  <a class="btn btn-link">Esqueceu a senha?</a>
                </div>
              </div>

              <button type="submit" class="btn btn-success">ENVIAR</button>
              
            </form>
            </div>
            <div class="col-12 col-sm-2 col-md-2"></div>

          </div>

        </div>



        <div class="col-12 col-sm-6 col-md-6 fundoLogin">

        
          <a class="copy" href="https://heitorgoncalves.github.io/" target="_blank">Copyright © 2020 All rights reserved.</a>


         
        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>