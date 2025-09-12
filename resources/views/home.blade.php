@extends('layouts.app')

@section('content')

 <body>
            <div class="main-part">
                <header class="d-flex justify-content-end align-items-center administrator">
                    <h3 class="me-2">管理者</h3>
                    <form method="POST" action="{{ route('logout') }}" class="logout" >
                         @csrf
                         <button type="submit" class="btn-logout">ログアウト</button>
                    </form> 
                </header>
                <div class="content">
                    <h3 class ="content-top">TOP</h3>
                    <h2 class="home-screen">HOME</h2>
                    {{-- <div class ="content-home">
                        <div class ='member'>
                            <div>
                                <div class = 'member-registration'>会員登録</div>
                                <div class = 'membership-roll'>会員一覧</div>
                             </div>
                        </div>
                    </div> --}}
                 </div>                   
            </div>
</body>
    
              


@endsection
