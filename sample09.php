<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <select name="pref" id="pref">
        <?php
            $prefs = array('北海道','青森県','岩手県','宮城県','秋田県','山形県','新潟県',
            '富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県',
            '滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県',
            '広島県','山口県','徳島県','香川県','愛媛県','高知県','佐賀県','長崎県','熊本県',
            '大分県','宮崎県','鹿児島県','沖縄県');
            foreach($prefs as $pref){
                print('<option value="' . $pref . '">' . $pref . '</option>');
            }
        ?>
    </select>
</body>
</html>