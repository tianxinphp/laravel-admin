<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',30)->comment('标题');
            $table->text('content')->comment('内容');
            $table->integer('author_id')->comment('作者id');
            $table->integer('type_id')->default(0)->comment('文章类型id');
            $table->integer('sort')->default(0)->comment('排序');
            $table->tinyInteger('is_top')->default(0)->comment('是否置顶');
            $table->tinyInteger('is_publish')->default(0)->comment('是否发布');
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
        Schema::dropIfExists('articles');
    }
}
