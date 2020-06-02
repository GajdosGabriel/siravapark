<?php
namespace App\Classes;

use App\Classes\Vendor\iContactApi;
use Exception;

class iContact extends iContactApi {

    public static function addUser($strEmail, $strName, $strSurname, $intListID = 47146) {
        try {
            iContactApi::getInstance()->setConfig(array(
                'appId'       => env('ICONTACT_APP_ID'),
                'apiPassword' => env('ICONTACT_API_PASSWORD'),
                'apiUsername' => env('ICONTACT_API_USERNAME')
            ));

            $oiContact = iContactApi::getInstance();

            $objContact = $oiContact->addContact($strEmail, 'normal', null, $strName, $strSurname);
            return $oiContact->subscribeContactToList($objContact->contactId, $intListID);
        }
        catch (Exception $e) {
            return $oiContact = iContactApi::getInstance()->getErrors();
        }
    }
}