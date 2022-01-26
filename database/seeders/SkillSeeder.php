<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('skills')->insert([
      'nombre' => 'HTML5',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'CSS3',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'CSSGrid',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'VueJS',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'TailwindCSS',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Laravel',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'ReactJS',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'SQL',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Javascript',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Flexbox',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'JQuery',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Python',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'ShellScritng',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Docker',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'GOlang',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Rust',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Lua',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'VimScript',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Neovim',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Bootstrap',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Archlinux',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'AlpineJS',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Git',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'KumbiaPHP',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'NodeJS',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Electron',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Flask',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Wordpress',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'PostgreSQL',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'BSPWM',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    DB::table('skills')->insert([
      'nombre' => 'Inglés',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);
  }
}
