<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table('bilgiler')->insert([
            "metin"=>"Bu örnek 3 bir metin bilgisidir"
        ]);
    }

    public function guncelle()
    {
        DB::table('bilgiler')->where('id',1)->update([
            "metin"=>"Bu GÜNCELLENMİŞ örnek bir metin bilgisidir"
        ]);
    }

    public function sil()
    {
        DB::table('bilgiler')->where('id',1)->delete();
    }

    public function bilgiler()
    {
        // $veriler=DB::table("bilgiler")->get();

        // foreach ($veriler as $key => $veri) {
        //     echo $veri->metin;
        //     echo "<br>";
        // }

        // print_r($veriler);

        $veri=DB::table("bilgiler")->where("id",3)->first();

        echo $veri->metin;
    }

}
