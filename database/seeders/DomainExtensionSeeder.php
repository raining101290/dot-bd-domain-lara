<?php

namespace Database\Seeders;

use App\Models\DomainExtension;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tlds = [
            '.com.bd',
            '.edu.bd',
            '.gov.bd',
            '.net.bd',
            '.org.bd',
            '.ac.bd',
            '.mil.bd',
            '.info.bd',
            '.bd',
            '.বাংলা',
        ];

        foreach ($tlds as $tld) {
            DomainExtension::create(['name' => $tld]);
        }
    }
}
