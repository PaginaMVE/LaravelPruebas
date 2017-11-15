<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    //Mass assignments
	protected $fillable = ["status"];

	public function productsSize(){
		return $this->id;
	}

    public static function findOrCreateBySessionID($shopping_cart_id){
    	if($shopping_cart_id)
    		//Buscar el carrito de compras con este id
    		return ShoppingCart::findBySession($shopping_cart_id);
    	else
    		//Crear un carrito de compras
    		return ShoppingCart::createWithoutSession();
    }
	
	public static function findBySession($shopping_cart_id){
		return ShoppingCart::find($shopping_cart_id);
	}

	public static function createWithoutSession(){

		return ShoppingCart::create([
			"status" => "incompleted"
		]);
	}
}
