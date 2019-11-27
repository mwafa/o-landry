<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="box-title">
                    Cucian
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped" data-content="datatable">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Status</th>
                            <th>Nama</th>
                            <th>Paket</th>
                            <th>Jumlah (Kg)</th>
                            <th>Harga/Kg</th>
                            <th>Bayar</th>
                            <?php if(!$old):?>
                            <th>Aksi</th>
                            <?php endif?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cucian as $c): ?>
                        <tr>
                            <td><?=$c->id?></td>
                            <td>
                                <span class="badge badge-primary"><?=$c->status?></span>
                            </td>
                            <td><?=$c->pelanggan?></td>
                            <td><?=$c->paket?></td>
                            <td><?=$c->jumlah?></td>
                            <td><?=$c->harga?></td>
                            <td><?=$c->bayar?></td>
                            <?php if(!$old): ?>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">Selesai</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">Diambil</a>
                            </td>
                            <?php endif?>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
            <?php if(!$old):?>
            <div class="card-body">
                <a href="<?= base_url('cucian/old')?>" class="btn btn-primary">Tampilkan cucian yang telah diambil</a>
            </div>
            <?php endif?>
        </div>
    </div>
</div>
