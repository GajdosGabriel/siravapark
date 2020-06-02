<?php

namespace App\Http\Controllers;

use App\Events\ViewCounter;
use App\Page;
use Session;
use App;
use App\PageVisit;
use App\Lead;
use App\SignUp;
use App\Classes\iContact;
use App\User;
use App\Notifications\User\NewRegistration;


class PublicController extends Controller {
    public function index() {
        $page = Page::find(1);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id]);

        return view('public.index');
    }

    public function holiday() {
        Session::flash('modal', 'holidayForm');

        return $this->index();
    }

    public function holidaySK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        Session::flash('modal', 'holidayForm');

        return $this->index();
    }

    public function pp($lang) {
        Session::put('appLocale', $lang);
        App::setLocale($lang);

        Session::flash('modal', 'pp');

        return $this->index();
    }

    public function indexSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        return $this->index();
    }

    public function indexDE() {
        Session::put('appLocale', 'de');
        App::setLocale('de');

        return $this->index();
    }

    public function indexNL() {
        Session::put('appLocale', 'nl');
        App::setLocale('nl');

        return $this->index();
    }

    public function glamping() {
        $page = Page::find(19);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public.glamping');
    }

    public function boulevard() {
        $page = Page::find(14);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public/boulevard');
    }

    public function boulevardSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        return $this->boulevard();
    }

    public function spa() {
        $page = Page::find(15);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public/spa');
    }

    public function spaSK() {
        Session::put('appLocale', 'sk');
        App::setLocale('sk');

        return $this->spa();
    }

    public function pool_area() {
        $page = Page::find(4);
        event(new ViewCounter($page));
        PageVisit::create(['page_id' => $page->id ]);

        return view('public/pool_area');
    }

    public function social_area() {
        $page = Page::find(5);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public/social_area');
    }

    public function hotel() {
        $page = Page::find(6);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public/hotel');
    }

    public function location() {
        $page = Page::find(7);
        event(new ViewCounter($page));
        PageVisit::create(['page_id' => $page->id ]);

        return view('public/location');
    }

    public function taborisko() {
        $page = Page::find(20);
        event(new ViewCounter($page));
        PageVisit::create(['page_id' => $page->id ]);

        return view('public/taborisko');
    }

    public function taboriskoLang($lang) {
        Session::put('appLocale', $lang);
        App::setLocale($lang);

        $page = Page::find(20);
        event(new ViewCounter($page));
        PageVisit::create(['page_id' => $page->id ]);

        return view('public/taborisko');
    }


    public function contact() {
        $page = Page::find(8);
        event(new ViewCounter($page));

        PageVisit::create(['page_id' => $page->id ]);

        return view('public/contact');
    }

    public function lang($lang) {
        Session::put('appLocale', $lang);

        return back();
    }

    public function test() {
        return 1;
    }

    public function login() {
        return  view('auth.login');
    }
}
