<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_REQUEST['my_name'])){
            print('名前を記入してください<br />');
        }else {
            print('正しく記入されています');
        }
    ?>
</body>
</html>