<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class TerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $terminal_tujuan = ['Purbaya','Cicaheum', 'Bayangan Jatibening'];
        DB::table('terminal')->insert([
            [
                'terminal_keberangkatan' => 'Bungurasih',
                'terminal_tujuan' => json_encode($terminal_tujuan),
            ],
            [
                'terminal_keberangkatan' => 'Ramayana',
                'terminal_tujuan' => json_encode($terminal_tujuan),
            ],
        ]);
        Cache::forever('terminal_tujuan', $terminal_tujuan);
    }
}
