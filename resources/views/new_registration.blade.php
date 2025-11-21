@extends('layouts.app')

@section('content')
   
  <body>
            <div class = "main-part">
              <header>アカウント一覧</header>
                <div class = "registration">
                    <form method="post" action="{{ route('new_registration.store') }}">
                        @csrf   
                        <p class = "fill">
                            会員名
                            <input type = "text"  name="name" maxlength="8" class="input-field" />
                        </p>

                        <p class = "fill">
                            フリガナ
                            <input type = "text" name="furigana" class="input-field" />
                        </p>

                        <p class = "fill">
                            メールアドレス
                            <input type = "text"  name="email" class="input-field" />
                        </p>
                    
                        <p class = "fill">                   
                            パスワード
                            <input type="text" name="password" class="input-field" />
                        </p>
                        
                        <p class = "fill">
                            電話番号
                            <input type="text" name="phone_number" class="input-field" />
                        </p>

                        <p class = "fill">
                            郵便番号
                            <input type="text" name="postal_code" class="input-field" />
                        </p>

                        <p class = "fill">
                            都道府県
                            <input type="text" name="prefecture" class="input-field" />
                        </p>
                        
                        <p class = "fill">
                            市区町村
                            <input type="text" name="city" class="input-field" />
                        </p>

                        <p class = "fill">
                            番号・アパート名
                            <input type="text" name="address" class="input-field" />
                        </p>
                        
                        <p class = "fill">
                            備考欄
                            <textarea name="remarks" class="input-field"></textarea>
                        </p> 
                        
                    
                        <input type = "submit" value ="登録する" class = "button">
                        </form>

                    </div>                   
                </div>                
</body>


@endsection