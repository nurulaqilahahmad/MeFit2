<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MembershipPlan;
use App\Models\Trainer;
use App\Models\TrainingSession;
use App\Models\Payment;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function viewMemberIndex() {
        $member = array();
        $membershipPlan = array();
        if(Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
            $membershipPlan = MembershipPlan::get(); 
        }
        return view('member_Index', compact('member', 'membershipPlan'));        
    }

    public function viewTrainingSessionList() {
        $member = array();
        $trainingSession = array();
        if(Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
            $trainingSession = DB::table('training_sessions')->where('trainingSessionName', '!=', null)->get(); 
        }
        return view('member_TrainingSessionList', compact('member', 'trainingSession'));
    }
    
    public function viewMemberSignUp() {
        return view('member_SignUp');
    }

    public function memberCreate (Request $request) {
        $member = new Member();
        $member->memberFullname = request('memberFullname');
        $member->memberEmail = request('memberEmail');
        $member->memberUsername = request('memberUsername');
        $member->memberTelno = request('memberTelno');
        $member->memberPassword = Hash::make($request->memberPassword);
        $member->memberImage = 'assets/img/team/defaultProfilePicture.jfif';
        $registered = $member->save();
        if($registered){
            return redirect('member_SignIn')->with('success', 'You have successfully registered. You can now sign in.');
        }
        else{
            return back()->with('fail', 'Something went wrong. Try again.');
        }
    }

    public function viewMemberSignIn() {
        return view('member_SignIn');
    }

    public function memberSignIn(Request $request) {
        $request->validate([
            'memberEmail' => 'required',
            'memberPassword' => 'required'
        ]);

        $member = Member::where('memberEmail', '=', $request->memberEmail)->first();
        if($member) {
            if(Hash::check($request->memberPassword, $member->memberPassword)){
                $request->session()->put('memberID', $member->memberID);
                return redirect('member_Index');
            }
            else {
                return back()->with('fail', 'Your password is wrong. Try again');
            }
        }
        else {
            return back()->with('fail', 'Your email is wrong. Try again');
        }
    }

    public function viewMemberForgotPassword() {
        return view('member_ForgotPassword');
    }

    public function memberForgotPassword(Request $request) {
        $request->validate([
            'memberEmail' => 'required',
            'newPassword' => 'required'
        ]);

        $member = DB::table('members')->where('memberEmail' , '=', $request->memberEmail)->first;
        if($member) {
            DB::table('members')->where('memberEmail', $request->memberEmail)->update([
                'memberPassword' => Hash::make($request->newPassword)
            ]);
            return redirect('member_SignIn')->with('success', 'You have successfully changed password. You can now sign in.');
        }
        else {
            return back()->with('fail', 'Your email is wrong. Try again.');
        }
    }

    public function memberMembershipPlan(Request $request) {
        DB::table('members')->where('memberID', $request->memberID)->update([
            'membershipPlanID' => $request->membershipPlanID
        ]);

        return redirect('member_Profile')->with('success', 'You have successfully subscribe a plan');
    }

    public function viewMemberProfile() {
        $member = array();
        $membershipPlan = array();
        $schedule = array();
        // $trainingSession = array();
        if(Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
            $membershipPlan = DB::table('membership_plans')->where('membershipPlanID', $member->membershipPlanID)
            ->first();
            $schedule = DB::table('schedules')->where('memberID', '=', Session::get('memberID'))->get();
            // $trainingSession = DB::table('training_sessions')->where('trainingSessionID', $schedule->trainingSessionID)->get();
        }
        return view('member_Profile', compact('member', 'membershipPlan', 'schedule'));        
    }

    public function viewMemberProfileSettings() {
        $member = array();
        $membershipPlan = array();
        if(Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
            $membershipPlan = DB::table('membership_plans')->where('membershipPlanID', '=', $member->membershipPlanID)
            ->get();
        }
        return view('member_ProfileSettings', compact('member', 'membershipPlan'));
    }

    public function editMemberProfile(Request $request) {
        $member = Member::where('memberID', '=', $request->memberID);

        $member->memberFullname = $request->memberFullname;
        $member->memberUsername = $request->memberUsername;
        $member->memberDescription = $request->memberDescription;
        $member->memberTelno = $request->memberTelno;
        $member->memberEmail = $request->memberEmail;

        if($request->hasFile('memberImage')){
            $memberImage = $request->file('memberImage');
            $extention = $memberImage->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $memberImage->move('assets/img/', $filename);
            $member->memberImage = $filename;
        }

        $member->update();

        return redirect('member_Profile')->with('success', 'Your profile has updated');
    }

    public function bookTrainingSession(Request $request) {
        DB::table('members')->where('memberID', $request->memberID)->update([
            'trainingSessionID' => $request->trainingSessionID,
        ]);

        $schedule = new Schedule();
        $schedule->trainingSessionName = $request->trainingSessionName;
        $schedule->trainingSessionStartTime = $request->trainingSessionStartTime;
        $schedule->trainingSessionEndTime = $request->trainingSessionEndTime;
        $schedule->trainingSessionDay = $request->trainingSessionDay;
        $schedule->trainingSessionID = $request->trainingSessionID;
        $schedule->trainerID = $request->trainerID;
        $schedule->memberID = $request->memberID;
        $schedule->save();

        return redirect('member_Profile')->with('success', 'You have successfully booked a training session');
    }

    public function viewTrainerProfile($trainerID) {
        $member = array();
        $trainer = array();
        $trainingSession = array();
        if (Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
            $trainer = Trainer::where('trainerID', '=', $trainerID)->first();
            $trainingSession = DB::table('training_sessions')->where('trainerID', '=', $trainerID)
            ->get();
        }
        return view('member_TrainerProfile', compact('trainer', 'trainingSession', 'member'));
    }

    public function viewMemberSuccessPayment() {
        $member = array();
        if(Session::has('memberID')) {
            $member = Member::where('memberID', '=', Session::get('memberID'))->first();
        }
        return view('member_SuccessPayment', compact('member'));
    }

    public function memberSignOut() {
        if(Session::has('memberID')) {
            Session::pull('memberID');        
            return redirect('member_SignIn');
        }
    }
}
