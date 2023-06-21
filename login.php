<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&family=Roboto:ital,wght@1,300;1,500&display=swap"
    rel="stylesheet">
  <title>Pet Ideal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  
    <style>
        body {
            
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, #004aad, rgb(255, 204, 0));
            min-height: 100vh;
        }

        .login {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
    <script>
        document.getElementById("loginForm").addEventListener("submit", function(event) {
            var email = document.getElementsByName("email")[0].value;
            var senha = document.getElementsByName("senha")[0].value;

            // Verificar se o email e a senha estão corretos
            // Você pode fazer essa verificação no lado do servidor, usando AJAX ou em JavaScript puro

            if (email !== "email_correto" || senha !== "senha_correta") {
                event.preventDefault(); // Impede o envio do formulário

                // Exibe a mensagem de erro
                alert("Email ou senha incorretos. Por favor, tente novamente.");
            }
        });
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">
        <img src="https://images2.imgbox.com/84/07/x1sm9Zpj_o.jpeg" alt="logo" width="120" height="70"
          class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">
              <button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Início
              </button>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Instituição
              </button>
              </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="quemsomos.html">Quem Somos</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="motivação.html">Nossa Motivação</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="publicoalvo.html">Público-Alvo</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="meupet.html">Quero Conhecer Meu Pet</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="serparceiro.html">Quero Ser Um Parceiro do Pet Ideal</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.adotepetz.com.br/ongs-parceiras" target="_blank">
              <button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Ong's
              </button>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="card.html"><button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Quero Adotar
              </button></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testefaleconosco.html">
              <button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Fale Conosco
              </button>
            </a>
          </li>
        </ul>

        <div>
          <!-- Botão para acionar o modal -->
          <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#logusuarioModal">
            </button> <a href="login.php">Entre</a>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#logusuarioModal"> </button> <a href="cadastro.php">Cadastre-se</a>
            </button>
        </div>
      </div>
    </div>
  </nav>

    <div class="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST" id="loginForm">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
   
  </html>
</body>

