<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kebutuhan extends Model
{
    protected $fillable = ['assetid', 'jumlah', 'pengentri', 'waktuinput'];
}
