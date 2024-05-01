@section('content')
<form method="POST" action="{{ route('contact.send')}}">
    @csrf

    <label>メールアドレス</label>
    {{ $input['email']}}
    <input name="{{ $inputs['email']}}" type="hidden">

    <label>タイトル</label>
    {{ $input['title']}}
    <input name="{{ $inputs['title']}}" type="hidden">


    <label>お問い合わせ内容</label>
    {!! nl2br(e($inputs['body']))!!}
    <input name="body" value="{{ $inputs['body'] }}" type="hidden">

    <button type="submit" name="action" value="back">入力内容修正</button>
    <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection