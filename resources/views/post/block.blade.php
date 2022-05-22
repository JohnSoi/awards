<div style="display: none;">
    @include('post.item', [
    'type' => 'news-block'
    ])
</div>
<div class="newsitems-block" items-list-news-block="{{ Route('post.index') }}?recommend={{ $post->id }}"></div>