<section class="section section-content section-submit" >
    <div class="container" id="submit">
        <div class="border-top-black"></div>
        <div class="section-submit__preheader">
            <h4 class="heading wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" data-wow-offset="0">Подача
                заявки</h4>
        </div>
        <div class="section-submit__content form-change-bloc1">
            <form id="" class="add-form" action="{{Route('individual_create')}}">
                <input type="hidden" name="is_form2" value="1">
                <h4 class="heading heading-mini heading-grid-100">Форма заявки на Национальную премию в сфере креативных
                    индустрий для физических лиц </h4>
                <div class="add-form__left">
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Выберите номинацию*</div>
                                <div class="__select__content" data-select-options>
                                    <label class="__select__label">
                                        <input name="nomination_id" class="__select__input"  type="radio"
                                               value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Выберите индустрию*</div>
                                <div class="__select__content" data-select-options>
                                    <label class="__select__label">
                                        <input name="nomination_id"  class="__select__input" type="radio"
                                               value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Кого номинируете? (ФИО)*</label>
                        <input name="name_nominate" type="text" class="form-type-text" required>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Место работы номинуемого*</label>
                        <input name="job_nominate" type="text" class="form-type-text" required>
                    </div>
                    <div class="form-types">
                        <label class="form-type-label">Должность номинуемого*</label>
                        <input name="job_title_nominate" type="text" class="form-type-text" required>
                    </div>
                </div>
                <div class="add-form__center">
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>Регион (место нахождения)*</div>
                                <div class="__select__content" data-select-options>
                                    <label class="__select__label">
                                        <input  name="nomination_id" class="__select__input" type="radio" value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Биография (<span data-output-count="unique"
                                                                        data-max-count="2500">0</span>/2500)</label>
                        <textarea required name="bio" type="text" class="form-type-text" rows="1"
                                  data-input-count="unique"></textarea>
                    </div>

                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="unique"
                                                                                          data-min-count="500"></span>(от
                            500)</label>
                        <textarea required name="achievements" type="text" class="form-type-text" rows="1"
                                  data-input-count="unique"></textarea>
                    </div>

                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Показатели медиа охвата номинанта <span
                                    data-output-count="media_nom">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                        <textarea required name="media_nom" type="text" class="form-type-text" rows="1"
                                  data-input-count="unique"></textarea>
                    </div>
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Почему достоин награды <span data-output-count="unique">(вклад в развитие КИ)</span>*</label>
                        <textarea required name="why_worthy" type="text" class="form-type-text" rows="1"
                                  data-input-count="unique"></textarea>
                    </div>
                </div>
                <div class="add-form__right">

                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Имеющиеся награды, степени и т.п. <span
                                    data-output-count="unique"></span>*</label>
                        <textarea name="awards_nom" type="text" class="form-type-text" rows="1"
                                  data-input-count="unique"></textarea>
                    </div>
                    <div class="add-form__double">
                        <div class="form-types">
                            <label class="form-type-label">Email для связи с номинантом*</label>
                            <input name="email_nominee" required type="email" class="form-type-text">
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Ссылка на соцсеть</label>
                            <input name="social_url" required type="text" class="form-type-text" required>
                        </div>
                    </div>
                    <div class="add-form__double last-double">

                        <div class="form-types" file-group>
                            <label class="form-type-label" for="file-upload">Фото номинанта (600x600 пикселей, jpg,
                                jpeg, png)</label>
                            <input name="photo_nom" id="file-upload" type="file">
                            <div class="form-type-text form-type-file" file-change-name="presentation"></div>
                        </div>
                        <div class="form-types mt-md-auto">
                            <label class="form-type-label"> Презентация или видеоролик о номинанте<span
                                        data-output-count="unique">(ссылка)</span>*</label>
                            <textarea name="presentation" type="text" required class="form-type-text" rows="1"
                                      data-input-count="unique"></textarea>
                        </div>
                    </div>
                    <div class="w-100 mt-auto">
                        <button class="btn btn-primary w-100">Подать заявку</button>
                    </div>
                </div>
                <div class="w-100 mt-auto">
                    <a href="{{Route('index')}}" class="btn btn-primary w-100">На главную</a>
                </div>
            </form>
        </div>
        <div class="section-submit__footer">
            <a href="/files/Polozhenie_RCA.pdf" target="_blank" class="small-link-un text-center text-md-left">Положение
                о проведении
                <div class="d-inline d-sm-none"><br></div>
                RUSSIAN CREATIVE AWARDS</a>
            <a href="https://t.me/Russian_Creative_Week" target="_blank"
               class="small-link-un small-link-un__tg mt-md-0 mt-4">Техническая поддержка</a>
        </div>
    </div>
</section>