<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
class CrawlDataController extends Controller
{
    public function crawlBurger(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/ala-carte.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }

    public function crawlCombo(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/combo.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }


    public function crawlChicken(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/ga-ran.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }
    public function crawlRice(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/mon-an-kem.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }

    public function crawlExtra(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/mon-an-kem.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }

    public function crawlDrink(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://burgerking.vn/menu/thuc-uong.html');

        $data = $crawler -> filter('.product-item')->each(function ($node){
            return [
                'name' => $node -> filter('.product-title')->text(),
                'price' => $node -> filter('.product-price')->text(),
                'des' => $node -> filter('.describe')->text(),
                'img' => $node -> filter('.product-img img')->attr('src'),
            ];
        });
        dd($data);
    }

    public function crawlTexasExtra(){
        $client = new client();
        $crawler = $client -> request('GET', 'https://texaschickenvn.com/vn/cac-mon-an-kem');

        $data = $crawler -> filter('.itwhatfood')->each(function ($node){
            return [
                'name' => $node -> filter('.dstitle')->text(),
                'price' => $node -> filter('.dsprice pnews')->text(),
                'img' => $node -> filter('.thumb img')->attr('src'),
            ];
        });
        dd($data);
    }

}
