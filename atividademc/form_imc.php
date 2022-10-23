<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
</head>
<body>
    <?php

        $peso = floatval($_GET["peso"]);
        $altura = ($_GET["altura"]);

        if (strpos($altura, ',') !== false){
            $altura = floatval(str_replace(",",".", $altura));

        } else {
            $altura = floatval($altura);
        }

        $imc = round($peso / ($altura*$altura), 2);

        if ($imc < 17){
            $texto = '<b>MUITO ABAIXO DO PESO</b>';
        } else if ($imc < 18.5){
            $texto = '<b>ABAIXO DO PESO</b>';
        } else if ($imc < 25){
            $texto = '<b>PESO NORMAL</b>';
        } else if ($imc < 30){
            $texto = '<b>ACIMA DO PESO</b>';
        } else if ($imc < 35){
            $texto = '<b>OBESIDADE I</b>';
        } else if ($imc < 40){
            $texto = '<b>OBESIDADE II (SEVERA)</b>';
        } else {
            $texto = '<b>OBESIDADE III (MÓRBIDA)</b>';
        }

    ?>

        <center>
            <fieldset style="width:45%; background-color: rgb(250, 250, 250);" >
                <legend>Resultado</legend>
                    <div>

                        <p>IMC: <?php echo $imc ?></p>
                        <p>Situação: <?php echo $texto ?></p>   
                         
                    </div>
            </fieldset>
        </center>
    
</body>
</html>