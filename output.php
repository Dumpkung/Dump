<!DOCTYPE html>
<html>
<head>
    <title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <div style="width:100%;height:400px;background: #666666;">
        <?php
            if( $_GET["fullname"] || $_GET["age"] ) {
                echo "Welcome ". $_GET['fullname']
            }
        ?>
    </div>
</body>
</html>
