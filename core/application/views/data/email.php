<!doctype html>
<html lang="en" style="box-sizing: border-box;font-family: sans-serif;line-height: 1.15;-webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: transparent;">

<head style="box-sizing: border-box;">
	<!-- Required meta tags -->
	<meta charset="utf-8" style="box-sizing: border-box;">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" style="box-sizing: border-box;">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" style="box-sizing: border-box;">

	<title style="box-sizing: border-box;">Hello, world!</title>
</head>

<body style="box-sizing: border-box;margin: 0;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #212529;text-align: left;background-color: #fff;min-width: 992px!important;">


	<div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
		<div class="col-md-12" style="box-sizing: border-box;position: relative;width: 100%;padding-right: 15px;padding-left: 15px;-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100%;">
			<div class="card" style="box-sizing: border-box;position: relative;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;">
				<div class="card-body" style="box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1.25rem;">
					<div class="row" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;">
						<div class="col-md" style="box-sizing: border-box;position: relative;width: 100%;padding-right: 15px;padding-left: 15px;">
							<img class="img-fluid" src="https://simbada.mwafa.net/elaadmin/images/logo123.png" alt="" style="box-sizing: border-box;vertical-align: middle;border-style: none;page-break-inside: avoid;max-width: 100%;height: auto;">
						</div>
						<div class="col-md d-flex flex-column" style="box-sizing: border-box;position: relative;width: 100%;padding-right: 15px;padding-left: 15px;display: flex!important;-ms-flex-direction: column!important;flex-direction: column!important;">
							<table class="mt-auto" style="box-sizing: border-box;border-collapse: collapse;margin-top: auto!important;">
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<td style="box-sizing: border-box;">
										<strong style="box-sizing: border-box;font-weight: bolder;">Alamat</strong>
									</td>
									<td style="box-sizing: border-box;">: Jl. Grafika No. 3 Yogyakarta</td>
								</tr>
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<td style="box-sizing: border-box;">
										<strong style="box-sizing: border-box;font-weight: bolder;">Telepon </strong>
									</td>
									<td style="box-sizing: border-box;">: 082281199234</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row mt-2" style="box-sizing: border-box;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px;margin-top: .5rem!important;">
						<div class="col-md" style="box-sizing: border-box;position: relative;width: 100%;padding-right: 15px;padding-left: 15px;">
							<table class="table" style="box-sizing: border-box;border-collapse: collapse!important;width: 100%;margin-bottom: 1rem;color: #212529;">
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">KODE</th>
									<td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?=$cucian->kode?></td>
								</tr>
								<tr>
									<th>Nama Pelanggan</th>
									<td><?=$cucian->nama?></td>
								</tr>
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Tgl Masuk</th>
									<td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?=$cucian->tgl_masuk?></td>
								</tr>
								<tr>
									<th>status</th>
									<td>
                                        <span class="display-4 text-capitalize">
                                            <?=$cucian->status?></td>
                                        
								</tr>
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Paket Cucian</th>
									<td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?=$cucian->paket?> (Rp. <span class="rp"><?=$cucian->harga?>/kg)</td>
								</tr>
								<tr style="box-sizing: border-box;page-break-inside: avoid;">
									<th style="box-sizing: border-box;text-align: inherit;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;">Berat</th>
									<td style="box-sizing: border-box;padding: .75rem;vertical-align: top;border-top: 1px solid #dee2e6;background-color: #fff!important;"><?=$cucian->berat?> Kg</td>
								</tr>
								<tr>
									<th>Total Harga</th>
									<td class="display-4">Rp. <span class="rp"><?=$cucian->bayar?></td>
								</tr>
							</table>
							<small style="box-sizing: border-box;font-size: 80%;font-weight: 400;">Terimakasih telah mempercayakan cucian anda kepada kami.</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" style="box-sizing: border-box;">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" style="box-sizing: border-box;">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" style="box-sizing: border-box;">
	</script>
</body>

</html>
