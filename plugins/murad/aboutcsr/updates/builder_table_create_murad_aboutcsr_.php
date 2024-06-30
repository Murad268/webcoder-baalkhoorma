<?php namespace Murad\Aboutcsr\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradAboutcsr extends Migration
{
    public function up()
    {
        Schema::create('murad_aboutcsr_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_aboutcsr_');
    }
}
