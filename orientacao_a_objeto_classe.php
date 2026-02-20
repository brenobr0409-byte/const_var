<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLasses</title>
</head>
<body>
    
    <?php 
    
    //Definindo uma classe
    class carro {
    //objetos
        public $marca;
        public $modelo;
        public $ano;
        public $cor;
        public $velocidade = 0;

    //metodos
        public function acelerar(){
            $this -> velocidade >=10;
            echo "O carro acelerou. Avelocidade e igual: ". $this-> velocidade. "Km/h";
        }
    //metodo 2
        public function frear(){
            if($this -> velocidade >=10){
                $this -> velocidade <=10;
            }
            echo "O carro acelerou. Avelocidade e igual: ". $this-> velocidade. "Km/h";

    }
    
    ?>

</body>
</html>