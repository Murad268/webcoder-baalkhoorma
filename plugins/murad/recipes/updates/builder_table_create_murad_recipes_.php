<?php namespace Murad\Recipes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMuradRecipes extends Migration
{
    public function up()
    {
        Schema::create('murad_recipes_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->text('desc');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('murad_recipes_');
    }
}
