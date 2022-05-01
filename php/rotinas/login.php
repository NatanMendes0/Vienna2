<?php
  //PERGUNTAR PRO SOR SE TEMOS QUE CRIAR FUNÇÕES COM ESSES CÓDIGOS PHP

  // func (nativa): vincula o arquivo com outro arquivo
  include ('../includes/banco.php'); // login.php >> banco.php >> Vienna2 (DB)

  // cond ({func (nativa): verifica o email} || {func (nativa): verifica a senha}):
    // executa as condicionais posteriores
  if ( isset ( $_POST['email'] ) || isset ( $_POST['senha'] ) ) {

    // cond ({func (nativa): calcula o tamanho da var 'email'}):
      // insere uma mensagem na página
    if ( strlen ( $_POST['email'] ) == 0 ) {
      echo "Preencha seu email.";
    }

    // cond ({func (nativa): calcula o tamanho da var 'senha'})
      // insere uma mensagem na página
    else if ( strlen ( $_POST['senha'] ) == 0 ) {
      echo "Preencha sua senha.";
    }
    
    // cond: 
      // caso todos os campos estejam preenchidos, o código procede
    else {
        // var $usuario: func (nativa): remove cache da senha no navegador
        $email = $mysqli -> real_escape_string ( $_POST['email'] );
        // var $senha: func (nativa): remove cache da senha no navegador
        $senha = $mysqli -> real_escape_string ( $_POST['senha'] );
        
        // var $sql_code: verifica se existe o email e a senha no banco
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        
        // nota: verificar se precisamos criar uma func que seleciona os campos no nosso banco de dados
        
        // var $sql_query: query retorna o resultado, com apenas uma linha
        $sql_query = $mysqli -> query ( $sql_code ) 
        or die ( "Falha na execução do código SQL: " . $mysqli -> error );

        //quantidade recebe o numero de linhas que $sql_query recebeu (se recebeu)
        $quantidade = $sql_query -> num_rows;

        // cond (caso o nº de linhas da query for 1 (query: var $quantidade)): 
          // cria sessão se o usuário existir no banco
        if ( $quantidade == 1 ) {
          
          // var $usuario: recebe VALORES dos campos do usuario (id, nome, email, senha)
          $usuario = $sql_query -> fetch_assoc();

          // cria uma nova sessão se não estava criada, e checa algum campo está com os dados incorretos
          if ( !isset ( $_SESSION ) ) {
            session_start(); //tempo de sessão = 180min (3H)            
          }
          
          //cria sessão com id e email do usuario
          $_SESSION['id'] = $usuario['id'];
          $_SESSION['email'] = $usuario['email'];

          //redirecionamento para pagina home
          header("location: home.php");
          
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos.";
        }
    } 
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <title>Teste</title>
  </head>
  <body>
    <div class="container">
      <h1>Entre na sua conta:</h1>
      <hr>
      <form action="" method="POST">
        <p>
          <label>E-mail</label>
          <input type="text" name="email">
        </p>
        <p>
          <label>Senha</label>
          <input type="password" name="senha">
        </p>
        <P>
          <input type="submit" class="btn btn-primary" value="Logar">
        </P>        
      </form>
    </div>
  </body>
</html>