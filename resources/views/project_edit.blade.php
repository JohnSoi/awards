@extends('layouts.app')
@section('title', 'Редактирование заявки')
@section('content')
    <link rel="stylesheet" href="{{ mix('css/page/dark.css') }}">
    <link rel="stylesheet" href="{{ mix('css/page/form/index.css') }}">
    <div class="container">
        @if ($_GET['organization'] == 0)
    <div class="section-submit__content form-change-bloc1">
        <form id="member_of_gildia" class="add-form" action="{{Route('form.project.update', $item->id)}}" enctype="multipart/form-data" style="margin-bottom: 100px;margin-top: 100px;" method="post">
            @csrf
            <input type="hidden" name="is_form2" value="1">
            @php
                $user_id = null;
                if ($user = auth()->user()){
                    $user_id = $user->id;
                }
            @endphp
            <input type='hidden' name='user_id' value='{{ $user_id }}'>
            <h4 class="heading heading-mini heading-grid-100">Редактирование заявки </h4>
            <div class="add-form__left">
                @if(count($nominations))
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>{{ $item->nomination->name }}</div>
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
                @if(count($industries))
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="industry_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>{{ $item->industry->name }}</div>
                                <div class="__select__content" data-select-options>
                                    @foreach($industries as $industry)
                                        <label class="__select__label">
                                            {{ $industry->name }}
                                            <input name="industry_id" class="__select__input" type="radio" value="{{ $industry->id }}" />
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-types">
                    <label class="form-type-label">Кого номинируете? (ФИО)*</label>
                    <input name="name_nominate" value="{{ $item->name_nominate }}" type="text" class="form-type-text" required>
                </div>

                <div class="form-types">
                    <label class="form-type-label">Место работы номинуемого*</label>
                    <input name="job" value="{{$item->job}}" type="text" class="form-type-text" required>
                </div>
                <div class="form-types">
                    <label class="form-type-label">Должность номинуемого*</label>
                    <input name="job_title"  value="{{$item->job_title}}" type="text" class="form-type-text" required>
                </div>
            </div>
            <div class="add-form__center">
                @if(count($regions))
                    <div class="form-types" data-valid-group>
                        <div class="select-control-inner" data-valid-input="nomination_id">
                            <div class="__select" data-select>
                                <div class="__select__title" data-select-title>{{$item->region->name}}</div>
                                <div class="__select__content" data-select-options>
                                    @foreach($regions as $region)
                                        <label class="__select__label">
                                            {{ $region->name }}
                                            <input name="region_id" class="__select__input" type="radio" value="{{ $region->id }}" />
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Биография (<span data-output-count="bio"
                                                                    data-max-count="2500">0</span>/2500)</label>
                    <textarea required name="bio"  type="text" class="form-type-text" rows="1"
                              data-input-count="biography">{{$item->bio}}</textarea>
                </div>

                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="progress"
                                                                                      data-min-count="500"></span>(от
                        500)</label>
                    <textarea  required name="achievements" type="text" class="form-type-text" rows="1"
                              data-input-count="achievements">{{$item->achievements}}</textarea>
                </div>

                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Показатели медиа охвата номинанта <span
                                data-output-count="media">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                    <textarea required name="media" type="text" class="form-type-text" rows="1"
                              data-input-count="media">{{$item->media}}</textarea>
                </div>
                <div class="form-types mt-md-auto">
                    <label class="form-type-label">Почему достоин награды <span
                                data-output-count="why_worthy">(вклад в развитие КИ)</span>*</label>
                    <textarea required name="why_worthy" type="text" class="form-type-text" rows="1"
                              data-input-count="why_worthy">{{$item->why_worthy}}</textarea>
                </div>
            </div>
            <div class="add-form__right">
                <div class="add-form__double">
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Имеющиеся награды, степени и т.п. <span
                                    data-output-count="award"></span>*</label>
                        <textarea  name="awards" type="text" class="form-type-text" rows="1"
                                  data-input-count="award">{{$item->awards}}</textarea>
                    </div>
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Email для связи с номинантом*</label>
                        <input name="email_nominee" value="{{$item->email_nominee}}" required type="email" class="form-type-text">
                    </div>
                </div>
                <div class="add-form__double">
                    <div class="form-types mt-md-auto">
                        <label class="form-type-label">Ссылка на соцсеть</label>
                        <input name="social_url" value="{{$item->social_url}}" required type="text" class="form-type-text" required>
                    </div>
                    <div class="form-types" file-group>
                        <label class="form-type-label" for="file-upload">Фото номинанта (600x600 пикселей, jpg,
                            jpeg, png)</label>
                        <input name="image" id="file-upload" type="file">
                        <div class="form-type-text form-type-file" file-change-name="photo"></div>
                    </div>
                </div>
                <div class="form-types mt-md-auto">
                    <label class="form-type-label"> Презентация или видеоролик о номинанте (ссылка)<span
                                data-output-count="presentation">0</span>*</label>
                    <textarea name="presentation" type="text" required class="form-type-text" rows="1"
                              data-input-count="presentation">{{$item->presentation}}</textarea>
                </div>
                @include('forms.pd_accept')
                <div class="w-100 mt-auto">
                    <button class="btn btn-primary w-100">Изменить заявку</button>
                </div>
            </div>
        </form>
    </div>
        @else
            <div class="section-submit__content" style="margin-top: 100px; margin-bottom: 100px;">
                <form id="member_of_gildia" class="add-form" action="{{Route('form.project.update', $item->id)}}" enctype="multipart/form-data" style="margin-bottom: 100px;margin-top: 100px;" method="post">

                    @csrf
                    <input type="hidden" name="is_form2" value="1">
                    <input type="hidden" name="is_organization" value="1">
                    @php
                        $user_id = null;
                        if ($user = auth()->user()){
                            $user_id = $user->id;
                        }
                    @endphp
                    <input type='hidden' name='user_id' value='{{ $user_id }}'>
                    <h4 class="heading heading-miQ  1`ni heading-grid-100">Форма заявки на Национальную премию в сфере креативных
                        индустрий для юридических лиц</h4>
                    <div class="add-form__left">
                        @if(count($nominations))
                            <div class="form-types" data-valid-group>
                                <div class="select-control-inner" data-valid-input="nomination_id">
                                    <div class="__select" data-select>
                                        <div class="__select__title" data-select-title>{{$item->nomination->name}}</div>
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
                        @if(count($industries))
                            <div class="form-types" data-valid-group>
                                <div class="select-control-inner" data-valid-input="industry_id">
                                    <div class="__select" data-select>
                                        <div class="__select__title" data-select-title>{{$item->industry->name}}</div>
                                        <div class="__select__content" data-select-options>
                                            @foreach($industries as $industry)
                                                <label class="__select__label">
                                                    {{ $industry->name }}
                                                    <input name="industry_id" class="__select__input" type="radio" value="{{ $industry->id }}" />
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-types">
                            <label class="form-type-label">Кого номинируете? (ФИО)*</label>
                            <input value="{{$item->name_nominate}}" name="name_nominate" type="text" class="form-type-text" required>
                        </div>

                        <div class="form-types">
                            <label class="form-type-label">Должность номинуемого*</label>
                            <input value="{{$item->job_title}}" name="job_title" type="text" class="form-type-text" required>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Наименование организании*</label>
                            <input name="organization_name" value="{{$item->organization_name}}" type="text" class="form-type-text" required>
                        </div>
                            @if(count($regions))
                                <div class="form-types" data-valid-group>
                                    <div class="select-control-inner" data-valid-input="nomination_id">
                                        <div class="__select" data-select>
                                            <div class="__select__title" data-select-title>{{$item->region->name}}</div>
                                            <div class="__select__content" data-select-options>
                                                @foreach($regions as $region)
                                                    <label class="__select__label">
                                                        {{ $region->name }}
                                                        <input name="region_id" class="__select__input" type="radio" value="{{ $region->id }}" />
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        <div class="form-types">
                            <label class="form-type-label">Название проекта*</label>
                            <input name="project_name" type="text" class="form-type-text" required value="{{$item->project_name}}">
                        </div>
                    </div>
                    <div class="add-form__center">
                        <div class="form-types mt-md-auto">
                            <label class="form-type-label">Описание проекта<span data-output-count="description"
                                                                                 data-max-count="500"></span>(от 500
                                символов)</label>
                            <textarea required name="project_description" type="text" class="form-type-text" rows="1"
                                      data-input-count="description">{{$item->project_description}}</textarea>
                        </div>
                        <div class="form-types mt-md-auto">
                            <label class="form-type-label">Достижения в 2021-2022 году* <span data-output-count="progress"
                                                                                              data-min-count="500"></span>(от
                                500)</label>
                            <textarea name="achievements" type="text" class="form-type-text" rows="1"
                                      data-input-count="progress">{{$item->achievements}}</textarea>
                        </div>
                        <div class="form-types mt-md-auto">
                            <label class="form-type-label">Показатели медиа охвата номинанта <span
                                        data-output-count="media">(количество публикаций в СМИ, число подписчиков в социальных сетях)</span>*</label>
                            <textarea required name="media" type="text" class="form-type-text" rows="1"
                                      data-input-count="media">{{$item->media}}</textarea>
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
                                      data-input-count="why_worthy">{{$item->why_worthy}}</textarea>
                        </div>
                        <div class="form-types mt-md-auto">
                            <label class="form-type-label">Ссылка на соцсеть</label>
                            <input name="social_url" value="{{$item->social_url}}" required type="text" class="form-type-text" required>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Номинант (организатор проекта)</label>
                            <input name="name_organizer" value="{{$item->name_organizer}}" required type="text" class="form-type-text" required>
                        </div>
                    </div>
                    <div class="add-form__right">
                        <div class="form-types">
                            <label class="form-type-label">Сайт организации</label>
                            <input name="organization_site" value="{{$item->organization_site}}" required type="text" class="form-type-text" required>
                        </div>
                        <div class="add-form__double">
                            <div class="form-types">
                                <label class="form-type-label">Телефон для связи с номинантом</label>
                                <input data-mask-phone="" type="text" class="form-type-text" name="phone_nominee" value="{{$item->phone_nominee}}">
                            </div>
                            <div class="form-types mt-md-auto">
                                <label class="form-type-label"> E-mail для связи с номинантом<span
                                            data-output-count="email">(ссылка)</span>*</label>
                                <textarea name="email_nominee" type="text" required class="form-type-text" rows="1"
                                          data-input-count="email">{{$item->email_nominee}}</textarea>
                            </div>
                        </div>
                        <div class="form-types" file-group>
                            <label class="form-type-label" for="file-upload">Презентация <br>(30мб, pdf, mp4, doc, docx)</label>
                            <input name="presentation_file" id="file-upload" type="file">
                            <div class="form-type-text form-type-file" file-change-name="presentation"></div>
                        </div>
                        <div class="form-types">
                            <label class="form-type-label">Видеоролик (ссылка)*</label>
                            <input name="video_nominate" value="{{$item->video_nominate}}" type="text" class="form-type-text" required>
                        </div>
                        <div class="form-types" file-group>
                            <label class="form-type-label" for="file-upload">Фото руководителя организации (300кб, 600x600
                                пикселей, jpg, jpeg, png)</label>
                            <input name="photo_director" id="file-upload" type="file">
                            <div class="form-type-text form-type-file" file-change-name="presentation"></div>
                        </div>
                        @include('forms.pd_accept')
                        <div class="w-100 mt-auto">
                            <button class="btn btn-primary w-100">Изменить заявку</button>
                        </div>

                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection