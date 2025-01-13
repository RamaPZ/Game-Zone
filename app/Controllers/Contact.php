<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact');
    }

    public function saveMessage()
    {
        $contactModel = new ContactModel();

        // Ambil data dari form
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Simpan data ke database
        $data = [
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ];

        $contactModel->insert($data);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to(base_url('contact'))->with('success', 'Your message has been sent successfully!');
    }
}
