
<html>
<head>Pruebas de cabecera</head>
<body>
<?php
class CabeceraPagina{
    private $lavel;
    private $locations;
    private $Color_font ;
    private $backgroud;

    public function begining($l,$lo,$Cs,$Cb){
        $this->lavel=$l;
        $this->locations=$lo;
        $this->Color_font=$Cs;
        $this->backgroud=$Cb;

    }

    public function grafic(){
      // echo '<div style="font-size;40px;aling:'.$this->locations.';color';
      // echo $this->Color_font.';backgroud:'.$this->Color_font.'">';
      // echo $this->lavel;
      // echo '</div>';

      echo '<div style="font-size:100px;text-align:'.$this->locations.';color:';
      echo $this->backgroud.';background-color:'.$this->Color_font.'">';
      echo $this->lavel;
      echo '</div>';
      echo '</br>';
      echo '</br>';

      echo '</br>';

    }

    public function grafic2()
    {
      echo '<div style="font-size:100px;text-align:'.$this->locations.';color:';
      echo $this->backgroud.';background-Color:'.$this->Color_font.'">';
      echo $this->lavel;
      echo '</div>';


    }
   
    public function grafic3()
    {
      echo '<div style="font-size:10xp;text-align:'.$this->locations.';color:';
      echo $this->backgroud.';background-Color:'.$this->Color_font.'">';
      echo $this->lavel.'</div>';
      

    }
}
$cabecera_1 =new CabeceraPagina();
$cabecera_1->begining('Prueba_juan_01','center','#FFA100','#CDEB8B');
$cabecera_1->grafic();

$cabecera_2=new CabeceraPagina();
$cabecera_2->begining('juansbk_dios_del_nuevo_mundo','center','#33FFC7','#3F33FF');
$cabecera_2->grafic2();

$cabecera_3=new CabeceraPagina();
$cabecera_3->begining('hola__mis_amigos','center','#010101','#FFFFFF');
$cabecera_3->grafic3();
?>
</body>
</html>
