@extends('layouts.base')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <div class="Form-confirm">
        <p>
            会社名:  {{ $inputs['company']}}
        <input name="company" value="{{ $inputs['company'] }}" type="hidden">
        </p>
    </div>

    <div class="Form-confirm">
        <p>
            氏名 :  {{ $inputs['name']}}
        <input name="name" value="{{ $inputs['name'] }}" type="hidden">
        </p>
     </div>

    <div class="Form-confirm">
        <p>
            電話番号: {{ $inputs['telephone']}}
        <input name="telephone" value="{{ $inputs['telephone'] }}" type="hidden">
        </p>
     </div>

    <div class="Form-confirm">
        <p>
            メールアドレス:  {{ $inputs['email']}}
        <input name="email" value="{{ $inputs['email'] }}" type="hidden">
        </p>
    </div>
    
    <div class="Form-confirm">
        <p>
            生年月日: {{ $inputs['date']}}
        <input name="date" value="{{ $inputs['date'] }}" type="hidden">
        </p>
    </div>

    <div class="Form-confirm">
        <p>
            性別: {{ $inputs['gender'] == 'man' ? '男' : '女' }}
        <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
        </p>
    </div>

    
    <div class="Form-confirm">
        <p>
            職業:  {{ $inputs['job']}}
        <input name="job" value="{{ $inputs['job'] }}" type="hidden">
        </p>
    </div>
     
    <div class="Form-confirm">
        <p>
            お問い合わせ内容: {!! nl2br(e($inputs['body'])) !!}
        <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        </p>
    </div>

    <button class=Form-Btn type="submit" name="action"  value="submit">送信する</button>
    <button class=Form-Btn type="submit" name="action"  value="back">戻る</button>
</form>
@endsection