<section class="section section-content section-photos bg-white" items-isset-photo style="display:none">
    <div class="container wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s" data-wow-offset="0">
        <div class="border-top-black"></div>
        <div class="section-photos__inner">
            <h2 class="section-title mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">R.C.AWARDS 2021</h2>
        </div>
        <div style="display: none;">
            @include('photos.item')
        </div>

        <div class="section-photos__grid" style="opacity: 0" items-paginate="12" items-list-photo="{{ Route('photos.index') }}?is_home=1"></div>

        <div items-empty-photo style="display: none;">
            <div class="more-text pos-more-text">Фотографий нет</div>
        </div>

        <div items-preloader-photo style="display: none;">
            <div class="more-text pos-more-text">Подождите...</div>
        </div>

        <div class="section-photos__btns">
            <a href="{{ Route('photos.index') }}" class="btn btn-primary wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="30">Показать все</a>
        </div>
    </div>
</section>