<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradProducts extends Migration
{
    public function up()
    {
        Schema::create('murad_products_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('short_desc')->nullable();
            $table->text('desc')->nullable();
            $table->text('benefits')->nullable();
            $table->text('production')->nullable();
            $table->text('slug');
            $table->boolean('is_active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_products_');
    }
}
