<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEMA 4 nivel 1 </h1>
</body>
</html>
<?php
class Shape{
    protected $altura;
    protected $amplitud;
    protected $resultado;

    function __construct($altura,$amplitud){
        $this->amplitud=$amplitud;
        $this->altura =$altura;
        //$this->resultado =$resultado;
    }
    function imprimir(){
        echo $this->resultado;

    }


}
class Rectangulo extends shape{
    function calculararea(){
        $this->resultado=$this->amplitud*$this->altura;
        return $this->resultado;
    }

}
class Triangulo extends shape{

    function calcularAreat(){
        $this->resultado=($this->amplitud*$this->altura)/2;
        return $this->resultado;

    }
}

$rectangulo= new Rectangulo(2,2); 
$rectangulo->calculararea();
echo "el RECTANGULO tiene un area de : " ;
$rectangulo->imprimir();
echo "<br>";
$triangulo= new Triangulo(3,4);
$triangulo->calcularAreat();
echo "el TRIANGULO tiene un area de : " ;
$triangulo->imprimir();

?>
