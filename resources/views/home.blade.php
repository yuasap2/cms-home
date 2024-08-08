@extends('layouts.app')

@section('content')
<div class="">
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
            <header>x</header>     
            <ul>
                <li><a href="#" class="sidebar-home">HOME</a></li>
                <li><a href="#" class="sidebar-register">会員登録</a></li>
            </ul>
      </div>
  <div class="home">
      <header class="header">管理者</header>
      <div class="main">
       <div class="content">
            <div class="content-top">TOP</div>
            <div class="content-home">HOME

            </div>
       </div>
       
    </div>
    
</div>
@endsection
