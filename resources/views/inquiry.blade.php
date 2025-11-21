
@extends('layouts.app')

@section('content')
           <div class= "table-part">
                <header class= "account-name">お問い合わせ一覧</header>
                <!-- <div class="new-register">
                    <a href="new_registration" class="btn-solid">
                        <span class="registration">新規登録</span>
                    </a>
                </div> -->
                <table class="inquiryThead">
                <!--  テーブルのヘッダーはこの中に記述 
                 <thead>というタグで囲むのが一般的  -->
                    <thead>
                    <!-- <tr> => テーブルロー => 1行分のデータを表す -->
                        <tr>
                        <!-- <th> => テーブルヘッダー => 1列分のデータを表す  -->
                            <th class = "itemInquiry">編集</th>
                            <th class = "itemInquiry">ステータス</th>
                            <th class = "itemInquiry">会社名</th>
                            <th class = "itemInquiry">氏名</th>
                            <th class = "itemInquiry">電話番号</th>
                         </tr>
                    </thead>
                    <!-- {{-- テーブルのボディ部分はこの中に記述 --}}
                    {{-- <tbody>というタグで囲むのが一般的 --}} -->
                    <tbody>
                    <!-- {{-- 3. Controller側から受け取ったデータをforeachで回して表示 --}} -->
                    @foreach ($inquiries as $inquiry)
                         <!-- {{-- <tr> => テーブルロー => 1行分のデータを表す --}} -->
                        <tr>
                            <!-- {{-- <td> => テーブルデータ => 1セル分のデータを表す --}} -->
                            <td><a href="{{ route('inquiry.edit' , $inquiry->id) }}"  onclick="return confirm('編集しますか？');">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </td>
                            
                            <td>{{ $inquiry->status }}</td>
                            <td>{{ $inquiry->company }}</td>
                            <td>{{ $inquiry->name }}</td>
                            <td>{{ $inquiry->phone_number }}</td>
                        </tr>
                    @endforeach
                    </tbody>  
                </table>
                  <!-- ページネーションリンク -->
                    <div class="pagination-wrapper">
                        {{-- {{ $users->links() }} --}}
                         {{-- 最初のページ --}}
                        @if ($inquiries->onFirstPage())
                            ≪ 前
                        @else
                            <a href="{{ $inquiries->previousPageUrl() }}">≪ 前</a>
                        @endif

                        @if ($inquiries->hasMorePages())
                            <a href="{{ $inquiries->nextPageUrl() }}">次 ≫</a>
                        @else
                            次 ≫
                        @endif
                    </div>
            </div>
@endsection
