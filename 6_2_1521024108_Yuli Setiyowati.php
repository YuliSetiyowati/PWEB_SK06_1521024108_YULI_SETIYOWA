<!DOCTYPE html>
<hmtl>
    <head>
        <title>Persegi Panjang</title>
    </head>
    <body>
      <?php 
         @$panjang = $_GET['panjang'];
         @$lebar = $_GET['lebar'];
         @$tinggi = $_GET['tinggi'];
         @$luas = $panjang * $lebar;
         @$keliling = 2 * ($panjang + $lebar);
         @$volume = $panjang * $lebar * $tinggi;
      ?>

        <form method="GET">
            P (PANJANG) = 
            <input type="text" name="panjang" value="<?php echo $panjang; ?>"/>cm<br/>
            L (LEBAR) = 
            <input type="text" name="lebar" value="<?php echo $lebar; ?>"/>cm<br/>
            T (TINGGI) = 
            <input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Persegi Panjang = ".$luas." cm^2<br/>";
                echo "Keliling Persegi Panjang = ".$keliling," cm <br/>";
                echo "Volume Balok = ".$volume." cm^3<br/>";
            ?>
        </form>
    </body>
</hmtl>