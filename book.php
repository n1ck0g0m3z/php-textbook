<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    class book{
        protected $name;
        protected $writter;
        protected $page;
        protected $price;
        protected $genre;
        
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
    }
    
    $PHP = new book;
    $PHP->setName('php5.5');
    echo $PHP->getName();
?>
</body>
</html>