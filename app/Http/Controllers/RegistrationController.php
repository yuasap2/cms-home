<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{

    public function new_registration()
    {
        return view('registration.create'); // フォーム表示用
    }

    public function store(Request $request)
    {


        // 送信されたデータを確認
        \Log::info('フォーム送信データ: ', $request->all());


        $validatedData = $request->validate([
            'member_name' => 'required|string|max:8',
            'furigana' => 'nullable|string|max:50',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'phone_number' => 'nullable|string|max:15',
            'postal_code' => 'nullable|string|max:10',
            'prefecture' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'remarks' => 'nullable|string|max:255'
        ]);

      

        try{
         // データの保存
        User::create([
            'member_name' => $validatedData['member_name'],
            'furigana' => $validatedData['furigana']?? null,
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),//パスワードを暗号化
            'phone_number' => $validatedData['phone_number'],
            'postal_code' => $validatedData['postal_code'],
            'prefecture' => $validatedData['prefecture'],
            'city' => $validatedData['city'],
            'address' => $validatedData['address'],
            'remarks' => $validatedData['remarks']
        ]);

         // 成功ログ
        \Log::info('新規登録成功: ', $validatedData);

        return redirect()->route('users.index')->with('success', '登録が完了しました！');
    } catch (\Exception $e) {
        // エラー発生時の処理
        \Log::error('登録エラー: ' . $e ->getMessage());
        return redirect() -> back() ->with('error','登録に失敗しました。もう一度お試しください。');
    }
}
}