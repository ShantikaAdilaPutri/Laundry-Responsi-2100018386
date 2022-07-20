<?php 

echo "<head><title>keranjang</title></head>";
$fp = fopen("struk.txt","r");

echo "<table border='0'>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>total: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>pesanan: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>via pembayaran: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";
}

echo "</table>";
echo "<a href='keranjang.php'> Keranjang pesanan </a>";

?>