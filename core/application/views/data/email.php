<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>


	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md">
							<img class="img-fluid" src="https://simbada.mwafa.net/elaadmin/images/logo123.png" alt="">
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
									<th>status</th>
									<td>
                                        <span class="display-4 text-capitalize">
                                            <?=$cucian->status?></td>
                                        </span>
								</tr>
								<tr>
									<th>Paket Cucian</th>
									<td><?=$cucian->paket?> (Rp. <span class="rp"><?=$cucian->harga?></span>/kg)</td>
								</tr>
								<tr>
									<th>Berat</th>
									<td><?=$cucian->berat?> Kg</td>
								</tr>
								<tr>
									<th>Total Harga</th>
									<td class="display-4">Rp. <span class="rp"><?=$cucian->bayar?></span></td>
								</tr>
							</table>
							<small>Terimakasih telah mempercayakan cucian anda kepada kami.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>
