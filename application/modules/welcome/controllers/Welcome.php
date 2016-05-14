<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
 
    public function index()
    {
        $data = [];
        //load the view and saved it into $html variable
        $html=$this->load->view('welcome_message', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "output_pdf_name.pdf";
 
        //load mPDF library
        $this->load->library('my_pdf');
 
       //generate the PDF from the given html
        $this->my_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->my_pdf->pdf->Output($pdfFilePath, "D");        
    }
}
 