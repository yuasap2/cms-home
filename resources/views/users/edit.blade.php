@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>ユーザー編集</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"
                       value="{{ old('name', $user->name) }}">
                       @error('name')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}"
                       value="{{ old('email', $user->email) }}">
                       @error('email')
                            <div class="email">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="phone_number">電話番号</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $user->phone_number }}"
                       value="{{ old('phone_number', $user->phone_number) }}">
                       @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="postal_code">郵便番号</label>
                <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ $user->postal_code }}"
                       value="{{ old('postal_code', $user->postal_code) }}">
                       @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="prefecture">都道府県</label>
                <input type="text" name="prefecture" id="prefecture" class="form-control" value="{{ $user->prefecture }}"
                       value="{{ old('prefecture', $user->prefecture) }}">
                       @error('prefecture')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="city">市町村</label>
                <input type="text" name="city" id="city" class="form-control" value="{{ $user->city }}"
                       value="{{ old('city', $user->city) }}">
                       @error('city')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="address">番地・アパート名</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}"
                       value="{{ old('address', $user->address) }}">
                       @error('address')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>

            <div class="form-group">
                <label for="remarks">備考欄</label>
                <input type="text" name="remarks" id="remarks" class="form-control" value="{{ $user->remarks }}"
                       value="{{ old('remarks', $user->remarks) }}">
                       @error('address')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
            </div>




            <button type="submit" class="btn btn-primary">更新</button>
        </form>
    </div>
@endsection
