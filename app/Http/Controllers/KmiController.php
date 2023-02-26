<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmiController extends Controller
{
    public function kmi (){
        return view("kmi");
    }

    public function kmiRezultatas (Request $request){

        $svoris = $request->svoris;
        $ugis = $request->ugis;
        $kmi = round($svoris / ($ugis*$ugis / 10000),2);
        if ($kmi <18.5) {
            $ks =  "Nepakankamas svoris";
        } else if ( $kmi <= 25 ) {
            $ks =  "Normalus svoris";
        } else if ( $kmi <= 30 ) {
            $ks = "Antsvoris";
        } else if ( $kmi > 30 ) {
            $ks = "Nutukimas";
        }

        return view("kmiRezultatas", [
            'kmi' => $kmi,
            'ks' => $ks
        ]);
    }
}
