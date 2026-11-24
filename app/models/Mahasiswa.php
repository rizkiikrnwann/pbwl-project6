<?php

namespace App\Models;

use App\Core\Model;

class Mahasiswa extends Model
{
	public function tampil()
	{
		$sql = "SELECT * FROM tb_mhsw";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		return $this->selects($stmt);
	}

	public function simpan()
	{
		$mhsw_nim = $_POST['mhsw_nim'];
		$mhsw_nama = $_POST['mhsw_nama'];
		$mhsw_alamat = $_POST['mhsw_alamat'];

		$sql = "INSERT INTO tb_mhsw SET mhsw_nim=:mhsw_nim, mhsw_nama=:mhsw_nama, mhsw_alamat=:mhsw_alamat";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":mhsw_nim", $mhsw_nim);
		$stmt->bindParam(":mhsw_nama", $mhsw_nama);
		$stmt->bindParam(":mhsw_alamat", $mhsw_alamat);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_mhsw WHERE mhsw_id=:mhsw_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":mhsw_id", $id);
		$stmt->execute();

		return $this->select($stmt);
	}

	public function update()
	{
		$mhsw_nim = $_POST['mhsw_nim'];
		$mhsw_nama = $_POST['mhsw_nama'];
		$mhsw_alamat = $_POST['mhsw_alamat'];
		$mhsw_id = $_POST['mhsw_id'];

		$sql = "UPDATE tb_mhsw SET mhsw_nim=:mhsw_nim, mhsw_nama=:mhsw_nama, mhsw_alamat=:mhsw_alamat WHERE mhsw_id=:mhsw_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":mhsw_nim", $mhsw_nim);
		$stmt->bindParam(":mhsw_nama", $mhsw_nama);
		$stmt->bindParam(":mhsw_alamat", $mhsw_alamat);
		$stmt->bindParam(":mhsw_id", $mhsw_id);
		$stmt->execute();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_mhsw WHERE mhsw_id=:mhsw_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":mhsw_id", $id);
		$stmt->execute();
	}
}
