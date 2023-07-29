<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        // Data Mentahan
        DB::table('nasabah')->insert([
            ['nama' => 'Alex'],
            ['nama' => 'Jono Smith'],
            ['nama' => 'Malik Johnson'],
            ['nama' => 'Joko Wiyono'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('nasabah');
    }
};
