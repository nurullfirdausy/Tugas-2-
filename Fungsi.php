<form method="post" name="aritmatika">
    Angka 1 : <input type=text name=a1><br>
    Angka 2 : <input type=text name=a2><br>
                <input type=submit value=proses name=proses>
</form>

<?php

    $angka1=$_POST[a1];
    $angka2=$_POST[a2];
    $proses=$_POST[proses];

    if (isset($proses)) 
            {
            $hasil=$angka1+$angka2;

            echo "Angka 1 : $angka1 <br>";
            echo "Angka 2 : $angka2 <br>";
            echo "Hasil dari $angka1 + $angka2 adalah : $hasil";
    }

?>