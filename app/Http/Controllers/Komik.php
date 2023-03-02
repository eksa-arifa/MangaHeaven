<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class Komik extends Controller
{
    private $datas = array();
    private $datacari;
    private $explodedata;

    private function getKomik(){
        $res = file_get_contents("https://komiku-api.fly.dev/api/comic/popular/page/1");

        $dataKomik = json_decode($res);

        array_push($this->datas, $dataKomik->data);
    }

    public function search(Request $request){
        $this->datacari = $request->search;
        $this->explodedata = explode(" ", $this->datacari);
        
        $res = file_get_contents("https://komiku-api.fly.dev/api/comic/search/". $this->explodedata[0]);
            
            $dataKomik = json_decode($res);
            $this->datas = array();

            array_push($this->datas, $dataKomik->data);
    
            return view('search', ['title' => "Search", 'komik' => $this->datas]);
    }


    public function show(){
        $this->getKomik();

        return view('home', ['title' => "Home", 'komik' => $this->datas]);
    }
}
