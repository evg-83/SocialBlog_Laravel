<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    use HasFactory;
    //Привязка таблицы
    protected $table = 'post_user_likes';
    //Чтобы изменять данные в таблице
    protected $guarded = false;
}
