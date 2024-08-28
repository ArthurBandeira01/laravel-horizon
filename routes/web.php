<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-job', function () {
    ExampleJob::dispatch(['example' => 'opa salve :)']);

    return 'ok';
});

Route::get('/test-mail', function () {
    Mail::to('arthurbandeirafc@gmail.com')->send(new TestMail);

    return 'ok';
});
