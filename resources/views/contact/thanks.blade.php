
    @extends('layouts.base')

    @section('content')
    <div class= "FormThanks">
      送信完了しました
    </div>

    <div class="FormConfirm">
        <p>
            会社名: {{ $inquiry['company']}}
        </p>
    </div>

    <div class="FormConfirm">
        <p>
            氏名 :{{ $inquiry['name']}}
        </p>
    </div>

    <div class="FormConfirm">
        <p>
            電話番号:{{ $inquiry['telephone']}}
        </p>
     </div>

    <div class="FormConfirm">
        <p>
            メールアドレス: {{ $inquiry['email']}}
        </p>
    </div>
    
    <div class="FormConfirm">
        <p>
            生年月日: 
            @if(!empty($inquiry['date']))
             {{ \Carbon\Carbon::parse($inquiry['date'])->format('Y-m-d') }}
            @endif{{ $inquiry['date'] ?? ''}}
        </p>
    </div>

    <div class="FormConfirm">
        <p>
            性別:{{ ($inquiry['gender'] ?? '') == 'man' ? '男' : '女' }}
        </p>
    </div>

    
    <div class="FormConfirm">
        <p>
            職業:{{ $inquiry['job'] ?? ''}}
        </p>
    </div>
     
    <div class="FormConfirm">
        <p>
            お問い合わせ内容: {!! nl2br(e($inquiry['body'] ?? '')) !!}
        </p>
    </div>

    <button class=Form-Btn type="button"  onClick="location.href=' http://127.0.0.1:8000/home/'">戻る</button>
    @endsection
