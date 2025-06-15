<?php
if (empty($_POST['sayı'])) {
    echo "Değer boş olamaz";
    exit;
}

$sayi = $_POST['sayı'];

function ucebölünebilme($sayi) {
    if ($sayi % 3 == 0) {
        echo "Sayı 3 ile tam bölünüyor";
    } elseif ($sayi % 3 != 0 && $sayi % 2 == 0) {
        $sayi = $sayi + 2;
        echo "Sayı 3'e bölünmüyor ama çift, yeni sayı: $sayi";
    } else {
        $sayi = $sayi + 1;
        echo "Sayı 3'e bölünmüyor ve tek, yeni sayı: $sayi";
    }
}

ucebölünebilme($sayi);
?>
