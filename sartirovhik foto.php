<?php
    echo("Ожидайте <br>");//вместо подождите вывел ожидайте
    $masFoto = scandir($_POST['adres']);
    foreach($masFoto as $foto){
        $foto = explode(".",$foto);
        if ( count($foto) > 1 && ($foto[count($foto)-1] == "jpg" || $foto[count($foto)-1] == "png" || $foto[count($foto)-1] == "img") ) {
            $data = explode("-",$foto[0])[1];
            $new_papka = $_POST['adres2']."/watsap"."/".str_split($data,4)[0]." ".str_split($data,2)[2]." ".str_split($data,2)[3];
            mkdir($new_papka,0700,true);
            copy($_POST['adres']."/".implode($foto,"."),$new_papka."/".implode($foto,"."));
        }
    }
    echo("Готово <br>");
?>
