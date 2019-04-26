<?php

namespace App\Http\Controllers\ActivityManager;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Activity;
use Carbon\Carbon;
use Alert;

class ActivityController extends Controller
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
       $act = new Activity;
        return view('activityforms/create')->with('act',$act);
    }


     public function store(Request $request)
    {

      $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'objectives' => 'required|min:10',
        'startdate' => 'required|date|after:strtotime("now")',
        'enddate' => 'required|date|after:strtotime("yesterday")',
        'starttime' => 'required',
        'endtime' => 'required',
        'contactperson' => 'required',
        'contactnumber' => 'required|numeric',
        'participants' => 'required|min:0|max:200',
        'room' => 'required|max:10',
        'status' => 'required|numeric|min:0|max:5',
        'priority' => 'required|numeric|min:-1|max:4',
      ]);


        $act = new Activity;

       $act->name = $request->input("name");
       $act->objectives = $request->input("objectives");
       $act->startdate = $request->input("startdate");
       $act->enddate = $request->input("enddate");
       $act->starttime = $request->input("starttime");
       $act->endtime = $request->input("endtime");
       $act->contactperson = $request->input("contactperson");
       $act->contactnumber = $request->input("contactnumber");
       $act->participants = $request->input("participants");
       $act->room = $request->input("room");
       $act->status = $request->input("status");
       $act->priority = $request->input("priority");
       $act->creator_id = Auth::user()->id;

       if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput();
       }else {
       $act->save();
       return redirect()->route('activity-list');
       }
}


  public function pastactivity(){
      $act = Activity::orderBy('startdate', 'desc')->whereDate('enddate', '<', Carbon::today()->toDateString())->paginate(5);
    return view('activityforms/displaylist')->with('activities', $act);
  }

  public function activities(){
     $act = Activity::orderBy('startdate', 'asc')->whereDate('enddate', '>=', Carbon::today()->toDateString())->paginate(5);
    return view('activityforms/displaylist')->with('activities', $act);
  }


  public function editform($activity_id){
     $act = Activity::findOrFail($activity_id);
        //alert()->message('Message', 'Optional Title');
    return view('activityforms/create')->with('act',$act);
  }

  public function delete(Request $request){
    $act = Activity::findOrFail($request->activity_id)->delete();
    $act = Activity::orderBy('startdate', 'asc')->whereDate('enddate', '>=', Carbon::today()->toDateString())->paginate(5);
    return view('activityforms/displaylist')->with('activities', $act);
  }

  public function update(Request $request){


    $act = Activity::findOrFail($request->activity_id);

    $validator = Validator::make($request->all(), [
      'name' => 'required|max:255',
      'objectives' => 'required|min:10',
      'startdate' => 'required|date|after:strtotime("now")',
      'enddate' => 'required|date|after:strtotime("yesterday")',
      'starttime' => 'required',
      'endtime' => 'required',
      'contactperson' => 'required',
      'contactnumber' => 'required|numeric',
      'participants' => 'required|min:0|max:200',
      'room' => 'required|max:10',
      'status' => 'required|numeric|min:0|max:5',
      'priority' => 'required|numeric|min:-1|max:4',
    ]);


       $act->name = $request->input("name");
       $act->objectives = $request->input("objectives");
       $act->startdate = $request->input("startdate");
       $act->enddate = $request->input("enddate");
       $act->starttime = $request->input("starttime");
       $act->endtime = $request->input("endtime");
       $act->contactperson = $request->input("contactperson");
       $act->contactnumber = $request->input("contactnumber");
       $act->participants = $request->input("participants");
       $act->room = $request->input("room");
       $act->status = $request->input("status");
       $act->priority = $request->input("priority");
       $act->creator_id = Auth::user()->id;

      // This validator is working but the error is not showing when updating

       if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput();
       }else {
       $act->save();
       return redirect()->route('activity-list');
       }
  }


 public function pprint($activity_id){
   $act = Activity::findOrFail($activity_id);
         //alert()->message('Message', 'Optional Title');
     return view('activityforms/print')->with('act',$act);
   }




}
