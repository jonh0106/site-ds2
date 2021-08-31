<?php session_start();

            // eliminar todas as sessoes e direcionar para a tela de login

            session_destroy();

            header("location:../login.php");


?>