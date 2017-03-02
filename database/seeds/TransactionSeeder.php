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
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Vivian n/a Granada',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Vivian n/a Granada',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015110',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 85,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Karrel n/a Villavicencio',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Karrel n/a Villavicencio',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015111',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 229,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Edralene n/a Perez',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Edralene n/a Perez',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015112',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 246,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Froilan n/a Rabatan',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Froilan n/a Rabatan',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015114',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 198,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Pierre Paul n/a Ogena',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Pierre Paul n/a Ogena',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015116',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 94,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Roldan n/a Binuya',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Roldan n/a Binuya',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015120',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 316,
            'total_amount' =>  1792,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Dick n/a Mondragon',
            'debit_title_id' => 6,
            'debit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Dick n/a Mondragon',
            'credit_title_id' => 2,
            'credit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015121',
            'amount_paid' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 7,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alicia n/a Zara',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alicia n/a Zara',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015124',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 63,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-03')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-03' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Mark n/a Cayubit',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Mark n/a Cayubit',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015125',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 4
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 138,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joseph Roy n/a Aragones',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joseph Roy n/a Aragones',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015127',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 278,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elaine n/a Aquino',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elaine n/a Aquino',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015129',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 219,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Pilarta',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Pilarta',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015130',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 296,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Adeste n/a Torrente',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Adeste n/a Torrente',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015131',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 309,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Erlinda n/a Gabud',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Erlinda n/a Gabud',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015132',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 160,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Darex n/a Guazon',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Darex n/a Guazon',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015133',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 17,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Randy n/a Abling',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Randy n/a Abling',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015134',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 209,
            'total_amount' =>  1344,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Robert n/a Lacerna',
            'debit_title_id' => 6,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Robert n/a Lacerna',
            'credit_title_id' => 2,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015135',
            'amount_paid' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 209,
            'total_amount' =>  1344,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Robert n/a Lacerna',
            'debit_title_id' => 6,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Robert n/a Lacerna',
            'credit_title_id' => 2,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015136',
            'amount_paid' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 99,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Antonio n/a Layug',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Antonio n/a Layug',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015138',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 273,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Reodica n/a Radito',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Reodica n/a Radito',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015139',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 256,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alvin n/a Magno',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alvin n/a Magno',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015140',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 286,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner May Antoinette n/a Ajero',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner May Antoinette n/a Ajero',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015141',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 248,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadine Marie n/a Marcial',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadine Marie n/a Marcial',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015142',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 248,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadine Marie n/a Marcial',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadine Marie n/a Marcial',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015143',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 44,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Catherine n/a Balajadia',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Catherine n/a Balajadia',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015145',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 380,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jason n/a Penuliar',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jason n/a Penuliar',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015146',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 64,
            'total_amount' =>  2688,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-04')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-04' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michelle n/a Bondoc',
            'debit_title_id' => 6,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michelle n/a Bondoc',
            'credit_title_id' => 2,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015147',
            'amount_paid' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 5
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 3,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Unida n/a Cruz',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Unida n/a Cruz',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015148',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 375,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maria Dulce n/a Amor',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maria Dulce n/a Amor',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015149',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 300,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Arianne n/a Remaldora',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Arianne n/a Remaldora',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015151',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 57,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Macario Ernesto n/a Eseo',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Macario Ernesto n/a Eseo',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015152',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 324,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Harold n/a Deresma',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Harold n/a Deresma',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015154',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 135,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Thelma n/a Del Rosario',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Thelma n/a Del Rosario',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015155',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 352,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Catherine n/a Torres',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Catherine n/a Torres',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015156',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 382,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gabriel n/a Ogad',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gabriel n/a Ogad',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015160',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 77,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nino n/a Bundalia',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nino n/a Bundalia',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015161',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 326,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shiela n/a Santos',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shiela n/a Santos',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015164',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 78,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alberto n/a Aganon',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alberto n/a Aganon',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015165',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 90,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elizabeth n/a Iglesia',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elizabeth n/a Iglesia',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015166',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 115,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-05')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-05' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Walter n/a Cabanting',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Walter n/a Cabanting',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015167',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 6
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 374,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nelvin Benedict n/a Laron',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nelvin Benedict n/a Laron',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015168',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 201,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Eddie n/a Pantoja',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Eddie n/a Pantoja',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015170',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 70,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Paul Arianne n/a Lopez',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Paul Arianne n/a Lopez',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015171',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 288,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marc Laurence n/a Herrera',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marc Laurence n/a Herrera',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015174',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 381,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shiela Marie n/a Rivero',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shiela Marie n/a Rivero',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015175',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 268,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jose Jr. n/a Ngo',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jose Jr. n/a Ngo',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015176',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 245,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-06')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-06' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charmaine n/a Delcampo',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charmaine n/a Delcampo',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015177',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 7
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 320,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gary n/a Sibayan',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gary n/a Sibayan',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015179',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 84,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alona n/a Yabut',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alona n/a Yabut',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015180',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 175,
            'total_amount' =>  3584,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lourdes n/a Lingat',
            'debit_title_id' => 6,
            'debit_amount' => 3584,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lourdes n/a Lingat',
            'credit_title_id' => 2,
            'credit_amount' => 3584,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015181',
            'amount_paid' => 3584,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 3584,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 3584,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 175,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lourdes n/a Lingat',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lourdes n/a Lingat',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015182',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 141,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ethyl n/a Rivero',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ethyl n/a Rivero',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015183',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 329,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Armero',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Armero',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015186',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 322,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Cheryll n/a Simangan',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Cheryll n/a Simangan',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015187',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 334,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-07')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-07' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Teofila n/a Pacaro',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Teofila n/a Pacaro',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015188',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 9
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 177,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marcus Jr. n/a Tapucol',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marcus Jr. n/a Tapucol',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015194',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 265,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ronaldo n/a Lim',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ronaldo n/a Lim',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015197',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 367,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Razel n/a Pengson',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Razel n/a Pengson',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015198',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 20,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lorielyn n/a Elfa',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lorielyn n/a Elfa',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015202',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 360,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernice n/a Dela Cruz',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernice n/a Dela Cruz',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015204',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 190,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rodolfo n/a Palomares',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rodolfo n/a Palomares',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015208',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 202,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Edison n/a Diaz',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Edison n/a Diaz',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015209',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 376,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Tres n/a Tabrilla',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Tres n/a Tabrilla',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015210',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 62,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Liza n/a Tabrilla',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Liza n/a Tabrilla',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015211',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 234,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-09')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-09' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marilou n/a Salcedo',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marilou n/a Salcedo',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015215',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 10
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 275,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Eduardo Jr. n/a Pahilanga',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Eduardo Jr. n/a Pahilanga',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015219',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 93,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francisco Jr. n/a Jimenez',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francisco Jr. n/a Jimenez',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015220',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 97,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Andrea n/a Antonio',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Andrea n/a Antonio',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015223',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 47,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-10')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-10' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alvin n/a Ramos',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alvin n/a Ramos',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015224',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 11
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 167,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Genes n/a Villa',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Genes n/a Villa',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015225',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 16,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ermel n/a Retuta',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ermel n/a Retuta',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015227',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 378,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ferdinand n/a Villanueva',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ferdinand n/a Villanueva',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015228',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 383,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Leilani n/a Laforga',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Leilani n/a Laforga',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015229',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 166,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marjorie n/a Carrido',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marjorie n/a Carrido',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015231',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 260,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Melissa n/a Largo',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Melissa n/a Largo',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015234',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 38,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-11')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-11' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francisco Jr. n/a Arañes',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francisco Jr. n/a Arañes',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015236',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 12
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 98,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Josefina Arlene n/a Antonio',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Josefina Arlene n/a Antonio',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015243',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 110,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Claudia n/a Adelino',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Claudia n/a Adelino',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015244',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 21,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Jacla',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Jacla',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015245',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 385,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadita n/a Abarico',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bernadita n/a Abarico',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015248',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 359,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Peps n/a Nave',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Peps n/a Nave',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015249',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 132,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ser Roy Perluval Dela Cruz',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ser Roy Perluval Dela Cruz',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015251',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 358,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Domingo n/a Mamucud',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Domingo n/a Mamucud',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015252',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 308,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jaime n/a Durana',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jaime n/a Durana',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015253',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 193,
            'total_amount' =>  1792,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maricar n/a Mateo',
            'debit_title_id' => 6,
            'debit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maricar n/a Mateo',
            'credit_title_id' => 2,
            'credit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015257',
            'amount_paid' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1792,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 365,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-12')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-12' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Edmar n/a Alabastro',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Edmar n/a Alabastro',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015258',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 13
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 203,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lilibeth Rosalia n/a Casiño',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Lilibeth Rosalia n/a Casiño',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015260',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 216,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Arceo n/a Macalintal',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Arceo n/a Macalintal',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015266',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 131,
            'total_amount' =>  4480,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elmer n/a Gatapia',
            'debit_title_id' => 6,
            'debit_amount' => 4480,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Elmer n/a Gatapia',
            'credit_title_id' => 2,
            'credit_amount' => 4480,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015267',
            'amount_paid' => 4480,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 4480,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 4480,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 328,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nikki n/a Dano',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Nikki n/a Dano',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015271',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 252,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ronaldo n/a Abenoja',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ronaldo n/a Abenoja',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015272',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 41,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rowena n/a Godoy',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rowena n/a Godoy',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015273',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 152,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Christopher n/a Santos',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Christopher n/a Santos',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015274',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 319,
            'total_amount' =>  1344,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Franciso n/a Espinola',
            'debit_title_id' => 6,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Franciso n/a Espinola',
            'credit_title_id' => 2,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015275',
            'amount_paid' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 249,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ferdinand n/a Lipa',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ferdinand n/a Lipa',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015278',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 54,
            'total_amount' =>  1344,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michael n/a Agustin',
            'debit_title_id' => 6,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michael n/a Agustin',
            'credit_title_id' => 2,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015279',
            'amount_paid' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 19,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-13')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-13' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shirley n/a Navoa',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Shirley n/a Navoa',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015280',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 14
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 304,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Arnat',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Arnat',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015282',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 91,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michael n/a Yu',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Michael n/a Yu',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015285',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 302,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Hannielynn n/a Tucay',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Hannielynn n/a Tucay',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015288',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 388,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maria Fatima n/a Figueroa',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Maria Fatima n/a Figueroa',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015289',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 83,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Odessa n/a Chua',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Odessa n/a Chua',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015290',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 362,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Charisse n/a Laysa',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Charisse n/a Laysa',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015291',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 127,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Azulis',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Azulis',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015292',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 233,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francis Yuri n/a Grasparin',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Francis Yuri n/a Grasparin',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015293',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 129,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jennifer n/a Tolentino',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jennifer n/a Tolentino',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015294',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 351,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ralba n/a Dela Cruz',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ralba n/a Dela Cruz',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015295',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 6,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Winalyn n/a So',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Winalyn n/a So',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015296',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 118,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Deogracia n/a Orpilla',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Deogracia n/a Orpilla',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015297',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 50,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Teresa n/a Sevandra',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ma. Teresa n/a Sevandra',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015298',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 130,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner May Chelle n/a Baay',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner May Chelle n/a Baay',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015299',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 46,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joyce Hazelle n/a Ramos',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joyce Hazelle n/a Ramos',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015300',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 159,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ian n/a Octaviano',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ian n/a Octaviano',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015301',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 100,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Medino',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Medino',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015302',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 102,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Florenda n/a Cargason',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Florenda n/a Cargason',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015307',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 73,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Armin n/a Sarcia',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Armin n/a Sarcia',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015308',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 181,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner David Bernette n/a Retuya',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner David Bernette n/a Retuya',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015310',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 220,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jericho n/a Dujura',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jericho n/a Dujura',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015311',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 69,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Florentino n/a Eugenio',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Florentino n/a Eugenio',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015312',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 128,
            'total_amount' =>  896,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rachel n/a Bulahan',
            'debit_title_id' => 6,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Rachel n/a Bulahan',
            'credit_title_id' => 2,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015313',
            'amount_paid' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 896,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 82,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Guillermo Jr. n/a Badiola',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Guillermo Jr. n/a Badiola',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015314',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 299,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Evelyn n/a Lope',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Evelyn n/a Lope',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015315',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 22,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jacqueline n/a Ganapin',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Jacqueline n/a Ganapin',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015316',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 214,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alma n/a Sevilla',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Alma n/a Sevilla',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015319',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 236,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-14')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-14' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Erlinda n/a Villanueva',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Erlinda n/a Villanueva',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015320',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 22
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 104,
            'total_amount' =>  2688,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-22')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-22' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Myrasol n/a Garcia',
            'debit_title_id' => 6,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Myrasol n/a Garcia',
            'credit_title_id' => 2,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015496',
            'amount_paid' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 28,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-22')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-22' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bremielin n/a Bautista',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Bremielin n/a Bautista',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015497',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // February 26
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 68,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-26')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-26' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Aileen n/a Rapas',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Aileen n/a Rapas',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015579',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 34,
            'total_amount' =>  2688,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-02-26')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-02-26' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Angela Blanca n/a Garcia',
            'debit_title_id' => 6,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Angela Blanca n/a Garcia',
            'credit_title_id' => 2,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015582',
            'amount_paid' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 2688,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // March 1
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 58,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gerardo n/a Recio',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Gerardo n/a Recio',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015617',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 327,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Raul n/a Mayo',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Raul n/a Mayo',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015618',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 323,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Leila n/a Santos',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Leila n/a Santos',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015622',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        // March 2
        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 333,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-02')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-02' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Renante n/a Magat',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Renante n/a Magat',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015623',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 304,
            'total_amount' =>  1344,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Arnat',
            'debit_title_id' => 6,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Charlotte n/a Arnat',
            'credit_title_id' => 2,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015625',
            'amount_paid' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 1344,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 186,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner June n/a Macaspac',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner June n/a Macaspac',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015626',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 219,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Pilarta',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Joselito n/a Pilarta',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015627',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 53,
            'total_amount' =>  448,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Bachoco',
            'debit_title_id' => 6,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Ramir n/a Bachoco',
            'credit_title_id' => 2,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015633',
            'amount_paid' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 448,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerInvoiceID = DB::table('home_owner_invoice')->insertGetId([
            'home_owner_id' => 26,
            'total_amount' =>  5376,
            'is_paid' => 1,
            'payment_due_date' => date('Y-m-d', strtotime('2017-03-01')),
            'next_penalty_date' => date('Y-m-d', strtotime('2017-03-01' . '+1 days')),
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

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marilou n/a Remojo',
            'debit_title_id' => 6,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'invoice_id' => $homeOwnerInvoiceID,
            'type' => 'Invoice',
            'description' => 'Created invoice for homeowner Marilou n/a Remojo',
            'credit_title_id' => 2,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        $homeOwnerPaymentTransactionID = DB::table('home_owner_payment_transaction')->insert([
            'payment_id' => $homeOwnerInvoiceID,
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_no' => '0015635',
            'amount_paid' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'debit_title_id' => 7,
            'debit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);

        DB::table('journal_entry')->insert([
            'created_by' => 1,
            'updated_by' => 1,
            'receipt_id' => $homeOwnerPaymentTransactionID,
            'type' => 'Receipt',
            'description' => 'Created Receipt for invoice #' . sprintf('%07d', $homeOwnerPaymentTransactionID),
            'credit_title_id' => 6,
            'credit_amount' => 5376,
            'created_at' => date('Y-m-d'),
            'updated_at'=>  date('Y-m-d')
        ]);
    }
}
