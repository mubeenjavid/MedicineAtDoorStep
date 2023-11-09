<?php
$dbHost = 'localhost';
$dbName = 'fyp';
$dbUsername = 'root';
$dbPassword = '';
$conn= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 





/**
 * XLS parsing uses php-excel-reader from http://code.google.com/p/php-excel-reader/
 */
	header('Content-Type: text/plain');

	if (isset($argv[1]))
	{
		$Filepath = $argv[1];
	}
	elseif (isset($_GET['File']))
	{
		$Filepath = $_GET['File'];
		$pid = $_GET['pid'];
	}
	else
	{
		if (php_sapi_name() == 'cli')
		{
			echo 'Please specify filename as the first argument'.PHP_EOL;
		}
		else
		{
			echo 'Please specify filename as a HTTP GET parameter "File", e.g., "/test.php?File=test.xlsx"';
		}
		exit;
	}

	// Excel reader from http://code.google.com/p/php-excel-reader/
	require('php-excel-reader/excel_reader2.php');
	require('SpreadsheetReader.php');

	date_default_timezone_set('UTC');

	$StartMem = memory_get_usage();
	echo '---------------------------------'.PHP_EOL;
	echo 'Starting memory: '.$StartMem.PHP_EOL;
	echo '---------------------------------'.PHP_EOL;

	try
	{
		$Spreadsheet = new SpreadsheetReader($Filepath);
		$BaseMem = memory_get_usage();

		$Sheets = $Spreadsheet -> Sheets();

		echo '---------------------------------'.PHP_EOL;
		echo 'Spreadsheets:'.PHP_EOL;
		print_r($Sheets);
		echo '---------------------------------'.PHP_EOL;
		echo '---------------------------------'.PHP_EOL;

		foreach ($Sheets as $Index => $Name)
		{
			echo '---------------------------------'.PHP_EOL;
			echo '*** Sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;

			$Time = microtime(true);

			$Spreadsheet -> ChangeSheet($Index);

			foreach ($Spreadsheet as $Key => $Row)
			{
				echo $Key.': ';
				if ($Row)
				{var_dump($Row);
					echo $pid;
			$query ="INSERT INTO med_reg (med_name, comp_name,  med_formula, mnf_date, exp_date, md_price,  pharmacy_id) values('$Row[0]', '$Row[1]', '$Row[2]', '$Row[3]', '$Row[4]', '$Row[5]', '$pid')";
				
			if ($conn->query($query) === TRUE) {
				echo "New record created successfully";
				
			  } 
			  
			  else {
				echo "Error: " . $query . "<br>" . $conn->error;
			  }
			  
			
		}

				else
				{
					foreach($Row as $rr){
						echo $rr;
					}
					// var_dump($Row);
				
					$conn->close();}
				$CurrentMem = memory_get_usage();
		
				echo 'Memory: '.($CurrentMem - $BaseMem).' current, '.$CurrentMem.' base'.PHP_EOL;
				echo '---------------------------------'.PHP_EOL;
		
				if ($Key && ($Key % 500 == 0))
				{
					echo '---------------------------------'.PHP_EOL;
					echo 'Time: '.(microtime(true) - $Time);
					echo '---------------------------------'.PHP_EOL;
				}
			}
		
			echo PHP_EOL.'---------------------------------'.PHP_EOL;
			echo 'Time: '.(microtime(true) - $Time);
			echo PHP_EOL;

			echo '---------------------------------'.PHP_EOL;
			echo '*** End of sheet '.$Name.' ***'.PHP_EOL;
			echo '---------------------------------'.PHP_EOL;
		}
		
	}
	catch (Exception $E)
	{
		echo $E -> getMessage();
	}
	
	header("location: edited.php")
?>
