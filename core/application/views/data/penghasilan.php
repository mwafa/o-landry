<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>
<div class="row">
	<div class="col-12 mb-2">
		<strong>
			Data Bulan ini (sudah diambil)
		</strong>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-1">
						<i class="pe-7s-cash"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">Rp. <span class=""><?=$penghasilan_bulan_ini?></span></div>
							<div class="stat-heading">Penghasilan</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-2">
						<i class="pe-7s-cart"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text"><span class=""><?=$cucian_bulan_ini?></span> Kg</div>
							<div class="stat-heading">Cucian</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-4">
						<i class="pe-7s-users"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text"><span class=""><?=$pengguna_bulan_ini?></span></div>
							<div class="stat-heading">Pelanggan</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- trafic -->
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="box-title">Penghasilan Bulanan </h4>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="card-body">
						<canvas id="penghasilan"></canvas>  
					</div>
				</div>
				<div class="col-lg-4 d-none">
					<div class="card-body">
						<div class="progress-box progress-1">
							<h4 class="por-title">Visits</h4>
							<div class="por-txt">96,930 Users (40%)</div>
							<div class="progress mb-2" style="height: 5px;">
								<div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;"
									aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="progress-box progress-2">
							<h4 class="por-title">Bounce Rate</h4>
							<div class="por-txt">3,220 Users (24%)</div>
							<div class="progress mb-2" style="height: 5px;">
								<div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;"
									aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="progress-box progress-2">
							<h4 class="por-title">Unique Visitors</h4>
							<div class="por-txt">29,658 Users (60%)</div>
							<div class="progress mb-2" style="height: 5px;">
								<div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;"
									aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<div class="progress-box progress-2">
							<h4 class="por-title">Targeted Visitors</h4>
							<div class="por-txt">99,658 Users (90%)</div>
							<div class="progress mb-2" style="height: 5px;">
								<div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div> <!-- /.card-body -->
				</div>
			</div> <!-- /.row -->
			<div class="card-body"></div>
		</div>
	</div><!-- /# column -->
</div>



<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="box-title">
                    Jumlah Cucian (Kg)
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card-body">
                        <canvas id="cucian" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
var data = {
    bulanan : <?=json_encode($penghasilan_bulanan)?> || []
}

var listBulan = {}
var listLabel = []
data.bulanan.map(item => {
    if(item.bulan){
        index = item.bulan.split("-").slice(0, 2).join("-")
        listBulan[index] = listBulan[index] || []
        listBulan[index].push({
            paket: item.paket,
            penghasilan: item.penghasilan,
            cucian: item.cucian
        })
        if(listLabel.indexOf(item.paket) < 0){
            listLabel.push(item.paket)
        }
    }
})
let labels = Object.keys(listBulan).sort()
console.log(listBulan, listLabel)

window.onload = () => {
    // tabel
    var datasets = listLabel.map(item => {
                        return {
                            label: item,
                            data: labels.map(i => listBulan[i].filter(i => i.paket == item)[0].penghasilan),
                            borderWidth: 1,
                            backgroundColor: getRandomColor()+88,
                        }
                    })

    datasets.push({
        label: "Total",
        data: labels.map(i => listBulan[i].reduce((a, b) => parseFloat(a.penghasilan) + parseFloat(b.penghasilan))),
        color: getRandomColor(),
        type: "bar"
    })
    var ctx = document.getElementById('penghasilan');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets
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
        var datasets = listLabel.map(item => {
                            return {
                                label: item,
                                data: labels.map(i => listBulan[i].filter(i => i.paket == item)[0].cucian),
                                borderWidth: 1,
                                backgroundColor: getRandomColor()+88,
                            }
                        })
        datasets.push({
            label: "Total",
            data: labels.map(i => listBulan[i].reduce((a, b) => parseFloat(a.cucian) + parseFloat(b.cucian))),
            color: getRandomColor(),
            type: "bar"
        })

        var ctx = document.getElementById('cucian');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets
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

// window.onload = () => {
// }
</script>