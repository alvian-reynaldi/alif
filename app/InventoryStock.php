<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryStock extends Model
{
    protected $fillable = ['assetid', 'branchid', 'jumlah', 'jumlahmin'];
}
