<?php

namespace App\Http\Controllers;

use App\UserDocument;
use Auth;
use App\UserActivity;
use App\Order;
use App\BankDetails;
use App\Project;
use App\Article;
use App\Pep;
use App\OrderTDO;

class MemberController extends Controller {
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        UserActivity::logActivity(3);

        return view('member/index');
    }

    public function contact() {
//        UserActivity::logActivity(8);

        return view('member/contact');
    }

    public function my_investments() {
        UserActivity::logActivity(49);

        // Orders
        $arrOrders = Order::where('user_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->with(['company', 'joint', 'tdo.project', 'pr.serials'])
            ->get();

        // News
        $arrArticles = Article::orderBy('id', 'DESC')
            ->limit(2)
            ->get();

        // Documents
        $arrDocuments = UserDocument::where('user_id', Auth::user()->id)->get();

        // PEP
        $objPep = Pep::where('user_id', Auth::user()->id)->get();

        return view('member/investments')->with([
            'arrOrders' => $arrOrders,
            'arrDocuments' => $arrDocuments,
            'arrArticles' => $arrArticles,
            'objPep' => $objPep
        ]);
    }

    public function account() {
        UserActivity::logActivity(10);

        return view('member/account');
    }

    public function leave_impersonation() {
        Auth::user()->leaveImpersonation();

        return redirect(route('member.home'));
    }

    public function invest() {
        if (Auth::user()->step == 1) {

            // STEP 1
//            UserActivity::logActivity(51);

            $objProject = Project::find(1);

            $intSoldTDOShares = OrderTDO::sum('shares');

            return view('member/step1')->with([
                'objProject' => $objProject,
                'intSoldTDOShares' => $intSoldTDOShares
            ]);
        }
        else {
            $objOrder = Order::where('user_id', Auth::user()->id)
                ->with(['company', 'joint', 'tdo.project', 'pr.serials'])
                ->orderBy('id', 'DESC')
                ->first();

            $arrDocuments = UserDocument::where('user_id', Auth::user()->id)->get();

            if (Auth::user()->step == 2) {

                // STEP 2
//                UserActivity::logActivity(52);

                return view('member/step2')->with([
                    'objOrder' => $objOrder,
                    'arrDocuments' => $arrDocuments
                ]);
            }
            else {

                // STEP 3
                UserActivity::logActivity(53);

                $objBankDetails = BankDetails::where('user_id', Auth::user()->id)->first();

                if ($objOrder->tdo) $strType = 'tdo';
                elseif ($objOrder->sp) $strType = 'sp';
                else $strType = 'pr';

                return view('member/step3_' . $strType)->with([
                    'objOrder' => $objOrder,
                    'arrDocuments' => $arrDocuments,
                    'objBankDetails' => $objBankDetails
                ]);
            }
        }
    }

    public function step1() {
        $arrProjects = Project::get();

        return view('member/step1')->with([
            'arrProjects' => $arrProjects
        ]);
    }

    public function step2() {
        $objOrder = Order::where('user_id', Auth::user()->id)
            ->with(['company', 'joint', 'tdo.project', 'pr.serials'])
            ->orderBy('id', 'DESC')
            ->first();

        $arrDocuments = UserDocument::where('user_id', Auth::user()->id)->get();

        return view('member/step2')->with([
            'arrDocuments' => $arrDocuments,
            'objOrder' => $objOrder
        ]);
    }

    public function step3() {
        $arrDocuments = UserDocument::where('user_id', Auth::user()->id)->get();

        $objOrder = Order::where('user_id', Auth::user()->id)
            ->with(['company', 'joint', 'tdo.project', 'pr.serials'])
            ->orderBy('id', 'DESC')
            ->first();

        $objBankDetails = BankDetails::where('user_id', Auth::user()->id)->first();

        return view('member/step3')->with([
            'arrDocuments' => $arrDocuments,
            'objOrder' => $objOrder,
            'objBankDetails' => $objBankDetails
        ]);
    }
}