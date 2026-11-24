<?php

namespace App\Models;

use App\Core\Model;

class Dosen extends Model
{
	public function tampil()
	{
		$sql = "SELECT * FROM tb_dosen";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		return $this->selects($stmt);
	}

	public function simpan()
	{
		$dosen_nip = $_POST['dosen_nip'];
		$dosen_nama = $_POST['dosen_nama'];
		$dosen_golongan = $_POST['dosen_golongan'];

		$sql = "INSERT INTO tb_dosen SET dosen_nip=:dosen_nip, dosen_nama=:dosen_nama, dosen_golongan=:dosen_golongan";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":dosen_nip", $dosen_nip);
		$stmt->bindParam(":dosen_nama", $dosen_nama);
		$stmt->bindParam(":dosen_golongan", $dosen_golongan);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_dosen WHERE dosen_id=:dosen_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":dosen_id", $id);
		$stmt->execute();

		return $this->select($stmt);
	}

	public function update()
	{
		$dosen_nip = $_POST['dosen_nip'];
		$dosen_nama = $_POST['dosen_nama'];
		$dosen_golongan = $_POST['dosen_golongan'];
		$dosen_id = $_POST['dosen_id'];

		$sql = "UPDATE tb_dosen SET dosen_nip=:dosen_nip, dosen_nama=:dosen_nama, dosen_golongan=:dosen_golongan WHERE dosen_id=:dosen_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":dosen_nip", $dosen_nip);
		$stmt->bindParam(":dosen_nama", $dosen_nama);
		$stmt->bindParam(":dosen_golongan", $dosen_golongan);
		$stmt->bindParam(":dosen_id", $dosen_id);
		$stmt->execute();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_dosen WHERE dosen_id=:dosen_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":dosen_id", $id);
		$stmt->execute();
	}
}
