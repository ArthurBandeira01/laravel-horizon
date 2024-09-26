<?php

use App\Jobs\ExampleJob;
use App\Mail\TestMail;
use App\Models\User;
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

Route::get('/create-users-with-images', function () {
    foreach (range(1, 4) as $value) {
        User::factory()->create([
            'image' => "users/image{$value}.png"
        ]);
    }

    return User::get();
});
