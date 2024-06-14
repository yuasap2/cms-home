@extends('layouts.base')

@section('content')
<form method="POST" action="{{ route('contact.confirm')}}">
    @csrf
    <style type="text/css">
         .Form-Item {
            border-top: 1px solid #ddd;
            padding-top: 24px;
            padding-bottom: 24px;
            width: 2500px;
            display: flex;
            align-items: center;   
        }

        .Form-Item2 {
            border-top: 1px solid #ddd;
            padding-top: 24px;
            padding-bottom: 24px;
            width: 2500px;
            display: flex;
        }


        .Form-Item-Input {
            border: 0px ;
            border-radius: 6px;
            margin-left: 40px;
            padding-left: 1em;
            padding-right: 1em;
            height: 48px;
            flex: 1;
            width: 100%;
            max-width: 410px;
            background: #eaedf2;
            font-size: 18px;
            margin: 0 1000px 0 auto;
           
        }

        .Form-Item-Input2 {
            border: 1px #2b2b2b solid;
            border-radius: 6px;
            margin-left: 40px;
            padding-left: 1em;
            padding-right: 1em;
            height: 48px;
            flex: 1;
            width: 100%;
            max-width: 410px;
            font-size: 18px;
            margin: 0 1000px 0 auto;
        }

        .Form-Item-gender {
            border: 0px;
            border-radius: 6px;
            margin-left: 40px;
            padding-left: 1em;
            padding-right: 1em;
            height: 48px;
            flex: 1;
            width: 100%;
            max-width: 410px;
            font-size: 18px;
            margin: 0 1000px 0 auto;
        }
        
        
        .input-area {
            border: 0px ;
            background: #eaedf2;
            border-radius: 6px;
        }
       
        input[type="text"] ,input[type="email"],select {
            width: 300px;
            height: 30px;
        }
       
        textarea{
            width: 300px;
            height: 400px;
            border: 0px ;
            border-radius: 6px;
            margin-left: 40px;
            padding-left: 1em;
            padding-right: 1em;
            height: 48px;
            flex: 1;
            width: 100%;
            max-width: 410px;
            background: #eaedf2;
            font-size: 18px;
            margin: 0 1000px 0 auto;
            background: #eaedf2;
        
        }
        
        label{
            font-weight: bold;
            font-size: 20px;
        }
       
      
        .required {
            color: #FFFFFF;
            background-color: #82c7b7;
            width: 50px;
            height: 40px;
            text-align: center;
            border-radius : 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            margin-left: 500px;
            margin-right: 8px;
            min-width: 60px;
        }
       
         
     
        .btn{
            border: 0px ;
            font-weight: bold;
            font-size: 20px;
            color: #FFFFFF;
            background-color: #82c7b7;
            width: 200px;
            height: 60px;
            text-align: center;
            border-radius : 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 0 auto;
            cursor: pointer;
            transition: .4s;
            max-width: 180px;
            
        }

        .btn:hover {
            background-color :#66FFFF;
            border-color: #cde585;
            color: #FFF;
            opacity: 0.3;
        }

       

       

</style>
<!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
    <div class="Form-Item">
    <p class=required>必須</p><label>会社名</label>
    <input class=Form-Item-Input
       name="company"
       value="{{ old('company')}}"
       type="text"
       placeholder="例）株式会社〇〇"><br>
    @if($errors->has('company'))
       <p class="error-message">{{ $errors->first('company')}}</p>
    @endif
    </div>
    
    <div class="Form-Item">
    <p class=required>必須</p><label>氏名</label>
    <input class=Form-Item-Input
       name="name"
       value="{{ old('name')}}"
       type="text"
       placeholder="例）山田太郎"><br>
    @if($errors->has('name'))
       <p class="error-message">{{ $errors->first('name')}}</p>
    @endif
    </div>
   
    <div class="Form-Item">
    <p class=required>必須</p><label>電話番号</label>
    <input class=Form-Item-Input
       name="telephone"
       value="{{ old('telephone')}}"
       type="text"
       placeholder="例）000-0000-0000"><br>
    @if($errors->has('telephone'))
       <p class="error-message">{{ $errors->first('telephone')}}</p>
    @endif
    </div>


    <div class="Form-Item">
    <p class=required>必須</p><label>メールアドレス</label>
    <input class=Form-Item-Input
       name="email"
       value="{{ old('email')}}"
       type="text"
       placeholder="例）example@email.com"><br>
    @if($errors->has('email'))
       <p class="error-message">{{ $errors->first('email')}}</p>
    @endif
    </div>

    <div class="Form-Item">
    <p class=required>必須</p><label>生年月日</label>
    <input class=Form-Item-Input2 type="date" value="YYYY-MM-DD" name="example1" class=input-area
        name="title"
        value="{{ old('title')}}"><br>
    <!-- @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title')}}</p>
    @endif -->
    </div>

    <div class="Form-Item">
        <p class=required>必須</p><label>性別</label>
    <dd class=Form-Item-gender>
        <input type="radio" name="gender" value="man">男
        <input type="radio" name="gender" value="woman">女<br>
    </dd>
    </div>
    @if ($errors->has('gender'))
        <p class="error-message">{{ $errors->first('gender')}}</p>
    @endif
    </div>

    <div class="Form-Item">
    <p class=required>必須</p><label>職業</label>
        <select class=Form-Item-Input2 name="job">
        <option value="">職業を選択してください</option>
        <option value="公務員">公務員</option>
        <option value="経営者・役員">経営者・役員</option>
        <option value="会社員">会社員</option>
        <option value="自営業">自営業</option>
        <option value="自由業">自由業</option>
        <option value="専業主婦">専業主婦</option>
        <option value="パート・アルバイト">パート・アルバイト</option>
        <option value="学生">学生</option>
        <option value="その他">その他</option>
        </select><br>
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('job')}}</p>
    @endif
    </div>

    <div class="Form-Item2">
    <p class=required>必須</p><label>お問い合わせ内容</label>
    <textarea class=Form-Item-Input3 name="body" cols="40" rows="4">{{old('body')}}</textarea><br>
    @if($errors->has('body'))
       <p class="erorrs-message">{{ $errors->first('body')}}</p>
    @endif
   </div>
    <button type="submit" class=btn >確認する</button>
</form>
@endsection


