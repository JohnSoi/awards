@extends('layouts.app')

@section('title', 'Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">

<!-- disabled phone numbers -->
<meta name="format-detection" content="telephone=no">
@endsection

@section('content')
<section class="section section-content section-submit">
    <div class="container" id="submit">
        <div class="border-top-black"></div>
        <div class="section-submit__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Подача заявки</h4>
        </div>
        <div class="section-submit__content">
            <form id="member_of_gildia" class="add-form" action="{{ Route('form.gildia.store') }}">
                @csrf
                <input type="hidden" name="is_form2" value="1">
                <h4 class="heading heading-mini heading-grid-100">РАССКАЖИТЕ, КОГО НОМИНИРУЕТЕ</h4>
                <div class="add-form__left">
                    <div class="form-types">
                        <label class="form-type-label">Кого номинируете? (ФИО/название проекта)*</label>
                        <input name="name_nominate" type="text" class="form-type-text" required>
                    </div>
                    @if(count($nominations))
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Выберите номинацию*</div>
                                <div class="__select__content" data-select-options>
                                    @foreach($nominations as $nomination)
                                    <label class="__select__label">
                                        {{ $nomination->name }}
                                        <input name="nomination_id" class="__select__input" type="radio" value="{{ $nomination->id }}" />
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Уникальность, инновационность (<span data-output-count="unique" data-max-count="2000">0</span>/2000)*</label>
                        <textarea name="unique" type="text" class="form-type-text" rows="1" data-input-count="unique"></textarea>
                    </div>
                </div>
                <div class="add-form__center">
                    <div class="form-types">
                        <label class="form-type-label">Вклад в развитие креативных индустрий (<span data-output-count="deposit" data-max-count="3000">0</span>/3000)*</label>
                        <textarea name="deposit" type="text" class="form-type-text" rows="1" data-input-count="deposit"></textarea>
                    </div>
                    <div class="form-types" file-group>
                        <label class="form-type-label" for="file-upload">Презентация (30мб, pdf, mp4, doc, docx)</label>
                        <input name="presentation" id="file-upload" type="file">
                        <div class="form-type-text form-type-file" file-change-name="presentation"></div>
                    </div>

                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Почему достоин признания/награды? (<span data-output-count="why_worthy" data-max-count="5000">0</span>/5000)*</label>
                        <textarea name="why_worthy" type="text" class="form-type-text" rows="1" data-input-count="why_worthy"></textarea>
                    </div>
                </div>
                <div class="add-form__right">
                    <div class="add-form__double">
                        <div class="form-types">
                            <label class="form-type-label">География*</label>
                            <input name="geography" type="text" class="form-type-text" required>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Ссылка на соцсеть</label>
                            <input name="social_url" type="text" class="form-type-text">
                        </div>
                    </div>
                    <div class="add-form__double last-double">
                        <div class="form-types">
                            <label class="form-type-label">Телефон номинируемого</label>
                            <input data-mask-phone="" type="text" class="form-type-text" name="phone_nominee">
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Email номинируемого*</label>
                            <input name="email_nominee" type="email" class="form-type-text">
                        </div>
                    </div>
                    <div class="w-100 mt-auto">
                        <button class="btn btn-primary w-100">Подать заявку</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="section-submit__footer">
            <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="small-link-un text-center text-md-left">Положение о проведении <div class="d-inline d-sm-none"><br></div>RUSSIAN CREATIVE AWARDS</a>
            <a href="https://t.me/Russian_Creative_Week" target="_blank" class="small-link-un small-link-un__tg mt-md-0 mt-4">Техническая поддержка</a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="{{ mix('js/page/form2.js') }}"></script>
@endsection