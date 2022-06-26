<div class="section-submit__content form-change-bloc1">
    <form id="member_of_gildia" class="add-form" action="{{Route('form.gildia.store')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="is_form2" value="{{ (int) (Request::url() === Route('competition')) }}">
        <input type="hidden" name="is_lk" value="{{ (int) (Request::url() === Route('lk')) }}">
        @php
            $user_id = null;
            if ($user = auth()->user()){
                $user_id = $user->id;
            }
        @endphp
        <input type='hidden' name='user_id' value='{{ $user_id }}'>
        <h4 class="heading heading-mini heading-grid-100">Форма заявки на Национальную премию в сфере креативных
            индустрий для физических лиц </h4>
        <div class="add-form__left">
            @include('forms.first_block')
            <div class="form-types">
                <label class="form-type-label">Место работы номинуемого*</label>
                <input name="job" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Должность номинуемого*</label>
                <input name="job_title" type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__center">
            @include('forms.regions')
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Биография (<span data-output-count="bio"
                                                                data-max-count="2500">0</span>/2500)</label>
                <textarea required name="bio" type="text" class="form-type-text" rows="1"
                          data-input-count="biography"></textarea>
            </div>

            <div class="form-types mt-md-auto">
                <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="achievements"
                                                                                  data-min-count="500"></span>(от
                    500)</label>
                <textarea required name="achievements" type="text" class="form-type-text" rows="1"
                          data-input-count="achievements"></textarea>
            </div>

            <div class="form-types mt-md-auto">
                <label class="form-type-label">Показатели медиа охвата номинанта <span
                            data-output-count="media">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                <textarea required name="media" type="text" class="form-type-text" rows="1"
                          data-input-count="media"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Почему достоин награды <span
                            data-output-count="why_worthy">(вклад в развитие КИ)</span>*</label>
                <textarea required name="why_worthy" type="text" class="form-type-text" rows="1"
                          data-input-count="why_worthy"></textarea>
            </div>
        </div>
        <div class="add-form__right">
            <div class="add-form__double">
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Имеющиеся награды, степени и т.п. <span
                                data-output-count="award"></span>*</label>
                    <textarea name="awards" type="text" class="form-type-text" rows="1"
                              data-input-count="award"></textarea>
                </div>
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Email для связи с номинантом*</label>
                    <input name="email_nominee" required type="email" class="form-type-text">
                </div>
            </div>
            <div class="add-form__double">
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Ссылка на соцсеть</label>
                    <input name="social_url" required type="text" class="form-type-text" required>
                </div>
                <div class="form-types" file-group>
                    <label class="form-type-label" for="file-upload">Фото номинанта (600x600 пикселей, jpg,
                        jpeg, png)</label>
                    <input name="image" id="file-upload" type="file">
                    <div class="form-type-text form-type-file" file-change-name="image"></div>
                </div>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label"> Презентация или видеоролик о номинанте (ссылка)<span
                            data-output-count="presentation">0</span>*</label>
                <textarea name="presentation" type="text" required class="form-type-text" rows="1"
                          data-input-count="presentation"></textarea>
            </div>
            @include('forms.pd_accept')
            <div class="w-100 mt-auto">
                <button class="btn btn-primary w-100">Подать заявку</button>
            </div>
        </div>
    </form>
</div>