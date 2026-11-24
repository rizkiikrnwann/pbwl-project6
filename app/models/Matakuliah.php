<?php

namespace App\Models;

use App\Core\Model;

class Matakuliah extends Model
{
	public function tampil()
	{
		$sql = "SELECT * FROM tb_matakuliah";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		return $this->selects($stmt);
	}

	public function simpan()
	{
		$matkul_kode = $_POST['matkul_kode'];
		$matkul_nama = $_POST['matkul_nama'];
		$matkul_sks = $_POST['matkul_sks'];
		$matkul_semester = $_POST['matkul_semester'];

		$sql = "INSERT INTO tb_matakuliah SET matkul_kode=:matkul_kode, matkul_nama=:matkul_nama, matkul_sks=:matkul_sks, matkul_semester=:matkul_semester";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":matkul_kode", $matkul_kode);
		$stmt->bindParam(":matkul_nama", $matkul_nama);
		$stmt->bindParam(":matkul_sks", $matkul_sks);
		$stmt->bindParam(":matkul_semester", $matkul_semester);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_matakuliah WHERE matkul_id=:matkul_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":matkul_id", $id);
		$stmt->execute();

		return $this->select($stmt);
	}

	public function update()
	{
		$matkul_kode = $_POST['matkul_kode'];
		$matkul_nama = $_POST['matkul_nama'];
		$matkul_sks = $_POST['matkul_sks'];
		$matkul_semester = $_POST['matkul_semester'];
		$matkul_id = $_POST['matkul_id'];

		$sql = "UPDATE tb_matakuliah SET matkul_kode=:matkul_kode, matkul_nama=:matkul_nama, matkul_sks=:matkul_sks, matkul_semester=:matkul_semester WHERE matkul_id=:matkul_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":matkul_kode", $matkul_kode);
		$stmt->bindParam(":matkul_nama", $matkul_nama);
		$stmt->bindParam(":matkul_sks", $matkul_sks);
		$stmt->bindParam(":matkul_semester", $matkul_semester);
		$stmt->bindParam(":matkul_id", $matkul_id);
		$stmt->execute();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_matakuliah WHERE matkul_id=:matkul_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":matkul_id", $id);
		$stmt->execute();
	}
}
