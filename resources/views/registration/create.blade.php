@extends('layouts.app')

@section('content')
<div class="create">
    <h1 class = "accounts_list">アカウント一覧</h1>
    
    <!-- @if ($errors->any())
        <div class = "alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    
    <form method="POST" action="{{ route('new_registration.store') }}">
        @csrf
            
            <p class = "fill">
                <span class="required">必須</span>
                会員名
                    @if($errors->has('member_name'))
                    <a class="error-message-create">{{ $errors->first('member_name')}}</a>
                    @endif
            </p>
            <br>
            <input type="text" name="member_name" class="input-field" maxlength="8" value="{{ old('member_name')}}" placeholder="太郎">
           
         
            <p class = "fill">
                <span class="required">必須</span>
                フリガナ
                @if($errors->has('furigana'))
                   <a class="error-message-create">{{ $errors->first('furigana')}}</a>
                @endif
            </p>
            <br>
            <input type = "text" name="furigana" class="input-field" placeholder="タロウ" value="{{ old('furigana')}}"  />
            
            
            <p class = "fill">
                <span class="required">必須</span>
                メールアドレス
                @if($errors->has('email'))
                   <a class="error-message-create">{{ $errors->first('email')}}</a>
                @endif
            </p>
            <br>
            <input type = "email"  name="email" class="input-field" placeholder="example@hoge.com" value="{{ old('email')}}"/>
            
                   
            <p class = "fill">
                <span class="required">必須</span>            
                パスワード
                @if($errors->has('password'))
                   <a class="error-message-create">{{ $errors->first('password')}}</a>
                @endif
            </p>
            <br>
            <input type="password" name="password" class="input-field" placeholder="password"/>
           
                        
            <p class = "fill">
                <span class="required">必須</span>
                電話番号
                @if($errors->has('phone_part1'))
                    <a class="error-message-create">{{ $errors->first('phone_part1') }}</a>
                @endif
                @if($errors->has('phone_part2'))
                    <a class="error-message-create">{{ $errors->first('phone_part2') }}</a>
                @endif
                @if($errors->has('phone_part3'))
                    <a class="error-message-create">{{ $errors->first('phone_part3') }}</a>
                @endif
            </p>
            <br>
            <div class="phone_input_group">
                <input type="text" id="phone_part1" name="phone_part1" class="input-field" placeholder="000" maxlength="3" value="{{ old('phone_part1') }}">
                -
                <input type="text" id="phone_part2" name="phone_part2" class="input-field" placeholder="0000" maxlength="4" value="{{ old('phone_part2') }}">
                -
                <input type="text" id="phone_part3" name="phone_part3" class="input-field" placeholder="0000" maxlength="4" value="{{ old('phone_part3') }}">
            </div>
           
            
            <div class="postal-code-group">
                <span class="required">必須</span>
                郵便番号
                @if($errors->has('postal_part1'))
                    <a class="error-message-create">{{ $errors->first('postal_part1') }}</a>
                @endif
                @if($errors->has('postal_part2'))
                    <a class="error-message-create">{{ $errors->first('postal_part2') }}</a>
                @endif
                <br>
                <input type="tel" id="postal_part1" name="postal_part1" class="input-field" placeholder="123" maxlength="3" pattern="\d*" autocomplete="postal-code" value="{{ old('postal_part1') }}" >
                -
                <input type="tel" id="postal_part2" name="postal_part2" class="input-field" placeholder="4567" maxlength="4" pattern="\d*" autocomplete="postal-code" value="{{ old('postal_part2') }}"  >
               
            </div>


            <p class = "fill">
                <span class="required">必須</span>
                都道府県
                @if($errors->has('prefecture'))
                   <a class="error-message-create">{{ $errors->first('prefecture')}}</a>
                @endif
            </p>

            @php
                $prefectures = [
                    "北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県",
                    "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県",
                    "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県",
                    "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県",
                    "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県",
                    "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県",
                    "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"
                ];
            @endphp           

            <select id="prefecture" name="prefecture">
                <option value="">都道府県名を選んで下さい</option>
                @foreach($prefectures as $p)
                    <option value="{{ $p }}" {{ (old('prefecture')??'') == $p ? 'selected' : '' }}>
                        {{ $p }}
                    </option>
                @endforeach
            </select>
            

            
            <p class = "fill">
                <span class="required">必須</span>
                市区町村
                @if($errors->has('city'))
                        <a class="error-message-create">{{ $errors->first('city')}}</a>
                @endif

            </p>
            <br>
            <input type="text" name="city" class="input-field" placeholder="太郎" value="{{ old('city')}}" />
                       
            
            <p class = "fill">
                <span class="required">必須</span>
                番号・アパート名
                @if($errors->has('address'))
                        <a class="error-message-create">{{ $errors->first('address')}}</a>
                @endif
            </p>
            <br>
            <input type="text" name="address" class="input-field"  placeholder="" value="{{ old('address')}}" />
                       

            
            <p class = "fill">
                備考欄
            </p>
            <br>
            <textarea name="remarks" class="input-field">{{ old('remarks')}}</textarea>
            <br>
                
                <button type="submit" class="new_registration_button">登録する</button>
            </form>
</div> 
@endsection
