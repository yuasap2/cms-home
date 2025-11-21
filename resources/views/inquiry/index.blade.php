@extends('layouts.app')

@section('content')
   
    <div class = inquiry-part>
     <h1>ユーザー一覧</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>アクション</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiries->id }}</td>
                        <td>{{ $inquiries->name }}</td>
                        <td>{{ $inquiries->email }}</td>
                        <td>
                            <a href="{{ route('inquiry.edit', $inquiry->id) }}">編集</a>
                            <form action="{{ route('inquiry.destroy', $inquiry->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('削除しますか？');">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
