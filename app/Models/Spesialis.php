<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class spesialis extends Sximo  {
	
	protected $table = 'spesialis';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT spesialis.* FROM spesialis  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE spesialis.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
