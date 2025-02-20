<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPageContentTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_page_content_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('content_page_id');
            $table->foreign('content_page_id', 'content_page_id_fk_10278458')->references('id')->on('content_pages')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_10278458')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
