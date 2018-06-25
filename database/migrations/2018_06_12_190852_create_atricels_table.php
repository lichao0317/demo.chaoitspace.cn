<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtricelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atricels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author')->comment('文章作者');
            $table->string('title')->comment('文章标题');
            $table->text('content')->comment('文章内容');
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
        Schema::dropIfExists('atricels');
    }
}
