<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <select name="age" id="age">
    <?php
        for($i=10; $i<=70;$i++){
            print('<option value="' . $i . '">' . $i . '歳</option>');
        }
    ?>
    </select>
    <select name="age2" id="age2">
    <?php
        $i = 10;
        while($i<=70){
            print('<option value="' . $i . '">' .$i . '歳</option>');
            $i++;
        }
    ?>
    </select>
</body>
</html>