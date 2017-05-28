<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('user_id')->nullable();
            $table->unsignedBigInteger('merchant_id')->nullable()->index();
            $table->timestamps();

            /*
                $table->foreign('user_id', 'fk_brands_user_id')->references('id')->on('users')
                    ->onUpdate('cascade')->onDelete('cascade');

                $table->foreign('merchant_id', 'fk_brands_merchant_id')->references('id')->on('merchants')
                    ->onUpdate('cascade')->onDelete('cascade');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_brands');
    }
}
