<?php namespace Murad\Categories\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradCategories extends Migration
{
    public function up()
    {
        Schema::create('murad_categories_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('is_active')->nullable()->default(1);
            $table->text('desc')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_categories_');
    }
}
