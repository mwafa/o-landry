<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-title">
                    Invoice
                </div>
            </div>
            <div class="card-body printable">
                <div class="row">
                    <div class="col-md">
                        <img class="img-fluid" src="/elaadmin/images/logo123.png" alt="">
                    </div>
                    <div class="col-md d-flex flex-column">
                        <table class="mt-auto">
                            <tr>
                                <td>
                                    <strong>Alamat</strong>
                                </td>
                                <td>: Jl. Grafika No. 3 Yogyakarta</td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Telepon </strong>
                                </td>
                                <td>: 082281199234</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md">
                        <table class="table">
                            <tr>
                                <th>KODE</th>
                                <td><?=$cucian->kode?></td>
                            </tr>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <td><?=$cucian->nama?></td>
                            </tr>
                            <tr>
                                <th>Tgl Masuk</th>
                                <td><?=$cucian->tgl_masuk?></td>
                            </tr>
                            <tr>
                                <th>Paket Cucian</th>
                                <td><?=$cucian->paket?> (Rp. <?=$cucian->harga?>,-/kg)</td>
                            </tr>
                            <tr>
                                <th>Berat</th>
                                <td><?=$cucian->berat?> Kg</td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <td class="display-4">Rp. <?=$cucian->bayar?>,-</td>
                            </tr>
                        </table>
                        <small>Terimakasih telah mempercayakan cucian anda kepada kami.</small>
                    </div>
                </div>
                <div class="row mt-3 no-print">
                    <div class="col">
                        <button class="btn btn-outline-primary" onclick="window.print()">Cetak Invoice</button>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="<?=base_url('cucian_baru')?>" class="btn btn-outline-success">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>