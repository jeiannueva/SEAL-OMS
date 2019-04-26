@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Membership Form</div>
                <div class="panel-body">
										@if(isset($member->id))
									   <form class="form-horizontal" method="POST" action="{{ route('member-update') }}">
											 						<div class="col-md-11">
																						<button type="submit" class="btn btn-primary">
																								Update
																						 </button>
																					<a href="../print/{{$member->id}}" class="button btn btn-primary">Print</a>
                                          <input type="hidden" name="member_id" value="{{$member->id}}">
											 						</div>
										@else
									   <form class="form-horizontal" method="POST" action="{{ route('members-store') }}">
											  <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Submit
															</button>
													</div>
											 </div>
										@endif

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="FirstName" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="firstname" placeholder="Juan" value="{{ old('name',$member->firstname) }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											   <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="LastName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="lastname" placeholder="Dela Cruz" value="{{ old('name',$member->lastname) }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											 <div class="form-group{{ $errors->has('studentnumber') ? ' has-error' : '' }}">
                            <label for="StudentNumber" class="col-md-4 control-label">Student Number</label>

                            <div class="col-md-6">
                                <input id="studentnumber" type="text" class="form-control" name="studentnumber" placeholder="2017-xxxx" value="{{ old('name',$member->studentnumber) }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="Email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="name@iacademy.edu.ph" value="{{ old('name',$member->email) }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											 <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="Course" class="col-md-4 control-label">Course</label>

                            <div class="col-md-6">
                                <input id="course" type="name" class="form-control" name="course" placeholder="BSCS-SE" value="{{ old('name',$member->course) }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


											 <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="Phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="tel" class="form-control" name="phone" placeholder="0917xxxxxxxx" value="{{ old('name',$member->phone) }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


											 <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('name',$member->birthday) }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											 <div class="form-group{{ $errors->has('house') ? ' has-error' : '' }}">
                            <label for="house" class="col-md-4 control-label">House</label>

                            <div class="col-md-6">
                                <input id="house" type="name" class="form-control" name="house" placeholder="NONE" value="{{ old('name',$member->house) }}" required autofocus>

                                @if ($errors->has('house'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('house') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											 <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                            <label for="payment" class="col-md-4 control-label">Payment</label>
                            <div class="col-md-6">
                                <input id="payment" type="number" class="form-control" name="payment" placeholder="0 or 1" value="{{ old('name',$member->payment) }}" required autofocus>

                                @if ($errors->has('payment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											 <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

												 <div class="col-md-6">
                                <select id="status" type="number" class="form-control" name="status" value="{{ old('status',$member->status) }}" required autofocus>
																	<option value="0"
																					@if ($member->status == 0)
																						selected
																					@endif
																		>Prospect</option>
																	<option value="1"
																					@if ($member->status == 1)
																						selected
																					@endif
																		>inActive-Member</option>
																	<option value="2"
																					@if ($member->status == 2)
																						selected
																					@endif
																		>Active</option>
																	<option value="3"
																					@if ($member->status == 3)
																						selected
																					@endif
																		>Alumni</option>
															</select>
                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
