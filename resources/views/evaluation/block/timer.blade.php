<div class="timer-block">
    <div class="timer-block__title opacity-70">До конца оценки осталось:</div>
    <div class="timer-block__wrapper" data-countdown="{{ $period ? $evaluation_stop_at->format('Y/m/d H:i:s') : '' }}">
        <div class="timer-block__item rounded-circle">
            <div class="timer-block__item-inner">
                <div class="timer-block__value" data-days></div>
                <div class="timer-block__name" data-days-text></div>
            </div>
        </div>
        <div class="timer-block__item">
            <div class="timer-block__item-inner">
                <div class="timer-block__value" data-hours></div>
                <div class="timer-block__name" data-hours-text></div>
            </div>
        </div>
        <div class="timer-block__item rounded-circle">
            <div class="timer-block__item-inner">
                <div class="timer-block__value" data-minutes></div>
                <div class="timer-block__name" data-minutes-text></div>
            </div>
        </div>
        <div class="timer-block__item">
            <div class="timer-block__item-inner">
                <div class="timer-block__value" data-seconds></div>
                <div class="timer-block__name" data-seconds-text></div>
            </div>
        </div>
    </div>
    <div class="timer-block__list">
        <div class="timer-block__col">
            <div class="timer-block__suptitle opacity-70">Оценено</div>
            <div class="timer-block__subtitle">{{ $evaluation_completed_count }}/{{ $evaluation_count }}</div>
        </div>
        @if($period)
        <div class="timer-block__col">
            <div class="timer-block__suptitle opacity-70">Окончание срока оценки</div>
            <div class="timer-block__subtitle">{{ $evaluation_stop_at->format('d.m.Y H:i') }}</div>
        </div>
        @endif
    </div>
    <div class="timer-block__footer">
        @if($isEvaluationCompleted)
        @if($evaluation_completed_count)
        <div class="notify notify--secondary">
            <div class="notify__title">Спасибо за оценку!</div>
            <div class="notify__description">Номинируемых больше нет.</div>
        </div>
        @endif
        @else
        <a href="{{ Route('evaluation.process') }}" class="btn btn-black-primary w-100">Перейти к оценке</a>
        @endif
    </div>
</div>