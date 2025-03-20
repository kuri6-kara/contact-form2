<?php
// テーブルを操作するにはモデルを作成
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'tel',
        'content'
    ];
    // contactsテーブルのカラムで、操作可能とするものを上記のように指定

}
