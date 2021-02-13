<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends BaseController {

	public function index() {
		if (!$this->validate([])) {
			// echo json_encode($_POST);
			// echo $request->getPost();
			$data['title'] = 'Login';
			echo view('template/top', $data);
			echo view('base', [
				'validation' => $this->validator,
			]);
		};
	}

	public function Login() {
		$data['username'] = FALSE;
		$data['title'] = 'Login';
		echo view('template/top', $data);
		echo view('template/bottom', $data);
		// echo view('template/top', $data);
		// echo view('template/bottom', $data);
	}
}
