<?php

namespace Database\Seeders;

use App\Models\Medication;
use Illuminate\Database\Seeder;

class MedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medication::firstOrCreate([
            'medication_name'  => 'Banadool',
            'quantity_in_stock'  => '20',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'علب',
            'category'  => 'supplementary',
            'expiration_date'  => '2023-09-02',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Banadool',
            'quantity_in_stock'  => '100',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'supplementary',
            'expiration_date'  => '2023-09-02',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Lasix',
            'quantity_in_stock'  => '40',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'Amp',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Zalediar',
            'quantity_in_stock'  => '40',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'Tab',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-03-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Extra',
            'quantity_in_stock'  => '10',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'Tab',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Caceear',
            'quantity_in_stock'  => '50',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'syp',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Vit E',
            'quantity_in_stock'  => '90',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'Cap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Meloxiceam',
            'quantity_in_stock'  => '60',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Canulla 20g',
            'quantity_in_stock'  => '40',
            'dosage_strength'  => '15000',
            'dosage_form'  => '-',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-18',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Liver albumin',
            'quantity_in_stock'  => '80',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-01-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Irovit',
            'quantity_in_stock'  => '40',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-03-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Epimag',
            'quantity_in_stock'  => '80',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-03-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => ' Mebo',
            'quantity_in_stock'  => '90',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'nint',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-08-14',
            'unit_price'  => '90000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Ciplox',
            'quantity_in_stock'  => '40',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-04-14',
            'unit_price'  => '80000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Platenaz',
            'quantity_in_stock'  => '30',
            'dosage_strength'  => '19000',
            'dosage_form'  => 'tap',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-14',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Royamin',
            'quantity_in_stock'  => '200',
            'dosage_strength'  => '15000',
            'dosage_form'  => 'drip',
            'category'  => 'supplementary',
            'expiration_date'  => '2022-09-3',
            'unit_price'  => '20000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Mesna',
            'quantity_in_stock'  => '30',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-14',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Imatinibe',
            'quantity_in_stock'  => '20',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Ondansetron',
            'quantity_in_stock'  => '20',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'lomustine',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Sorafinb',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Femara',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Duragesic',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Glivec',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Zoladex',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Xeloda',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Temodal',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'MorphinSyp',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Neupogen inj',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
        Medication::firstOrCreate([
            'medication_name'  => 'Gemectabine',
            'quantity_in_stock'  => '70',
            'dosage_strength'  => '5000',
            'dosage_form'  => 'Cap',
            'category'  => 'chemist',
            'expiration_date'  => '2022-10-15',
            'unit_price'  => '10000',
            'user_id'  => 1,
        ]);
    }
}
