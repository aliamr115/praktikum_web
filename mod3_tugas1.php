<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal + ($saldoAwal * $bulan * $bunga);
// lengkapi pada perhitungan $saldo akhir
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";
?>

<?php
// Tentukan nilai jari-jari (r) dan garis pelukis (s)
$r = 7; 
$s = 15;
$pi = 3.14;

// Menghitung Luas Alas (pi * r * r)
$luasAlas = $pi * $r * $r;

// Menghitung Luas Permukaan (pi * r^2 + pi * r * s)
$luasPermukaan = ($pi * $r * $r) + ($pi * $r * $s);

echo "<h3>Hasil Perhitungan Kerucut</h3>";
echo "Jari-jari (r): $r <br>";
echo "Garis Pelukis (s): $s <br>";
echo "--------------------------- <br>";
echo "Luas Alas Kerucut: " . $luasAlas . "<br>";
echo "Luas Permukaan Kerucut: " . $luasPermukaan;
?>