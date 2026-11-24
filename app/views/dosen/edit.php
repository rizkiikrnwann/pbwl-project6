<div class="mb-4">
	<h2 class="fw-bold mb-1">Edit Dosen</h2>
	<p class="text-secondary mb-0">Perbarui data dosen.</p>
</div>

<div class="row">
	<div class="col-12 col-lg-7">
		<div class="card border-0 shadow-sm">
			<div class="card-body p-4">
				<form action="<?php echo URL; ?>/dosen/update" method="post">
					<input type="hidden" name="dosen_id" value="<?php echo $data['row']['dosen_id']; ?>">
					<div class="mb-3">
						<label for="dosen_nip" class="form-label">NIP</label>
						<input type="text" class="form-control" id="dosen_nip" name="dosen_nip" maxlength="25" value="<?php echo htmlspecialchars($data['row']['dosen_nip']); ?>" required>
					</div>
					<div class="mb-3">
						<label for="dosen_nama" class="form-label">Nama</label>
						<input type="text" class="form-control" id="dosen_nama" name="dosen_nama" maxlength="100" value="<?php echo htmlspecialchars($data['row']['dosen_nama']); ?>" required>
					</div>
					<div class="mb-3">
						<label for="dosen_golongan" class="form-label">Golongan</label>
						<input type="text" class="form-control" id="dosen_golongan" name="dosen_golongan" maxlength="100" value="<?php echo htmlspecialchars($data['row']['dosen_golongan'] ?? ''); ?>">
					</div>
					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary">
							<i class="bi bi-floppy me-1"></i> Update
						</button>
						<a href="<?php echo URL; ?>/dosen" class="btn btn-secondary">
							<i class="bi bi-x-circle me-1"></i> Batal
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
