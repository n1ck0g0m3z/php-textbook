<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="sample08.php" method="get">
        <dl>
            <dt>日にちく</dt>
        <dd>
            <?php print(date('n')); ?>月
            <select name="day" id="day">
                <?php
                    for($day=1; $day<=date('t'); $day++){
                        print('<option value="' . $day . '">' . $day . '日</option>');
                    }
                ?>
            </select>
        </dd>
        </dl>
        <input type="submit" value="送信する"/>
    </form>
    <?php
        print ('今日は : ' . htmlspecialchars($_GET['day'],ENT_QUOTES));
    ?>
</body>
</html>