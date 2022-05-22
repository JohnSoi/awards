@if(isset($nominations))
@foreach($nominations as $nomination)
<div class="industries-list__item position-relative" data-swiper-group>
    <div class="industries-list__item-header container wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
        <a href="{{ Route('nomination.show', $nomination->id) }}" class="industries-list__item-title">{{ $nomination->name }}</a>
        <div class="industries-list__item-counter">
            <div class="counter">
                <span data-active-count data-pc-plus="1">2</span>
                /
                <span data-all-count></span>
            </div>
        </div>
    </div>
    <div class="industry__illustrate">
        @include('nomination.project-swiper', [
        'projects' => $nomination->projects
        ])
    </div>
    <div class="container">
        <div class="devider devider-black"></div>
    </div>
</div>
@endforeach
@endif