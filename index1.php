<?php
// demo.php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';
include('PdfToText\PdfToText.phpclass');

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();


$stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
$remover  = $stopWordRemoverFactory->createStopWordRemover();



$doc = new PdfToText('http://localhost/IR/ayo1.pdf');
$ubah = $doc->Text;
echo $stemmer->stem($remover->remove($ubah)) . "\n";
