<?php
    $nota = 0;
    $array = array('r_question_1','r_question_2','r_question_3','r_question_4','r_question_5','r_question_6','r_question_7','r_question_8','r_question_9','r_question_10');
    
    session_start();
    $iduser = $_SESSION['id'];
    $nomeuser = $_SESSION['nome'];
    
    include "conexao.php";

    for ($i = 0; $i <= 9; $i++) {
        
        switch(isset($_POST[$array[$i]])) {
            case 'incorrect':
                break;
            case 'correct':
                $nota = $nota + 1.0;
        }
    }

    $sql->query("insert into prova(iduser, nomeuser, nota) values ('$iduser','$nomeuser','$nota')");
    echo '<script>alert("Você concluiu a prova!")</script>';
    header("Location:../index.php")
?>