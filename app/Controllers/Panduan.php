<?php

// app/Controllers/PdfController.php

namespace App\Controllers;

use CodeIgniter\Controller;

class panduan extends Controller
{
    public function showPdf()
    {
        // Get the path to the PDF file
        $pdfPath = FCPATH . 'assets/docs/PANDUAN UNTUK WEBSITE TUMBUHAN TAMAN ELEKTRONIKA.pdf';

        // Check if the file exists
        if (file_exists($pdfPath)) {
            return redirect()->to(base_url('assets/docs/PANDUAN UNTUK WEBSITE TUMBUHAN TAMAN ELEKTRONIKA.pdf'));
        } else {
            // Handle file not found (e.g., show an error page)
            echo 'PDF file not found.';
        }
    }
}
