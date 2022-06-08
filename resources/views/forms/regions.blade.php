@if(count($regions))
<div class="form-types" data-valid-group>
    <div class="select-control-inner" data-valid-input="nomination_id">
        <div class="__select" data-select>
            <div class="__select__title" data-select-title>Регион (место нахождения)*</div>
            <div class="__select__content" data-select-options>
                @foreach($regions as $region)
                    <label class="__select__label">
                        {{ $region->name }}
                        <input name="industry_id" class="__select__input" type="radio" value="{{ $region->id }}" />
                    </label>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif