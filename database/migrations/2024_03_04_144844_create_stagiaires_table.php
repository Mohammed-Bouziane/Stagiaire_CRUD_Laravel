//database/migrations/create_products_table.php
<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->text('adresse');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('stagiares');
    }
};
