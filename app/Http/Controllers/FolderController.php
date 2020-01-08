<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FolderController extends Controller
{
    public function showCreateForm()
    {
        return view('folders.create');
    }

    public function create(CreateFolder $request)
    {
        // フォルダモデルの空インスタンスを作成し、一時保存する。
        $folder = new Folder();

        // インスタンスのフォルダタイトルに入力値を代入する。
        $folder->title = $request->title;

        // ユーザーに紐づけて保存
        Auth::user()->folders()->save($folder);
        
        // 作成したフォルダのタスク一覧画面へ遷移する。
        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }
}
