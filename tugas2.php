<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Tugas Oop</title>
    <style>
        body {
            font-family: helvetica;
            background:	#800000;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: gold;
        }
        .header{
            text-align: center;
            text-decoration: underline;
        }
        .text{
            text-align: left;
            padding: 15px;
            border: 5px solid black;   
        }
        b{
            background-color: brown;
        }

    </style>
</head>
<body>
    <?php 
interface Hewan
{
    public function Makan();
    public function Berjalan();
    public function Bersuara();
    public function Sepeda();
}
class Monyet implements Hewan
{
    public function Makan()
    {
        return "Monyet dapat berjalan<br/>";
    }

    public function Berjalan()
    {
        return "Monyet memakan pisang<br/>";
    }

    public function Bersuara()
    {
        return "Monyet dapat bersuara<br/>";
    }
    public function Sepeda()
    {
        return "Tapi Juga dapat naik sepeda apa<br/>";
    }

}

class Lainnya implements Hewan
{
    public function Makan()
    {
        return "";
    }

    public function Berjalan()
    {
        return "";
    }

    public function Bersuara()
    {
        return "";
    }
    public function Sepeda()
    {
        return "Monyet juga dapat menaiki sebuah sepeda<br/>";
    }

}
?>
<div class="header">
    <h1>TUGAS 2 || OOP</h1>
</div>
<div class="text">
<p>
<?php
$Monyet = new Monyet;
$Lainnya = new Lainnya;
echo "<b>Kemampuan Monyet : </b><br/>";
echo $Monyet->Makan();
echo $Monyet->Berjalan();
echo $Monyet->Bersuara();
echo $Monyet->Sepeda();

echo "<b>Kemampuan Monyet Apabila Dilatih : </b><br/>";
echo $Monyet->Sepeda();
?>
</p>
</div>
</body>
</html>