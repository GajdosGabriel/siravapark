<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\HolidayMail;
use App\Mail\ContactMail;
use App\Lead;
use App\SignUp;
use App\Mail\SignUpMail;
use App\Classes\iContact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\HolidayRequest;
use App\Http\Requests\SignUpRequest;

class PublicPostController extends Controller {
    public function holiday(HolidayRequest $objRequest) {

        Lead::create($objRequest->all());
//        dd($objRequest->all());


        Mail::to((config('app.env') == 'production') ? 'marketing@siravapark.com' : 'gabriel@cee-realestate.com')->send(new HolidayMail($objRequest));

        iContact::addUser(
          $objRequest->email,
        explode(' ', $objRequest->name)[0] ?? '',
          explode(' ', $objRequest->name)[1] ?? '',
        (in_array($objRequest->country, ['SVK', 'CZE'])) ? 47147 : 47146
        );

        flash(__('holiday.thanks'))->success();

        return back();
    }

    public function sign_up(SignUpRequest $objRequest) {
        SignUp::create($objRequest->all());

        Mail::to((config('app.env') == 'production') ? 'marketing@siravapark.com' : 'gabriel@cee-realestate.com')->send(new SignUpMail($objRequest));

        iContact::addUser(
            $objRequest->email,
            explode(' ', $objRequest->name)[0] ?? '',
            explode(' ', $objRequest->name)[1] ?? '',
            (in_array($objRequest->country, ['SVK', 'CZE'])) ? 47147 : 47146
        );

        flash(__('holiday.thanks'))->success();

        return back();
    }

    public function contact(ContactRequest $objRequest) {
        Mail::to((config('app.env') == 'production') ? 'info@siravapark.com' : 'gabriel@cee-realestate.com')->send(new ContactMail($objRequest));

        flash(__('contact.thanks'))->success();

        return back();
    }
}
