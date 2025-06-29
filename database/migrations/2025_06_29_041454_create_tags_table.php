<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('tags', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->timestamps();
    });

    Schema::create('job_tag', function (Blueprint $table) {
      $table->id();

      # Cria a coluna `job_listing_id` apontando para a tabela `job_listings` e sua coluna `id`.
      $table->foreignIdFor(Job::class, 'job_listing_id')
        ->constrained('job_listings', 'id')
        ->cascadeOnDelete();

      # Versao simplificada, que deixa por conta do Laravel decidir: nome da nova coluna, nome da coluna e tabela estrangeira.
      # Default: coluna: tag_id => tabela: tags => coluna: id
      $table->foreignIdFor(Tag::class)
        ->constrained()
        ->cascadeOnDelete();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('job_tag');
    Schema::dropIfExists('tags');
  }
};
