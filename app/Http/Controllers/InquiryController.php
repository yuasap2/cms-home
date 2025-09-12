<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{

    public function runSeeder()
    {
        \App\Models\Inquiry::factory(10)->create();
        return redirect()->route('inquiry.index')->with('success', 'ダミーデータを10件追加しました。');
    }


// ユーザー一覧を表示
    public function index()
    {
        
        // 1ページ10件でページネーション
        $inquiries = Inquiry::paginate(10);

        // ビューにデータを渡して返す
        return view('inquiry', compact('inquiries'));
    }

        // ユーザー編集ページを表示
        public function edit(Inquiry $inquiry)
    {
        return view('inquiry.edit', compact('inquiry'));
    }

        // ユーザー削除
        public function destroy(Inquiry $inquiry)
    {
        $inquiry->delete();

        // 削除後に inquiry.index へリダイレクト
        return redirect()->route('inquiry.index')->with('success', 'ユーザーを削除しました。');
    }
   
        // ユーザー情報を更新
        public function update(Request $request, $id)
        {
            $inquiry = Inquiry::findOrFail($id);

            // バリデーションとデータ更新処理
            $validatedData = $request->validate([
                'status' => 'required|string',
                'inquiry_details' => 'nullable|string',
                'remarks' => 'nullable|string',
                // 'member_name' => 'required|string|max:255',
                // 'email' => 'required|email|max:255',
                // 'phone_number' => 'required|string|max:15',
                // 'postal_code' => 'nullable|string|max:20', 
                // 'prefecture' => 'required|string|max:255',
                // 'city' => 'required|string|max:255',
                // 'address' => 'required|string|max:255',
                // 'remarks' => 'nullable|string|max:1000',
            ]);

            try {
                // データの更新
                $inquiry->update($validatedData);

                // 更新後に一覧ページにリダイレクト
                return redirect()->route('inquiry.index')->with('success', 'ユーザー情報が更新されました。');
            } catch (\Exception $e) {
                // エラーログを記録し、エラーメッセージを返す
                \Log::error('ユーザー情報の更新エラー: ' . $e->getMessage());
            return redirect()->route('inquiry.edit', $id)->with('error', 'ユーザー情報の更新に失敗しました。');
        }
    }

}
