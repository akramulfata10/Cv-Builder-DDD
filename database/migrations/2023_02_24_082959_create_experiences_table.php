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
    public function up(): void {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->text('description');
            $table->boolean('current')->default(false);

            $table->foreignId('profile_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('job_title_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('company_id')->index()->constrained()->cascadeOnDelete();

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
        Schema::dropIfExists('experiences');
    }
};