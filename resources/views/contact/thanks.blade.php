
    @extends('layouts.base')

    @section('content')
    <form method="POST">
    <div class= "Form-thanks">
      送信完了しました
    </div>

    <div class="Form-confirm">
        <p>
            会社名: {{ $inputs['company']}}
        </p>
    </div>

    <div class="Form-confirm">
        <p>
            氏名 :{{ $inputs['name']}}
        </p>
    </div>

    <div class="Form-confirm">
        <p>
            電話番号:{{ $inputs['telephone']}}
        </p>
     </div>

    <div class="Form-confirm">
        <p>
            メールアドレス: {{ $inputs['email']}}
        </p>
    </div>
    
    <div class="Form-confirm">
        <p>
            生年月日:{{ $inputs['date']}}
        </p>
    </div>

    <div class="Form-confirm">
        <p>
            性別:{{ $inputs['gender'] == 'man' ? '男' : '女' }}
        </p>
    </div>

    
    <div class="Form-confirm">
        <p>
            職業:{{ $inputs['job']}}
        </p>
    </div>
     
    <div class="Form-confirm">
        <p>
            お問い合わせ内容: {!! nl2br(e($inputs['body'])) !!}
        </p>
    </div>

    <button class=Form-Btn type="button"  onclick="history.back(-2)">戻る</button>
    @endsection
