<?php

namespace App\Jobs;

use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ExampleJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected array $payload
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::info('Star ExampleJob');
        //sleep(10);
        throw new Exception("Teste exception");

        Log::info('End ExampleJob');
    }
}
