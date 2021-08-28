<?php session_start(); 


$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$checkbox = @$_POST['checkbox'];

$_SESSION['dadosForm'] = $_POST;

$_SESSION['mensagemErro'] = array();

//strlaen() retorna quantos caracteres possui a string
include('connection/conexao.php');


//verificar se o email ja existe no bancos de dados
$consultaEmail = " SELECT * FROM tbl_login WHERE email='$email' ";
$executaConsulta = $mysqli->query($consultaEmail);
$totalLinhasConsulta = $executaConsulta->num_rows;

if ($totalLinhasConsulta > 0) {
    $_SESSION['mensagemErro'][] = "Este e-mail já está em uso, ultilize outro";
}


if( strlen($nome) == 0 ){
    $_SESSION['mensagemErro'][] = " O nome e obrigatório";
}

if( strlen($email) == 0 ){
    $_SESSION['mensagemErro'][] = " O E-mail e obrigatório";
}

if( strlen($senha) < 6 ){
    $_SESSION['mensagemErro'][] = " A senha deve ter no minimo 6 caracteres";
}

if( $confirmaSenha <> $senha){
    $_SESSION['mensagemErro'][] = "As senhas nao conferem";
}

if( $checkbox != "on"){
    $_SESSION['mensagemErro'][] = "Voce deve aceitar os termos";
}

if( sizeof($_SESSION['mensagemErro']) > 0 ){
                
    header("location:registro.php?erro=1");

}else{

 // gravar os dados do usuario no banco

 //sql para inserir os dados no banco

   $gravaUsuario = "INSERT INTO tbl_login (nome,email,senha,tipo_usuario,status_login)
    VALUES  ('$nome','$email',MD5('$senha'),'user',0) ";

    // executar o iser na tabela

    $executaGravaUsuario = $mysqli->query($gravaUsuario);

    // pegar o codigo que foi gerado pelo insert

    $codlogin = $mysqli->insert_id;

    // gerar o codigo de ativaçao
    $codAtivacao = time().$codlogin;

    // atualizar a conta com o codigo de ativação
    $atualizaConta = "UPDATE tbl_login SET cod_ativacao=MD5('$codAtivacao')              WHERE cod_login='$codlogin'";

    // executar a atualizacao no banco
    $executaAtualizaConta = $mysqli->query($atualizaConta);

    echo "<p> Conta criada com sucesso! </p>
          <P> Você deve <a href='ativa-conta.php?codAtivacao=$codAtivacao'> ativar </a> a sua conta para começar a usar o sistema </p>";

}


?>