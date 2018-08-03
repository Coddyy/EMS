<?php

class Upload extends MY_Controller 
{
    public function __construct() 
    {
        parent::__construct();

       $this->load->library('PdfParser');
       $this->load->library('form_validation');
    }
	public function upload_data()
	{
		if($_POST)
		{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename(rand(133,4000000).$_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			//$newfilename = round(microtime(true)) . '_' . $data['name'];
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$parser = new PdfParser();
	        $pdf = $parser->parseFile($target_file);
	        //print_r($pdf);
		    $pattern	=	"/(?:[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/";
 
			preg_match_all($pattern, $pdf, $matches);
 
			var_dump($matches[0]);

		}
		$this->load->view('upload_data');   
    }
    public function upload_excel()
    {
	    if($_POST)
	    {
	    	$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			//$newfilename = round(microtime(true)) . '_' . $data['name'];
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
			$dest=base_url().$target_file;
			//echo $dest;exit();
			chmod($target_file, 0777);
			
			$this->load->library('Spreadsheet_Excel_Reader');
			$this->spreadsheet_excel_reader->setOutputEncoding('CP1251');

			$this->spreadsheet_excel_reader->read($data['full_path']);
			$sheets = $this->spreadsheet_excel_reader->sheets[0];
			//error_reporting(0);
			
			$data_excel = array();
			for ($i = 2; $i <= $sheets['numRows']; $i++) {
				if ($sheets['cells'][$i][1] == '') break;

				$data_excel[$i - 1]['name']    = $sheets['cells'][$i][1];
				$data_excel[$i - 1]['phone']   = $sheets['cells'][$i][2];
				$data_excel[$i - 1]['address'] = $sheets['cells'][$i][3];
			}
			echo '<pre>';
			print_r($data_excel);
			echo '</pre>';
			//$this->db->insert_batch('tb_import', $data_excel);
			// @unlink($data['full_path']);
		}
		$this->load->view('upload_data');
    }
    public function test_upload()
    {
    	$this->load->view('excel_import');
    }
}
?>
