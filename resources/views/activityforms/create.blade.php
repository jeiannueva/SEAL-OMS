@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Activity Form</div>
                <div class="panel-body">
										@if(isset($act->id))
                    <div class="col-md-2">
                    <form method="post" action="{{ route('activity-delete') }}">
                      <input type="hidden" name="activity_id" value="{{$act->id}}">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                    </div>

									   <form class="form-horizontal" method="POST" action="{{ route('activity-update') }}">
                       <div class="col-md-10">
                                 <button type="submit" class="btn btn-primary">
                                     Update
                                  </button>
                               <a href="../print/{{$act->id}}" class="button btn btn-primary">Print</a>
                       </div>
										 <input type="hidden" name="activity_id" value="{{$act->id}}">
										@else
									   <form class="form-horizontal" method="POST" action="{{ route('activity-store') }}">
											  <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Submit
															</button>
													</div>
											 </div>
										@endif

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name',$act->name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('objectives') ? ' has-error' : '' }}">
                            <label for="objectives" class="col-md-4 control-label">Objectives</label>

                            <div class="col-md-6">
                                <input id="objectives" type="text" class="form-control" name="objectives" value="{{ old('objectives',$act->objectives) }}" required autofocus>

                                @if ($errors->has('objectives'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objectives') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
                            <label for="startdate" class="col-md-4 control-label">Start Date</label>

                            <div class="col-md-6">
                                <input id="startdate" type="date" class="form-control" name="startdate" value="{{ old('startdate',$act->startdate) }}" required autofocus>

                                @if ($errors->has('startdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('startdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
                            <label for="enddate" class="col-md-4 control-label">End Date</label>

                            <div class="col-md-6">
                                <input id="enddate" type="date" class="form-control" name="enddate" value="{{ old('enddate',$act->enddate) }}" required autofocus>

                                @if ($errors->has('enddate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('enddate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('starttime') ? ' has-error' : '' }}">
                            <label for="starttime" class="col-md-4 control-label">Start Time</label>

                            <div class="col-md-6">
                                <input id="starttime" type="time" class="form-control" name="starttime" value="{{ old('starttime',$act->starttime) }}" required autofocus>

                                @if ($errors->has('starttime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('starttime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('endtime') ? ' has-error' : '' }}">
                            <label for="endtime" class="col-md-4 control-label">End Time</label>

                            <div class="col-md-6">
                                <input id="endtime" type="time" class="form-control" name="endtime" value="{{ old('endtime',$act->endtime) }}" required autofocus>

                                @if ($errors->has('endtime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endtime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('room') ? ' has-error' : '' }}">
                            <label for="room" class="col-md-4 control-label">Room</label>

                            <div class="col-md-6">
                                <input id="room" type="text" class="form-control" name="room" value="{{ old('room', $act->room )}}" required autofocus>

                                @if ($errors->has('roon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('room') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('contactperson') ? ' has-error' : '' }}">
                            <label for="contactperson" class="col-md-4 control-label">Contact Person</label>

                            <div class="col-md-6">
                                <input id="contactperson" type="text" class="form-control" name="contactperson" value="{{ old('contactperson',$act->contactperson) }}" required autofocus>

                                @if ($errors->has('contactperson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactperson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('contactnumber') ? ' has-error' : '' }}">
                            <label for="contactnumber" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input id="contactnumber" type="number" class="form-control" name="contactnumber" value="{{ old('contactnumber',$act->contactnumber) }}" required autofocus>

                                @if ($errors->has('contactnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('contactnumber') ? ' has-error' : '' }}">
                            <label for="participants" class="col-md-4 control-label">No. of Participants</label>

                            <div class="col-md-6">
                                <input id="participants" type="number" class="form-control" name="participants" value="{{ old('participants',$act->participants) }}" min="0" required autofocus>

                                @if ($errors->has('participants'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('participants') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



											<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select id="status" type="number" class="form-control" name="status" value="{{ old('status', $act->status) }}" required autofocus>
																	<option value="0"
																					@if ($act->status == 0)
																						selected
																					@endif
																					> Pending</option>
																	<option value="-1"
																					@if ($act->status == -1)
																						selected
																					@endif
																		> Declined</option>
																	<option value="1"
																					@if ($act->status == 1)
																						selected
																					@endif
																		>Submitted</option>
																	<option value="2"
																					@if ($act->status == 2)
																						selected
																					@endif
																		>Pending Adviser Review</option>
																	<option value="3"
																					@if ($act->status == 3)
																						selected
																					@endif
																		>Pending OSAS Review</option>
																	<option value="4"
																					@if ($act->status == 4)
																						selected
																					@endif
																		>Pending Academics Review</option>
																	<option value="5"
																					@if ($act->status == 5)
																						selected
																					@endif
																		>Approved</option>
															</select>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

											<div class="form-group{{ $errors->has('priority') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Priority</label>

                            <div class="col-md-6">
                                <select id="priority" type="number" class="form-control" name="priority" value="{{ old('priority', $act->priority) }}" required autofocus>
																	<option value="0"
																					@if ($act->priority == 0)
																						selected
																					@endif
																		>Not Important</option>
																	<option value="1"
																					@if ($act->priority == 1)
																						selected
																					@endif
																		>Normal</option>
																	<option value="2"
																					@if ($act->priority == 2)
																						selected
																					@endif
																		>Important</option>
																	<option value="3"
																					@if ($act->priority == 3)
																						selected
																					@endif
																		>Emergency</option>
															</select>
                                @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('priority') }}</strong>
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
@endsection
