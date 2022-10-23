<?php
    $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
    $nota1 = filter_input(INPUT_POST,"nota1",FILTER_SANITIZE_NUMBER_INT);
    $nota2 = filter_input(INPUT_POST,"nota2",FILTER_SANITIZE_NUMBER_INT);

    $media = ($nota1 + $nota2) / 2;
    if($media < 4){
        echo "O aluno ".$nome." Esta Reprovado com a media ".$media;
    }
    if($media >= 4 AND $media < 6){
        echo "O aluno ".$nome." Esta no Exaame Final com a media ".$media;
    }
    if($media >= 6){
        echo "O aluno ".$nome." Esta Aprovado com a media " .$media;
    }