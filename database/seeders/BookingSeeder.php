<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('booking')->insert([
            'pelabuhan_muat' => 'TG. Priok, Jakarta Indonesia',
            'pelabuhan_tujuan' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'final_destination' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'vessel_name' => 'EVER OCEAN 0341-039N / OSAKA 914W 6. Date',
            'date_shipment' => '2023-04-01',
            'container_no' => 'TGCU5163437 / EMCRFG1742',
            'consignee' => 'HUSAIN MAKATI UPHOLSTERY FABRICS TRADING',
            'shipper' => 'PT. SEMPURNAINDAH MULTINUSANTARA',
            'notify_party' => 'SAME AS CONSIGNEE',
            'shipping_marks' => 'SEE ATTACHMENT',
            'description_goods' => '844 ROLLS = 23,091.5 MTRS OF PVC ARTIFICIAL',
            'total_nett_weight' => 26,
            'total_gross_weight' => 26,
            'total_measurement' => 52,
            'created_at' => '2023-02-28 14:05:50',
            'users_id' => 5,
            'status' => 'Waiting',
        ]);    
        DB::table('booking')->insert([
            'pelabuhan_muat' => 'TG. Priok, Jakarta Indonesia',
            'pelabuhan_tujuan' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'final_destination' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'vessel_name' => 'EVER OCEAN 0341-039N / OSAKA 914W 6. Date',
            'date_shipment' => '2023-04-01',
            'container_no' => 'TGCU5163437 / EMCRFG1742',
            'consignee' => 'HUSAIN MAKATI UPHOLSTERY FABRICS TRADING',
            'shipper' => 'PT. SEMPURNAINDAH MULTINUSANTARA',
            'notify_party' => 'SAME AS CONSIGNEE',
            'shipping_marks' => 'SEE ATTACHMENT',
            'description_goods' => '844 ROLLS = 23,091.5 MTRS OF PVC ARTIFICIAL',
            'total_nett_weight' => 26,
            'total_gross_weight' => 26,
            'total_measurement' => 52,
            'created_at' => '2023-02-28 14:05:50',
            'users_id' => 5,
            'status' => 'Waiting',
        ]);            
        DB::table('booking')->insert([
            'pelabuhan_muat' => 'TG. Priok, Jakarta Indonesia',
            'pelabuhan_tujuan' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'final_destination' => 'JEBEL ALI, UNITED ARAB EMIRATES',
            'vessel_name' => 'EVER OCEAN 0341-039N / OSAKA 914W 6. Date',
            'date_shipment' => '2023-04-01',
            'container_no' => 'TGCU5163437 / EMCRFG1742',
            'consignee' => 'HUSAIN MAKATI UPHOLSTERY FABRICS TRADING',
            'shipper' => 'PT. SEMPURNAINDAH MULTINUSANTARA',
            'notify_party' => 'SAME AS CONSIGNEE',
            'shipping_marks' => 'SEE ATTACHMENT',
            'description_goods' => '844 ROLLS = 23,091.5 MTRS OF PVC ARTIFICIAL',
            'total_nett_weight' => 26,
            'total_gross_weight' => 26,
            'total_measurement' => 52,
            'created_at' => '2023-02-28 14:05:50',
            'users_id' => 5,
            'status' => 'Waiting',
        ]);            
        
    }
}
