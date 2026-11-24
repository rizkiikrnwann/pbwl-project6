<div class="mb-4">
	<h2 class="fw-bold mb-1">Input Matakuliah</h2>
	<p class="text-secondary mb-0">Masukkan data matakuliah baru.</p>
</div>

<div class="row">
	<div class="col-12 col-lg-7">
		<div class="card border-0 shadow-sm">
			<div class="card-body p-4">
				<form action="<?php echo URL; ?>/matakuliah/simpan" method="post">
					<div class="mb-3">
						<label for="matkul_kode" class="form-label">Kode Matakuliah</label>
						<input type="text" class="form-control" id="matkul_kode" name="matkul_kode" maxlength="25" required>
					</div>
					<div class="mb-3">
						<label for="matkul_nama" class="form-label">Nama Matakuliah</label>
						<input type="text" class="form-control" id="matkul_nama" name="matkul_nama" maxlength="100" required>
					</div>
					<div class="row">
						<div class="col-6 mb-3">
							<label for="matkul_sks" class="form-label">SKS</label>
							<input type="number" class="form-control" id="matkul_sks" name="matkul_sks" min="1" max="127" required>
						</div>
						<div class="col-6 mb-3">
							<label for="matkul_semester" class="form-label">Semester</label>
							<input type="number" class="form-control" id="matkul_semester" name="matkul_semester" min="1" max="127" required>
						</div>
					</div>
					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary">
							<i class="bi bi-floppy me-1"></i> Simpan
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
