<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Subcategory;
use App\Models\Product;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('code')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('discount')->default(0);
            $table->foreignIdFor(Subcategory::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->boolean('status')->default(1);
            $table->text('prev')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('subcategory_product', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Subcategory::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreignIdFor(Product::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        if(app()->isLocal()){
            Schema::dropIfExists('subcategory_product');
            Schema::dropIfExists('products');
        }
    }
};
