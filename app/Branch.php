<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['branchcode', 'branchname', 'branchtype', 'address'];

    
}
