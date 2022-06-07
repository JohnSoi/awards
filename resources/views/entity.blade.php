<div class="section-submit__content">
    <form id="member_of_gildia" class="add-form" action="">
        <input type="hidden" name="is_form2" value="1">
        <h4 class="heading heading-mini heading-grid-100">Форма заявки на Национальную премию в сфере креативных
            индустрий для юридических лиц</h4>
        <div class="add-form__left">
            @include('forms.first_block')
            <div class="form-types">
                <label class="form-type-label">Должность номинуемого*</label>
                <input name="name_nominate" type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Наименование организании*</label>
                <input name="name_nominate" type="text" class="form-type-text" required>
            </div>
            <div class="form-types" data-valid-group>
                <div class="select-control-inner" data-valid-input="nomination_id">
                    <div class="__select" data-select>
                        <div class="__select__title" data-select-title>Регион (место нахождения)*</div>
                        <div class="__select__content" data-select-options>
                            <label class="__select__label">
                                <input required name="nomination_id" class="__select__input" type="radio" value=""/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-types">
                <label class="form-type-label">Название проекта*</label>
                <input name="name_nominate" type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__center">
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Описание проекта<span data-output-count="unique"
                                                                     data-max-count="500"></span>(от 500
                    символов)</label>
                <textarea required name="unique" type="text" class="form-type-text" rows="1"
                          data-input-count="unique"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="unique"
                                                                                  data-min-count="500"></span>(от
                    500)</label>
                <textarea required name="unique" type="text" class="form-type-text" rows="1"
                          data-input-count="unique"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Показатели медиа охвата номинанта <span
                            data-output-count="unique">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                <textarea required name="unique" type="text" class="form-type-text" rows="1"
                          data-input-count="unique"></textarea>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Информация о медиаохвате номинанта (30мб, pdf,
                    mp4, doc, docx)</label>
                <input name="presentation" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Почему достоин награды, вклад в развитие КИ, где реализован <span
                            data-output-count="unique">(от 500 симоволов)</span>*</label>
                <textarea required name="unique" type="text" class="form-type-text" rows="1"
                          data-input-count="unique"></textarea>
            </div>
            <div class="form-types mt-md-auto">
                <label class="form-type-label">Имеющиеся награды, степени и т.п. <span
                            data-output-count="unique"></span>*</label>
                <textarea name="unique" type="text" class="form-type-text" rows="1"
                          data-input-count="unique"></textarea>
            </div>
            <div class="form-types">
                <label class="form-type-label">Номинант (организатор проекта)</label>
                <input name="social_url" required type="text" class="form-type-text" required>
            </div>
        </div>
        <div class="add-form__right">
            <div class="form-types">
                <label class="form-type-label">Сайт организации</label>
                <input name="social_url" required type="text" class="form-type-text" required>
            </div>
            <div class="form-types">
                <label class="form-type-label">Название проекта*</label>
                <input name="name_nominate" type="text" class="form-type-text" required>
            </div>
            <div class="add-form__double last-double">
                <div class="form-types">
                    <label class="form-type-label">Телефон для связи с номинантом</label>
                    <input data-mask-phone="" type="text" class="form-type-text" name="phone_nominee">
                </div>
                <div class="form-types mt-md-auto">
                    <label class="form-type-label"> E-mail для связи с номинантом<span
                                data-output-count="unique">(ссылка)</span>*</label>
                    <textarea name="unique" type="text" required class="form-type-text" rows="1"
                              data-input-count="unique"></textarea>
                </div>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Презентация <br>(30мб, pdf, mp4, doc, docx)</label>
                <input name="presentation" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="form-types">
                <label class="form-type-label">Видеоролик (ссылка)*</label>
                <input name="name_nominate" type="text" class="form-type-text" required>
            </div>
            <div class="form-types" file-group>
                <label class="form-type-label" for="file-upload">Фото руковожителя организации (300кб, 600x600
                    пикселей, jpg, jpeg, png)</label>
                <input name="presentation" id="file-upload" type="file">
                <div class="form-type-text form-type-file" file-change-name="presentation"></div>
            </div>
            <div class="w-100 mt-auto">
                <button class="btn btn-primary w-100">Подать заявку</button>
            </div>
        </div>
    </form>
</div>
