<div class="section-submit__content">
    <form id="member_of_gildia" class="add-form" action="">
        <input type="hidden" name="is_form2" value="1">
        <h4 class="heading heading-mini heading-grid-100">Форма заявки на Национальную премию в сфере креативных
            индустрий для юридических лиц</h4>
        <div class="add-form__left">
            @include('forms.first_block')
            <div class="form-types">
                <label class="form-type-label">Должность номинуемого*</label>
                <input name="job" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Наименование организании*</label>
                <input name="organization_name" type="text" class="form-type-text" required>
            </div>
            @include('forms.regions')
            <div class="form-types">
                <label class="form-type-label">Название проекта*</label>
                <input name="project_name" type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__center">
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Описание проекта<span data-output-count="description"
                                                                     data-max-count="500"></span>(от 500
                    символов)</label>
                <textarea required name="description" type="text" class="form-type-text" rows="1"
                          data-input-count="description"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="progress"
                                                                                  data-min-count="500"></span>(от
                    500)</label>
                <textarea required name="award" type="text" class="form-type-text" rows="1"
                          data-input-count="progress"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Показатели медиа охвата номинанта <span
                            data-output-count="media">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                <textarea required name="media" type="text" class="form-type-text" rows="1"
                          data-input-count="media"></textarea>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Информация о медиаохвате номинанта (30мб, pdf,
                    mp4, doc, docx)</label>
                <input name="media_doc" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Почему достоин награды, вклад в развитие КИ, где реализован <span
                            data-output-count="why_worthy">(от 500 симоволов)</span>*</label>
                <textarea required name="why_worthy" type="text" class="form-type-text" rows="1"
                          data-input-count="why_worthy"></textarea>
            </div>

            <div class="form-types">
                <label class="form-type-label">Номинант (организатор проекта)</label>
                <input name="organizer_nom" required type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Ссылки на социальные сети*</label>
                <input name="social_url" type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__right">
            <div class="form-types">
                <label class="form-type-label">Сайт организации</label>
                <input name="site_url" required type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Телефон для связи с номинантом</label>
                <input data-mask-phone="" type="text" class="form-type-text" name="phone_nominee">
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label"> E-mail для связи с номинантом<span
                            data-output-count="email">(ссылка)</span>*</label>
                <textarea name="email" type="text" required class="form-type-text" rows="1"
                          data-input-count="email"></textarea>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Презентация <br>(30мб, pdf, mp4, doc, docx)</label>
                <input name="presentation" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="form-types">
                <label class="form-type-label">Видеоролик (ссылка)*</label>
                <input name="video" type="text" class="form-type-text" required>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Фото руковожителя организации (300кб, 600x600
                    пикселей, jpg, jpeg, png)</label>
                <input name="photo_director" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="w-100 mt-auto">
                <button class="btn btn-primary w-100">Подать заявку</button>
            </div>
        </div>
    </form>
</div>
