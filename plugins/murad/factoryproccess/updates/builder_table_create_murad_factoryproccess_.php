<?php namespace Murad\Factoryproccess\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradFactoryproccess extends Migration
{
    public function up()
    {
        Schema::create('murad_factoryproccess_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('proccess_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_factoryproccess_');
    }
}
