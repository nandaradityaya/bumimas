<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tki;

class TkiController extends Controller
{
    public function create()
    {
        return view('join');
    }

    public function success()
    {
        return view('success');
    }

    public function store(Request $request)
    {
        // $message = [
        //     'required' => 'Form wajib terisi semua!',
        // ];
        // $this->validate($request,[
        //     'nik' => 'required',
        //     'nokk' => 'required',
        //     'cabang' => 'required',
        //     'kd_sponsor' => 'required',
        //     'tujuan' => 'required',
        //     'nama' => 'required',
        //     'tmp_lahir' => 'required',
        //     'tgl_lahir' => 'required',
        //     'jnkel' => 'required',
        //     'pengalaman' => 'required',
        //     'pendidikan' => 'required',
        //     'cm_badan' => 'required',
        //     'kg_badan' => 'required',
        //     'jml_anak' => 'required',
        //     'nm_pasangan' => 'required',
        //     'nm_ayah' => 'required',
        //     'nm_ibu' => 'required',
        //     'nm_kakek' => 'required',
        //     'al_lain' => 'required',
        //     'al_rtrw' => 'required',
        //     'al_kel' => 'required',
        //     'al_kec' => 'required',
        //     'al_kotakab' => 'required',
        //     'al_prop' => 'required',
        //     'png_kerja' => 'required',
        //     'catatan' => 'required',
        // ], $message);
        // dd($request->except('_token', 'submit'));
        Tki::create($request->except('_token', 'updated_at', 'submit'));
        return redirect('/success');
        // return redirect('/success')->with('success', 'Data berhasil ditambahkan!');
    }
}
