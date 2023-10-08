<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Counter;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Customer;
use App\Models\InvoiceItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Counter::factory(1)->create();
        //Product::factory(5)->create();
        //Customer::factory(15)->create();
        //Invoice::factory(15)->create();
        InvoiceItem::factory(15)->create();

        
    }
}
