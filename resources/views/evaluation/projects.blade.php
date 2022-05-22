@extends('layouts.app')

@section('title', 'Список проектов - Национальная премия в области креативных индустрий «Russian Creative Awards»')

@section('head')
<link rel="stylesheet" href="{{ mix('css/page/evaluation/projects/index.css') }}">
<script>
    var user = {
        group_id: <?= request()->user()->group_id ?>
    };
</script>
@endsection

@section('content')
<section class="section section-content section-navigation">
    <div class="container">
        <div class="section-navigation__inner">
            <a href="{{ Route('evaluation.index') }}" class="back-btn back-btn__left">Назад</a>
        </div>
    </div>
</section>

<section class="section section-content section-projects">
    <div class="container">
        <div class="section-projects__header">
            <div class="section-projects__title">Номинируемые</div>
            @if($isAccessEvaluation)
            <div class="section-projects__after">У вас есть доступ к оценке заявок</div>
            @endif
            @if(request()->user()->group_id == 5)
            <div class="section-projects__after d-none">
                <div class="toggles__inner" checkbox>
                    <div class="toggles__title text-222222 font-weight-700">ЧЛЕН ГИЛЬДИИ RCW</div>
                    <div class="toggles">
                        <input type="checkbox" name="is_organization" value="1" id="checkbox_form_type" class="ios-toggle" />
                        <label for="checkbox_form_type" class="checkbox-label"></label>
                    </div>
                    <div class="toggles__title text-222222 font-weight-700">ОРГАНИЗАЦИЯ</div>
                </div>
            </div>
            @endif
        </div>
        <div class="section-projects__flex">
            <div class="section-projects__filters">
                <div class="new-filter new-filter__sort" data-radio-new>
                    <a href="javascript://" class="new-filter__title" data-radio-title>
                        Сортировка
                    </a>
                    <div class="new-filter__inner" data-radio-inner>
                        <div class="new-filter__selection" data-radio-selection>
                            <div data-radio-group>
                                <div class="nf-label-title mt-0" data-radio-group-title>Порядковый номер</div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio1" name="sort" value="id:asc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">По возрастанию</label>
                                </div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio2" name="sort" value="id:desc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">По убыванию</label>
                                </div>
                            </div>

                            <div data-radio-group>
                                <div class="nf-label-title" data-radio-group-title>Сум.балл</div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio3" name="sort" value="total:asc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">По возрастанию</label>
                                </div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio4" name="sort" value="total:desc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">По убыванию</label>
                                </div>
                            </div>

                            <div data-radio-group>
                                <div class="nf-label-title" data-radio-group-title>Кол-во комментариев </div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio5" name="sort" value="comment:asc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">По возрастанию</label>
                                </div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio6" name="sort" value="comment:desc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">По убыванию</label>
                                </div>
                            </div>

                            @if(request()->user()->group_id == 5)
                            <div data-radio-group>
                                <div class="nf-label-title" data-radio-group-title>Топ</div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio7" name="sort" value="is_accept:asc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7">По возрастанию</label>
                                </div>
                                <div class="custom-control custom-radio" data-radio-selected>
                                    <input type="radio" id="customRadio8" name="sort" value="is_accept:desc" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio8">По убыванию</label>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="new-filter new-filter__sort" data-select-new>
                    <a href="javascript://" class="new-filter__title" data-select-title>
                        Номинации
                    </a>
                    <div class="new-filter__inner" data-select-inner>
                        <div class="new-filter__selected" data-select-selected>
                        </div>
                        <div class="new-filter__selection" data-select-selection>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="1" />
                                <div class="nf-title">
                                    Креативный продюсер года
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="2" />
                                <div class="nf-title">
                                    Креативный менеджер года
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="3" />
                                <div class="nf-title">
                                    Меценат года (вклад в развитие КИ)
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="4" />
                                <div class="nf-title">
                                    Стартап года / Прорыв года
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="5" />
                                <div class="nf-title">
                                    Образовательный проект в сфере КИ
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="6" />
                                <div class="nf-title">
                                    Креаполис года
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="7" />
                                <div class="nf-title">
                                    Новый культурный код
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="8" />
                                <div class="nf-title">
                                    Креативный регион года
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="9" />
                                <div class="nf-title">
                                    Лучший креативный проект <br>из сырьевого бизнеса
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                            <label class="new-filter__item nf-selection-label">
                                <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="10" />
                                <div class="nf-title">
                                    Коллаборация года в сфере КИ
                                </div>
                                <span class="nf-remover"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-projects__content">
                <div style="display: none;">
                    @include('evaluation.block.nominees-item')
                </div>
                <div class="nominees-list" items-list-project-mobile="{{ Route('evaluation.projects') }}"></div>
            </div>
        </div>
        <div class="section-projects__tabler">
            <table style="display: none;">
                <tbody>
                    @include('evaluation.block.nominees-table-item')
                </tbody>
            </table>

            <table class="table table-fixed mb-0">
                <thead class="border-0">
                    <tr>
                        <th class="position-relative th-swhitch" scope="col">
                            <a href="javascript://" class="switch-btn mx-auto" data-sort="id"></a>
                        </th>
                        <th scope="col" class="text-left text-uppercase th-name">Название / фио</th>
                        <th scope="col" class="text-left th-filter">
                            <div class="new-filter" data-select-new>
                                <a href="javascript://" class="new-filter__title" data-select-title>
                                    Номинации
                                </a>
                                <div class="new-filter__inner" data-select-inner>
                                    <div class="new-filter__selected" data-select-selected></div>
                                    <div class="new-filter__selection" data-select-selection>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="1" />
                                            <div class="nf-title">
                                                Креативный <br>продюсер года
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="2" />
                                            <div class="nf-title">
                                                Креативный <br>менеджер года
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="3" />
                                            <div class="nf-title">
                                                Меценат года <br>(вклад в развитие КИ)
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="4" />
                                            <div class="nf-title">
                                                Стартап года <br>/ Прорыв года
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="5" />
                                            <div class="nf-title">
                                                Образовательный <br>проект в сфере КИ
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="6" />
                                            <div class="nf-title">
                                                Креаполис <br>года
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="7" />
                                            <div class="nf-title">
                                                Новый <br>культурный код
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="8" />
                                            <div class="nf-title">
                                                Креативный <br>регион года
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="9" />
                                            <div class="nf-title">
                                                Лучший креативный <br>проект из сырьевого <br>бизнеса
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                        <label class="new-filter__item nf-selection-label">
                                            <input name="nomination_id" class="nf-checkbox-input" type="checkbox" value="10" />
                                            <div class="nf-title">
                                                Коллаборация <br>года в сфере КИ
                                            </div>
                                            <span class="nf-remover"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </th>
                        <th scope="col" class="th-eval">
                            <div class="tabler__title text-uppercase">Оценено <a href="javascript://" class="switch-btn" data-sort="completed"></a></div>
                        </th>
                        <th scope="col" class="th-score">
                            <div class="tabler__title text-uppercase" style="margin-bottom: 10px">Сум. <br>балл <a href="javascript://" class="switch-btn" data-sort="total"></a></div>
                        </th>
                        <th scope="col" class="text-left th-comment">
                            <div class="tabler__title text-uppercase">Комментарии <a href="javascript://" class="switch-btn" data-sort="comment"></a></div>
                        </th>
                        @if(request()->user()->group_id == 5)
                        <th scope="col" class="text-left th-top d-none">
                            <div class="tabler__title text-uppercase">Принят <a href="javascript://" class="switch-btn" data-sort="is_accept"></a></div>
                        </th>
                        <th scope="col" class="text-left th-top">
                            <div class="tabler__title text-uppercase" style="margin-right: 56px;">ТОП <a href="javascript://" class="switch-btn" data-sort="is_top"></a></div>
                        </th>
                        <th scope="col" class="text-left th-remove">
                            <div class="tabler__title text-uppercase"></div>
                        </th>
                        @endif
                    </tr>
                </thead>
                <tbody class="nominees-table" items-list-project="{{ Route('evaluation.projects') }}"></tbody>
            </table>
        </div>
    </div>

    <div items-preloader-project class="section-projects__preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Загрузка...</span>
        </div>
    </div>
</section>
@endsection

@section('modals')
<!-- Popup проекта -->
<div class="modal project-modal fade" items-modal-project>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" html="project.name_nominate"></div>
                <div class="cross-modal" data-dismiss="modal" aria-label="Close">
                    <svg width="39" height="41" viewBox="0 0 39 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3284 22.6213L21.6213 23.3284L32.935 34.6421L33.6421 33.935L22.3284 22.6213ZM17.3787 23.3284L16.6716 22.6213L4.65074 34.6421L5.35785 35.3492L17.3787 23.3284ZM16.6716 18.3787L17.3787 17.6716L6.06496 6.35786L5.35785 7.06497L16.6716 18.3787ZM34.3492 6.35786L22.3284 18.3787L21.6213 17.6716L33.6421 5.65076L34.3492 6.35786Z" fill="#222222" />
                    </svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="score-stripe justify-content-between justify-content-sm-start">
                    <div class="score-stripe__line mr-3">
                        <div class="score-text__title">Суммарный бал: &nbsp;<span class="opacity-70" html="total">0</span></div>
                    </div>
                    <div class="score-stripe__line">
                        <div class="score-text__title">Оценено: &nbsp;<span class="opacity-70" html="evaluations_count">0</span> &nbsp;<span class="opacity-70 text-lowercase font-weight-normal" html="evaluations_count_text"></span></div>
                    </div>
                </div>
                <div class="row score-stripe">
                    <div class="col-12">
                        <div class="score-nomination"><span class="score-nomination__title">Номинация:</span> <span class="score-nomination__description opacity-70" html="nomination.name"></span></div>
                    </div>
                </div>
                <div class="row" data-evals></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="evaluation-textblock">
                            <div class="evaluation-textblock__title">География</div>
                            <div class="evaluation-textblock__description opacity-70" html="project.geography"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12" isset="project.presentation" style="display: none;">
                        <div class="evaluation-textblock">
                            <div class="evaluation-textblock__title">Презентация</div>
                            <div class="evaluation-textblock__description opacity-70"><a href="javascript://" attr="href:project.presentation" target="_blank" class="link">Скачать презентацию</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="evaluation-textblock">
                            <div class="evaluation-textblock__title">Вклад в развитие КИ</div>
                            <div class="evaluation-textblock__description opacity-70" html="project.deposit"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="evaluation-textblock">
                            <div class="evaluation-textblock__title">Уникальность, инновационность</div>
                            <div class="evaluation-textblock__description opacity-70" html="project.unique"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="evaluation-textblock mb-0">
                            <div class="evaluation-textblock__title">Почему достоин признания/награды</div>
                            <div class="evaluation-textblock__description opacity-70" html="project.why_worthy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ mix('js/page/evaluation/projects.js') }}"></script>
@endsection