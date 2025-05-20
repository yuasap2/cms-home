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
            
        <div class = "box">
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">会員名</span>
                @if($errors->has('member_name'))
                    <a class="error-message-create">{{ $errors->first('member_name')}}</a>
                @endif
            </p>
            <br>
            <p class= "input-elea">
              <input type="text" name="member_name" class="input-field" maxlength="8" value="{{ old('member_name')}}" placeholder="山田太郎">
            </p>
         
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">フリガナ</span>
                @if($errors->has('furigana'))
                   <a class="error-message-create">{{ $errors->first('furigana')}}</a>
                @endif
            </p>
            <br>
            <p class= "input-elea">
            <input type = "text" name="furigana" class="input-field" placeholder="ヤマダタロウ" value="{{ old('furigana')}}"  />
            
            
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName"> メールアドレス</span>               
                @if($errors->has('email'))
                   <a class="error-message-create">{{ $errors->first('email')}}</a>
                @endif
            </p>
            <br>
            <p class= "input-elea">
                <input type = "email"  name="email" class="input-field" placeholder="example@hoge.com" value="{{ old('email')}}"/>
            </p>
                   
            <p class = "fill">
                <span class="required">必須</span>            
                <span class="itemName">パスワード</span>               
                @if($errors->has('password'))
                   <a class="error-message-create">{{ $errors->first('password')}}</a>
                @endif
            </p>
            <br>
            <p class= "input-elea">
                <input type="password" name="password" class="input-field" placeholder="password"/>
            </p>
           
                        
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">電話番号</span>
                @if($errors->has('phone_number'))
                     <a class="error-message-create">{{ $errors->first('phone_number') }}</a>
                @endif
            </p>
           
            <br>
            <p class= "input-elea">
                <div class="phone_input_group">
                    <input type="text" id="phone_part1" name="phone_part1" class="input-field" placeholder="000" maxlength="3" value="{{ old('phone_part1') }}">
                    -
                    <input type="text" id="phone_part2" name="phone_part2" class="input-field" placeholder="0000" maxlength="4" value="{{ old('phone_part2') }}">
                    -
                    <input type="text" id="phone_part3" name="phone_part3" class="input-field" placeholder="0000" maxlength="4" value="{{ old('phone_part3') }}">
                </div>
            </p>
           
            
            <p class="fill">
                <span class="required">必須</span>
                <span class="itemName">郵便番号</span>
                @if($errors->has('postal_code'))
                    <a class="error-message-create">{{ $errors->first('postal_code') }}</a>
                @endif                
            </p>
            <br>
            <p class= "input-elea">
                <div class = "postal-code-group">
                    <input type="tel" id="postal_part1" name="postal_part1" class="input-field" placeholder="123" maxlength="3" pattern="\d*" autocomplete="postal-code" value="{{ old('postal_part1') }}" >
                    -
                    <input type="tel" id="postal_part2" name="postal_part2" class="input-field" placeholder="4567" maxlength="4" pattern="\d*" autocomplete="postal-code" value="{{ old('postal_part2') }}"  >
                </div>   
            </p>
           


            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">都道府県</span>
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

              
            <p class= "input-elea">
                <select id="prefecture" name="prefecture" class="prefecture_elea">
                    <option value="">都道府県名を選んで下さい</option>
                    @foreach($prefectures as $p)
                        <option value="{{ $p }}" {{ (old('prefecture')??'') == $p ? 'selected' : '' }}>
                            {{ $p }}
                        </option>
                    @endforeach
                </select>
            </p>

            
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">市区町村</span>
                @if($errors->has('city'))
                        <a class="error-message-create">{{ $errors->first('city')}}</a>
                @endif

            </p>
            <br>
            <p class= "input-elea">
                <input type="text" name="city" class="input-field" placeholder="市区町村" value="{{ old('city')}}" />
            </p>         
            
            <p class = "fill">
                <span class="required">必須</span>
                <span class="itemName">番号・アパート名</span>
                @if($errors->has('address'))
                        <a class="error-message-create">{{ $errors->first('address')}}</a>
                @endif
            </p>
            <br>
            <p class= "input-elea">
                <input type="text" name="address" class="input-field"  placeholder="番号・アパート名" value="{{ old('address')}}" />
            </p>          

            
            <p class = "fill">
                <span class="itemName">備考欄</span>
            </p>
            <br>
            <p class= "input-elea">
                <textarea name="remarks" class="remarksColumn">{{ old('remarks')}}</textarea>
            </p>
            <br>
              <button type="submit" class="new_registration_button">登録する</button>
            </form>
        </div>
</div> 
@endsection
