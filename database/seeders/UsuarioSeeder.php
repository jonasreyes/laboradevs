<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('users')->insert([
      'name' => 'Admin',
      'email' => 'admin@local.test',
      'email_verified_at' => Carbon::now(),
      'password' => Hash::make('11223344'),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('users')->insert([
      'name' => 'Kumda',
      'email' => 'kumda@local.test',
      'email_verified_at' => Carbon::now(),
      'password' => Hash::make('11223344'),
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}
