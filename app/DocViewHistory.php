<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocViewHistory extends Model
{
    protected $fillable = ['docid', 'viewedby'];
}
