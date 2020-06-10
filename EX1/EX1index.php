<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if (empty($_POST)) {
                echo '
                    <form action="EX1index.php" method="post">
                        <label>
                            O número <input type="number" name="primo"/> é primo ?
                        </label>
                        <label>
                            <input type="submit" value="Descobrir"/>
                        </label>
                    </form>';
            }else{
                $primo=$_POST["primo"];
                $q=0;

                for ($i=1;$i<=$primo;$i++){
                    if($primo%$i == 0){
                        $q++;
                    }
                }
                if ($q==2) {
                    echo 'O número '.$primo.' é um número primo';
                }else{
                    echo 'O número '.$primo.' não é um número primo';
                }
            }
        ?>
    </body>
</html>
