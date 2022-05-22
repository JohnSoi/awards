<a items-html-project-mobile href="javascript://" class="nominees-item" attr="data-project-url:url">
    <div class="nominees-item__number" html="loop_iteration"></div>
    <div class="nominees-item__title" html="name_nominate"></div>
    <div class="nominees-item__nomination" html="nomination.name"></div>
    <div class="nominees-item__eval text-semipink" html="eval"></div>
    @if(request()->user()->group_id == 5)
    <div class="nominees-item__top d-none">
        <div class="nominees-item__top-icon" attr="data-btn-accept:id"></div>
    </div>
    <div class="nominees-item__top">
        <div class="nominees-item__top-icon" attr="data-btn-is-top:id"></div>
    </div>
    <div class="nominees-item__remove d-none">
        <div attr="data-btn-delete:id" class="nominees-item__remove-icon"></div>
    </div>
    @endif
</a>