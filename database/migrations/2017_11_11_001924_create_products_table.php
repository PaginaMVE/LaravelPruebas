<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //Realiza cambios
        Schema::create('products', function (Blueprint $tabla) {
            $tabla->increments('id');
            
            $tabla->integer('user_id')->unsigned()->index();
            $tabla->string('title');
            $tabla->text('description'); //Tiene mas capacidad que string
            $tabla->decimal('pricing',9,2); //Centavos----El primer argumento es el nombre del campo, el segundo argument es la preciosion (cuantos numeros aceptara en total todo el campo) y el tercero la escala (dos de ellos seran puntos decimales).


            $tabla->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        //Reinvierte los cambios de up
        Schema::dropIfExists('products');
    }
}
