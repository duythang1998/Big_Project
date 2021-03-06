<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("slug");
            $table->string("images");
            $table->string("intro");
            $table->string("desc");
            $table->integer('priceCore');//Giá niêm yết
            $table->integer('priceSale');// giá sale
            $table->integer('stock');//hàng tồn
            $table->integer('cat_id');//danh mục sản phẩm
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_products');
    }
}
