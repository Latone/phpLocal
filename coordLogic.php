<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <?php
        function checkPos($x,$y,$r){
        //Top-right
        if($x>=0 && $x<=$r/2)
        {
          if($y<=$r/2 && $y>=0)
            return true;
        }
        //Bottom-Left
        if($x>=-$r && $x<=0)
        {
          if($y<=0 && $y>=-$r/2)
            return true;
        }
        //Bottom-right
        if($x*$x<=$r*$r-$y*$y && $x>=0 && $y<=0)
          return true;

        return false;
      }
        if(isset($_SESSION['arx']) or isset($_SESSION['ary']) or isset($_SESSION['arr'])){

              $arx=$_SESSION['arx'];
          		$ary=$_SESSION['ary'];
          		$arr=$_SESSION['arr'];
          		$art=$_SESSION['art'];
          	}
              $x = $_GET["x"];
              $y = $_GET["y"];
              $r = $_GET["r"];

            $regexp='/^\-?[0-9]+[.,]?[0-9]*$/';

            for ($i=0; $i < count($x); $i++) {
              if (isset($x) and isset($y) and isset($r)){
                if (preg_match($regexp,$x[$i]) and preg_match($regexp,$y) and preg_match($regexp,$r)){


                  $arx[]=$x[$i];
                  $ary[]=$y;
                  $arr[]=$r;

              $startTime = microtime(true);
                ?>
                    <table>
                        <tr>
                            <th>X</th>
                            <th>Y</th>
                            <th>R</th>
                        </tr>
                        <tr>
                        <th>
                        <?php echo  $x[$i], '</th>';
                               echo '<th>', $y, '</th>';
                                echo '<th>', $r, '</th>';
                        ?>
                        </tr>
                    </table>
              <?php
                if(checkPos($x[$i],$y,$r)){
                  $art[]="true";
                  echo "Точка попадает в область графика\r\n";
                }
                else {
                  $art[]="false";
                  echo "Точка не попадает в область графика\r\n";
                }

                echo "<br>";
                $time = microtime(true) - $startTime;
                echo "<br>";

                echo "Время выполнения скрипта:<br>";
                echo "$time<br>";
                echo "<br>";

                $t=time();
                echo "Текущее время:<br>";
                echo(date("Y-m-d-h-m-s",$t));
                ?>
                <hr>
                <?php
          }
          }else
            echo "Некорректные значения переменных<br>";
        }
            $_SESSION['arx']=$arx;
        		$_SESSION['ary']=$ary;
        		$_SESSION['arr']=$arr;
        		$_SESSION['art']=$art;
         ?>
  </body>
</html>
