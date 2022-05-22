@if(count($criterions) > 0)
<form id="score_form" class="score-block" action="{{ Route('evaluation.update', $project->id) }}">
    <div class="score-block__content">
        @foreach($criterions as $criterion)
        <div class="score-block__stripe row justify-content-between">
            <div class="col-7 d-flex align-items-center">
                <div for="score-1" class="score-block__nomination">{!! $criterion->name !!}</div>
            </div>
            <div class="col-md-4 col-sm-4 col-5 d-flex align-items-center justify-content-center">
                <div class="score-group w-100" data-score-group>
                    <input name="criterions[{{ $criterion->id }}]" class="form-type-score w-100 opacity-70" type="text" @if(isset($evaluation->criterions[$criterion->id]))
                    value="{{ $evaluation->criterions[$criterion->id] }}"
                    @else
                    value="0/10"
                    @endif
                    >
                    <button type="button" class="btn-score btn-score__up" data-score-plus></button>
                    <button type="button" class="btn-score btn-score__down" data-score-minus></button>
                </div>
            </div>
        </div>
        @endforeach
        <div class="score-block__stripe row justify-content-between">
            <div class="col-6 d-flex align-items-center">
                <div class="score-block__nomination">
                    Суммарный балл
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-5 d-flex align-items-center justify-content-center">
                <span class="form-val-score text-semipink opacity-70 mr-auto" data-score-total>{{ $evaluation->total ?? '0' }}</span>
            </div>
        </div>
    </div>
    <div class="score-block__footer">
        <div class="score-block__comment">
            <label class="form-type-label opacity-70">Комментарий к проекту</label>
            <textarea name="comment" rows="1" class="form-type-text w-100 overflow-hidden" data-autosize>{{ $evaluation->comment }}</textarea>
            <button type="submit" class="btn btn-primary">Отправить оценку</button>
        </div>
    </div>
</form>
@endif