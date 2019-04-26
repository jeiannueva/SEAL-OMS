@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-danger">
        <strong>On Alpha Phase!</strong> SMS Sending is now activated but it's still on development phase.
      </div>
      <div class="panel panel-default">
          <div class="panel-heading">Create a new message</div>


          <div class="panel-body">
              <form class="form-horizontal" method="POST" action="{{ route('sms-store') }}">
                <div class="col-md-12">
                  {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary">
                        Submit
                  </button>
                </div>
                <div class="col-md-12">
                  <p> Balance: {{$balance}} </p>
                </div>
                  <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                      <label for="Number" class="col-md-1 control-label">Number</label>

                      <div class="col-md-12">
                          <input id="number" type="telephone" class="form-control" name="number" placeholder="0917xxxxxxx" value="{{ old('number') }}" required autofocus>

                          @if ($errors->has('number'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('number') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                      <label for="Message" class="col-md-1 control-label">Message</label>

                      <div class="col-md-12">
                          <input id="message" type="text" class="form-control" name="message" placeholder="Message" value="{{ old('message') }}" required autofocus>

                          @if ($errors->has('messsage'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('message') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
