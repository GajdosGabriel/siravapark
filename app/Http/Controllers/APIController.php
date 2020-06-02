<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PageVisit;
use DB;
use Carbon\Carbon;
use App\Lead;
use App\SignUp;

class APIController extends Controller {
    public function activity() {
        // Select weekly visited pages
//        $end = Carbon::now();
//        $end = $end->startOfWeek(Carbon::MONDAY);

        return PageVisit::select(DB::raw('page_id, COUNT(page_id) as count'))
//            ->where('created_at', '>', $end)
            ->where('created_at', '>', '2018-12-20 00:00:00')
            ->groupBy('page_id')
            ->orderBy('count', 'desc')
            ->with('page')
            ->get();
    }

    public function leads() {
        $arrLeads = Lead::whereProject('domes')->orderBy('created_at', 'desc');

        if (isset($_GET['search'])) $arrLeads = Lead::search($arrLeads, $_GET['search']);

        return $arrLeads->paginate(50);
    }

    public function glamping() {
        $arrLeads = Lead::whereProject('glamping')->orderBy('created_at', 'desc');

        if (isset($_GET['search'])) $arrLeads = Lead::search($arrLeads, $_GET['search']);

        return $arrLeads->paginate(50);
    }

    public function leadsBoulevard() {
        $arrLeads = Lead::whereProject('boulevard')->orderBy('created_at', 'desc');

        if (isset($_GET['search'])) $arrLeads = Lead::search($arrLeads, $_GET['search']);

        return $arrLeads->paginate(50);
    }

    public function sign_ups() {
        return SignUp::orderBy('created_at', 'desc')->paginate(50);
    }
}
