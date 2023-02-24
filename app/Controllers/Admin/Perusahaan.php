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
    public function edit($id)
    {
        helper('form');
        $model = model(PerusahaanModel::class);
        $data['perusahaan'] = $model->find($id);
        return view('admin/perusahaan/edit',$data);
    }
    public function update($id)
    {
        // ambil data inputan
        $data = $this->request->getVar();
        // setting dan cek rulenya
        if (! $this->validateData($data, [
            'nama' => 'required|max_length[255]|min_length[3]',
            'alamat'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // jika data input tidak valid maka arahkan ke form tambah 
            session()->setFlashdata('error',"Error");
            return $this->edit($id);
            // return redirect()->to('/admin/perusahaan')->withInput();
        } else {
            // ambil data gambar saja
            $img = $this->request->getFile('logo');
            if (isset($_FILES) && $_FILES['logo']['error'] != '4') {
                if (! $this->validateData($data, [
                    'logo' => 'uploaded[logo]|mime_in[logo,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                ])) {
                    session()->setFlashdata('error',"Error");
                    return $this->edit($id);
                }else{
                    // jika gambar belum di upload/pindah maka
                    if (! $img->hasMoved()) {
                        // pindahkan gambar
                        $img->move('img/brand');

                        // ambil nama untuk di input ke database
                        $data['logo'] = $img->getName();
                    }
                }
            }
            // ambil modelnya
            $model = model(PerusahaanModel::class);
            // perintah simpan data ke database
            $model->update($id, $data);

            // setting flashdata 
            session()->setFlashdata('success',"data Berhasil Diupdate");
            // teruskan ke halman awal perusahaan
            return redirect()->to('/admin/perusahaan');
        }
    }
    public function hapus($id)
    {
        $model = model(PerusahaanModel::class);
        $data = $model->find($id);
        unlink('../public/img/brand/'.$data['logo']);

        $model->delete($id);
        return redirect()->to('/admin/perusahaan')->with('success', 'Data Berhasil di Hapus');
    }
}
