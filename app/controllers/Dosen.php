<?php

namespace App\Controllers;

use App\Core\Controller;

class Dosen extends Controller
{
	public object $model;

	public function __construct()
	{
		$this->model = new \App\Models\Dosen();
	}

	public function index()
	{
		$data['rows'] = $this->model->tampil();
		$this->dashboard('dosen/index', $data);
	}

	public function input()
	{
		$this->dashboard('dosen/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:' . URL . '/dosen');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('dosen/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/dosen');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/dosen');
	}
}
