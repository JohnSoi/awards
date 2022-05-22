<?php

namespace App\Listeners;

use App\Events\ItemUpdate;
use Spatie\Sitemap\Sitemap;

class SitemapGenerate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ItemUpdate  $event
     * @return void
     */
    public function handle(ItemUpdate $event)
    {
        $Sitemap = Sitemap::create();

        $items = $event->items->get();

        foreach ($items as $item) {
            $Sitemap->add($item->toSitemapTag());
        }

        $Sitemap->writeToFile(public_path('sitemap-' . $event->name . '.xml'));

        Sitemap::create()
            ->add(config('app.url'))
            ->add(route('post.index'))
            ->add('/sitemap-posts.xml')
            ->writeToFile(public_path('sitemap.xml'));
    }
}
