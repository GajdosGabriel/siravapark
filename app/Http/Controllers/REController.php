<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageVisit;
use Session;
use App;

class REController extends Controller {
    public function index() {
        $page = App\Page::find(3);
        PageVisit::create(['page_id' => 3]);

        return view('public/re/index');
    }

    public function indexSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        return $this->index();
    }

    public function apartments() {
        $page = App\Page::find(9);
        PageVisit::create(['page_id' => 9]);

        return view('public/re/apartments/index');
    }

    public function apartments_ground() {
        $page = App\Page::find(16);
        PageVisit::create(['page_id' => 16]);

        return view('public/re/apartments/ground');
    }

    public function apartments_first() {
        $page = App\Page::find(17);
        PageVisit::create(['page_id' => 17]);

        return view('public/re/apartments/first');
    }

    public function apartments_penthouse() {
        $page = App\Page::find(18);
        PageVisit::create(['page_id' => 18]);

        return view('public/re/apartments/penthouse');
    }

    public function terraced() {
        $page = App\Page::find(10);
        PageVisit::create(['page_id' => 10]);

        return view('public/re/terraced');
    }
    public function semi() {
        $page = App\Page::find(11);
        PageVisit::create(['page_id' => 11]);

        return view('public/re/semi');
    }

    public function standard() {
        $page = App\Page::find(12);
        PageVisit::create(['page_id' => 12]);

        return view('public/re/standard');
    }

    public function villas() {
        $page = App\Page::find(13);
        PageVisit::create(['page_id' => 13]);

        return view('public/re/villas');
    }
}
