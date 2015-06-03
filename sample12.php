ご予約：<br />
<?php
    foreach($_REQUEST['reserve'] as $reserve){
        print(htmlspecialchars($reserve,ENT_QUOTES) . '<br />');
    }
?>