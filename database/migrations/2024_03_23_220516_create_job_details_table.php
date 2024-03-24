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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->string("Title")->index();
            $table->string("slug");
            $table->string("company");
            $table->string("city")->index();
            $table->string("image");
            $table->date("deadline");
            $table->longText("content");
            $table->string("email");
            $table->foreignId('Category_id')->constrained("job_categories")->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('employer_id')->constrained("employers")->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
