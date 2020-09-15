<?php

namespace App\Models;
// サンプル　2020/09/10 CRUD処理理解のため石田作成。プロジェクト終了後削除する。

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $fillable = [
        'name',
        'memo',
    ];
}
