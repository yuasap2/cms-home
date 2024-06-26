@extends('layouts.base')

@section('content')

    
</head>

<form method="POST" action="{{ route('contact.confirm')}}">
    @csrf
   <div class="Form">
        <div class="Form-Item">
           <p class="Form-Item-Label">
             <span class="Form-Item-Label-Required">必須</span>会社名
           </p>
            <input class=Form-Item-Input
                   name="company"
                   value="{{ old('company')}}"
                   type="text"
                   placeholder="例）株式会社〇〇">
            @if($errors->has('company'))
                    <p class="error-message">{{ $errors->first('company')}}</p>
            @endif
            
        </div>
   </div>
    
   <div class="Form"> 
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <span class="Form-Item-Label-Required">必須</span><label>氏名</label>
            </p>
            <input class=Form-Item-Input
                    name="name"
                    value="{{ old('name')}}"
                    type="text"
                    placeholder="例）山田太郎">
            @if($errors->has('name'))
                    <p class="error-message">{{ $errors->first('name')}}</p>
             @endif
        </div>
    </div>
   
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">  
             <span class="Form-Item-Label-Required">必須</span><label>電話番号</label>
            </p>
             <input class=Form-Item-Input
                    name="telephone"
                    value="{{ old('telephone') }}"
                    type="text"
                    placeholder="例）000-0000-0000">
             @if($errors->has('telephone'))
                 <p class="error-message">{{ $errors->first('telephone') }}</p>
             @endif
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">必須</span><label>メールアドレス</label>
            </p>
            <input class=Form-Item-Input
                   name="email"
                   value="{{ old('email')}}"
                   type="text"
                   placeholder="例）example@email.com">
            @if($errors->has('email'))
                 <p class="error-message">{{ $errors->first('email')}}</p>
            @endif
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
          <p class="Form-Item-Label">
             <span class="Form-Item-Label-Required">必須</span><label>生年月日</label>
          </p>
          <input  name="date" class=Form-Item-Input type="date" class=input-area
                 value="{{ old('date')}}">
        @if ($errors->has('date'))
            <p class="error-message">{{ $errors->first('date')}}</p>
        @endif
        </div>
    </div>
        
        <div class="Form">
             <div class="Form-Item">
                <p class="Form-Item-Label">
                    <span class="Form-Item-Label-Required">必須</span><label>性別</label>
                </p>
                <div class=Form-Item-gender>
                    <input type="radio" name="gender" value="man" {{ old('gender') == 'man' ? 'checked'  : '' }}>男
                    <input type="radio" name="gender" value="woman"{{ old('gender') == 'woman' ? 'checked' : '' }}>女
                </div>
             </div>
                @if ($errors->has('gender'))
                    <p class="error-message">{{ $errors->first('gender')}}</p>
                @endif
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
          <p class="Form-Item-Label">
            <span class="Form-Item-Label-Required">必須</span><label>職業</label>
          </p>
            <select class=Form-Item-Input name="job">
            <option value="">職業を選択してください</option>
            <option value="公務員" {{ old('job') == '公務員' ? 'selected' : '' }}>公務員</option>
            <option value="経営者・役員" {{ old('job') == '経営者・役員' ? 'selected' : '' }}>経営者・役員</option>
            <option value="会社員" {{ old('job') == '会社員' ? 'selected' : '' }}>会社員 </option>
            <option value="自営業" {{ old('job') == '自営業' ? 'selected' : '' }}>自営業</option>
            <option value="自由業" {{ old('job') == '自由業' ? 'selected' : '' }}>自由業</option>
            <option value="専業主婦" {{ old('job') == '専業主婦' ? 'selected' : '' }}>専業主婦</option>
            <option value="パート・アルバイト" {{ old('job') == 'パート・アルバイト' ? 'selected' : '' }}>パート・アルバイト</option>
            <option value="学生"{{ old('job') == "学生" ? 'selected' : "" }}>学生</option>
            <option value="その他"{{ old('job') == "その他" ? 'selected' : "" }}>その他</option>
            </select>
        @if ($errors->has('job'))
            <p class="error-message">{{ $errors->first('job')}}</p>
        @endif
        </div>
    </div>


    <div class="Form-Item">
        <div class="Form-Item-Label inMsg">
           <p class="Form-Item-Label">
              <span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
           </p>
        <textarea class=Form-Item-Textarea name="body" cols="40" rows="4">{{old('body')}}</textarea><br>
        @if($errors->has('body'))
        <p class="erorrs-message">{{ $errors->first('body')}}</p>
        @endif
    </div>
   </div>

    <button type="submit" class=Form-Btn >確認する</button>
</form>
@endsection


