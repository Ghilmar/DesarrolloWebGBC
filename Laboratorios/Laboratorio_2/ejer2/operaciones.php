<link rel="stylesheet" href="style.css">
<?php
class Operaciones {
    public $a;
    public $b;
    public $c;
    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function CalcularSuma() {
        return $this->a + $this->b + $this->c;
    }
    public function CalcularMayor() {
        return max($this->a, $this->b, $this->c);
    }
    public function MostrarCalculos() {
        echo "<table class='table' border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr class='rojo'><th >Valor de A</th><th>Valor de B</th><th>Valor de C</th></tr>";
        echo "<tr><td>{$this->a}</td><td>{$this->b}</td><td>{$this->c}</td></tr>";
        echo "<tr ><th colspan='2'class='rojo'>Suma: <td colspan='1'>" . $this->CalcularSuma() . "</td></th></tr>";
        echo "<tr><th colspan='2' class='rojo'>Mayor: <td colspan='3'>" . $this->CalcularMayor() . "</td></th></tr>";
        echo "</table>";
    }
}
?>
