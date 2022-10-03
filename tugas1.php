<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS OOP 1 | G.211.21.0122</title>
</head>
<style>
    body{
        font-family: helvetica;
        background: light;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .header{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: auto;
        height: auto;
        background-color: lightblue;
        border-radius: 3px;
        padding: 3px 12px;
        margin: 3px;
        box-shadow: 3px 3px 4px #bbb, -3px -3px 4px #fff;
    }
    h1{
        text-align: center;
        border-bottom: 5px solid black;
    }
    h2{
        text-align: center;
        border-bottom: 1px solid black;
    }
</style>
<body><?php class product {
    public $name;
    public $price;
    public $discount;

    function getPrice() {
        return $this->price;
    }

    function setPrice($price) {
        $this->price=$price;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name=$name;
    }

    function getDiscount() {
        return $this->discount;
    }

    function setDiscount($discount) {
        $this->discount=$discount;
    }
}

/**
    * 
    */
class CDMusic extends product {
    public $artist;
    public $genre;

    function __construct() {}

    function getArtist() {
        return $this->artist;
    }

    function setArtist($artist) {
        $this->artist=$artist;
    }

    function getGenre() {
        return $this->genre;
    }

    function setGenre($genre) {
        $this->genre=$genre;
    }

    function setPrice($price) {
        $this->price=$price;
    }

    function getPrice() {
        $harga=$this->price;
        $ppn=((10/100) * $this->price);
        $discount=((5/100) * $this->price);
        return ($harga + $ppn) - $discount;
    }

    function setDiscount($discount) {
        $this->discount=$discount;
    }
}

/**
        * 
        */
class CDRack extends product {
    public $capacity;
    public $model;

    function getCapacity() {
        return $this->capacity;
    }

    function setCapacity($capacity) {
        $this->capacity=$capacity;
    }

    function getModel() {
        return $this->model;
    }

    function setModel($model) {
        $this->model=$model;
    }

    function setPrice($price) {
        $this->price=$price;
    }

    function getPrice() {
        $harga=$this->price;
        $pajak=((15 / 100) * $this->price);
        return $harga+$pajak;
    }
}

?>
    <div class="header">
        <h1>TUGAS OOP 2</h1>
        <p>

            <?php 
        $beli=new product(); $beli_cdm=new CDMusic(); $beli_cdr=new CDRack(); $beli->setName("CD
        LAGU
        ORIGINAL");
        $beli->setPrice(250000);
        $beli->setDiscount("1. Discount 5% tiap pembelian satu CD Musik<br />
        2. Mohon Maaf Belum ada Discount untuk pembelian CDRack");

        echo "Nama Product : ". $beli->getName() . "<br />";
        echo "Harga : Rp. ". $beli->getPrice() . ",-<br />";
        echo $beli->getDiscount() . "</br>";
        $beli_cdm->setArtist("NOAH");
        $beli_cdm->setGenre("Pop");
        $beli_cdm->setDiscount("15%");
        $beli_cdm->setPrice(250000);
        echo "<h2>---SELAMAT DATANG DI CDMUSIC---</h2> <br />";
        echo "Nama Product : ". $beli->getName() . "<br />";
        echo "Artis : ". $beli_cdm->getArtist() . "<br />";
        echo "Genre : ". $beli_cdm->getGenre() . "<br />";
        echo "Selamat anda mendapatkan Discount Sebesar ". $beli_cdm->getDiscount() . "<br />";
        echo "Total Harga : Rp.". $beli_cdm->getPrice() . ",-<br />Harga diatas sudah
        termasuk PPN sebesar 15% dan Discount 10%<br /></br>";


        $beli_cdr->setCapacity("5 GB");
        $beli_cdr->setModel("New Arrival");
        $beli_cdr->setPrice(2000000);
        echo "<h2>---SELAMAT DATANG DI CDRACK--- </h2><br />";
        echo "Kapasitas : ". $beli_cdr->getCapacity() . "<br />";
        echo "Model : ". $beli_cdr->getModel() . "<br />";
        echo "Mohon maaf Discount belum tersedia untuk pembelian 1 CDRack <br />";
        echo "Total Harga : Rp.". $beli_cdr->getPrice() . ",-<br />Harga diatas sudah
        termasuk ppn sebesar 15% dan tidak mendapatkan discount";
        ?>
        </p>
    </div>
</body>
</body>
</html>