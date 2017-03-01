<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // February 3
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 187,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 85,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 229,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 246,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 198,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 94,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 316,
            'total_amount' =>  1792,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 4,
            'remarks' => 'Sept-Dec 2016',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 7,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 63,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 4
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 138,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 278,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 219,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 296,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 11,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 309,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Nov-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 160,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 11,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 17,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 209,
            'total_amount' =>  1344,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 3,
            'remarks' => 'Jan-March',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 209,
            'total_amount' =>  1344,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 3,
            'remarks' => 'April-June 17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 99,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 273,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 256,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 286,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 248,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 248,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 44,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 380,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 64,
            'total_amount' =>  2688,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 6,
            'remarks' => 'Jan-June 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 5
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 3,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 375,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 300,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 57,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 324,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 135,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 352,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 382,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 77,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 326,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 78,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 90,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 115,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 6
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 374,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 201,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 70,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 288,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 381,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 268,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 245,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 7
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 320,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 84,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 175,
            'total_amount' =>  3584,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 8,
            'remarks' => 'May-Dec 2016',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 175,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 141,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 329,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 322,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 334,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 9
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 177,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 265,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 367,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 20,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 360,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 190,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 202,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 376,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 62,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 234,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 10
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 275,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 93,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Dec 2016-Jan 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 97,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 47,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 11
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 167,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 16,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 378,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 383,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 166,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 260,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Feb-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 38,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 12
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 98,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 110,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 21,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 385,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 359,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 132,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 358,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 308,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 193,
            'total_amount' =>  1792,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 4,
            'remarks' => 'Sept-Dec 2016',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 365,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 13
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 203,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 216,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 131,
            'total_amount' =>  4480,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 10,
            'remarks' => 'Mar-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 328,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 252,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 41,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 152,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 319,
            'total_amount' =>  1344,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 3,
            'remarks' => 'Oct-Dec 2016',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 249,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 54,
            'total_amount' =>  1344,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 3,
            'remarks' => 'Nov 2016-Jan 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 19,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 14
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 304,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Sept-Oct 2016',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 91,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 302,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 388,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 83,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 362,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Jan-Feb 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 127,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 233,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 129,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 351,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Feb-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 6,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Dec-16',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 118,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Dec 2016-Jan 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 50,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 130,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 46,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 159,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Jan-Feb 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 100,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 102,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 73,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 181,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 220,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 69,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 128,
            'total_amount' =>  896,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 2,
            'remarks' => 'Feb-March 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 82,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 299,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 22,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 214,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 236,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 22
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 104,
            'total_amount' =>  2688,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-22')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-22' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 6,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 28,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-22')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-22' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // February 26
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 68,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-26')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-26' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 34,
            'total_amount' =>  2688,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-26')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-26' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 6,
            'remarks' => 'July-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // March 1
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 58,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 327,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 323,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        // March 2
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 333,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-02')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-02' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 304,
            'total_amount' =>  1344,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 3,
            'remarks' => 'Nov 2016-Jan 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 186,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 219,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 53,
            'total_amount' =>  448,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 1,
            'remarks' => 'Jan-17',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 26,
            'total_amount' =>  5376,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days'))
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);

        DB::table('home_owner_invoice_items')->insert([
            'item_id' => 1,
            'quantity' => 12,
            'remarks' => 'Jan-Dec 2017',
            'amount' => 448,
            'invoice_id' => $homeOwnerInvoiceID,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
