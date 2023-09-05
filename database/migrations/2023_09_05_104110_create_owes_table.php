<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('owes', function (Blueprint $table) {
            $table->id();
            $table->string('debtor_name')->nullable();
            $table->decimal('amount', 10, 2)->default(0)->nullable();
            $table->date('date_borrowed')->nullable();
            $table->date('expected_return_date')->nullable();
            $table->boolean('status')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owes');
    }
};
