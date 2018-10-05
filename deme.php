<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        class gos{
     
            // Atributos
            public $raza;
            public $color;
            public $tamany;

            // Constructor
            public function __construct($raza, $color, $tamany){
                $this->raza = $raza;
                $this->color = $color;
                $this->tamany = $tamany;
            }
            
            //Metodes
            public function getColor(){

            }
            
            public function setColor(){

            }

            public function suma(){
                echo "1+2";
            }
        }
        ?>
    </body>
</html>
