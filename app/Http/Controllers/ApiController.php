<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;

class ApiController extends Controller
{
  public function index() {
    Log::info("This is a test");
    /*
    $gmgurl = "https://www.gmgsavings.net/gateway/member.cfm";
    $googleurl = "https://www.google.com";

    $url = $gmgurl;

    $headers = ["Content-Type: application/x-www-form-urlencoded"];
    $data = array(
        "CORP_ID" => 1219,
        "AGENT_ID" => 131812,
        "COMPANY" => "WOTC Test Company",
        "FIRST_NAME" => "WOTCFirstname",
        "LAST_NAME" => "WOTCLastname",
        );

    $handle = curl_init();
    curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($handle, CURLOPT_POST, 1);
    curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($handle, CURLOPT_HEADER, 1);
    curl_setopt($handle, CURLINFO_HEADER_OUT, true);

    $response = curl_exec($handle);

    Log::info($response);


    curl_close($handle);
    */


    }


}
