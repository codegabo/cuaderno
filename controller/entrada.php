<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 12/11/2017
 * Time: 5:02 PM
 */
require '../model/db.php';
if( !empty($_POST)) {
    $id_guiaerror     = null;
    $tituloerror   = null;
    $descrerror    = null;
    $conterror     = null;

    $id_guia    = $_POST['id_guia'];
    $titulo  = $_POST['titulo'];
    $descr   = $_POST['descr'];
    $cont    = $_POST['cont'];

    $valid=true;
    if(empty($id_guia)) {
        $guiaerror ='is missing!';
        $valid=false;
    }
    if(empty($titulo)){
        $tituloerror='is missing!';
        $valid=false;
    }
    if(empty($descr)){
        $descrerror='is missing!';
        $valid=false;
    }
    if(empty($cont)){
        $conterror='is missing';
        $valid=false;
    }
    if ($valid){
        $pdo=Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO entrada (id_guia,titulo,descr,cont) values(?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_guia,$titulo,$descr,$cont));
        Database::disconnect();
//        header('Location: '.$_SERVER['HTTP_REFERER']);
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php //echo 'http://localhost'.$_SERVER['REQUEST_URI']; ?><!--<br>-->
<?php //echo $_SERVER['HTTP_REFERER'] ?><!--<br>-->
<?php //echo $_SERVER['QUERY_STRING'] ?><!--<br>-->
</body>
</html>
