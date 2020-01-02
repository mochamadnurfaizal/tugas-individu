<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataDiri; //import model
use Illuminate\Support\Facades\Storage; //import storage untuk mengakses file

class DataDiriController extends Controller
{
    public function index()
    {
        //mendapatkan file dari storage
        $fileTxt = Storage::get("public/data.txt");

        //membaca isi file dan membuat array dari tiap baris
        $fileTxt = explode("\r\n", $fileTxt);

        foreach ($fileTxt as $line) {
            //membaca tiap bagian yang dipisahkan oleh pipeline
            $line = explode("|", $line);

            //filter array kosong
            $line = array_values(array_filter($line));

            //isi data ke database 
            $data = new DataDiri;
            $data->no_ktp = $line[0]; //berisi data ktp
            $data->nama = $line[1]; //berisi nama
            $data->jenis_kelamin = $line[2]; //berisi jenis kelamin
            $data->alamat = $line[3]; //berisi alamat
            $data->save(); // menyimpan pada database

            
        }

        //select semua data dari database
        $listDataDiri = DataDiri::all();

        return view('listDataDiri')->with('listDataDiri',$listDataDiri);
    }
}
