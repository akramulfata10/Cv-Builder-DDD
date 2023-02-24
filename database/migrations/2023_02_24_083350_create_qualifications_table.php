<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->text('description');
            $table->string('grade')->nullable();
            $table->boolean('current')->default(false);
            $table->date('started_at');
            $table->date('finished_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('qualifications');
    }
};