<?php
include_once "customerPay.php";
include_once "debit.php";
include_once "kredit.php";
include_once "cash.php";

$payment = new PembayaranCustomer();
$debit = new Debit();
$kredit = new Kredit();
$cash = new Cash();

$payment->menerimaPembayaran($debit);
echo "<br>";
$payment->menerimaPembayaran($kredit);
echo "<br>";
$payment->menerimaPembayaran($cash);
?>