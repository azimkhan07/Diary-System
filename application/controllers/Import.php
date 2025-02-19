<?php


class import extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Import_model');
    }
    function index()
    {
        $this->load->view('import_file');
    }
    public function importmed()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        
        if (isset($_FILES["file"]["name"])) {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $category = $worksheet->getCellByColumnAndRow(1, $row)->getValue();

                    $data[] = array(
                        'name' => $name,
                        'category' => $category,

                    );
                }
            }
            $this->Import_model->add_batch($data);
            echo 'Data Imported successfully';
        }
    }
}
