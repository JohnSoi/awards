<?php

namespace App\Providers;

use App\Models\BlockUser;
use App\Models\Nomination;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Автоматическое создание storage:links
        try {
            $targetFolder = storage_path('app/public');
            $linkFolder = base_path('public_html/storage');
            if (file_exists($linkFolder)) {
                $readlink = readlink($linkFolder);
                if (strpos($readlink, 'app') === false) {
                    if (file_exists($targetFolder)) {
                        rmdir($linkFolder);
                        Artisan::call('storage:link');
                    }
                }
            } else {
                if (file_exists($targetFolder)) {
                    Artisan::call('storage:link');
                }
            }
        } catch (\Exception $e) {
        }

        // Жюри
        View::composer('block.jury', function ($view) {
            $items = BlockUser::with(['user'])
                ->where('block_id', 2)
                ->orderBy('sort', 'asc')
                ->get();

            $view->with('items', $items);
        });

        // Эксперты
        View::composer('block.expert', function ($view) {
            $items = BlockUser::with(['user'])
                ->where('block_id', 1)
                ->orderBy('sort', 'asc')
                ->get();

            $view->with('items', $items);
        });

        // Шорт-лист
        View::composer('nomination.shortlist', function ($view) {
            $nominations = Nomination::with([
                'projects' => function ($query) {
                    $query->where('is_top', 1);
                }
            ])->get();

            $view->with('nominations', $nominations);
        });
    }
}
