<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public $angka;

    public function task(){
        for($i=1; $i<=100; $i++){
            if($i%3 == 0){
                $this->luasLingkaran($i);
            }
            else if($i%5 == 0){
                $this->kelLingkaran($i);
            }

            else if($i%3 == 0 && $i%5 == 0){
                $this->luasPersegiPanjang($i);
            }

            else{
                echo $i. "<br>";
            }
        }
    }

    public function luasLingkaran($angka){
        $pi = 3.14;
        $luas = $pi*($angka/3)**2;
        echo $luas. "<br>";
    }

    public function kelLingkaran($angka){
        $pi = 3.14;
        $keliling = 2*$pi*($angka/5);
        echo $keliling. "<br>";
    }

    public function luasPersegiPanjang($angka){
        $panjang = $angka/3;
        $lebar = $angka/5;
        $luas = $panjang*$lebar;
        echo $luas. "<br>";
    }
}
