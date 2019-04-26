@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
          <div class="panel-heading">Search ID</div>
          <div class="panel-body">
            <div class="panel-body">
              <form action="{{ route('msearch') }}" method="post">
                <div class="input-group">
                  <input class="form-control" name="memsearch" id="memsearch" type="text">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary"> SEARCH </button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    <div class="col-md-4">
      <div class="panel panel-default">
          <div class="panel-heading">Search firstname</div>
          <div class="panel-body">
            <div class="panel-body">
                <form action="{{route('mmsearch')}}" method="post">
                  <div class="input-group">
                  {{ csrf_field() }}
                  <input class="form-control" name="memsearch" id="memsearch" type="text">
                  <button type="submit" class="btn btn-primary"> SEARCH </button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Search Lastname</div>
            <div class="panel-body">
              <div class="panel-body">
                <form action="{{route('search3')}}" method="post">
                      <div class="input-group">
                    {{ csrf_field() }}
                    <input  class="form-control"name="memsearch" id="memsearch" type="text">
                      <button type="submit" class="btn btn-primary"> SEARCH </button>
                  </div>
               </form>
              </div>
            </div>
          </div>
        </div>
    </div>

@if($count < 1)
<div class="alert alert-warning">
  <strong>Search Complete!</strong> No members found;
</div>
@else
<div class="alert alert-info">
  <strong>Search Complete!</strong> Results shows {{$count}} members;
</div>
@endif


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Result List</div>
                <div class="panel-body">
                  <div style="overflow-x:auto;">
                 <table class="table table-striped">
                   <tr>
                     <th width="12%">Member No.</th>
                      <th width="15%">Student Number</th>
                      <th width="15%">First Name</th>
                      <th width="15%">Last Name</th>
                      <th width="17%">Email</th>
                      <th width="12%">Status</th>
                      <th width= "15%">Details</th>
                   </tr>
                    @foreach ($members as $member)
                    <tr>
                      <td>{{ $member->id}}</td>
                      <th><strong>{{ $member->studentnumber }}</strong></th>
                      <td>{{ $member->firstname }}</td>
                      <td>{{ $member->lastname }}</td>
                      <td>{{ $member->email }} </td>
                        <td>
                          @if ($member->status  == -1)
                              Prospect
                          @elseif ($member->status  == 1)
                              inActive-Member
                          @elseif ($member->status  == 2)
                              Active
                          @elseif ($member->status  == 3)
                              Alumni
                          @endif
                      </td>
                      <td>
                        <a class="btn btn-primary" href="../member/details/{{$member->id}}"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a class="btn btn-primary" href="../member/print/{{$member->id}}"> <i class="fa fa-print" aria-hidden="true"></i> </a>
                      </tr>
                    @endforeach
                  </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
