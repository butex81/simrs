<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class poliklinik extends Sximo  {
	
	protected $table = 'poliklinik';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT poliklinik.* FROM poliklinik  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE poliklinik.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
