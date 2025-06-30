<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class InquiryController extends Controller
{
// ユーザー一覧を表示
    public function index()
    {
        // ユーザー情報を全件取得
        $users = User::all();

        // ビューにデータを渡して返す
        return view('inquiry', compact('users'));
    }

        // ユーザー編集ページを表示
        public function edit(User $user)
    {
        return view('users.inquiry_edit', compact('user'));
    }

        // ユーザー削除
        public function destroy(User $user)
    {
        $user->delete();

        // 削除後に users.index へリダイレクト
        return redirect()->route('users.index')->with('success', 'ユーザーを削除しました。');
    }
   
        // ユーザー情報を更新
        public function update(Request $request, $id)
        {
            $user = User::findOrFail($id);

            // バリデーションとデータ更新処理
            $validatedData = $request->validate([
                'member_name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone_number' => 'required|string|max:15',
                'prefecture' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]);

            try {
                // データの更新
                $user->update($validatedData);

                // 更新後に一覧ページにリダイレクト
                return redirect()->route('users.index')->with('success', 'ユーザー情報が更新されました。');
            } catch (\Exception $e) {
                // エラーログを記録し、エラーメッセージを返す
                \Log::error('ユーザー情報の更新エラー: ' . $e->getMessage());
            return redirect()->route('users.edit', $id)->with('error', 'ユーザー情報の更新に失敗しました。');
        }
    }
// public function index()
// {
//     $users = User::all(); 
//     return view('inquiry',compact('users'));
// }

}
