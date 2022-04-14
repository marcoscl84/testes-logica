<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="teste0001-media-notas.php">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="submit">
    </form>
 
    <?php
 
        if(isset($_POST['submit'])){
            $num1 = $_POST['numero1'];
            $num2 = $_POST['numero2'];
 
            $arr1 = array();
            $arr1 = explode(" ", $num1);
 
            $arr2 = array();
            $arr2 = explode(" ", $num2);
           
            echo "======== Array 1<br>";
            print_r($arr1);
            echo "<br><br>";    
 
            echo "======== Array 2<br>";
            print_r($arr2);
            echo "<br><br>";
 
            // UNE ARRAYS
            $arrMerg = array();
            $arrMerg = array_merge($arr1, $arr2);
            echo "======== Array 1 e 2 unidos<br>";
            print_r($arrMerg);
            echo "<br><br>";


 
            // ARRAYS UNIDOS ORDENADOS
            $arrMergLength = count($arrMerg);
            for($i=0; $i<$arrMergLength; $i++){
                for($j=0; $j<$arrMergLength; $j++){
               
                    if($arrMerg[$i] < $arrMerg[$j]){
                        $aux = $arrMerg[$i];
                        $arrMerg[$i] = $arrMerg[$j];
                        $arrMerg[$j] = $aux;
                    }
                }
            }
            echo "======== Array 2 ordenado<br>";
            print_r($arrMerg);
            echo "<br><br>";
 
   
           
            // ELIMINA REPETIÇÕES
            $arrMergSemDuplicata = array();
            $arrMergSemDuplicata = array_unique($arrMerg);
            echo "======== Array 1 e 2 sem duplicata<br>";
            print_r($arrMergSemDuplicata);
            echo "<br><br>";


 
            // ORDENA CHAVES E VALORES
            $novoArraySemDuplicata = array();
            $y = 0;
            while($element = current($arrMergSemDuplicata)) {
                key($arrMergSemDuplicata);
                next($arrMergSemDuplicata);
                $novoArraySemDuplicata[$y] = $element;
                $y++;
            }
            echo "======== Array 1 e 2 com chaves crescentes de 1 em 1<br>";
            print_r($novoArraySemDuplicata);
        }
 
    ?>
</body>
</html>