<?php 

class Tes{

}

    $a = new tes();

    class Mobil{
        public $nama,
                $merk,
                $warna;

        public function tambahKecepatan(){

        }
        
        public function kurangKecepatan(){

        }

    }
    
$bmw = new Mobil();



class Produk {
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;

    public function __construct($nama, $jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }


    public function printHarga(){
        return $this->harga;
    }
}

// $produk1 = new Produk();
// $produk1 ->nama = 'Hoodie';
// $produk1 ->jenis = 'jaket';



$produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 15000);




echo "produk2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga :" .$produk2->printHarga();
