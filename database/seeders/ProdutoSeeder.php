<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('produtos')->insert([
            'name' => "Arroz",
            'descricao' => "Arroz branco",
            'preco' => 12.25,
            'updated_at'=>null,
        ]);
    }
}
