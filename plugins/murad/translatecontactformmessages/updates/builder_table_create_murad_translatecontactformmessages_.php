<?php namespace Murad\Translatecontactformmessages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradTranslatecontactformmessages extends Migration
{
    public function up()
    {
        Schema::create('murad_translatecontactformmessages_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('success_message')->nullable();
            $table->string('success_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_translatecontactformmessages_');
    }
}
