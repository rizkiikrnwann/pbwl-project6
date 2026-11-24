<?php

namespace App\Controllers;

use App\Core\Controller;

class Matakuliah extends Controller
{
	public object $model;

	public function __construct()
	{
		$this->model = new \App\Models\Matakuliah();
	}

	public function index()
	{
		$data['rows'] = $this->model->tampil();
		$this->dashboard('matakuliah/index', $data);
	}

	public function input()
	{
		$this->dashboard('matakuliah/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:' . URL . '/matakuliah');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('matakuliah/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/matakuliah');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/matakuliah');
	}
}
