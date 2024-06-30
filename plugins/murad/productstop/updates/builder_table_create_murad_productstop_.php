<?php namespace Murad\Productstop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradProductstop extends Migration
{
    public function up()
    {
        Schema::create('murad_productstop_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('title')->nullable();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_productstop_');
    }
}
