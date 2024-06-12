@extends('layouts.base')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <label>会社名</label>
    {{ $inputs['company']}}
    <input name="company" value="{{ $inputs['company'] }}" type="hidden">

    <label>氏名</label>
    {{ $inputs['name']}}
    <input name="name" value="{{ $inputs['name'] }}" type="hidden">

    <label>電話番号</label>
    {{ $inputs['telephone']}}
    <input name="teleohone" value="{{ $inputs['telephone'] }}" type="hidden">

    
    <label>メールアドレス</label>
    {{ $inputs['email']}}
    <input name="email" value="{{ $inputs['email'] }}" type="hidden">

    <label>生年月日</label>
    {{ $inputs['date']}}
    <input name="date" value="{{ $inputs['date'] }}" type="hidden">

    <label>性別</label>
            <dd>{{ $data['gender'] == 'man' ? '男' : '女' }}</dd>
    
     <label>職業</label>
    {{ $inputs['gender']}}
    <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
     
    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['body'])) !!}
    <input name="job" value="{{ $inputs['job'] }}" type="hidden">

    <button type="submit" name="action" value="back">入力内容修正</button>
    <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection