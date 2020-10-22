<?php
if (isset($_POST['search'])) {
    $search = $_POST['search'];
}

$kop = "Selamat Datang di Pernikahan";
$footer = "Terima Kasih atas kunjungannya";

/* Call this file 'hello-world.php' */
require __DIR__ . '/vendor/autoload.php';
/* Change to the correct path if you copy this example! */

use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

$connector = new WindowsPrintConnector("star");

/* Print a "Hello world" receipt" */
$printer = new Printer($connector);



$printer -> initialize();


$printer -> setJustification(Printer::JUSTIFY_CENTER);
$printer -> feed();
$printer -> text("Terima Kasih Kupon Souvenir\n");
$printer -> feed(2);
// footer
$printer -> text("====================\n");
$printer -> text("Terima Kasih Kunjungan Anda");
$printer -> feed(3);
// kop atas
$printer -> setTextSize(1,8);
$printer -> text("Selamat Datang\n");
$printer -> text("Buku Tamu Pernikahan\n");
$printer -> text("Ini adalah Lokasi\n");
$printer -> text("Alamat Disini\n");
$printer -> text("====================\n");
$printer -> setJustification();

/* Close printer */
$printer->close();
