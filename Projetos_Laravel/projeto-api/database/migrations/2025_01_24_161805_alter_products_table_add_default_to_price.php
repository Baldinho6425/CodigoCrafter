<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->decimal('price', 8, 2)->default(0)->change();
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->decimal('price', 8, 2)->nullable(false)->change();
    });
}

};
