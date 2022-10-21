<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insert(){

        // RAW
        $sql = DB::insert("INSERT INTO mahasiswa (npm,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('2010631170145', 'Fathan Pebrilliestyo Ganteng','laki-laki','Jl.Ninjaku No.1','New York','2004-02-17','fathan_mhs.png',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('mahasiswa')->insert(
            [
                'npm' => '2010631170145',
                'nama' => 'Habillah Darma',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.karawang no 69',
                'tempat_lahir' => 'New York',
                'tanggal_lahir' => '2002-02-22',
                'photo' => 'habillah_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::create(
            [
                'npm' => '2010631170145',
                'nama' => 'Habillah Darma',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl.karawang no 69',
                'tempat_lahir' => 'New York',
                'tanggal_lahir' => '2002-02-22',
                'photo' => 'habillah_mhs.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data berhasil diproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM mahasiswa");
        dd($sql);

        // SB
        $sql2 = DB::table('mahasiswa')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Mahasiswa::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE mahasiswa SET alamat='JL.lala 59',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswa')
        ->where('id','1')
        ->update(
            [
                'alamat' => 'JL.lala no 59',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Mahasiswa::where('id','1')->first()->update([
            'alamat' => 'JL.lala no 59',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM mahasiswa WHERE npm=?",['2010631170145']);
        dd($sql);

        //SB
        $sql1 = DB::table('mahasiswa')
        ->where('npm','2010631170145')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Mahasiswa::where('mahasiswa','2010631170145')->delete();
        dd($sql2);
    }
    
}