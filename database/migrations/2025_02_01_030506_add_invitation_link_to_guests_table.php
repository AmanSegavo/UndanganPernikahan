<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInvitationLinkToGuestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->string('invitation_link')->nullable()->after('address'); // Tambahkan kolom `invitation_link`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('invitation_link'); // Hapus kolom `invitation_link` jika rollback
        });
    }
}