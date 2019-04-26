<?php

namespace App\Http\Controllers\SMS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\SMS;
use Carbon\Carbon;
use Alert;

class SMSController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sms = new SMS();
        return view('sms/create')->with('balance',$sms->balance());
    }

    public function send(Request $request)
    {
      $sms = new SMS();

      $number = $request->input("number");
      $message = $request->input("message");
      $output = $sms->send($number, $message);
      $output2 = $sms->balance();
      echo "<p>" . $output ."</p>";
      echo "<p>" . $output2 ."</p>";
    }

    public function showprofile(){
      $sms = new SMS();
      $output = $sms->account();
      $profile = json_decode($output);

      // $account['account_id'] = $outputJSON->{'account_id'};
      // $account['account_name'] = $outputJSON->{'account_name'};
      // $account['status'] = $outputJSON->{'status'};
      // $account['credit_balance'] = $outputJSON->{'credit_balance'};
     return view('sms/profile')->with('profile',$profile);
    }

    public function apibalance(){
      $sms = new SMS();
      $output = $sms->balance();

      echo $output;
    }

}
