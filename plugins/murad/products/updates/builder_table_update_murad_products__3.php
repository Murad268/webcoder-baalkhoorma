<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts3 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->bigInteger('products_id');
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->dropColumn('products_id');
        });
    }
}
