<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\User;
use App\Http\Controllers\StudViewController;
use App\Http\Controllers\StudUpdateController;
use App\Mail\WelcomeMail;
/*--------------------------------------------------------------------------------------------------------
               Welcome Page
--------------------------------------------------------------------------------------------------------*/
Route::get('/', function () {
    return view('welcome');
});

/*--------------------------------------------------------------------------------------------------------
               Upload file
--------------------------------------------------------------------------------------------------------*/
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('add-employee',[EmployeeController::class, 'addEmployee']);
Route::get('export-excel',[EmployeeController::class, 'exportIntoExcel']);
Route::get('export-csv',[EmployeeController::class, 'exportIntoCSV']);
Route::get('import-form',[EmployeeController::class, 'importForm']);
Route::post('import',[EmployeeController::class, 'import'])->name('employee.import');
//Route::post('index.php/import',[EmployeeController::class, 'import2'])->name('employee.import');
/*--------------------------------------------------------------------------------------------------------
               Web application
--------------------------------------------------------------------------------------------------------*/
//Route::get('/admin',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('adminlte/dashboard');
});
Route::view('web','layouts/app');

/*--------------------------------------------------------------------------------------------------------
               SMTP Email
--------------------------------------------------------------------------------------------------------*/
Route::get('/email', function () {
    return new WelcomeMail();
});
Route::get('/user',[NewController::class,'index']);
Route::get('/send-email',[MailController::class,'sendEmail']);
Route::view('/add','contactus');
Route::post('/add',[MemberController::class,'addData']);
Route::get('/contactus',[ContactController::class,'contact']);
Route::post('/contactus',[ContactController::class,'contactSubmit'])->name('contact.submit');
/*--------------------------------------------------------------------------------------------------------
               Student View
--------------------------------------------------------------------------------------------------------*/
Route::view('insert','stud_create');
Route::post('submit',[StudViewController::class,'insert']);
Route::get('view-records',[StudViewController::class,'view']);
Route::get('edit-records',[StudViewController::class,'showEdit']);
Route::get('edit/{id}',[StudViewController::class,'show']);
Route::post('edit/{id}',[StudViewController::class,'edit'])->name('student.edit');
Route::get('delete-records',[StudViewController::class,'showDelete']);
Route::get('delete/{id}',[StudViewController::class,'destroy']);








