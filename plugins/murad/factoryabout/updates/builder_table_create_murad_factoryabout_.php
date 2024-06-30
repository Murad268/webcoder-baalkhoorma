<?php namespace Murad\Factoryabout\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradFactoryabout extends Migration
{
    public function up()
    {
        Schema::create('murad_factoryabout_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('text1');
            $table->text('text2');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_factoryabout_');
    }
}
