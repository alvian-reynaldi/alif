<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['categoryid', 'assetcode', 'assetname', 'satuan', 'jumlah', 'jumlahmin'];

    public static function satuan()
    {       
		$satuan = array(
			'1' => 'Rim',
			'2' => 'Box',
			'3' => 'Pcs',
		);
		return $satuan;
    }
}
