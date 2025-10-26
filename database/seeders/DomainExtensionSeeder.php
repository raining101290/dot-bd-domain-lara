<?php

namespace Database\Seeders;

use App\Models\DomainExtension;
use Illuminate\Database\Seeder;

class DomainExtensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tlds = [
            ['name' => '.bd',        'price' => 2000.00, 'currency' => 'BDT'],
            ['name' => '.বাংলা',     'price' => 2000.00, 'currency' => 'BDT'],
            ['name' => '.com.bd',    'price' => 1100.00,  'currency' => 'BDT'],
            ['name' => '.net.bd',    'price' => 1100.00,  'currency' => 'BDT'],
            ['name' => '.info.bd',   'price' => 1100.00,  'currency' => 'BDT'], 
            ['name' => '.gov.bd',    'price' => 1100.00,    'currency' => 'BDT'],
            ['name' => '.org.bd',    'price' => 1100.00,  'currency' => 'BDT'],
            ['name' => '.ac.bd',     'price' => 1100.00,  'currency' => 'BDT'],
            ['name' => '.edu.bd',    'price' => 1100.00,    'currency' => 'BDT'],
            ['name' => '.mil.bd',    'price' => 1100.00,    'currency' => 'BDT'],
        ];

        foreach ($tlds as $tld) {
            DomainExtension::updateOrCreate(
                ['name' => $tld['name']],
                ['price' => $tld['price'], 'currency' => $tld['currency']]
            );
        }
    }
}
