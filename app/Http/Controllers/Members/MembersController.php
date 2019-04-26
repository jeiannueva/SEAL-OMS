<?php

namespace App\Http\Controllers\Members;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Members;
use Carbon\Carbon;
use Alert;

class MembersController extends Controller
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
       $member = new Members;
        return view('members/create')->with('member',$member);
    }


     public function store(Request $request)  {
       $formerrors = false;

       $validator = Validator::make($request->all(), [
         'firstname' => 'required|max:255',
         'lastname' => 'required|max:255',
         'studentnumber' => 'required',
         'email' => 'required|email',
         'course' => 'required',
         'phone' => 'required',
         'birthday' => 'required|date|before:today',
         'house' => 'required',
         'payment' => 'required|min:1',
         'status' => 'required|max:1',
       ]);


       //CREATE A VALIDATOR FOR THE DEVELOPMENT
       $member = new Members;

       $member->firstname =$request->input("firstname");
       $member->lastname =  $request->input("lastname");
       $member->studentnumber =  $request->input("studentnumber");
       $member->email =  $request->input("email");
       $member->course =  $request->input("course");
       $member->phone = $request->input("phone");
       $member->birthday = $request->input("birthday");
       $member->house = $request->input("house");
       $member->payment = $request->input("payment");
       $member->status =  $request->input("status");


       if($validator->fails()){
          echo "<strong>Error!</strong>Not Saved.";
          return redirect()->back()->withErrors($validator)->withInput();
       }else {
          $member->save();
          echo "<strong>Success!</strong>Member Saved.";
          return redirect()->route('members-list');
       }

     }

     public function allmemberlist(){
          $members = Members::orderBy('firstname' , 'asc')->paginate(10);
      return view('members/list')->with('members', $members);
     }

     public function memberlist(){
          $members = Members::orderBy('firstname', 'asc')->where('status','=','2')->paginate(10);
     return view('members/list')->with('members', $members);
     }

     public function searchlist1(Request $request){
          $members = Members::Where('studentnumber', 'LIKE', '%'.$request->input("memsearch").'%')->get();
          return view('members/resultlist')->with('members', $members)->with('count', count($members));
      }

     public function searchlist2(Request $request){
          $members = Members::Where('firstname', 'LIKE', '%'.$request->input("memsearch").'%')->get();
          return view('members/resultlist')->with('members', $members)->with('count', count($members));
      }

      public function searchlist3(Request $request){
           $members = Members::Where('lastname', 'LIKE', '%'.$request->input("memsearch").'%')->get();
           return view('members/resultlist')->with('members', $members)->with('count', count($members));
       }

       public function editmember($member_id){
         $member = Members::find($member_id);
        return view('members/create')->with('member', $member);
       }

       public function update(Request $request){
         $member = Members::findOrFail($request->input("member_id"));


         $validator = Validator::make($request->all(), [
           'firstname' => 'required|max:255',
           'lastname' => 'required|max:255',
           'studentnumber' => 'required',
           'email' => 'required|email',
           'course' => 'required',
           'phone' => 'required',
           'birthday' => 'required|date|before:today',
           'house' => 'required',
           'payment' => 'required|min:1',
           'status' => 'required|max:1',
         ]);

         $member->firstname =$request->input("firstname");
         $member->lastname =  $request->input("lastname");
         $member->studentnumber =  $request->input("studentnumber");
         $member->email =  $request->input("email");
         $member->course =  $request->input("course");
         $member->phone = $request->input("phone");
         $member->birthday = $request->input("birthday");
         $member->house = $request->input("house");
         $member->payment = $request->input("payment");
         $member->status =  $request->input("status");


         if($validator->fails()){
            echo "<strong>Error!</strong>Not Saved.";
            return redirect()->back()->withErrors($validator)->withInput();
         }else {
            $member->save();
            echo "<strong>Success!</strong>Member Saved.";
            return redirect()->route('members-list');
         }

       }

       public function printmember($member_id){

         $member = Members::findOrFail($member_id);
        echo "<h1> Member Details (Beta) </h1>";
        echo "<table> <tr><th> Details </th> <th> Description </th>";
        echo "<tr><td> Firstname : </td>" . "<td>" . $member->firstname . "</td></tr>" ;
        echo   "<tr><td>Lastname :</td>" . "<td>" .$member->lastname. "</td></tr>" ;
        echo "<tr><td>Studentnumber :</td>". "<td>" .$member->studentnumber. "</td></tr>" ;
        echo "<tr><td>Email :</td>" . "<td>" .$member->email. "</td></tr>" ;
        echo "<tr><td>Course :</td>" . "<td>" .$member->course. "</td></tr>" ;
        echo "<tr><td>Phone :</td>" . "<td>" .$member->phone. "</td></tr>" ;
        echo   "<tr><td>Birthday :</td>" . "<td>" .$member->birthday. "</td></tr>";
        echo    "<tr><td>House :</td>" . "<td>" .$member->house. "</td></tr>" ;
        echo  "<tr><td>Payment :</td>" . "<td>" .$member->payment. "</td></tr>";
        echo "<tr><td>Status :</td>" . "<td>" . $member->status. "</td></tr> </table>" ;
       }

       //Add data validator to the system

       // public function search( Request $request){
       //   if($request->ajax()){
       //     $members = Members::Where('firstname', 'LIKE', '%'.$request->input("memsearch").'%')->get();
       //   }
       //
       //   if($member) {
       //     foreach ($members as $product) {
       //       $output.=''
       //     }
       //   }
       // }


}
