<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Models\TrainingSession;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TrainerController extends Controller
{
    public function viewTrainerIndex()
    {
        $trainer = array();
        $trainingSession = array();
        if (Session::has('trainerID')) {
            $trainer = Trainer::where('trainerID', '=', Session::get('trainerID'))->first();
            $trainingSession = TrainingSession::where('trainerID', '=', Session::get('trainerID'))->get();
        }
        return view('trainer_Index', compact('trainer', 'trainingSession'));
    }

    public function viewTrainerSignUp()
    {
        return view('trainer_SignUp');
    }

    public function trainerCreate(Request $request)
    {
        $trainer = new Trainer();
        $trainingSession = new TrainingSession();
        $trainer->trainerFullname = request('trainerFullname');
        $trainer->trainerEmail = request('trainerEmail');
        $trainer->trainerUsername = request('trainerUsername');
        $trainer->trainerTelno = request('trainerTelno');
        $trainer->trainerPassword = Hash::make($request->trainerPassword);
        $trainer->trainerImage = 'assets/img/team/defaultProfilePicture.jfif';
        $registered = $trainer->save();
        $trainingSession->trainerID = $trainer->trainerID;
        $trainingSession->trainerFullname = request('trainerFullname');
        $trainingSession->trainerTelno = request('trainerTelno');
        $registered2 = $trainingSession->save();
        if ($registered && $registered2) {
            return redirect('trainer_SignIn')->with('success', 'You have successfully registered. You can now sign in.');
        } else {
            return back()->with('fail', 'Something went wrong. Try again.');
        }
    }

    public function viewTrainerSignIn()
    {
        return view('trainer_SignIn');
    }

    public function trainerSignIn(Request $request)
    {
        $request->validate([
            'trainerEmail' => 'required',
            'trainerPassword' => 'required'
        ]);

        $trainer = Trainer::where('trainerEmail', '=', $request->trainerEmail)->first();
        if ($trainer) {
            if (Hash::check($request->trainerPassword, $trainer->trainerPassword)) {
                $request->session()->put('trainerID', $trainer->trainerID);
                return redirect('trainer_Index');
            } else {
                return back()->with('fail', 'Your password is wrong. Try again');
            }
        } else {
            return back()->with('fail', 'Your email is wrong. Try again');
        }
    }

    public function viewTrainerForgotPassword()
    {
        return view('trainer_ForgotPassword');
    }

    public function trainerForgotPassword(Request $request)
    {
        $request->validate([
            'trainerEmail' => 'required',
            'newPassword' => 'required'
        ]);

        $trainer = Trainer::where('trainerEmail', '=', $request->trainerEmail)->first();
        if ($trainer) {
            $trainer->trainerPassword = Hash::make($request->newPassword);
            $trainer->update();
            return redirect('trainer_SignIn')->with('success', 'You have successfully changed password. You can now sign in.');
        } else {
            return back()->with('fail', 'Your email is wrong. Try again.');
        }
    }

    public function viewTrainerProfile()
    {
        $trainer = array();
        $trainingSession = array();
        if (Session::has('trainerID')) {
            $trainer = Trainer::where('trainerID', '=', Session::get('trainerID'))->first();
            $trainingSession = DB::table('training_sessions')->where('trainerID', '=', Session::get('trainerID'))
                ->get();
        }
        return view('trainer_Profile', compact('trainer', 'trainingSession'));
    }

    public function viewTrainerProfileSettings()
    {
        $trainer = array();
        $trainingSession = array();
        if (Session::has('trainerID')) {
            $trainer = Trainer::where('trainerID', '=', Session::get('trainerID'))->first();
            $trainingSession = DB::table('training_sessions')->where('trainerID', '=', Session::get('trainerID'))
                ->get();
        }
        return view('trainer_ProfileSettings', compact('trainer', 'trainingSession'));
    }

    public function editTrainerProfile(Request $request)
    {
        $trainer = Trainer::find($request->trainerID);
        $trainingSession = TrainingSession::find($request->trainerID);
        $schedule = Schedule::find($request->trainerID);

        $trainer->trainerFullname = $request->trainerFullname;
        $trainer->trainerUsername = $request->trainerUsername;
        $trainer->trainerDescription = $request->trainerDescription;
        $trainer->trainerTelno = $request->trainerTelno;
        $trainer->trainerEmail = $request->trainerEmail;
        $trainingSession->trainerFullname = $request->trainerFullname;
        $trainingSession->trainerTelno = $request->trainerTelno;
        $schedule->trainerFullname = $request->trainerFullname;

        if($request->hasFile('trainerImage'))
        {
            $trainerImage = $request->file('trainerImage');
            $extention = $trainerImage->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $trainerImage->move('assets/img/', $filename);
            $trainer->trainerImage = $filename;
        }

        $trainer->update();
        $trainingSession->update();
        $schedule->update();

        return redirect('trainer_Profile')->with('success', 'Your profile has updated');
    }

    public function addTrainingSession() {}

    public function editTrainingSession(Request $request)
    {
        DB::table('training_sessions')->where('trainerID', $request->trainerID)->update([
            'trainingSessionName' => $request->trainingSessionName,
            'trainingSessionDescription' => $request->trainingSessionDescription,
            'trainingSessionStartTime' => $request->trainingSessionStartTime,
            'trainingSessionEndTime' => $request->trainingSessionEndTime,
            'trainingSessionDay' => $request->trainingSessionDay,
            'trainingSessionCost' => $request->trainingSessionCost,
        ]);
        
        $schedule = Schedule::find($request->trainerID);
        $schedule->trainingSessionName = $request->trainingSessionName;
        $schedule->trainingSessionStartTime = $request->trainingSessionStartTime;
        $schedule->trainingSessionEndTime = $request->trainingSessionEndTime;
        $schedule->trainingSessionDay = $request->trainingSessionDay;
        $schedule->update();

        return redirect('trainer_Profile')->with('success', 'Your training session has updated');
    }

    public function trainerSignOut()
    {
        if (Session::has('trainerID')) {
            Session::pull('trainerID');
            return redirect('trainer_SignIn');
        }
    }
}
