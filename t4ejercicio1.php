<?php
class employee{
//metodo
protected $nombre;
protected $salario;
    function empleado($nombre,$salario){
      $this->nombre=$nombre;
      $this->salario=$salario;
    }
    public function imprimir (){
       if($this->salario>6000){
        echo "nombre: " . $this->nombre;
        echo "salario: " . $this->salario;
        echo '<br>';
       }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>