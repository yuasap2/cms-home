
    @extends('layouts.base')

    @section('content')
    < class= Form-Item>
    @section('content')
    {{ __('送信完了しました') }}
    

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
             <label>会社名</label>
            </p>
            {{('company')}}
            <input name="company" value="{{ $inputs['company'] }}" type="hidden">
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
              <label>氏名</label>
            </p>
            {{ ( $'name')}}
         </div>
     </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>電話番号</label>
            </p>
            {{ ('telephone')}}
        </div>
     </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>メールアドレス</label>
            </p>
            {{ ('email')}}
        </div>
    </div>
    
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>生年月日</label>
            </p>
            {{ ('date')}}
        </div>
    </div>

    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
                <label>性別</label>
            </p>
            <dd>{{ ('gender' == 'man' ? '男' : '女' )}}</dd>
        </div>
    </div>

    
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
              <label>職業</label>
            </p>
            {{ ('job')}}
        </div>
    </div>
     
    <div class="Form">
        <div class="Form-Item">
            <p class="Form-Item-Label">
               <label>お問い合わせ内容</label>
            </p>
            {!! nl2br(e($inputs['body'])) !!}
        </div>
    </div>
    @endsection
