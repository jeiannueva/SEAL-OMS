<?php

namespace App;



use Illuminate\Database\Eloquent\Model;



class SMS extends Model

{



  //This is the main model application of the SMS Ststem to be used with Semaphone API v4.

  //API and the sendername is hardcoded on this system and should be put in the .env Soon.



  private $apikey = '(API HERE)';

  private $sendername = '(NAME HERE)';



  public function send($number, $message){

    //This is a working function that sends the message to the API and returns a JSON-REST.

    $ch = curl_init();

    $parameters = array(

        'apikey' => $this->apikey, //Your API KEY

        'number' => $number,

        'message' => $message,

        'sendername' => $this->sendername //Sendername

    );

    curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages' );

    curl_setopt( $ch, CURLOPT_POST, 1 );



    //Send the parameters set above with the request

    curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );



    // Receive response from server

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $output = curl_exec( $ch );

    curl_close ($ch);



    return $output;



  }



  public function account(){

    $ch = curl_init();



    curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/account?apikey='.$this->apikey );

    curl_setopt( $ch, CURLOPT_HEADER, 0 );





    // Receive response from server

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $output = curl_exec( $ch );

    curl_close ($ch);



    return $output;

  }



  public function balance(){

    $ch = curl_init();



    curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/account?apikey='.$this->apikey );

    curl_setopt( $ch, CURLOPT_HEADER, 0 );





    // Receive response from server

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $output = curl_exec( $ch );

    curl_close ($ch);



    $account = json_decode($output);



    return $account->credit_balance;

  }



  public function history(){



    $ch = curl_init();



    curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/account?apikey='.$this->apikey );

    curl_setopt( $ch, CURLOPT_HEADER, 0 );





    // Receive response from server

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $output = curl_exec( $ch );

    curl_close ($ch);



    return $output;

  }



  public function getmessage($id){

    $ch = curl_init();



    curl_setopt( $ch, CURLOPT_URL,'http://api.semaphore.co/api/v4/messages/'.$id.'?apikey='.$this->apikey );

    curl_setopt( $ch, CURLOPT_HEADER, 0 );





    // Receive response from server

    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

    $output = curl_exec( $ch );

    curl_close ($ch);



    return $output;

  }





}

