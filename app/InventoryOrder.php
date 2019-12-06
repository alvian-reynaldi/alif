<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryOrder extends Model
{
    protected $fillable = ['assetid', 'branchid', 'jumlah', 'status', 'pengentri', 'waktuentri', 'approver', 'waktuapprove', 'catatan', 'fileusulan', 'endorsenote'];

    public static function status()
    {       
		$status = array(
			'1' => 'Entry',
			'2' => 'Approved BM',
			'3' => 'Rejected BM',
			'4' => 'Approved GS HO',
			'3' => 'Rejected GS HO',
		);
		return $status;
    }
}
