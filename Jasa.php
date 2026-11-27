<?php

namespace Pbo\Marketplace;

require_once('./PropertyCostant.php');

use Pbo\Marketplace\Produk;

class Jasa {

use Produk;
 
    public function payment($tipe){

    return match($tipe){
        "virtual" => "Virtual Account",
        "qris" => "QRIS",
        default => "hanya bisa va dan qris"
        };
    }
}







?>