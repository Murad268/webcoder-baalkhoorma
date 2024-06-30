<?php namespace Murad\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradNews extends Migration
{
    public function up()
    {
        Schema::create('murad_news_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('desc');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_news_');
    }
}
