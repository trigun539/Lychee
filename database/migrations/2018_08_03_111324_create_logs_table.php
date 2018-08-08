<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//MariaDB [lychee]> show columns from lychee_log;
//+----------+--------------+------+-----+---------+----------------+
//| Field    | Type         | Null | Key | Default | Extra          |
//+----------+--------------+------+-----+---------+----------------+
//| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
//| time     | int(11)      | NO   |     | NULL    |                |
//| type     | varchar(11)  | NO   |     | NULL    |                |
//| function | varchar(100) | NO   |     | NULL    |                |
//| line     | int(11)      | NO   |     | NULL    |                |
//| text     | text         | YES  |     | NULL    |                |
//+----------+--------------+------+-----+---------+----------------+


class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('logs');
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
//            $table->integer('time');
            $table->char('type',11);
            $table->char('function',100);
            $table->integer('line');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
