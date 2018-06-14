<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new \App\Setting([
            'name' => 'Implant Dental Service',
            'phone4' => '+996 (554) 899 - 801',
            'phone2' => '+996 (707) 912 - 651',
            'phone3' => '+996 (550) 912 - 651',
            'phone1' => '+996 (555) 260 - 599',
            'instagram' => 'https://www.instagram.com/ids_clinic/',
            'facebook' => 'https://www.facebook.com/idsclinic1/',
            'whatsapp' => '+996 (550) 912 - 651',
            'email' => 'ids-2016@mail.ru',
        ]);

        $setting->save();
    }
}
