<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable()->index();
            $table->timestamps();

            $table->foreign('parent_id', 'fk_categories_parent_id')->references('id')->on('product_categories')
                ->onUpdate('cascade')->onDelete('set null');

            $table->foreign('user_id', 'fk_categories_user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('set null');

            $table->foreign('shop_id', 'fk_categories_shop_id')->references('id')->on('shops')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
