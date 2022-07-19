<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger("mfg_pn_id");
            $table->integer("qty");
            $table->string("date_code",10);
            $table->tinyInteger("mfg_name_id");
            $table->text("note")->nullable();
            $table->boolean("rohs");
            $table->tinyInteger("incoming_vendor_id");
            $table->tinyInteger("outgoing_customer_id");
            $table->string("po_number",30);
            $table->string("invoice_number",30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
};
