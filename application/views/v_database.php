<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Bantuan BOS Tahun 2020</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>database/create" class="btn btn-success">Create</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>NPSN</th>
						<th>Nama Sekolah</th>
						<th>Besar Bantuan</th>
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($siswa as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->NPSN; ?></td>
							<td><?php echo $row->Nama_Sekolah; ?></td>
							<td><?php echo $row->Besaran_Bantuan; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>database/edit/<?php echo $row->kd_siswa; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>database/delete/<?php echo $row->kd_siswa; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>