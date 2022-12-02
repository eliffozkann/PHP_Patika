<?php
class Sekil{
    public $a,$b;

    public function __construct($a,$b=null)//b parametresinin bazı durumlarda default boş kalabilmesi için
    {
        $this->a = $a;
        $this->b = $b;
    }

}


class Dikdortgen extends Sekil{
    public function cevre(){
        return 2 * ($this->a + $this->b);
    }

    public function alan(){
        return $this->a * $this->b;
    }
}
class Kare extends Sekil{
    public function cevre(){
        return $this->a * 4;
    }

    public function alan(){
        return $this->a * $this->a;
    }
}


class Ucgen extends Sekil{
    public function cevre(){
        return 3*$this->a;
    }

    public function alan(){
        return sqrt(3)/4 * pow($this->a,2);
    }
}

$Dikdortgen = new Dikdortgen(3,5);
$Ucgen = new Ucgen(5);
$Kare = new Kare(7);

echo "Uzun kenarı: <b>".$Dikdortgen->a."</b> Kısa kenarı: <b>".$Dikdortgen->b."</b> olan Dikdörtgenin ÇEVRESİ: <b>".$Dikdortgen->cevre()."</b> ALANI: <b>".$Dikdortgen->alan()."</b><br><br>";
echo "Bir kenarının uzunluğu: <b>".$Ucgen->a."</b> olan Eşkenar üçgenin ÇEVRESİ: <b>".$Ucgen->cevre()."</b> ALANI: <b>".$Ucgen->alan()."</b> <br><br>";
echo "Kenar uzunluğu: <b>".$Dikdortgen->a."</b> olan Karenin ÇEVRESİ: <b>".$Kare->cevre()."</b> ALANI: <b>".$Kare->alan()."</b>";

?>