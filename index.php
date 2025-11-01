<?php
require_once ('./LuasLingkaran.php');// panggil file di LuasLingkaran.php
use App\Math\LuasLingkaran; // pannggil name scape

$lingkaran = new LuasLingkaran(10);
$lingkaran -> tampil ('Roda');
LuasLingkaran :: testing ();