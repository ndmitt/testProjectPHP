<?

class Model_Ajaxform extends Model
{
    public function write_data($file_name, $result)
	{	 
        $fp = fopen($file_name, 'a');
        fputs($fp, chr(0xEF) . chr(0xBB) . chr(0xBF));
        fputcsv($fp, $result, ';', '"');
        fclose($fp);
        echo json_encode($result); 
    }
}