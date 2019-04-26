@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Activities</div>
                <div class="panel-body">
                  <div style="overflow-x:auto;">
                 <table class="table table-striped">
                   <tr>
                      <th width="15%">Name</th>
                      <th width="20%">Description</th>
                      <th width="15%">Start Date & Start Time</th>
                      <th width="17%">End Date & End Time</th>
                      <th width="12%">Status</th>
                      <th width="12%">Priority</th>
                      <th width= "15%">Details</th>
                   </tr>
                    @foreach ($activities as $act)
                    <tr>
                      <th><strong>{{ $act->name }}</strong></th>
                      <td>{{ $act->objectives }}</td>
                      <td>{{ $act->startdate }} {{ $act->starttime }}</td>
                      <td>{{ $act->enddate }} {{ $act->endtime }}</td>
                      
                      <td> @if ($act->status  == -1)
                            Declined
                        @elseif ($act->status  == 0)
                            Pending
                        @elseif ($act->status  == 1)
                            Submitted
                        @elseif ($act->status  == 2)
                            Pending Adviser Review
                        @elseif ($act->status  == 3)
                            Pending Osas Review
                        @elseif ($act->status  == 4)
                            Pending Academics Review
                        @elseif ($act->status  == 5)
                            Approved
                        @endif</td>
                        
                      <td>@if ($act->priority  == 0)
                            Not Important
                        @elseif ($act->priority  == 1)
                            Normal
                        @elseif ($act->priority  == 2)
                            Important
                        @elseif ($act->priority  == 3)
                            Emergency
                        @endif</td>
                      <td><a href="{{ url('/activity/details/') }}/{{ $act->id }}" class="button btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <a href="./activity/print/{{$act->id}}" class="button btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i></a></td> 
                    </tr>
                    @endforeach
                  </table>
                      {{$activities->links()}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
