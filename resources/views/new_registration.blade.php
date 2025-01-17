@extends('layouts.app')

@section('content')
   
  <body>
            <div class = "main-part">
              <header>アカウント一覧</header>
                <div class = "registration">
                   <p class = "fill">
                        会員名
                        <form>
                            <input type = "text" maxlength="8" class = "" />
                        </form>
                    </p>

                    <p class = "fill">
                        フリガナ
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>

                    <p class = "fill">
                        メールアドレス
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>
                   
                    <p class = "fill">                   
                        パスワード
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>
                    
                    <p class = "fill">
                        電話番号
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>

                    <p class = "fill">
                        郵便番号
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>

                    <p class = "fill">
                        都道府県
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>
                    
                    <p class = "fill">
                        市区町村
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>

                    <p class = "fill">
                        番号・アパート名
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p>
                    
                    <p class = "fill">
                        備考欄
                        <form>
                            <input type = "text" class = "" />
                        </form>
                    </p> 
                     
                    <form method="post">
                      @csrf
                      <input type = "submit" value ="登録する" class = "button">
                    </form>

                </div>                   
            </div>                
</body>


@endsection