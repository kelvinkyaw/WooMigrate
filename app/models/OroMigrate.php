<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/15
 * Time: 4:15 PM
 */
class OroMigrate {
    public function MigrateCustomer() {
        $resultSetArr = CSVReader::csvToArray(public_path() . DIRECTORY_SEPARATOR . "product.csv",",");
        if(count($resultSetArr>0)) {
            foreach($resultSetArr as $cusInfo) {

            }
            DB::table('orocrm_magento_customer')->insert(
                array(
                    'website_id'=>1,
                    'store_id' =>1,
                    'customer_group_id' =>1,
                    'channel_id'=>1,
                    'data_channel_id' =>3,
                    'organization_id' =>1,
                    'first_name' => 'Cedric',
                    'last_name' => 'Mui',
                    'gender' => 'male',
                    'birthday' => '1987-01-01',
                    'email' => 'cedric.mui@gmail.com',
                    'created_at'=> date('Y-m-d H:i:s'),
                    'updated_at'=> date('Y-m-d H:i:s'),
                    'is_active'=> 1,
                    'currency' => 'SGD',
                    'origin_id' => 999,
                    'is_confirmed'=>1,
                    'is_guest' =>0
                )
            );
            echo "It's look good. Customer migration is completed.";
        }else {
            echo "No CSV data found";
        }
    }

    public function MigrateNewsletterSub() {

    }

    public function MigrateOrders() {

    }
}