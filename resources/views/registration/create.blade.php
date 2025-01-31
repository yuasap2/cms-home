@extends('layouts.app')

@section('content')
<div class="main-part">
    <h1>新規登録</h1>
    
    @if ($errors->any())
        <div class = "alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('new_registration.store') }}">
        @csrf
            <p class = "fill">
                会員名
            <input type="text" name="member_name" class="input-field" maxlength="8" value="{{ old('member_name')}}" required>
            </p>
                <p class = "fill">
                フリガナ
                <input type = "text" name="furigana" class="input-field" value="{{ old('furigana')}}"  />
            </p>

            <p class = "fill">
                メールアドレス
                <input type = "email"  name="email" class="input-field" value="{{ old('email')}}"  required />
            </p>
        
            <p class = "fill">                   
                パスワード
                <input type="password" name="password" class="input-field" value="{{ old('password')}}"  required />
            </p>
            
            <p class = "fill">
                電話番号
                <input type="text" name="phone_number" class="input-field" value="{{ old('phone_number')}}" />
            </p>

            <p class = "fill">
                郵便番号
                <input type="text" name="postal_code" class="input-field"  value="{{ old('postal_code')}}" />
            </p>

            <p class = "fill">
                都道府県
                <input type="text" name="prefecture" class="input-field" value="{{ old('prefecture')}}" />
            </p>
            
            <p class = "fill">
                市区町村
                <input type="text" name="city" class="input-field" value="{{ old('city')}}" />
            </p>

            <p class = "fill">
                番号・アパート名
                <input type="text" name="address" class="input-field"  value="{{ old('address')}}" />
            </p>
            
            <p class = "fill">
                備考欄
                <textarea name="remarks" class="input-field">{{ old('remarks')}}</textarea>
            </p> 
        <button type="submit">登録する</button>
    </form>
</div> 
@endsection
