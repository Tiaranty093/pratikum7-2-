<?php

class bmi{
    public $nama,
           $bb,
           $tb,
           $umur,
           $jk;

    public function __construct($nama, $bb, $tb, $umur, $jk){
        $this->nama = $nama;
        $this->bb = $bb;
        $this->tb = $tb;
        $this->umur = $umur;
        $this->jk = $jk;
    }


    public function hitunganBMI(){
        $this->tb = $_POST['tb']/100;
        $tbrumus = $this->tb * $this->tb;
        $hasiltb = number_format($tbrumus, 2, '.', '');
        $hasil = $_POST['bb']/$hasiltb;
        $bmi = number_format($hasil, 1, '.' , '');

        if($bmi <= 18.5) {
            echo "hasil : Kekurangan Berat Badan <br>";

        }else if ($bmi > 18.5 AND $bmi <= 22.9) {
            echo "hasil : Normal (ideal) <br>";
            
        }else if ($bmi > 23 AND $bmi <= 27.9) {
            echo "hasil : Kelebihan Berat Badan <br>";
            
        }else {
            echo "hasil : Obesitas <br>";
        }
        return $bmi;
    }   
}

$bmi1 = new bmi($_POST['nama'], $_POST['bb'], $_POST['tb'], $_POST['umur'], $_POST['jk']);

    echo "<hr>";
    echo "<br>";
    echo "OUTPUT HASIL DATA BMI";
    echo "<br>";
    echo "<br>"; 
    echo "Nama : $bmi1->nama";
    echo "<br>";
    echo "Berat Badan : $bmi1->bb";
    echo "<br>";
    echo "Tinggi Badan : $bmi1->tb";
    echo "<br>";
    echo "Umur : $bmi1->umur";
    echo "<br>";
    echo "Jenis Kelamin : $bmi1->jk";
    echo "<br>";
    echo "BMI " . $bmi1->hitungBMI();
    echo "<br>";
?>