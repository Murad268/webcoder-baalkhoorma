<?php namespace Murad\Recipes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradRecipes extends Migration
{
    public function up()
    {
        Schema::table('murad_recipes_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('murad_recipes_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
