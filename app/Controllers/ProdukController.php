<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    protected $produk;

    function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->produk = new ProdukModel();
    }

    public function index()
    {
        $data['produks'] = $this->produk->findAll();
        return view('pages/produk', $data);
    }

    public function create()
{
    $data = $this->request->getPost();
    $validate = $this->validation->run($data, 'barang');
    $errors = $this->validation->getErrors();

    if (!$errors) {
        // ...

        $dataForm = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'diskon' => $this->request->getPost('diskon')
        ];

        // ...
        $this->produk->insert($dataForm);
    $produkId = $this->produk->getInsertID(); // Get the inserted product's ID

    // Save the discount amount in the database
    $transaksiDetailData = [
        'produk_id' => $produkId,
        'diskon' => $this->request->getPost('diskon')
    ];
    // Insert the transaksi_detail data into the database

    // ...

        $this->produk->insert($dataForm);

        return redirect('produk')->with('success', 'Data Berhasil Ditambah');
    } else {
    }
}

public function edit($id)
{
    $data = $this->request->getPost();
    $validate = $this->validation->run($data, 'barang');
    $errors = $this->validation->getErrors();

    if (!$errors) {
        // ...

        $dataForm = [
            'nama' => $this->request->getPost('nama'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'keterangan' => $this->request->getPost('keterangan'),
            'diskon' => $this->request->getPost('diskon')
        ];

        // ...

        $this->produk->update($id, $dataForm);

        return redirect('produk')->with('success', 'Data Berhasil Diubah');
    } else {
        // ...
    }
}

    public function delete($id)
    {
        $dataProduk = $this->produk->find($id);
        unlink("public/img/" . $dataProduk['foto']);

        $this->produk->delete($id);

        return redirect('produk')->with('success', 'Data Berhasil Dihapus');
    }
}
