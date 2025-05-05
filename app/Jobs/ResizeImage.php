<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Unit;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\CropPosition;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResizeImage implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    private $w, $h, $fileName, $path;
    public function __construct($filePath, $w, $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    
    // public function handle(): void
    // {
    //     $w = $this->w;
    //     $h = $this->h;
    //     $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
    //     $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

    //     Image::load($srcPath)
    //         ->crop($w, $h, CropPosition::Center)
    //         ->watermark(
    //             base_path('public/img/watermark.png'),
    //             width: 450,
    //             height: 450,
    //             paddingX: 5,
    //             paddingY: 5,
    //             paddingUnit: Unit::Percent
    //         )
    //         ->save($destPath);
    // }

    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path('app/public/' . $this->path . '/' . $this->fileName);
        $destPath = storage_path('app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName);
    
        // Calcola le dimensioni del watermark in base alla dimensione finale dell'immagine
        $watermarkWidth = $w * 0.2; // ad esempio, il 20% della larghezza
        $watermarkHeight = $h * 0.2; // se vuoi mantenere la proporzione anche per l'altezza
    
        Image::load($srcPath)
            ->crop($w, $h, CropPosition::Center)
            ->watermark(
                base_path('public/img/watermark.png'),
                width: $watermarkWidth,
                height: $watermarkHeight,
                paddingX: 5,
                paddingY: 5,
                paddingUnit: Unit::Percent
            )
            ->save($destPath);
    }
    


}