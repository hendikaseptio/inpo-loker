<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Perusahaan extends BaseController
{
    public function index()
    {
        $model = model(PerusahaanModel::class);
        $data['perusahaan'] = $model->findAll();
        return view('admin/perusahaan/index',$data);
    }
    public function tambah()
    {
        helper('form');
        return view('admin/perusahaan/create');
    }
    public function simpan()
    {   
        // ambil data inputan
        $data = $this->request->getVar();
        // setting dan cek rulenya
        if (! $this->validateData($data, [
            'nama' => 'required|max_length[255]|min_length[3]',
            'alamat'  => 'required|max_length[5000]|min_length[10]',
            'logo' => 'uploaded[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
        ])) {
            // jika data input tidak valid maka arahkan ke form tambah 
            session()->setFlashdata('error',"Error");
            return $this->tambah();
        } else {
            
            // ambil data gambar saja
            $img = $this->request->getFile('logo');
            
            // jika gambar belum di upload/pindah maka
            if (! $img->hasMoved()) {
                
                // pindahkan gambar
                $img->move('img/brand');
                
                // ambil nama untuk di input ke database
                $data['logo'] = $img->getName();

                // ambil modelnya
                $model = model(PerusahaanModel::class);
                // perintah simpan data ke database
                $model->save($data);

                // setting flashdata 
                session()->setFlashdata('success',"data Berhasil Ditambah");
                // teruskan ke halman awal perusahaan
                return redirect()->to('/admin/perusahaan');
            }
        }
    }
}
