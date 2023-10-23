<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="t4n2ejercicio1.php" method="post">
        <input type="submit" name="lanzarDados" value="Lanzar Dados">
    </form>
</body>

</html>
<?php
class PokerDice
{
    protected $listaCaras;
    protected $resultado;
    protected $throws;
    protected $totalThrows;

    function __construct()
    {
        $this->listaCaras = ["AS", "k", "Q", "J", "7", "8"];
        $this->throws = 0;
    }

    function throw()
    {
        $this->resultado = [];
        for ($i = 0; $i < 5; $i++) {
            $this->resultado[] = rand(0, count($this->listaCaras) - 1);
        }
        $this->throws++;
        return $this->resultado;
    }
    function shapeName()
    {
        $ultima_cara = null;
        foreach ($this->resultado as $caraDado)
            $ultima_cara = $this->listaCaras[$caraDado] . "  ";
            echo $ultima_cara;
    }

    function getTotalThrows()
    {
        // return $this->throws;
        return $this->throws;
    }
}
$pokerDice = new PokerDice();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lanzarDados"])) {
    $lanzamientos = $pokerDice->throw();
    echo "Resultado del lanzamiento: ";
    foreach ($lanzamientos as $lanzamiento) {
        echo $lanzamiento . " ";
    }
}
echo "<br> cara: ";
$pokerDice->shapeName();
echo $ultima_cara;
echo "<br> total lanzamientos: " . $pokerDice->getTotalThrows();
?>