<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('requestings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('adress');
            $table->time("time");
            $table->enum('payment', ['cash', 'SBP']);
            $table->enum('status', ['new', 'start', 'end'])->default('new');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requestings');
    }
};
