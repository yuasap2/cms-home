<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{

    public function new_registration()
    {
        return view('registration.create'); // フォーム表示用
    }

    public function store(Request $request)
    {


        // 送信されたデータを確認
        // \Log::info('フォーム送信データ: ', $request->all());
        // dump($request->get('phone_part1') . '-' . $request->get('phone_part2'). '-' . 
        // $request->get('phone_part3'));
        
        // dd($request->all());

         // 電話番号と郵便番号が空かどうかチェック（まとめエラー）

     $validator = Validator::make($request->all(), [
            'member_name' => 'required|string|max:50',
            'furigana' => 'required|string|max:50',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/'
            ],            
            'phone_part1' => 'regex:/^\d{1,3}$/',
            'phone_part2' => 'regex:/^\d{1,4}$/',
            'phone_part3' => 'regex:/^\d{1,4}$/',
            'postal_part1' => 'regex:/^\d{3}$/',
            'postal_part2' => 'regex:/^\d{4}$/',
            // 'postal_code' => 'required|string|max:7',
            'prefecture' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'remarks' => 'nullable|string|max:255'
        ],[
         'member_name.required' => '※氏名は必須です。',
         'member_name.max' => '※氏名は :max文字以内でお願いします。',
         'furigana.required' => '※フリガナは必須です。',
         'furigana.max' => '※フリガナは :max文字以内でお願いします。',
         'email.required' => '※メールアドレスは必須です。',
         'email.max' => '※メールアドレスは :max文字以内でお願いします。',
         'password.required' => '※パスワードは必須です。',
         'password.regex' => '※パスワードは半角英数字で入力してください。',
         'prefecture.required' => '※都道府県名は必須です。',
         'city.required' => '※市区町村名は必須です。',
         'address.required' => '※番号・アパート名は必須です。',
        ]);

         if (
             empty($request->input('phone_part1')) ||
             empty($request->input('phone_part2')) ||
             empty($request->input('phone_part3'))
         ) {
            $validator->after(function ($validator) {
                $validator->errors()->add('phone_number','※電話番号は必須項目です。');
            });
           }
 
         if (
             empty($request->input('postal_part1')) ||
             empty($request->input('postal_part2'))
         ) {
            $validator->after(function ($validator) {
                $validator->errors()->add('postal_code','※郵便番号は必須項目です。');
         });
        }
        //    dd($request->all());

        // 最終的なバリデーションチェック
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
       

        // 電話番号を結合
        $phone_number = $request->input('phone_part1') . '-' .
                        $request->input('phone_part2') . '-' .
                        $request->input('phone_part3');

        // 郵便番号を結合
        $postal_code =  $request->input('postal_part1') . '-' .
                        $request->input('postal_part2');



        
        // \Log::error('結合後の電話番号: ' . $phone_number);
        // \Log::error('結合後の郵便番号: ' . $postal_code);
       
        try{
            // データの保存
           User::create([
               'member_name'  => $request->input('member_name'),
               'furigana'     => $request->input('furigana'),
               'email'        => $request->input('email'),
               'password'     => bcrypt($request->input('password')),//パスワードを暗号化
               'phone_number' => $phone_number,
               'postal_code'  => $postal_code,
               'prefecture'   => $request->input('prefecture'),
               'city'         => $request->input('city'),
               'address'      => $request->input('address'),
               'remarks'      => $request->input('remarks'),
           ]);

            // 成功ログ
            // \Log::info('新規登録成功: ', $validatedData);

            return redirect()->route('users.index')->with('success', '登録が完了しました！');

        } catch (\Exception $e) {
            \Log::error('登録エラー: ' . $e->getMessage());
            return redirect()->back()->with('error', '登録に失敗しました。もう一度お試しください');
        }
    }

}
