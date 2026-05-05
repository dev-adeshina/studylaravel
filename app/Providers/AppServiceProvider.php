<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        FilamentView::registerRenderHook(
            'panels::body.end',
            fn (): string => Blade::render('
                <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
                <script>
                    function openCloudinaryWidget() {
                        window.cloudinary.openUploadWidget({
                            cloudName: "dhthtqqff", 
                            uploadPreset: "ml_default",
                            resourceType: "video",
                            sources: ["local", "url"],
                            multiple: false,
                            clientAllowedFormats: ["mp4", "mov", "webm"],
                            maxFileSize: 100000000, // 100MB
                        }, (error, result) => {
                            if (!error && result && result.event === "success") {
                                const input = document.getElementById("video-url-input");
                                input.value = result.info.secure_url;
                                
                                // This tells Filament/Livewire that the value changed
                                input.dispatchEvent(new Event("input"));
                            }
                        });
                    }
                </script>
            '),
        );
    }
}
