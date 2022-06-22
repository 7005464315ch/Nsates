<?php

use Illuminate\Support\Facades\Route;

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
    return view('nsates');
});

// Staff File authstaff
Route::get('/stafflogin', 'App\Http\Controllers\staff\staffloginController@stafflogin');
Route::post('/stafflog', 'App\Http\Controllers\staff\staffloginController@stafflog');
Route::get('/staffdesh', 'App\Http\Controllers\staff\staffdeshController@staffdesh')->Middleware('authstaff');
Route::get('/staffprofile', 'App\Http\Controllers\staff\staffprofileController@staffprofile')->Middleware('authstaff');
Route::get('/sfstuenty', 'App\Http\Controllers\staff\sfstuentyController@sfstuenty')->Middleware('authstaff');
Route::get('/stfdeshbord', 'App\Http\Controllers\staff\stfdeshbordController@stfdeshbord')->Middleware('authstaff');
Route::get('/sfreport', 'App\Http\Controllers\staff\sfreportController@sfreport')->Middleware('authstaff');

Route::get('/staffdeshbord', 'App\Http\Controllers\staff\staffdeshbordController@staffdeshbord')->Middleware('authstaff');
Route::get('/staffstudenten', 'App\Http\Controllers\staff\staffstudentenController@staffstudenten')->Middleware('authstaff');
Route::get('/sstudentenare', 'App\Http\Controllers\staff\staffstudentenController@sstudentenare')->Middleware('authstaff');
Route::post('/sstudenten', 'App\Http\Controllers\staff\staffstudentenController@sstudenten');
Route::get('/staffstofentry', 'App\Http\Controllers\staff\staffstofentryController@staffstofentry')->Middleware('authstaff');
Route::get('/sstaffen', 'App\Http\Controllers\staff\staffstofentryController@sstaffen')->Middleware('authstaff');
Route::post('/sstaffonenx', 'App\Http\Controllers\staff\staffstofentryController@sstaffonenx');

Route::get('/staffguesten', 'App\Http\Controllers\staff\staffguestenController@staffguesten')->Middleware('authstaff');
Route::post('/staffgueston', 'App\Http\Controllers\staff\staffguestenController@staffgueston');
Route::get('/staffvehicalen', 'App\Http\Controllers\staff\staffvehicalenController@staffvehicalen')->Middleware('authstaff');
Route::post('/staffvehicalon', 'App\Http\Controllers\staff\staffvehicalenController@staffvehicalon');
Route::get('/staffreport', 'App\Http\Controllers\staff\staffreportController@staffreport')->Middleware('authstaff');
Route::get('/showrep', 'App\Http\Controllers\staff\staffreportController@showrep')->Middleware('authstaff');
Route::get('/staffsetting', 'App\Http\Controllers\staff\staffsettingController@staffsetting')->Middleware('authstaff');
Route::get('/staffhelpnreview', 'App\Http\Controllers\staff\staffhelpnreviewController@staffhelpnreview')->Middleware('authstaff');
Route::get('/staffhcenter', 'App\Http\Controllers\staff\staffhcenterController@staffhcenter')->Middleware('authstaff');
Route::post('/staffhelp', 'App\Http\Controllers\staff\staffhcenterController@staffhelp');

Route::get('/staffhreport', 'App\Http\Controllers\staff\staffhreportController@staffhreport')->Middleware('authstaff');
Route::post('/staffofencode', 'App\Http\Controllers\staff\staffhreportController@staffofencode');
Route::post('/staffofendate', 'App\Http\Controllers\staff\staffhreportController@staffofendate');

Route::get('/staffinbox', 'App\Http\Controllers\staff\staffinboxController@staffinbox')->Middleware('authstaff');
Route::post('/staffoafencode', 'App\Http\Controllers\staff\staffinboxController@staffoafencode');
Route::post('/staffoafendate', 'App\Http\Controllers\staff\staffinboxController@staffoafendate');

Route::get('/stafflogout', 'App\Http\Controllers\staff\stafflogoutController@stafflogout');




// Student File
Route::get('/studentlog', 'App\Http\Controllers\student\studentlogController@studentlog');
Route::post('/studentlogin','App\Http\Controllers\student\studentlogController@studentlogin');
Route::get('/studesh', 'App\Http\Controllers\student\studeshController@studesh')->Middleware('authstudent');
Route::get('/studentprofile', 'App\Http\Controllers\student\studentprofileController@studentprofile')->Middleware('authstudent');
Route::get('/studentdeshbord', 'App\Http\Controllers\student\studentdeshbordController@studentdeshbord')->Middleware('authstudent');
Route::get('/studententry', 'App\Http\Controllers\student\studententryController@studententry')->Middleware('authstudent');
Route::post('/studenters', 'App\Http\Controllers\student\studententryController@studenters');
Route::get('/studentreport', 'App\Http\Controllers\student\studentreportController@studentreport')->Middleware('authstudent');

Route::get('/studentmessage', 'App\Http\Controllers\student\studentmessageController@studentmessage')->Middleware('authstudent');

Route::get('/studentinbox', 'App\Http\Controllers\student\studentinboxController@studentinbox')->Middleware('authstudent');
Route::post('/studiofencode', 'App\Http\Controllers\student\studentinboxController@studiofencode');
Route::post('/studiofendate', 'App\Http\Controllers\student\studentinboxController@studiofendate');

Route::get('/studenthreport', 'App\Http\Controllers\student\studenthreportController@studenthreport')->Middleware('authstudent');
Route::post('/viewstemesscode', 'App\Http\Controllers\student\studenthreportController@viewstemesscode');
Route::post('/viewstemessdate', 'App\Http\Controllers\student\studenthreportController@viewstemessdate');

Route::get('/studenthcenter', 'App\Http\Controllers\student\studenthcenterController@studenthcenter')->Middleware('authstudent');
Route::post('/studenthelpenx', 'App\Http\Controllers\student\studenthcenterController@studenthelpenx');



Route::get('/studentsetting', 'App\Http\Controllers\student\studentsettingController@studentsetting')->Middleware('authstudent');
Route::get('/stulogout', 'App\Http\Controllers\student\stulogoutController@stulogout');



// fastAdmin file//
Route::get('/123.124.16.1', 'App\Http\Controllers\fastadmin\fastadminlogController@fastadminlog');
Route::post('/fastassetlog', 'App\Http\Controllers\fastadmin\fastadminlogController@fastassetlog');

Route::get('/fastsdlog', 'App\Http\Controllers\admin\fastsdlogController@fastsdlog')->Middleware('authfast');
Route::get('/fastadmin', 'App\Http\Controllers\fastadmin\fastadminController@fastadmin')->Middleware('authfast');

Route::get('/studentfen', 'App\Http\Controllers\fastadmin\studentfenController@studentfen')->Middleware('authfast');
Route::get('/sstudentsec', 'App\Http\Controllers\fastadmin\studentfenController@sstudentsec')->Middleware('authfast');
Route::post('/fstudenten', 'App\Http\Controllers\fastadmin\studentfenController@fstudenten');

Route::get('/faststaffentry', 'App\Http\Controllers\fastadmin\faststaffentryController@faststaffentry')->Middleware('authfast');
Route::get('/faststaffen', 'App\Http\Controllers\fastadmin\faststaffentryController@faststaffen')->Middleware('authfast');
Route::post('/faststaffonenx', 'App\Http\Controllers\fastadmin\faststaffentryController@faststaffonenx');

// fastguestentry
Route::get('/fastguestentry', 'App\Http\Controllers\fastadmin\fastguestentryController@fastguestentry')->Middleware('authfast');
Route::post('/fastguesten', 'App\Http\Controllers\fastadmin\fastguestentryController@fastguesten');

// fastvehicalentry
Route::get('/fastvehicalentry', 'App\Http\Controllers\fastadmin\fastvehicalentryController@fastvehicalentry')->Middleware('authfast');
Route::post('/fastvehicalon', 'App\Http\Controllers\fastadmin\fastvehicalentryController@fastvehicalon');

Route::get('/faststudentrt', 'App\Http\Controllers\fastadmin\faststudentrtController@faststudentrt')->Middleware('authfast');
Route::post('/viewstuecode', 'App\Http\Controllers\fastadmin\faststudentrtController@viewstuecode');
Route::post('/viewstuedate', 'App\Http\Controllers\fastadmin\faststudentrtController@viewstuedate');

Route::get('/faststaffrt', 'App\Http\Controllers\fastadmin\faststaffrtController@faststaffrt')->Middleware('authfast');
Route::post('/viewstaffcode', 'App\Http\Controllers\fastadmin\faststaffrtController@viewstaffcode');
Route::post('/viewstaffdate', 'App\Http\Controllers\fastadmin\faststaffrtController@viewstaffdate');

Route::get('/faststuenrt', 'App\Http\Controllers\fastadmin\faststuenrtController@faststuenrt')->Middleware('authfast');
Route::post('/viewsuencode', 'App\Http\Controllers\fastadmin\faststuenrtController@viewsuencode');
Route::post('/viewsuendate', 'App\Http\Controllers\fastadmin\faststuenrtController@viewsuendate');

Route::get('/faststenrt', 'App\Http\Controllers\fastadmin\faststenrtController@faststenrt')->Middleware('authfast');
Route::post('/viewstencode', 'App\Http\Controllers\fastadmin\faststenrtController@viewstencode');
Route::post('/viewstendate', 'App\Http\Controllers\fastadmin\faststenrtController@viewstendate');


Route::get('/fastguestrt', 'App\Http\Controllers\fastadmin\fastguestrtController@fastguestrt')->Middleware('authfast');
Route::post('/viewencode', 'App\Http\Controllers\fastadmin\fastguestrtController@viewencode');
Route::post('/viewendate', 'App\Http\Controllers\fastadmin\fastguestrtController@viewendate');

Route::get('/fastvehirt', 'App\Http\Controllers\fastadmin\fastvehirtController@fastvehirt')->Middleware('authfast');
Route::post('/viewvencode', 'App\Http\Controllers\fastadmin\fastvehirtController@viewvencode');
Route::post('/viewvendate', 'App\Http\Controllers\fastadmin\fastvehirtController@viewvendate');

Route::get('/studentreg', 'App\Http\Controllers\fastadmin\studentregController@studentreg')->Middleware('authfast');
Route::post('/studentadreg', 'App\Http\Controllers\fastadmin\studentregController@studentadreg');

Route::post('/studentregs', 'App\Http\Controllers\admin\studentregController@studentregs');
Route::get('/staffreg', 'App\Http\Controllers\fastadmin\staffregController@staffreg')->Middleware('authfast');
Route::post('/staffregs', 'App\Http\Controllers\fastadmin\staffregController@staffregs');


Route::get('/studenmessage', 'App\Http\Controllers\fastadmin\studenmessageController@studenmessage')->Middleware('authfast');
// Route::get('/staffreg', 'App\Http\Controllers\fastadmin\studenmessageController@staffreg');

Route::get('/studmessage', 'App\Http\Controllers\fastadmin\studmessageController@studmessage')->Middleware('authfast');
// Route::get('/staffreg', 'App\Http\Controllers\fastadmin\studmessageController@staffreg');
// Route::get('/staffreg', 'App\Http\Controllers\fastadmin\studmessageController@staffreg');

Route::get('/staffenmessage', 'App\Http\Controllers\fastadmin\staffenmessageController@staffenmessage')->Middleware('authfast');
// Route::get('/staffreg', 'App\Http\Controllers\fastadmin\staffenmessageController@staffreg');

Route::get('/staffmessage', 'App\Http\Controllers\fastadmin\staffmessageController@staffmessage')->Middleware('authfast');
Route::post('/viewfasmesscode', 'App\Http\Controllers\fastadmin\staffmessageController@viewfasmesscode');
Route::post('/viewfasmessdate', 'App\Http\Controllers\fastadmin\staffmessageController@viewfasmessdate');

Route::get('/fastsingout', 'App\Http\Controllers\fastadmin\fastsingoutController@fastsingout');





// CAdmin file//
Route::get('/123.123.01.16', 'App\Http\Controllers\admin\cadminlogController@cadminlog');
Route::post('/cadassetlog', 'App\Http\Controllers\admin\cadminlogController@cadassetlog');

Route::get('/cadmin', 'App\Http\Controllers\admin\cadminController@cadmin')->Middleware('authcadmin');
Route::get('/caddeshbord', 'App\Http\Controllers\admin\caddeshbordController@caddeshbord')->Middleware('authcadmin');
Route::get('/studentregad', 'App\Http\Controllers\admin\studentregadController@studentregad')->Middleware('authcadmin');
Route::post('/studentad', 'App\Http\Controllers\admin\studentregadController@studentad');
Route::get('/staffregad', 'App\Http\Controllers\admin\staffregadController@staffregad')->Middleware('authcadmin');
Route::post('/staffad', 'App\Http\Controllers\admin\staffregadController@staffad');
Route::get('/fastadreg', 'App\Http\Controllers\admin\fastadregController@fastadreg')->Middleware('authcadmin');
Route::post('/fadminreg', 'App\Http\Controllers\admin\fastadregController@fadminreg')->Middleware('authcadmin');
Route::get('/superreg', 'App\Http\Controllers\admin\superregController@superreg')->Middleware('authcadmin');
Route::post('/supereg', 'App\Http\Controllers\admin\superregController@supereg')->Middleware('authcadmin');

Route::get('/fastadminrpt', 'App\Http\Controllers\admin\fastadminrptController@fastadminrpt')->Middleware('authcadmin');
Route::post('/viewadstaffcode', 'App\Http\Controllers\admin\fastadminrptController@viewadstaffcode');
Route::post('/viewadstaffdate', 'App\Http\Controllers\admin\fastadminrptController@viewadstaffdate');

Route::get('/studentrpt', 'App\Http\Controllers\admin\studentrptController@studentrpt')->Middleware('authcadmin');
Route::post('/viewastuecode', 'App\Http\Controllers\admin\studentrptController@viewastuecode');
Route::post('/viewastuedate', 'App\Http\Controllers\admin\studentrptController@viewastuedate');

Route::get('/staffrpt', 'App\Http\Controllers\admin\staffrptController@staffrpt')->Middleware('authcadmin');
Route::post('/viewistaffcode', 'App\Http\Controllers\admin\staffrptController@viewistaffcode');
Route::post('/viewistaffdate', 'App\Http\Controllers\admin\staffrptController@viewistaffdate');

Route::get('/stuenrpt', 'App\Http\Controllers\admin\stuenrptController@stuenrpt')->Middleware('authcadmin');
Route::post('/viewiencode', 'App\Http\Controllers\admin\stuenrptController@viewiencode');
Route::post('/viewiendate', 'App\Http\Controllers\admin\stuenrptController@viewiendate');

Route::get('/staenrpt', 'App\Http\Controllers\admin\staenrptController@staenrpt')->Middleware('authcadmin');
Route::post('/viewastencode', 'App\Http\Controllers\admin\staenrptController@viewastencode');
Route::post('/viewastendate', 'App\Http\Controllers\admin\staenrptController@viewastendate');

Route::get('/guestenrpt', 'App\Http\Controllers\admin\guestenrptController@guestenrpt')->Middleware('authcadmin');
Route::post('/viewgencode', 'App\Http\Controllers\admin\guestenrptController@viewgencode');
Route::post('/viewgendate', 'App\Http\Controllers\admin\guestenrptController@viewgendate');

Route::get('/vehicalenrpt', 'App\Http\Controllers\admin\vehicalenrptController@vehicalenrpt')->Middleware('authcadmin');
Route::post('/viewviencode', 'App\Http\Controllers\admin\vehicalenrptController@viewviencode');
Route::post('/viewviendate', 'App\Http\Controllers\admin\vehicalenrptController@viewviendate');


Route::get('/message', 'App\Http\Controllers\admin\messageController@message')->Middleware('authcadmin');
Route::post('/viewadmesscode', 'App\Http\Controllers\admin\messageController@viewadmesscode');
Route::post('/viewadmessdate', 'App\Http\Controllers\admin\messageController@viewadmessdate');


Route::get('/csingout', 'App\Http\Controllers\admin\csingoutController@csingout');




