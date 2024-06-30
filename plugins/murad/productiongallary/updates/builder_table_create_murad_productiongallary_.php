<?php namespace Murad\Productiongallary\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradProductiongallary extends Migration
{
    public function up()
    {
        Schema::create('murad_productiongallary_', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_productiongallary_');
    }
}
