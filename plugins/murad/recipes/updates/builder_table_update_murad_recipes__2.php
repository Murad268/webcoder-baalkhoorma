<?php namespace Murad\Recipes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradRecipes2 extends Migration
{
    public function up()
    {
        Schema::table('murad_recipes_', function($table)
        {
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('murad_recipes_', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
