<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    public function insert(){

        // RAW
        $sql = DB::insert("INSERT INTO matakuliah (kode_mk,nama_mk,created_at,updated_at) VALUES ('DM29', 'Data Mining',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('matakuliah')->insert(
            [
                'kode_mk' => 'DM29',
                'nama_mk' => 'Data Mining',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => 'DM29',
                'nama_mk' => 'Data Mining',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM matakuliah");
        dd($sql);

        // SB
        $sql2 = DB::table('matakuliah')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Matakuliah::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE matakuliah SET nama_mk='Pemrograman Berbasis Web',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('matakuliah')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'Pemrograman Berbasis Web',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','1')->first()->update([
            'nama_mk' => 'Pemrograman Berbasis Web',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM matakuliah WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('matakuliah')
        ->where('id','1')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::where('id','1')->delete();
        dd($sql2);
    }
}