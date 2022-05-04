<?php
  // func (nativa): vincula o arquivo com outro arquivo
  require_once('../funcoes/banco.php');
  require_once('../funcoes/usuarios.php');

  //  variaveis
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // cond ({func (nativa): verifica o email} || {func (nativa): verifica a senha}):
  // executa as condicionais posteriores
  if (isset($_POST['email']) || isset($_POST['senha'])) {

    // cond ({func (nativa): calcula o tamanho da var 'email'}):
    // insere uma mensagem na página
    if (strlen($_POST['email']) == 0) {
      echo "Preencha seu email.";
    }

    // cond ({func (nativa): calcula o tamanho da var 'senha'})
    // insere uma mensagem na página
    else if (strlen($_POST['senha']) == 0) {
      echo "Preencha sua senha.";
    }

    // cond: caso todos os campos estejam preenchidos, o código procede
    else {

      // var $usuario: func (nativa): remove cache da senha no navegador
      $email = $mysqli->real_escape_string($_POST['email']);

      //codifica a senha
      $hash_senha = hash("sha256", $senha, false);

      // $usuarios: verifica se existe o email e a senha no banco
      $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$hash_senha'";

      // var $sql_query: query retorna o resultado, com apenas uma linha
      $sql_query = $mysqli->query($consulta)
        or die("Falha na execução do código SQL: " . $mysqli->error);

      //quantidade recebe o numero de linhas que $sql_query recebeu (se recebeu)
      $quantidade = $sql_query->num_rows;

      // cond (caso o nº de linhas da query for 1 (query: var $quantidade)): 
      if ($quantidade == 1) {

        // var $usuario: recebe VALORES dos campos do usuario (id, nome, email, senha)
        $usuario = $sql_query->fetch_assoc();

        // cria uma nova sessão se não estava criada, e checa algum campo está com os dados incorretos
        if (!isset($_SESSION)) {
          session_start(); //tempo de sessão = 180min (3H)            
        }

        //cria sessão com id, email e nome do usuario
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        //redirecionamento para pagina home
        header("location: ../../html/home.php");
      } else {
        echo "Falha ao logar! E-mail ou senha incorretos.";
      }
    }
  }
?>