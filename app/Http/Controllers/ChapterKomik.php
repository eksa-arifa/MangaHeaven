<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterKomik extends Controller
{
    private $datas = array();
    private function apiFetch($ch, $url){
        $res = file_get_contents("https://komiku-api.fly.dev/api/comic/chapter/". $ch ."/". $url);

        $dataKomik = json_decode($res);

        array_push($this->datas, $dataKomik->data);
    }

    public function show($ch, $url){
        $this->apiFetch($ch, $url);
        return view('chapter', ['title'=>"Chapter", 'komik'=>$this->datas]);
    }
}
