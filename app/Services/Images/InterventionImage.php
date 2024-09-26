<?php

namespace App\Services\Images;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Storage;

class InterventionImage implements WatermarkInterface
{
    public function make(string $path): void
    {
        $fullPath = Storage::path($path);
        $manager = new ImageManager(new Driver());
        $image = $manager->read($fullPath);
        $image->place(public_path('logoespecializa.png'), 'bottom-right', 10, 10, 25);
        $image->toPng()->save($fullPath);
    }
}
