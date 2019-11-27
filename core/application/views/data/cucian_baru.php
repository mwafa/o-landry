<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="box-title">
                    Masukkan Cucian Baru
                </div>
            </div>
            <div class="card-body">
                <form action="<?=base_url('cucian_baru/insert')?>" method="post">
                    <div class="form-group">
                        <label for="">Pelanggan</label>
                        <div class="input-group">
                            <input type="text" class="form-control" require placeholder="Nama Pelanggan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nomer HP</label>
                        <div class="input-group">
                            <input type="text" class="form-control" require placeholder="Nomer HP">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control" require placeholder="Masukkan email pengguna">
                        </div>
                    </div>
                    <hr>
                    <h3 class="mb-3">Data Cucian</h3>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" step=".01" class="form-control" require placeholder="Berat Cucian">
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Paket Cucian</label>
                        <div class="input-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="paket-0" value="option1" checked>
                                <label class="form-check-label" for="paket-0">
                                    Cuci Biasa (Rp. 2500,- /Kg)
                                </label>
                            </div>    
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="paket-1" value="option1">
                                <label class="form-check-label" for="paket-1">
                                    Cuci + Setrika (Rp. 3000,- /Kg)
                                </label>
                            </div>
                        </div>
                        <h2>
                            Harga: Rp. 10000,-
                        </h2>
                    </div>
                    <button class="btn btn-success">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>