<?php namespace Murad\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradProducts5 extends Migration
{
    public function up()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->integer('category_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('murad_products_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
