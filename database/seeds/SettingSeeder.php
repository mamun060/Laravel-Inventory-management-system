<?php


use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    // setting seeder data
    protected $settings_data = [
     ['name'=>'site_title','value'=>'laravel Base'],
     ['name'=>'currency_code', 'value'=>'BDT'],
     ['name'=>'currency_symbol', 'value'=>'TK'],
     ['name'=>'currency_direction', 'value'=>'right'],
     ['name'=>'site_log', 'value'=>''],
     ['name'=>'site_favicon', 'value'=>''],


     ['name'=>'mail_mailer', 'value'=>'smtp'],
     ['name'=>'mail_host', 'value'=>''],
     ['name'=>'mail_port', 'value'=>''],
     ['name'=>'mail_username', 'value'=>''],
     ['name'=>'mail_password', 'value'=>''],
     ['name'=>'mail_ecryption', 'value'=>''],
     ['name'=>'mail_from_address', 'value'=>''],
     ['name'=>'mail_from_name', 'value'=>''],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Settings seeder data insert
        Setting::insert($this->settings_data);

    }
}
