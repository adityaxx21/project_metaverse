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
        Schema::create('tb_metaprop', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('title')->unique();
            $table->longText('description');
            $table->string('url');
            $table->string('image');
            $table->float('price');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('is_deleted')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_metaprop');
    }
};
