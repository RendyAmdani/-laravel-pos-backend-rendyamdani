<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // \DB::table('users')->insert(array('name'=>'Rendy Amdani', 'email'=>'rendy.amdani@gmail.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
        // \DB::table('users')->insert(array('name'=>'Ramdani', 'email'=>'email1@email.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
        // \DB::table('users')->insert(array('name'=>'Saefullah', 'email'=>'email2@email.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
        // \DB::table('users')->insert(array('name'=>'Debira', 'email'=>'email3@email.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
        // \DB::table('users')->insert(array('name'=>'Fedore', 'email'=>'email4@email.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
        // \DB::table('users')->insert(array('name'=>'Sanitarian', 'email'=>'email5@email.com', 'password'=>Hash::make('polke'), 'phone'=>'081327775751', 'role'=>'admin', 'created_at'=>now()));
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // \DB::table('users')->where('email', 'email1@email.com')->delete();
            // \DB::table('users')->where('email', 'email2@email.com')->delete();
            // \DB::table('users')->where('email', 'email3@email.com')->delete();
            // \DB::table('users')->where('email', 'email4@email.com')->delete();
            // \DB::table('users')->where('email', 'email5@email.com')->delete();
        });
    }
};
