<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientButton extends Model
{
    use HasFactory;
    protected $table = 'clientButtons';
    protected $guarded = [];
}
