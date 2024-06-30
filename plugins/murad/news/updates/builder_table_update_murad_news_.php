<?php namespace Murad\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradNews extends Migration
{
    public function up()
    {
        Schema::table('murad_news_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('murad_news_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
