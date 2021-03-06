<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_storage', function (Blueprint $table) {
            $table->integer( 'ingredient_id' )->unsigned();
            $table->integer( 'storage_id' )->unsigned();

            $table->decimal( 'amount' )->comment('Amount of the ingredient stored in the storage unit.');

            $table->timestamps();

            $table->foreign( 'ingredient_id' )->references( 'id' )->on( 'ingredients' );
            $table->foreign( 'storage_id' )->references( 'id' )->on( 'storages' );

            $table->primary( [ 'ingredient_id', 'storage_id' ] );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_storage');
    }
}
