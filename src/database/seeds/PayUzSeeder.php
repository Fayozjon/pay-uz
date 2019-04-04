<?php

namespace Goodoneuz\PayUz\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Goodoneuz\PayUz\Models\PaymentSystem;
use Goodoneuz\PayUz\Models\PaymentSystemParam;

class PayUzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('payment_systems')) {
            PaymentSystem::firstOrCreate([
                'name'      => 'Payme',
                'system'    => 'payme'
            ]);
        }
        if (Schema::hasTable('payment_system_params')) {
            PaymentSystemParam::firstOrCreate([
                'system'    => 'payme',
                'label'     => 'Login',
                'name'      => 'login',
                'value'     => 'Paycom'
            ]);
            PaymentSystemParam::firstOrCreate([
                'system'    => 'payme',
                'label'     => 'Password',
                'name'      => 'password',
                'value'     => 'password'
            ]);
        }
    }
}