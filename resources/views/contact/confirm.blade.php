@extends('layouts.base')

@section('content')
<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
             <label>会社名</label>
            </p>
            {{ $inputs['company']}}
            <input name="company" value="{{ $inputs['company'] }}" type="hidden">
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
              <label>氏名</label>
            </p>
            {{ $inputs['name']}}
            <input name="name" value="{{ $inputs['name'] }}" type="hidden">
         </div>
     </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>電話番号</label>
            </p>
            {{ $inputs['telephone']}}
            <input name="telephone" value="{{ $inputs['telephone'] }}" type="hidden">
        </div>
     </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>メールアドレス</label>
            </p>
            {{ $inputs['email']}}
            <input name="email" value="{{ $inputs['email'] }}" type="hidden">
        </div>
    </div>
    
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>生年月日</label>
            </p>
            {{ $inputs['date']}}
            <input name="date" value="{{ $inputs['date'] }}" type="hidden">
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>性別</label>
            </p>
            <dd>{{ $inputs['gender'] == 'man' ? '男' : '女' }}</dd>
            <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
        </div>
    </div>

    
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
              <label>職業</label>
            </p>
            {{ $inputs['job']}}
            <input name="job" value="{{ $inputs['job'] }}" type="hidden">
        </div>
    </div>
     
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
               <label>お問い合わせ内容</label>
            </p>
            {!! nl2br(e($inputs['body'])) !!}
            <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        </div>
    </div>

    <button class=Form-Btn type="submit" name="action" value="back">入力内容修正</button>
    <button class=Form-Btn type="submit" name="action" value="submit">送信する</button>
</form>
@endsection