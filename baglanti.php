<?php

require_once("./baglan.php");

$sonuc = mysql_query("select isbn,adi from kitaplar");

if(mysql_num_rows($sonuc)!=0)
{
    while($oku = mysql_fetch_assoc($sonuc))
    {
        echo "Kitap adi: ".$oku["adi"]."<br>Kitap ISBN: ".$oku["isbn"]."<br><br>";
        //echo $.oku["yazari"]; //bu satir hatalidir cunku sql sorgumuzda yazari alanini secmedik
    }
}else{
    echo "Hic kayit yok!";
}

mysql_close($conn);

?>
