<div class="mb-4">
	<h2 class="fw-bold mb-1">Edit Matakuliah</h2>
	<p class="text-secondary mb-0">Perbarui data matakuliah.</p>
</div>

<div class="row">
	<div class="col-12 col-lg-7">
		<div class="card border-0 shadow-sm">
			<div class="card-body p-4">
				<form action="<?php echo URL; ?>/matakuliah/update" method="post">
					<input type="hidden" name="matkul_id" value="<?php echo $data['row']['matkul_id']; ?>">
					<div class="mb-3">
						<label for="matkul_kode" class="form-label">Kode Matakuliah</label>
						<input type="text" class="form-control" id="matkul_kode" name="matkul_kode" maxlength="25" value="<?php echo htmlspecialchars($data['row']['matkul_kode']); ?>" required>
					</div>
					<div class="mb-3">
						<label for="matkul_nama" class="form-label">Nama Matakuliah</label>
						<input type="text" class="form-control" id="matkul_nama" name="matkul_nama" maxlength="100" value="<?php echo htmlspecialchars($data['row']['matkul_nama']); ?>" required>
					</div>
					<div class="row">
						<div class="col-6 mb-3">
							<label for="matkul_sks" class="form-label">SKS</label>
							<input type="number" class="form-control" id="matkul_sks" name="matkul_sks" min="1" max="127" value="<?php echo $data['row']['matkul_sks']; ?>" required>
						</div>
						<div class="col-6 mb-3">
							<label for="matkul_semester" class="form-label">Semester</label>
							<input type="number" class="form-control" id="matkul_semester" name="matkul_semester" min="1" max="127" value="<?php echo $data['row']['matkul_semester']; ?>" required>
						</div>
					</div>
					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary">
							<i class="bi bi-floppy me-1"></i> Update
						</button>
						<a href="<?php echo URL; ?>/matakuliah" class="btn btn-secondary">
							<i class="bi bi-x-circle me-1"></i> Batal
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
