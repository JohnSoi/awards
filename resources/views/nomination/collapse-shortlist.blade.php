<div class="collapse-shortlist">
    <div class="collapse-shortlist__header" data-toggle="collapse" data-target="#collapseShortlist{{ $project->id }}" aria-expanded="false" aria-controls="collapseShortlist{{ $project->id }}">
        <div class="collapse-shortlist__image">
            <div class="collapse-shortlist__preview">
                <picture>
                    <img data-src="{{ ImageUrl($project->image, 266, true, '/img/V2/page/main/card/gradient/logo5.svg') }}" class="lazyload">
                </picture>
                @if($project->is_winner)
                <div class="collapse-shortlist__winner">
                    <picture>
                        <img data-src="/img/V2/page/main/card/gradient/winner-icon.png" class="lazyload">
                    </picture>
                </div>
                @endif
            </div>
        </div>
        <div class="collapse-shortlist__cross">
            <picture>
                <img data-src="/img/V2/elements/collapse/cross.svg" class="lazyload">
            </picture>
        </div>
    </div>
    <div class="collapse-shortlist__desc">
        <div class="collapse-shortlist__location">
            {{ $project->name_nominate }}
        </div>
        <div class="collapse-shortlist__naming">
            @if($project->is_winner)
            Лауреат премии
            Russian Creative Awards 2021
            @else
            Номинант премии
            Russian Creative Awards 2021
            @endif
        </div>
    </div>
    <div class="collapse-shortlist__collapse collapse" id="collapseShortlist{{ $project->id }}">
        <div class="collapse-shortlist__area">
            @if($project->shortlist_texts)
            <div class="collapse-shortlist__content">
                @foreach($project->shortlist_texts as $section)
                <div class="collapse-shortlist__title">{!! $section['title'] !!}</div>
                <p>{!! $section['text'] !!}</p>
                @endforeach
            </div>
            @endif
            <div class="collapse-shortlist__media row">
                @if($project->shortlist_image)
                <div class="position-relative @if($project->isShortlistImageAndVideo()) col-md-6 @endif col-12 overflow">
                    <div class="collapse-shortlist__cover">
                        <picture data-shortlist-image>
                            <img data-src="{{ ImageUrl($project->shortlist_image, 800) }}" class="lazyload">
                        </picture>
                        <div style="background-image: url('{{ ImageUrl($project->shortlist_image, 800) }}');" class="collapse-shortlist__blur"></div>
                    </div>
                </div>
                @endif
                @if($project->shortlist_video)
                <div class="position-relative @if($project->isShortlistImageAndVideo()) col-md-6 @endif col-12">
                    <div class="collapse-shortlist__video">{!! $project->shortlist_video !!}</div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>