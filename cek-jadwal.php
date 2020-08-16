<?php
$kota_asal = $_POST['kota_asal'];
$hasil = implode(" ", array_slice(explode(" ", $kota_asal), 0, 1));

$tanggal = date('Y-m', strtotime($_POST['tanggal']));

$url = "https://api.pray.zone/v2/times/today.json?city=" . $hasil . "&month=" . $tanggal;
$obj = json_decode(file_get_contents($url), true);
$newobj = $obj['results']['datetime'];

?>
<div class="panel panel-default">
	<div class="panel-body">
		<table class="table table-responsive">
			<thead>
				<tr>
					<td>Imsak</td>
					<td>Sunrise</td>
					<td>Fajr</td>
					<td>Dhuhr</td>
					<td>Asr</td>
					<td>Maghrib</td>
					<td>Isha</td>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($newobj as $value) : ?>

					<tr>
						<td><?= $value['times']['Imsak'] ?></td>
						<td><?= $value['times']['Sunrise'] ?></td>
						<td><?= $value['times']['Fajr'] ?></td>
						<td><?= $value['times']['Dhuhr'] ?></td>
						<td><?= $value['times']['Asr'] ?></td>
						<td><?= $value['times']['Maghrib'] ?></td>
						<td><?= $value['times']['Isha'] ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>