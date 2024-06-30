<?php namespace Murad\Termsofuse\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradTermsofuse extends Migration
{
    public function up()
    {
        Schema::create('murad_termsofuse_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_termsofuse_');
    }
}
