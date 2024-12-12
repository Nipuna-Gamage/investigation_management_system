<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        $users = DB::table('users')->get();
        
        foreach ($users as $user) {
            // Check if the password is already hashed
            if (strlen($user->password) < 60) { // Bcrypt hashes are always 60 characters
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'password' => Hash::make($user->password)
                    ]);
            }
        }
    }

    public function down(): void
    {
        // Cannot reliably reverse this operation
    }
};