<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts2 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
