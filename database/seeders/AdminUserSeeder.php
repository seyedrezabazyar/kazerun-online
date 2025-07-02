<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::updateOrCreate(
      ['email' => 'admin@kazerun.online'],
      [
        'name' => 'Admin',
        'password' => Hash::make('admin'),
        'email_verified_at' => now(),
      ]
    );

    $this->command->info('Admin user created/updated successfully.');
  }
}
