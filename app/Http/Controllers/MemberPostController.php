<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Classes\Validators\MemberValidator;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Mail\ContactMail;
use App\Mail\BankDetailsMail;
use App\BankDetails;
use App\Http\Requests\BankDetailsRequest;
use App\Http\Requests\PartnerRequest;
use App\Pep;
use App\Http\Requests\PepRequest;
use App\Mail\PepMail;

class MemberPostController extends Controller {
    public function partner(PartnerRequest $objRequest) {
        Auth::user()->company = $objRequest->company;
        Auth::user()->url = $objRequest->url;
        Auth::user()->save();

        Auth::user()->assignRole('partner');

        // Notification
        Mail::to('info@cee-realestate.com')->send(new ContactMail($objRequest->all()));

        return redirect(route('member.partner.marketing-materials.home'));
    }

    public function account(Request $objRequest) {
        $objValidator = MemberValidator::accountValidator($objRequest->all());
        if ($objValidator->fails()) return back()->withErrors($objValidator)->withInput();

        Auth::user()->name = $objRequest->name;
        Auth::user()->surname = $objRequest->surname;
        Auth::user()->phone_code = $objRequest->phone_code;
        Auth::user()->phone = $objRequest->phone;
        Auth::user()->country = $objRequest->country;

        if (isset($objRequest->company)) Auth::user()->company = $objRequest->company;
        if (isset($objRequest->url)) Auth::user()->url = $objRequest->url;
        if ($objRequest->password != null) Auth::user()->password = Hash::make($objRequest->password);

        Auth::user()->save();

        flash('Account information saved.')->success();

        return back();
    }

    public function pep(PepRequest $objRequest) {
        Pep::create($objRequest->all());

        // Notification
        Mail::to('info@cee-realestate.com')->send(new PepMail($objRequest->all()));

        flash(__('member/invest/step2.text13'))->success();

        return back();
    }

    public function bank_details(BankDetailsRequest $objRequest) {
        $arrBankDetails = $objRequest->all();
        $arrBankDetails['user_id'] = Auth::user()->id;

        BankDetails::create($arrBankDetails);

        // Notification to CEE
        Mail::to('info@cee-realestate.com')->send(new BankDetailsMail($objRequest->all()));

        flash('Your bank details were saved successfully.')->success();

        return back();
    }

    public function contact(Request $objRequest) {
        $data = $objRequest->all();

        $objValidator = MemberValidator::contactValidator($data);
        if ($objValidator->fails()) return back()->withErrors($objValidator)->withInput()->with('modal', 'contact');

        Mail::to('info@cee-realestate.com')->send(new ContactMail($data));

        flash('Your message has been sent successfully.')->success();

        return back();
    }
}