<?

class Model_List extends Model
{
    public function read_data($file_name)
	{
    $fp = fopen($file_name, "r");
        while (($data = fgetcsv($fp, 0, ";")) !== FALSE) {
            $list[] = $data;
        }
        fclose($fp);
        return $list;
    } 
}