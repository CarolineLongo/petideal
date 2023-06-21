<?php

    if(isset($_POST['submit']))
    {

    
        include_once('config.php');

        $nome = $_POST['nome_razao_social'];
        $cpf_cnpj = $_POST['cpf_cnpj'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro_cliente(nome_razao_social,cpf_cnpj,email,cidade,estado,endereco,cep,genero,data_nascimento,senha,confirmar_senha) 
        VALUES ('$nome', '$cpf_cnpj', '$email', '$cidade', '$estado', '$endereco', '$cep', '$genero', '$data_nascimento', '$senha', '$confirmar_senha')");

        header('Location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&family=Roboto:ital,wght@1,300;1,500&display=swap"
    rel="stylesheet">
  <title>Pet Ideal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  

</head>

<body>
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
            <a class="nav-link" href="faleconosco.html">
              <button type="button" class="btn btn-outline-black" data-bs-toggle="modal">Fale Conosco
              </button>
            </a>
          </li>
        </ul>

        <div>
          <!-- Botão para acionar o modal -->
          <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#logusuarioModal"></button> <a href="login.php">Entre</a>
            <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
              data-bs-target="#logusuarioModal"></button> <a href="cadastro.php">Cadastre-se</a>
            </button>
        </div>
      </div>
    </div>
  </nav>
    <div class="box">
        <form action="cadastro.php" method="POST" onsubmit="return validarFormulario()">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <br><br>
                    <input type="text" name="nome_razao_social" id="nome_razao_social" class="inputUser" required>
                    <label for="nome_razao_social" class="labelInput">Nome/Razão Social</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="inputUser" required>
                    <label for="cpf_cnpj" class="labelInput">CPF/CNPJ</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <div class="inputBox">
                    <br>
                    <label for="genero" class="labelInput">Sexo:</label>
                    <br>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="outros" name="genero" value="outros" required>
                    <label for="outros">Outros</label> <br><br>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                    <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
                </div>
                <div class="inputBox">
                    <br><br>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div>
                <div class="inputBox">
                    <br><br>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <br><br>
                    <input type="password" name="confirmar_senha" id="confirmar_senha" class="inputUser" required>
                    <label for="confirmar_senha" class="labelInput">Confirmar Senha</label>
                </div>

                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    <script>
        function validarFormulario() {
    var nome = document.getElementById("nome_razao_social").value;
    var cpfCnpj = document.getElementById("cpf_cnpj").value;
    var email = document.getElementById("email").value;
    var cidade = document.getElementById("cidade").value;
    var estado = document.getElementById("estado").value;
    var endereco = document.getElementById("endereco").value;
    var cep = document.getElementById("cep").value;
    var genero = document.querySelector('input[name="genero"]:checked');
    var dataNascimento = document.getElementById("data_nascimento").value;
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmar_senha").value;

    if (
        nome === "" ||
        cpfCnpj === "" ||
        email === "" ||
        cidade === "" ||
        estado === "" ||
        endereco === "" ||
        cep === "" ||
        genero === null ||
        dataNascimento === "" ||
        senha === "" ||
        confirmarSenha === ""
    ) {
        alert("Por favor, preencha todos os campos do formulário.");
        return false;
    }

    // Validar CPF/CNPJ
    var cpfCnpjValido = validarCpfCnpj(cpfCnpj);
    if (!cpfCnpjValido) {
        alert("CPF/CNPJ inválido.");
        return false;
    }

    // Validar CEP
    var cepValido = validarCep(cep);
    if (!cepValido) {
        alert("CEP inválido.");
        return false;
    }

    // Validando senha
    if (cpfCnpj.length === 11) { // CPF
        if (senha.length < 6) {
            alert("A senha deve ter pelo menos 6 caracteres.");
            return false;
        }
        if (/^(\d)\1+$/.test(senha)) {
            alert("A senha não pode ser uma sequência de valores iguais.");
            return false;
        }
    } else if (cpfCnpj.length === 14) { // CNPJ
        if (senha.length !== 8) {
            alert("A senha deve ter exatamente 8 caracteres.");
            return false;
        }
        if (!/^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]+$/.test(senha)) {
            alert("A senha deve conter números, letras e pelo menos um caractere especial.");
            return false;
        }
    }

    // Verificando confirmação de senha
    if (senha !== confirmarSenha) {
        alert("A confirmação de senha não corresponde à senha digitada.");
        return false;
    }

    // Outras validações conforme necessário

    alert("Cadastro realizado com sucesso!");

    setTimeout(function() {
        window.location.href = "login.php";
    }, 3000);

    return true;
}

        function validarCpfCnpj(cpfCnpj) {
            // Removendo caracteres não numéricos
            cpfCnpj = cpfCnpj.replace(/\D/g, '');

            // Verificando se é CPF ou CNPJ
            if (cpfCnpj.length === 11) {
                return validarCpf(cpfCnpj);
            } else if (cpfCnpj.length === 14) {
                return validarCnpj(cpfCnpj);
            } else {
                return false;
            }
        }

        function validarCpf(cpf) {
            // Lógica de validação do CPF aqui
            // Retorne true se for válido, caso contrário, retorne false

            // Verificando se o CPF possui 11 dígitos
            if (cpf.length !== 11) {
                return false;
            }

            // Verificando se todos os dígitos são iguais
            if (/^(\d)\1+$/.test(cpf)) {
                return false;
            }

            // Cálculando o primeiro dígito verificador
            var soma = 0;
            for (var i = 0; i < 9; i++) {
                soma += parseInt(cpf.charAt(i)) * (10 - i);
            }
            var resto = 11 - (soma % 11);
            var digitoVerificador1 = resto < 10 ? resto : 0;

            // Verificando se o primeiro dígito verificador está correto
            if (digitoVerificador1 !== parseInt(cpf.charAt(9))) {
                return false;
            }

            // Cálculando o segundo dígito verificador
            soma = 0;
            for (var j = 0; j < 10; j++) {
                soma += parseInt(cpf.charAt(j)) * (11 - j);
            }
            resto = 11 - (soma % 11);
            var digitoVerificador2 = resto < 10 ? resto : 0;

            // Verificar se o segundo dígito verificador está correto
            if (digitoVerificador2 !== parseInt(cpf.charAt(10))) {
                return false;
            }

            return true; // CPF válido
        }

        function validarCnpj(cnpj) {
            // Lógica de validação do CNPJ aqui
            // Retorne true se for válido, caso contrário, retorne false

            // Verificando se o CNPJ possui 14 dígitos
            if (cnpj.length !== 14) {
                return false;
            }

            // Verificando se todos os dígitos são iguais
            if (/^(\d)\1+$/.test(cnpj)) {
                return false;
            }

            // Cálculando o primeiro dígito verificador
            var tamanho = cnpj.length - 2;
            var numeros = cnpj.substring(0, tamanho);
            var digitos = cnpj.substring(tamanho);
            var soma = 0;
            var pos = tamanho - 7;
            for (var i = tamanho; i >= 1; i--) {
                soma += numeros.charAt(tamanho - i) * pos--;
                if (pos < 2) {
                    pos = 9;
                }
            }
            var resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
            var digitoVerificador1 = resultado.toString();

            // Verificando se o primeiro dígito verificador está correto
            if (digitoVerificador1 !== digitos.charAt(0)) {
                return false;
            }

            // Cálculando segundo dígito verificador
            tamanho = tamanho + 1;
            numeros = cnpj.substring(0, tamanho);
            soma = 0;
            pos = tamanho - 7;
            for (var j = tamanho; j >= 1; j--) {
                soma += numeros.charAt(tamanho - j) * pos--;
                if (pos < 2) {
                    pos = 9;
                }
            }
            resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
            var digitoVerificador2 = resultado.toString();

            // Verificando se o segundo dígito verificador está correto
            if (digitoVerificador2 !== digitos.charAt(1)) {
                return false;
            }

            return true; // CNPJ válido
        }

        function validarCep(cep) {
            // Removendo caracteres não numéricos
            cep = cep.replace(/\D/g, '');

            // Verificando se possui 8 dígitos
            if (cep.length !== 8) {
                return false;
            }

            // Outras validações de CEP conforme necessário

            return true; // CEP válido
        }
        
    </script>

</body>
</html>
