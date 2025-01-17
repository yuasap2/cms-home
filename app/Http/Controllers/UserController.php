<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
        public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

        public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'ユーザーを削除しました。');
    }

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
            $user->update([
                'name' => $validateData['member_name'],
                'email' => $validateData['email'],
                'phone_number' => $validateData['phone_number'],
                'prefecture' => $validateData['prefecture'],
                'city' => $validateData['city'],
                'address' => $validateData['address']
            ]);

            return redirect()->route('users.edit', $id)->with('success', 'ユーザー情報が更新されました。');
        } catch (\Exception $e) {
            return redirect()->route('users.edit', $id)->with('error', 'ユーザー情報が更新に失敗しました。');
        }
    }

}
