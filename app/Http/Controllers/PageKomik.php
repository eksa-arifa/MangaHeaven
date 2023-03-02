<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageKomik extends Controller
{
    private $datas = array();
    private function prosesApi( $url){
        $res = file_get_contents("https://komiku-api.fly.dev/api/comic/info/manga/".$url);

        $dataKomik = json_decode($res);

        array_push($this->datas, $dataKomik->data);
    }

    public function show($type, $url){
        $this->prosesApi($url);
        return view('page', ['url' => $url, 'title' => "Page", 'komik' => $this->datas]);
    }
}
