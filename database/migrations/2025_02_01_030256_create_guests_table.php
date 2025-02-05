<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Nama tamu
            $table->string('email')->nullable(); // Email tamu (opsional)
            $table->string('phone'); // Nomor telepon tamu
            $table->text('address')->nullable(); // Alamat tamu (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
