<?php 
// receber o codigo de ativacao via get
$codAtivacao = $_GET['codAtivacao'];

include('connection/conexao.php');


// consultar o codigo na tabela de login
$consultaCodigoAtivacao = " SELECT * FROM tbl_login WHERE cod_ativacao=MD5('$codAtivacao') OR cod_ativacao='$codAtivacao' ";

// execultar a consulta
$executaConsulta = $mysqli->query($consultaCodigoAtivacao);

// obter total de linhas retornado pela consulta
$totalConsulta = $executaConsulta->num_rows;

// obter os dados da consulta
$dadosUsuario = $executaConsulta->fetch_assoc();

$cod_login = $dadosUsuario['cod_login'];

if( $totalConsulta > 0 ){

    // ativar a conta
    $ativaConta = "UPDATE tbl_login SET status_login=1, cod_ativacao='' 
                                  WHERE cod_login='$cod_login'";

    $executaAtivaConta = $mysqli->query($ativaConta);

    echo "<p> Conta ativada com sucesso! </p> 
           <p> <meta http-equiv='refresh' content='1;url=login.php'> redirecionando... </p>";

        }else{
            echo "<p>Código inválido</p>";
        }


?> 