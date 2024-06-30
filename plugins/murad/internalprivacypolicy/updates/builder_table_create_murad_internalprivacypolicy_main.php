<?php namespace Murad\Internalprivacypolicy\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradInternalprivacypolicyMain extends Migration
{
    public function up()
    {
        Schema::create('murad_internalprivacypolicy_main', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_internalprivacypolicy_main');
    }
}
