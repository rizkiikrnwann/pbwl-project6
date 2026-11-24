<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
	<div>
		<h2 class="fw-bold mb-1">Matakuliah</h2>
		<p class="text-secondary mb-0">Daftar data matakuliah.</p>
	</div>
	<a href="<?php echo URL; ?>/matakuliah/input" class="btn btn-primary align-self-start">
		<i class="bi bi-journal-plus me-1"></i> Input Matakuliah
	</a>
</div>

<div class="card border-0 shadow-sm">
	<div class="table-responsive">
		<table class="table table-hover align-middle mb-0">
			<thead class="table-light">
				<tr>
					<th>NO</th>
					<th>KODE</th>
					<th>NAMA MATAKULIAH</th>
					<th>SKS</th>
					<th>SEMESTER</th>
					<th>AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 1; foreach ($data['rows'] as $row) { ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo htmlspecialchars($row['matkul_kode']); ?></td>
						<td><?php echo htmlspecialchars($row['matkul_nama']); ?></td>
						<td><?php echo $row['matkul_sks']; ?></td>
						<td><?php echo $row['matkul_semester']; ?></td>
						<td>
							<div class="d-flex gap-2">
								<a href="<?php echo URL; ?>/matakuliah/edit/<?php echo $row['matkul_id']; ?>" class="btn btn-warning btn-sm">
									<i class="bi bi-pencil-square"></i> Edit
								</a>
								<a href="<?php echo URL; ?>/matakuliah/delete/<?php echo $row['matkul_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">
									<i class="bi bi-trash"></i> Delete
								</a>
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
