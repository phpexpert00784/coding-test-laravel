<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = Order::all();
        //Every ORder has default 5 items
        foreach ($orders as $order) {
            Item::factory(5)->create(['order_id' => $order->id]);
        }
    }
}
