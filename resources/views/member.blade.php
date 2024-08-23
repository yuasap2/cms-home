@extends('layouts.app')

@section('content')

    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
   
  <body>

     <div class="sidebar">
            <header></header>     
            <ul>
            <button type="button" id="projectNavTrigger" class="project-nav-trigger">
            <span class="trigger-icon"><span class="trigger-icon__inner">
            <span class="trigger-icon__line"></span><span class="_assistive-text">Close</span></span></span>
             </button>

              
                <li><span class="material-symbols-outlined">home</span><i class="fa-solid fa-house"></i>
                <a href="{{ route('home') }}" class="sidebar-home">HOME</a></li>
                <li><span class="material-symbols-outlined">local_post_office</span>
                <a href="{{ route('member') }}" class="sidebar-register">会員登録2
                </a></li>
            </ul>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            
        </div>
  <div class="home">
      <header class="administrator">管理者</header>
      <div class="main">
       <div class="content">
            <div class ="content-top">TOP</div>
            <div class ="content-home">HOME
                <div class ='member'>
                    <header class = 'member2'>会員登録
                        <header class =>会員登録</header>
                    </header>
                </div>
            </div>
            </div>
       </div>
       
    </div>
</body>

@endsection
