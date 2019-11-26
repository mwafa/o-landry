<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row">
    <div class="card col">
        <div class="card-body">
            Grafik Pertutumbuhan Pelanggan baru
        </div>
        <div class="card-body">
            <div id="pelanggan-baru">
                <!-- Grafik disini -->
                <canvas id="chart" width="400" height="80"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="card col">
        <div class="card-body">
            <h3>Data Pelanggan</h3>
        </div>
        <div class="card-body">
            <strong>
                Total: <?=$total?>
            </strong>
        </div>
        <div class="card-body">
            <table data-content="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Tgl. Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pelanggan as $item):?>
                    <tr>
                        <td><?=$item->nama?></td>
                        <td><?=$item->hp?></td>
                        <td><?=$item->email?></td>
                        <td><?=$item->bulan_masuk?></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var pelanggan = <?=json_encode($pelanggan)?> || []
    var data = {}
    pelanggan.map(item => {
        if(item.bulan_masuk){
            index = item.bulan_masuk.split("-").slice(0, 2).join("-")
            data[index] = data[index] || 0
            data[index] += 1
        }
    })
    let labels = Object.keys(data).sort()

    window.onload = () => {
        var ctx = document.getElementById('chart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Pelanggan Baru',
                    data: labels.map(index => data[index]),
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

</script>