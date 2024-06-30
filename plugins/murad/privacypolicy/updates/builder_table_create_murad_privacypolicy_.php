<?php namespace Murad\Privacypolicy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradPrivacypolicy extends Migration
{
    public function up()
    {
        Schema::create('murad_privacypolicy_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_privacypolicy_');
    }
}
