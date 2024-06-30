<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts12 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->renameColumn('specifications', 'spesifications');
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->renameColumn('spesifications', 'specifications');
        });
    }
}
