<?php namespace Murad\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradNews2 extends Migration
{
    public function up()
    {
        Schema::table('murad_news_', function($table)
        {
            $table->boolean('is_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('murad_news_', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}
