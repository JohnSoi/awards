@extends('admin.global.app')

@section('title', 'Организация')

@section('form')
<div class="form-group" filter>
    <label>Организация</label>
    <input type="text" class="form-control" name="organization">
</div>

<div class="form-group" filter>
    <label>Индустрия</label>
    <select name="industry_id">
        <option value="">- Выбрать -</option>
        @foreach($industries as $industry)
        <option value="{{ $industry['id'] }}">{{ $industry['name'] }}</option>
        @endforeach
    </select>
</div>

<div class="form-group" filter>
    <label>Номинация</label>
    <select name="nomination_id">
        <option value="">- Выбрать -</option>
        @foreach($nominations as $nomination)
        <option value="{{ $nomination['id'] }}">{{ $nomination['name'] }}</option>
        @endforeach
    </select>
</div>

<div class="form-group" filter>
    <label>ИНН</label>
    <input type="text" class="form-control" name="inn">
</div>

<div class="form-group" filter>
    <label>КПП</label>
    <input type="text" class="form-control" name="kpp">
</div>

<div class="form-group" filter>
    <label>Директор</label>
    <input type="text" class="form-control" name="director">
</div>

<div class="form-group" filter>
    <label>Вклад</label>
    <textarea class="form-control" name="deposit" data-autosize></textarea>
</div>

<div class="form-group" filter>
    <label>География</label>
    <input type="text" class="form-control" name="geography">
</div>

<div class="form-group" filter>
    <label>Телефон номинанта</label>
    <input type="text" class="form-control" name="phone_nominee">
</div>

<div class="form-group" filter>
    <label>Email номинанта</label>
    <input type="text" class="form-control" name="email_nominee">
</div>

<div class="form-group" filter>
    <label>Уникальность</label>
    <textarea class="form-control" name="unique" data-autosize></textarea>
</div>

<div class="form-group" filter>
    <label>Телефон того, кто номинирует</label>
    <input type="text" class="form-control" name="phone_nominate">
</div>

<div class="form-group" filter>
    <label>Email того, кто номинирует</label>
    <input type="text" class="form-control" name="email_nominate">
</div>

<div class="form-group" filter>
    <label>Кто номинирует</label>
    <input type="text" class="form-control" name="name_nominate">
</div>

<div class="form-group" filter>
    <label>Почему достоин</label>
    <textarea class="form-control" name="why_worthy" data-autosize></textarea>
</div>

<div class="form-group" filter>
    <label>Презентация</label>
    <div files-list="presentation" class="row"></div>
    <label class="custom-file">
        <input type="file" name="presentation" class="custom-file-input">
        <div class="custom-file-label">Выберите файл</div>
    </label>
</div>

<div class="form-group" filter>
    <label>Дата</label>
    <input type="text" class="form-control" readonly name="created_at">
</div>
@endsection