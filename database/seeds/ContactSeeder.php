<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact ;
        $contact->alamat = 'JALAN ASTANA ANYAR NO 210 ; 212 ,NYENGSERET, ASTANAANYAR,BANDUNG , JAWA BARAT , INDONESIA 40242';
        $contact->phone = '022-5228404';
        $contact->email = 'IstanaHelmet@gmail.com';
        $contact->hari_kerja = 'Senin-Sabtu';
        $contact->tutup_kerja = 'Minggu';
        $contact->jam_kerja = '08.00-20.00';
        $contact->save();
    }
}
