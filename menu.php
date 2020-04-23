<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
class menu{
    private $url=array();
    private $lavel=array();


    public function charge_option($u,$l){
        $this->url[]=$u;
        $this->lavel[]=$l;
    }

    public function M_horizontal(){

        for($con=0;$con<count($this->url);$con++){
            echo '<a href=".this->url[$con].">'.$this->lavel[$con].'</a>';
            echo "---";
        }

    }

    public function M_vertical(){
        for($con=0;$con<count($this->url);$con++){
            echo '<a href=".this->url[$con].">'.$this->lavel[$con].'</a>';
            echo "<br>";
        }
    }

}

$menu_1=new menu();
$menu_1->charge_option("https://www.ardilu.com/guias/activar-windows-7","GUIDE-FOR WINDOWS");
$menu_1->charge_option('http://www.google.com','Google');
$menu_1->charge_option('http://www.yahoo.com','Yhahoo');
$menu_1->charge_option('http://www.msn.com','MSN');
$menu_1->M_horizontal();
$menu_1->M_vertical();


// $menu_2=new menu();
// $menu_2->charge_option("https://www.php.net/manual/es/sdo.sample.getset.php","GUIDE-OF PHP");
// $menu_2->M_horizontal();
// $menu_2->M_vertical();

?>
    
</body>
</html>

