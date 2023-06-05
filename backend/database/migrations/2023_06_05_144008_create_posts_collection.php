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
        Schema::create('posts', function (Blueprint $collection) {
            $collection->index('_id');
            $collection->string('author');
            $collection->string('title');
            $collection->text('body');
            $collection->string('category');
            $collection->timestamp('Created_at');
            $collection->timestamp('Updated_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
