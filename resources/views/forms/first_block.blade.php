@if(count($nominations))
    <div class="form-types" data-valid-group>
        <div class="select-control-inner" data-valid-input="nomination_id">
            <div class="__select" data-select>
                <div class="__select__title" data-select-title>Выберите номинацию*</div>
                <div class="__select__content" data-select-options>
                    @foreach($nominations as $nomination)
                        <label class="__select__label">
                            {{ $nomination->__('name') }}
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
                <div class="__select__title" data-select-title>Выберите индустрию*</div>
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
    <input name="name_nominate" type="text" class="form-type-text" required>
</div>
