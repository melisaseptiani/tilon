
					
<div id="page-wrapper">
			<div class="main-page">
				<h1><center>DAFTAR PELANGGARAN</center></h1>
				</div>
				
				<div class="row">
					
					<div class="row calender widget-shadow">
						<table class="table stats-table ">
							<thead>
								<th>No </th>
								<th>Nama</th>
								<th>Jenis Sim</th>
								<th>TTL</th>
								<th>Tanggal Tilang</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Profesi</th>
								<th>Pasal Pelanggaran</th>
								<th>Tepat Tilang</th>
								<th>Aksi</th>
								
									<?php $no = 1;
									foreach ($pelanggaran as $key): ?>
									<tr >
										<td><?php echo $no++; ?></td>
										<td><?php echo $key->nama ?></th>
										<td><?php echo $key->jenissim ?></td>
										<td><?php echo $key->ttl ?></td>
										<td><?php echo $key->tdt  ?></td>
										<td><?php echo $key->nohp ?></th>
										<td><?php echo $key->email ?></td>
										<td><?php echo $key->alamat ?></td>
										<td><?php echo $key->profesi ?></td>
										<td><?php echo $key->pasal ?></th>
										<td><?php echo $key->tempattilang ?></td>
										<td><span class="label label-warning">Edit</span> | <span class="label label-danger">Delete</span></td>
										
									</tr>
									<?php endforeach ?>
								
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
		</div>
	</div>
