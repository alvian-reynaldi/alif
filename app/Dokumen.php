<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
	public function rules()
	{
		return [
			'docno' => 'required|unique:posts|max:255',
			'docname' => 'required',
		];
	}

    protected $fillable = ['categoryid', 'docno', 'docname', 'filename', 'status', 'owner', 'viewed', 'branchid'];

    public static function status()
    {       
		$status = array(
			// '0' => 'Suspend',
			// '1' => 'Open',
			// '2' => 'Restricted',
			// '3' => 'Classified',
			'4' => 'E-KTP',
			'5' => 'Kartu Keluarga',
			'6' => 'Dok. Usaha dan Keuangan',
			'7' => 'Offering Letter',
			'8' => 'Akad Qardh',
			'9' => 'Akad Ijarah Multijasa',
			'10' => 'Surat Permohonan Pembatalan SPPH',
			'11' => 'Surat Kuasa Pembatalan SPPH',
			'12' => 'Surat Kuasa Auto Debet',
			'13' => 'Jadwal Angsuran Qardh',
			'14' => 'Jadwal Angsuran Ijarah Multijasa',
			'15' => 'SPRP',
			'16' => 'TTUN',
		);
		return $status;
    }
}
