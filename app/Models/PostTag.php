<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    //Привязка таблицы
    protected $table = 'post_tags';

    //Чтобы изменять данные в таблице
    protected $guarded = false;
}
