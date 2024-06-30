<?php namespace Murad\Settings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradSettings extends Migration
{
    public function up()
    {
        Schema::create('murad_settings_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('email');
            $table->string('addres');
            $table->string('phone1');
            $table->string('phone2');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_settings_');
    }
}
