<?php namespace Murad\Categories\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradCategories extends Migration
{
    public function up()
    {
        Schema::table('murad_categories_', function($table)
        {
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('murad_categories_', function($table)
        {
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
