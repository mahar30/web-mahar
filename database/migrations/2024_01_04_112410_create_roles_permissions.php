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
        Schema::create('role_permissions', function (Blueprint $table) {
            // Mendefinisikan kolom 'role_id' sebagai foreign key yang terhubung dengan tabel 'roles',
            // dengan pengaturan "onDelete" yang mengindikasikan bahwa jika data di tabel 'roles' dihapus, data yang terkait di tabel ini akan dihapus juga.
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');

            // Mendefinisikan kolom 'permission_id' sebagai foreign key yang terhubung dengan tabel 'permissions',
            // dengan pengaturan "onDelete" yang mengindikasikan bahwa jika data di tabel 'permissions' dihapus, data yang terkait di tabel ini akan dihapus juga.
            $table->foreignId('permission_id')->constrained('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_permissions');
    }
};
