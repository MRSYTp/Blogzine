<?php

namespace App\Models\Dashboard;


use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    protected $fillable = [
        'user_id',
        'file_name',
        'type',
    ];

}
