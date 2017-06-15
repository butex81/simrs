<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pasien extends Sximo  {
	
	protected $table = 'pasien';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT pasien.* FROM pasien  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE pasien.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
