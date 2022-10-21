<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function insert(){
        
        //RAW
        $sql = DB::insert("INSERT INTO dosens (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('0224072623', 'Fathan Pebrilliestyo M.Kom','laki-laki','Jl.Ninjaku No.1','Karawang','1999-02-17','fathan.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosen')->insert(
            [
                'nidn' => '0224078224',
                'nama' => 'Rini Mayasari M.Si',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Unsika 24',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1984-04-04',
                'photo' => 'rini.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '0224072623',
                'nama' => 'Intan Purnamasari M.Pd',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.Tegal 21',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1987-07-27',
                'photo' => 'intan.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
    }

    public function select(){

        //RAW
        $sql = DB::select("SELECT * FROM dosen");
        dd($sql);

        //SB
        $sql2 = DB::table('dosen')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Dosen::all();
        dd($sql3);
    }

    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosens SET alamat='JL.lala no 50',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
        ->where('id','3')
        ->update(
            [
                'alamat' => 'JL.lala no 50',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id','1')->first()->update([
            'alamat' => 'JL.lala no 50',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosen WHERE nidn=?",['0224072623']);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
        ->where('nidn','0224072623')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','0224072623')->delete();
        dd($sql2);
    }
}