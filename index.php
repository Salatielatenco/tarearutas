<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require_once 'app/config.php'; ?>
    <?php require_once 'app/dependencias.php'; ?>
</head>
<body style="background-color: 999999;">
    <?php
        if(isset($_GET['vista_solicitada'])){
            switch($_GET['vista_solicitada']){
                case 'capitulo1':{
                    require_once 'view/tema1.php';
                    break;
                }case 'capitulo2':{
                    require_once 'view/tema2.php';
                    break;
                }case 'capitulo3':{
                    require_once 'view/tema3.php';
                    break;
                }case'capitulo4':{
                    require_once 'view/tema4.php';
                    break;
                }case'capitulo5':{
                    require_once 'view/tema5.php';
                    break;
                }case'dafault':{
                    require_once 'view/default.php';
                    break;
                }

            }
        }else{
            require_once 'view/default.php';
        }
    ?>
</body>
</html>
