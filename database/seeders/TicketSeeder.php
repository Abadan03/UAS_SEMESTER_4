<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Method 1
        // Retrieve the terminal_tujuan array from the cache
        // $terminal_tujuan = Cache::get('terminal_tujuan');

        // Check if the array is available in the cache
        // if ($terminal_tujuan === null) {
        //     throw new \Exception('terminal_tujuan array not found in cache. Run TerminalSeeder first.');
        // }

        // Method 2
        // Retrieve the JSON-encoded array from the TerminalSeeder
        // $terminal_tujuan_array = DB::table('terminal')->where('terminal_keberangkatan',
        // 'Terminal Purbaya')->value('terminal_tujuan');
        $terminal_tujuan_array = DB::table('terminal')->where('terminal_keberangkatan', 'Bungurasih')->value('terminal_tujuan');

        // Decode the JSON-encoded array into a PHP array
        // if ($terminal_tujuan_array) return True;
        $terminal_tujuan = json_decode($terminal_tujuan_array, true);

        DB::table('ticket')->insert([
            [
                'nama_travel' => 'Menthol Travel',
                'kota_keberangkatan' => 'Surabaya',
                'terminal_keberangkatan_id' => 1,
                'terminal_tujuan'=> $terminal_tujuan[0],
                'kota_tujuan' => 'Madiun',
                'jam_keberangkatan' => '07:00',
                'jam_tujuan' => '10:00',
                'jumlah_tiket' => 40,
                'harga_tiket' => 20,
            ],
            [
                'nama_travel' => 'Atlas Travel',
                'kota_keberangkatan' => 'Sidoarjo',
                'terminal_keberangkatan_id' => 2,
                'terminal_tujuan'=> $terminal_tujuan[1],
                'kota_tujuan' => 'Bandung',
                'jam_keberangkatan' => '09:00',
                'jam_tujuan' => '13:00',
                'jumlah_tiket' => 40,
                'harga_tiket' => 40,
            ],
            [
                'nama_travel' => 'Sempoerna Travel',
                'kota_keberangkatan' => 'Sidoarjo',
                'terminal_keberangkatan_id' => 2,
                'kota_tujuan' => 'Jakarta',
                'terminal_tujuan'=> $terminal_tujuan[2],
                'jam_keberangkatan' => '07:00',
                'jam_tujuan' => '12:00',
                'jumlah_tiket' => 40,
                'harga_tiket' => 80,
            ],
            [
                'nama_travel' => 'Adenya Travel',
                'kota_keberangkatan' => 'Surabaya',
                'terminal_keberangkatan_id' => 1,
                'kota_tujuan' => 'Bandung',
                'terminal_tujuan'=> $terminal_tujuan[1],
                'jam_keberangkatan' => '06:00',
                'jam_tujuan' => '17:00',
                'jumlah_tiket' => 40,
                'harga_tiket' => 40,
            ],
        ]);
    }

}
