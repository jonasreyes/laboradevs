<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('ubicacions')->insert([
      'nombre' => 'Remoto',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'USA',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'New Zeland',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'Chile',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'Russia',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'Venezuela',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'Canadá',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'México',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'Argentina',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('ubicacions')->insert([
      'nombre' => 'España',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}
