<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class dokter extends Sximo  {
	
	protected $table = 'dokter';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dokter.* FROM dokter  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dokter.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
