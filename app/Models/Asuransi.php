<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class asuransi extends Sximo  {
	
	protected $table = 'penjab';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT penjab.* FROM penjab  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE penjab.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
