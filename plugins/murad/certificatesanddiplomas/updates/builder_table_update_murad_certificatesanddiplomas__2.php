<?php namespace Murad\Certificatesanddiplomas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMuradCertificatesanddiplomas2 extends Migration
{
    public function up()
    {
        Schema::table('murad_certificatesanddiplomas_', function($table)
        {
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('murad_certificatesanddiplomas_', function($table)
        {
            $table->boolean('status');
        });
    }
}
