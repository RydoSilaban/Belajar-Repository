<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $umur=19;

        if ($umur >= 20) {
            echo "Anda sudah dewasa";
        }else if ($umur >= 18) {
            echo "anda proses dewasa";
        }else {
            echo "Anda belum dewasa";
        }
    ?>
</body>
</html>