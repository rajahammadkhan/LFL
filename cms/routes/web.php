<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\LexusController;

use App\Http\Controllers\CMS\UserController;
use App\Http\Controllers\CMS\LoginController;
use App\Http\Controllers\CMS\DashBoardController;
use App\Http\Controllers\CMS\CampImageController;
use App\Http\Controllers\CMS\CampSentWhatsAppController;
use App\Http\Controllers\WhatsAppController;
use App\Http\Controllers\CMS\AprovedUsedCampController;
use App\Http\Controllers\CMS\DownloadApprovedCampController;
use App\Http\Controllers\CMS\FetchDateController;
use App\Http\Controllers\CMS\SEOController;
use App\Http\Controllers\CMS\ContactController;
use App\Http\Controllers\CMS\SettingController;
use App\Http\Controllers\CMS\ProfileController;
use App\Http\Controllers\CMS\TicketController;
use App\Models\Lexus;

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
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "all cleared ...";

});

Route::group(['middleware' => ['auth']], function () {
        Route::get('/sentmsg', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_1.includes.sentmsg', $data);
        })->name('sentmsg');

        Route::get('/sentmsg1', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_1.includes.sentmsg', $data);
        })->name('sentmsg1');

        Route::get('/sentmsg2', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_2.includes.sentmsg', $data);
        })->name('sentmsg2');

        Route::get('/sentmsg3', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_3.includes.sentmsg', $data);
        })->name('sentmsg3');

        Route::get('/sentmsg4', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_4.includes.sentmsg', $data);
        })->name('sentmsg4');

        Route::get('/sentmsg5', function () {
            $id = request()->input('id');
            $data = [
                    // 'lexus' =>  Lexus::orderBy("id","DESC")->get(),
                'phone' => Lexus::where('id', $id)->get(),
                'campsent1' => Lexus::where('id', $id)->value('camp_1'),
                'qtysent1' => Lexus::where('id', $id)->value('qty'),
                'campsent2' => Lexus::where('id', $id)->value('camp_2'),
                'qtysent2' => Lexus::where('id', $id)->value('qty2'),
                'price' => Lexus::where('id', $id)->value('p_amt'),
                'date' => date("Y-m-d", strtotime(Lexus::where('id', $id)->value('date'))),
            ];
            return view('cms.camp_5.includes.sentmsg', $data);
        })->name('sentmsg5');

        Route::get('/sentwhatsmsg/create', [CampSentWhatsAppController::class, 'create'])->name('campwhatsapp.create');
        Route::post('/sentwhatsmsg/store', [CampSentWhatsAppController::class, 'store'])->name('sentwhatsapp.store');

        Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');
        Route::post('/dashboard', [DashBoardController::class, 'getDataBetweenDates'])->name('getDataBetweenDates');
        Route::post('/dashboard2', [DashBoardController::class, 'getDataBetweenDates2'])->name('getDataBetweenDates2');
        Route::post('/dashboard3', [DashBoardController::class, 'getDataBetweenDates3'])->name('getDataBetweenDates3');
        Route::post('/dashboard4', [DashBoardController::class, 'getDataBetweenDates4'])->name('getDataBetweenDates4');
        Route::post('/dashboard5', [DashBoardController::class, 'getDataBetweenDates5'])->name('getDataBetweenDates5');

        // First Camp Controller
        Route::get('/first-campiagn', [LexusController::class, 'firstindex'])->name('camp_1');
        Route::get('/camp_1/datatable', [LexusController::class, 'firstdatatable'])->name('camp_1.datatable');
        Route::delete('/camp_1/destroy', [LexusController::class, 'firstdestroy'])->name('camp_1.destroy');

        // Second Camp Controller
        Route::get('/second-campiagn', [LexusController::class, 'secondindex'])->name('camp_2');
        Route::get('/camp_2/datatable', [LexusController::class, 'seconddatatable'])->name('camp_2.datatable');
        Route::delete('/camp_2/destroy', [LexusController::class, 'seconddestroy'])->name('camp_2.destroy');

        // Third Camp Controller
        Route::get('/third-campiagn', [LexusController::class, 'thirdindex'])->name('camp_3');
        Route::get('/camp_3/datatable', [LexusController::class, 'thirddatatable'])->name('camp_3.datatable');
        Route::delete('/camp_3/destroy', [LexusController::class, 'thirddestroy'])->name('camp_3.destroy');

        // Forth Camp Controller
        Route::get('/forth-campiagn', [LexusController::class, 'forthindex'])->name('camp_4');
        Route::get('/camp_4/datatable', [LexusController::class, 'forthdatatable'])->name('camp_4.datatable');
        Route::delete('/camp_4/destroy', [LexusController::class, 'forthdestroy'])->name('camp_4.destroy');

        // Fifth Camp Controller
        Route::get('/fifth-campiagn', [LexusController::class, 'fifthindex'])->name('camp_5');
        Route::get('/camp_5/datatable', [LexusController::class, 'fifthdatatable'])->name('camp_5.datatable');
        Route::delete('/camp_5/destroy', [LexusController::class, 'fifthdestroy'])->name('camp_5.destroy');
        
        // Approved Campaign List
        Route::get('/approvedcamp', [AprovedUsedCampController::class, 'index'])->name('approvedcamps');
        Route::get('/approvedcamp/datatable', [AprovedUsedCampController::class, 'datatable'])->name('approvedcamps.datatable');
        Route::get('/approvedcamp/{camp}/edit', [AprovedUsedCampController::class, 'edit'])->name('approvedcamps.edit');
        Route::put('/approvedcamp/{camp}/update', [AprovedUsedCampController::class, 'update'])->name('approvedcamps.update');
        Route::delete('/approvedcamp/destroy', [AprovedUsedCampController::class, 'destroy'])->name('approvedcamp.destroy');

        // Approved Download Campaign List
        Route::get('/downloadapprovedcamp', [DownloadApprovedCampController::class, 'index'])->name('downloadapprovedcamps');
        Route::get('/downloadapprovedcamp/datatable', [DownloadApprovedCampController::class, 'datatable'])->name('downloadapprovedcamps.datatable');
        Route::post('/getDataDownloadBetweenDates', [DownloadApprovedCampController::class, 'getDataDownloadBetweenDates'])->name('getDataDownloadBetweenDates');

        // Fetch Download Campaign List
        Route::get('/fetchapprovedcamp', [FetchDateController::class, 'index'])->name('fetchapprovedcamps');
        Route::get('/fetchapprovedcamp/datatable', [FetchDateController::class, 'datatable'])->name('fetchapprovedcamps.datatable');
        Route::post('/getDataFetch', [FetchDateController::class, 'getDataFetch'])->name('getDataFetch');

        // Contact
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/contact/datatable', [ContactController::class, 'datatable'])->name('contact.datatable');
        Route::delete('contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

        // Seo
        Route::get('/seo', [SEOController::class, 'index'])->name('seo');
        Route::get('/seo/datatable', [SEOController::class, 'datatable'])->name('seo.datatable');
        Route::patch('users/status', [UserController::class, 'status'])->name('user.status');
        Route::delete('users/destroy', [UserController::class, 'destroy'])->name('user.destroy');
        Route::get('seo/{slug}/edit', [SEOController::class, 'edit'])->name('seo.edit');
        Route::put('seo/{slug}/update', [SEOController::class, 'update'])->name('seo.update');

        // Ticket
        Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
        Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
        Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');
        Route::get('/ticket/datatable', [TicketController::class, 'datatable'])->name('ticket.datatable');
        Route::patch('ticket/status', [TicketController::class, 'status'])->name('ticket.status');
        Route::delete('ticket/destroy', [TicketController::class, 'destroy'])->name('ticket.destroy');
        Route::get('ticket/{slug}/edit', [TicketController::class, 'edit'])->name('ticket.edit');
        Route::put('ticket/{slug}/update', [TicketController::class, 'update'])->name('ticket.update');

        // Setting
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::put('/settings/update', [SettingController::class, 'update'])->name('settings.update');
        
        // Profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
        
        // Campiagn Image
        Route::get('/campimgs', [CampImageController::class, 'index'])->name('campimgs');
        Route::get('/campimgs/datatable', [CampImageController::class, 'datatable'])->name('campimg.datatable');
        Route::get('/campimgs/create', [CampImageController::class, 'create'])->name('campimg.create');
        Route::post('/campimgs/store', [CampImageController::class, 'store'])->name('campimg.store');
        Route::get('/campimgs/{campimg}/edit', [CampImageController::class, 'edit'])->name('campimg.edit');
        Route::put('/campimgs/{campimg}/update', [CampImageController::class, 'update'])->name('campimg.update');
        Route::delete('/campimgs/destroy', [CampImageController::class, 'destroy'])->name('campimg.destroy'); 
        Route::patch('/campimgs/status', [CampImageController::class, 'status'])->name('campimg.status');

        // Campiagn Image Sent
        Route::get('/campwhatsapps', [CampSentWhatsAppController::class, 'index'])->name('campwhatsapps');
        Route::get('/campwhatsapp/datatable', [CampSentWhatsAppController::class, 'datatable'])->name('campwhatsapp.datatable');
        Route::get('/campwhatsapp/{campwhatsapp}/edit', [CampSentWhatsAppController::class, 'edit'])->name('campwhatsapp.edit');
        Route::put('/campwhatsapp/{campwhatsapp}/update', [CampSentWhatsAppController::class, 'update'])->name('campwhatsapp.update');
        Route::delete('/campwhatsapp/destroy', [CampSentWhatsAppController::class, 'destroy'])->name('campwhatsapp.destroy'); 
        Route::patch('/campwhatsapp/status', [CampSentWhatsAppController::class, 'status'])->name('campwhatsapp.status');
    });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login/store', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/signup', [SignUpController::class, 'index'])->name('signup');
Route::post('/signup/store', [SignUpController::class, 'signup'])->name('signup.store');

Route::get('/send-whatsapp-message', function () {
    return view('send-whatsapp-message');
});
Route::post('/send-whatsapp-message', [WhatsAppController::class, 'sendMessage']);