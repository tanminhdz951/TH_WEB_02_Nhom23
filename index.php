<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Đồ án 2 nề</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
</head>
<body>

        <?php
            spl_autoload_register(function($calss){
                include_once 'system/libs/'.$calss.'.php';
            });
            include_once 'app/config/config.php';
            $main = new Main();  
        ?>
</body>
</html>