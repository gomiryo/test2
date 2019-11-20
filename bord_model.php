<?php

class BordClass{
	var $bord_array = []; // プロパティ

	// mainメソッド
	public function main(){
		$this->bord_array = $this->run();
	}
 
	private function run(){
		$name = "";
		$message = "";
		if (isset($_POST['send']) === true) {
				$name = $_POST["name"];
				$message = $_POST["message"];
				$fp = fopen("bord.txt", "a");
				fwrite($fp, $name . "\t" . $message . "\n");
				fclose($fp); 
		}

		$fp = fopen("bord.txt", "r");
		 
		$bord_array = [];
		while ($line = fgets($fp)) {
				$temp = explode("\t", $line);
				$temp_array = [
						"name" => $temp[0],
						"message" => $temp[1],
				];
				$bord_array[] = $temp_array;
		}
		return $bord_array;
	}
}

?>
