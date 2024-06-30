<?php namespace Murad\Abouthistory\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradAbouthistory extends Migration
{
    public function up()
    {
        Schema::create('murad_abouthistory_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('text1');
            $table->text('text2');
            $table->string('vide_url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_abouthistory_');
    }
}
