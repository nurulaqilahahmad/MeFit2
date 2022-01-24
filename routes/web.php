<?php

use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;
use App\Models\Trainer;
use App\Models\TrainingSession;
use App\Models\Member;
use App\Models\MembershipPlan;
use Illuminate\Support\Facades\Crypt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $membershipPlan = array();
    $trainer = Trainer::get();
    $membershipPlan = MembershipPlan::get();
    return view('welcome', compact('membershipPlan', 'trainer'));
});

Route::get('/trainer_Index', [TrainerController::class, 'viewTrainerIndex'])->name('trainer_Index');
Route::get('/trainer_SignIn', [TrainerController::class, 'viewTrainerSignIn'])->name('trainer_SignIn');
Route::post('/trainerSignIn', [TrainerController::class, 'trainerSignIn'])->name('trainerSignIn');
Route::get('/trainer_SignUp', [TrainerController::class, 'viewTrainerSignUp'])->name('trainer_SignUp');
Route::post('/trainerCreate', [TrainerController::class, 'trainerCreate'])->name('trainerCreate');
Route::get('/trainer_ForgotPassword', [TrainerController::class, 'viewTrainerForgotPassword'])->name('trainer_ForgotPassword');
Route::post('/trainerForgotPassword', [TrainerController::class, 'trainerForgotPassword'])->name('trainerForgotPassword');
Route::get('/trainer_Profile', [TrainerController::class, 'viewTrainerProfile'])->name('trainer_Profile');
Route::get('/trainer_ProfileSettings', [TrainerController::class, 'viewTrainerProfileSettings'])->name('trainer_ProfileSettings');
Route::post('/editTrainerProfile', [TrainerController::class, 'editTrainerProfile'])->name('editTrainerProfile');
Route::post('/editTrainingSession', [TrainerController::class, 'editTrainingSession'])->name('editTrainingSession');
Route::get('/trainerSignOut', [TrainerController::class, 'trainerSignOut']);

Route::get('/member_Index', [MemberController::class, 'viewMemberIndex'])->name('member_Index');
Route::get('/member_TrainingSessionList', [MemberController::class, 'viewTrainingSessionList'])->name('member_TrainingSessionList');
Route::get('/member_SignIn', [MemberController::class, 'viewMemberSignIn'])->name('member_SignIn');
Route::post('/memberSignIn', [MemberController::class, 'memberSignIn'])->name('memberSignIn');
Route::get('/member_SignUp', [MemberController::class, 'viewMemberSignUp'])->name('member_SignUp');
Route::post('/memberCreate', [MemberController::class, 'memberCreate'])->name('memberCreate');
Route::get('/member_ForgotPassword', [MemberController::class, 'viewMemberForgotPassword'])->name('member_ForgotPassword');
Route::post('/memberForgotPassword', [MemberController::class, 'memberForgotPassword'])->name('memberForgotPassword');
Route::get('/member_Profile', [MemberController::class, 'viewMemberProfile'])->name('member_Profile');
Route::get('/member_ProfileSettings', [MemberController::class, 'viewMemberProfileSettings'])->name('member_ProfileSettings');
Route::post('/editMemberProfile', [MemberController::class, 'editMemberProfile'])->name('editMemberProfile');
Route::post('/bookTrainingSession', [MemberController::class, 'bookTrainingSession'])->name('bookTrainingSession');
Route::get('/member_TrainerProfile/{trainerID}', [MemberController::class, 'viewTrainerProfile'])->name('member_TrainerProfile/{trainerID}');
Route::get('/memberSignOut', [MemberController::class, 'memberSignOut']);
