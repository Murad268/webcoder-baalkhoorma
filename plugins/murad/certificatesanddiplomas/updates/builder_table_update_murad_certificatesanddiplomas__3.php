<?php namespace Murad\Certificatesanddiplomas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradCertificatesanddiplomas3 extends Migration
{
    public function up()
    {
        Schema::table('murad_certificatesanddiplomas_', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('murad_certificatesanddiplomas_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
