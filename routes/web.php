<?php

use App\Facades\ZarinPal;
use App\Http\Controllers\AdvisorsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\InfobillController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\OtpLoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SendbillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceRequestController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDocumentController;
use App\Http\Controllers\WalletController;
use App\Models\Permission;
use App\Models\Role;
use App\Models\UserSubscriptionUsage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// =========================================== Dashboard Route =========================================== //
Route::middleware(['auth', 'redirect.by.role'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::resource('services', ServiceController::class);
    Route::get('settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
    Route::put('settings', [SettingController::class, 'update'])->name('settings.update');
    Route::resource('subscriptions', SubscriptionController::class);

    Route::resource('documents', UserDocumentController::class);
    Route::delete('documents/files/{id}', [UserDocumentController::class, 'deleteFile'])->name('documents.files.destroy');
    Route::resource('transactions', TransactionController::class);
    Route::resource('wallets', WalletController::class);
    // Route::resource('subscriptions', SubscriptionsController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('discounts', DiscountController::class);
    Route::resource('service-requests', ServiceRequestController::class);

    Route::get('/admin/advisors/chat', [AdvisorsController::class, 'chat'])->name('advisors.chat');
    Route::get('/admin/chat/start/{advisor}', [AdvisorsController::class, 'startConversationAdvisor'])->name('advisor.chat.start');
    Route::get('admin/chat/room/{conversation}/{advisor_id}', [AdvisorsController::class, 'showConversationAdvisor'])->name('advisor.chat.room');

});



// =========================================== Site Route =========================================== //
Route::middleware(['auth', 'profile.complete', 'hasActiveSubscription'])->group(function () {
    Route::get('user/buy/service/{id}', [\App\Http\Controllers\Site\UserController::class, 'buy_service'])->name('user.buy.service');
});

Route::middleware(['auth'])->group(function () {

    Route::get('users/profile/edit', [UserController::class, 'user_edit_profile'])->name('users.edit.profile');
    Route::put('users/profile/update', [UserController::class, 'user_update_profile'])->name('users.update.profile');
    Route::post('/check-user-phone', [UserController::class, 'checkPhone'])->name('check.user.phone');
    Route::post('users/service/register', [UserController::class, 'service_register'])->name('users.service.register');
    Route::resource('users', UserController::class);

    Route::get('user/home', [\App\Http\Controllers\Site\UserController::class, 'home'])->name('user.home');
    Route::get('user/edit/profile', [\App\Http\Controllers\Site\UserController::class, 'edit_profile'])->name('user.profile.edit');
    Route::put('user/doc/store', [\App\Http\Controllers\Site\UserController::class, 'store_docs'])->name('user.doc.store');
    Route::put('user/doc/store', [\App\Http\Controllers\Site\UserController::class, 'store_docs'])->name('user.doc.store');
    Route::get('user/transactions', [\App\Http\Controllers\Site\UserController::class, 'user_transactions'])->name('user.transactions');
    Route::get('user/subscriptions', [\App\Http\Controllers\Site\UserController::class, 'user_subscriptions'])->name('user.subscriptions');
    Route::get('user/requests', [\App\Http\Controllers\Site\UserController::class, 'user_requests'])->name('user.requests');
    Route::get('user/profile/details', [\App\Http\Controllers\Site\UserController::class, 'user_profile_details'])->name('user.profile.details');
    Route::get('user/wallet', [\App\Http\Controllers\Site\UserController::class, 'user_wallet'])->name('user.wallet');
    Route::post('user/wallet/payment', [\App\Http\Controllers\Site\UserController::class, 'user_wallet_payment'])->name('user.wallet.payment');
    Route::get('user/wallet/payment/verify', [\App\Http\Controllers\Site\UserController::class, 'user_wallet_payment_verify'])->name('user.wallet.payment.verify');
    Route::get('user/factor/{tid}', [\App\Http\Controllers\Site\UserController::class, 'factor'])->name('user.factor');
    Route::get('subscript/plans', [SiteController::class, 'subscript_plans'])->name('user.subscript.plans');
    Route::post('subscript/select/{subscription_id}', [SiteController::class, 'select_subscription'])->name('user.subscript.select');
    Route::post('subscript/payment', [SiteController::class, 'payment_subscription'])->name('user.subscript.payment');
    Route::get('subscript/payment/verify/', [SiteController::class, 'payment_verify_subscription'])->name('user.subscript.payment.verify');
    Route::post('/upload-temp-file', [UploadController::class, 'uploadTemp'])->name('upload.temporary.file');
    Route::get('user/doc/register', [\App\Http\Controllers\Site\UserController::class, 'doc_register'])->name('user.doc.register');

    // نمایش لیست گفتگوها
    Route::get('user/advisors', [ChatController::class, 'advisors'])->name('user.advisors');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    // آغاز گفتگو با یک مشاور خاص
    Route::get('/chat/start/{advisor}', [ChatController::class, 'startConversationUser'])->name('user.chat.start');
    // نمایش صفحه چت (conversation)
    Route::get('/chat/room/{conversation}/{advisor_id}', [ChatController::class, 'showConversation'])->name('user.chat.room');
    // ارسال پیام از طریق فرم
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');

    Route::post('/joinroom', [ChatController::class, 'joinroom']);
    Route::post('/set-in-room', [ChatController::class, 'setInRoom']);
    Route::post('/mark-online', [ChatController::class, 'markOnline']);
    Route::post('/mark-offline', [ChatController::class, 'markOffline']);
    Route::post('/mark-online-user', [ChatController::class, 'markOnlineUser']);
    Route::post('/mark-offline-user', [ChatController::class, 'markOfflineUser']);
});

// =========================================== Otp Route =========================================== //
Route::post('/otp/send', [OtpController::class, 'send'])->middleware('throttle:5,1');
Route::post('/otp/verify', [OtpController::class, 'verify']);
Route::post('/otp/send-password', [OtpController::class, 'sendPassword']);



// Route::get('/create-data', function () {

//     // dd(Hash::make(12345678));

//     $user = User::create(
//         [
//             'name' => 'احسان باوقار',
//             'email' => 'admin@admin.com',
//             'password' => Hash::make('12345678'),
//             'mobile' => '09191816172',
//         ]
//     );


//     $permisions = [
//         'user-list' => 'لیست کاربران',
//         'user-create' => 'ایجاد کاربر',
//         'user-edit' => 'ویرایش کاربر',
//         'user-delete' => 'حذف کاربر',
//         'role-list' => 'لیست نقش ها',
//         'role-create' => 'ایجاد نقش',
//         'role-edit' => 'ویرایش نقش',
//         'role-delete' => 'حذف نقش',
//         'setting-list' => 'لیست تنظیمات',
//         'setting-edit' => 'ویرایش تنظیمات',
//         'dashboard' => 'پیشخوان',
//     ];

//     foreach ($permisions as $name => $title) {
//         Permission::create(
//             [
//                 'name' => $name,
//                 'title' => $title,
//                 'guard_name' => 'web'
//             ]
//         );

//     }

//     $role = Role::create(
//         [
//             'name' => 'Admin',
//             'title' => 'ادمین',
//             'guard_name' => 'web'
//         ]
//     );

//     $permissionsID = Permission::pluck('id');
//     $role = Role::where('id', $role->id)->first();
//     $role->syncPermissions($permissionsID);
//     $user->assignRole('Admin');

//     Permission::create(
//         [
//             'name' => 'user-login-mobile',
//             'title' => 'ورود با موبایل',
//             'guard_name' => 'web'
//         ]
//     );
//     // $user->givePermissionTo('role-list');
//     // $user->givePermissionTo('role-create');
//     // $user->givePermissionTo('role-edit');
//     // $user->givePermissionTo('role-delete');
//     // $user->givePermissionTo('dashboard');
//     // $user->givePermissionTo('user-list');
//     // $user->givePermissionTo('user-create');
//     // $user->givePermissionTo('user-edit');
//     // $user->givePermissionTo('user-delete');
//     // $user->givePermissionTo('user-login-mobile');
//     // $user->givePermissionTo('setting-list');
//     // $user->givePermissionTo('setting-edit');

//     // dd($user->getPermissionNames());

//     return 'دیتا با موفقیت ساخته شد';
// });


// حذف خدمات استفاده شده
// Route::get('/delete-used', function () {
//     $usagesToDelete = UserSubscriptionUsage::where('used', true)
//         ->whereHas('userSubscription', function ($q) {
//             $q->where('ends_at', '<', now());
//         })->get();

//     foreach ($usagesToDelete as $usage) {
//         $usage->delete();
//     }

// });


// Route::get('/create-permissions', function () {

//     $permisions = [
//         'service-requests-list' => 'لیست درخواست ها',
//         'service-requests-create' => 'ایجاد درخواست جدید',
//         'service-requests-edit' => 'ویرایش درخواست',
//         'service-requests-delete' => 'حذف درخواست',
//     ];

//     foreach ($permisions as $name => $title) {
//         Permission::create(
//             [
//                 'name' => $name,
//                 'title' => $title,
//                 'guard_name' => 'web'
//             ]
//         );

//     }

//     return 'دیتا با موفقیت ساخته شد';
// });


Route::get('test-reverb', function () {
    broadcast(new \App\Events\UserEvent(Auth::user(), "salam"));
    return 'Event sent!';
});


// Route::get('order', function (Request $request) {

//     $result = ZarinPal::request(
//         500000,
//         "http://127.0.0.1:8000/payment-test",
//         'خرید نشان معتبر',
//         'customer@example.com',
//         '09123456789',
//         get_setting('payment_gateway_unit')
//     );

//     if ($result['success']) {
//         // Store the authority for verification later
//         $authority = $result['authority'];

//         // Redirect the user to ZarinPal payment page
//         return redirect($result['paymentUrl']);
//     } else {
//         // Handle error
//         return 'Error: ' . $result['error']['message'];
//     }
// })->name('order');

// Route::get('payment-test', function (Request $request) {
//     $authority = $request->input('Authority');
//     $status = $request->input('Status');

//     if ($status !== 'OK') {
//         return 'Payment was canceled by user.';
//     }

//     // Verify the payment
//     $result = ZarinPal::verify($authority, 500000);

//     if ($result['success']) {
//         $referenceId = $result['referenceId'];
//         dd($result);
//         // return redirect()->route('timeline');
//     } else {
//         return 'Error in payment verification: ' . $result['error']['message'];
//     }
// });