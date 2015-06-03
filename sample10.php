<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <dl>
            <dt>商品</dt>
            <dd>
                <?php
                    $items = array('a-1'=>'ガム','b-1'=>'チョコレート','c-1'=>'クッキー');
                    print_r(key($items));
                    foreach($items as $itemKey => $itemValue){
                        print ('<input type="checkbox" id="' . $itemKey . '"value="' . $itemKey . '"/><label for="' 
                        . $itemKey . '">' . $itemValue .'</label>' );
                        print_r(key($items));
                        next($items);
                    }
                    
                    print_r(array_keys($items));
                    
                ?>
            </dd>
        </dl>
        <input type="submit" value="送信する"/>
    </form>
</body>
</html>