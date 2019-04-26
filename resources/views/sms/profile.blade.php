@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
          <div class="panel-heading">Account Details</div>
          <div class="panel-body">
            <h1> Semaphore Account Information </h1>
            <hr>
            <p> Account ID: {{$profile->account_id}} </p>
            <p> Account Name: {{$profile->account_name}} </p>
            <p> Status: {{$profile->status}} </p>
            <p> Credit-Balance: {{$profile->credit_balance}}</p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
