<?php

if (isset($_POST['submit'])) {


	$Location = $_POST['Location'];
	$industry = $_POST['area'];

	$area_value = implode(',', $industry);


	$conn = mysqli_connect('localhost', 'root', 'root', 'IamLimitless');


	if($conn === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());}

	$sql = "INSERT INTO Limitless(location, industry) VALUES ('$Location', '$area_value')";
	mysqli_query($conn, $sql);
	$latest_id =  mysqli_insert_id($conn);
	
	
	$total = count($_FILES['image']);

	for( $i=0 ; $i < $total ; $i++ ){
		$fileName = $_FILES['image']['name'][$i];
		$fileTmpName = $_FILES['image']['tmp_name'][$i];
		$fileSize = $_FILES['image']['size'][$i];
		$fileError = $_FILES['image']['error'][$i];
		$fileType = $_FILES['image']['type'][$i];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));


		$allowed = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 1000000) {
					$fileNameNewA = uniqid('', true).".".$fileActualExt;
					$fileDestination = 'New folder/'.$fileNameNewA;
					move_uploaded_file($fileTmpName, $fileDestination);
					$sql = "INSERT INTO Photos(user_id, photo_name) VALUES ('$latest_id', '$fileNameNewA')";
					mysqli_query($conn, $sql);
				}else{
					echo "Your file is too large!";
				}
			}else{
				echo "There was an error uploading your file!"; 
			}
		}else{
			echo "You cannot upload file of this type";
		}

	}

	$total1 = count($_FILES['cv']);
	//$file = $_FILES['cv'];

	for( $i=0 ; $i < $total1 ; $i++ ){
		$fileName = $_FILES['cv']['name'][$i];
		$fileTmpName = $_FILES['cv']['tmp_name'][$i];
		$fileSize = $_FILES['cv']['size'][$i];
		$fileError = $_FILES['cv']['error'][$i];
		$fileType = $_FILES['cv']['type'][$i];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));


		$allowed = array('pdf');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 1000000) {
					$fileNameNewB = uniqid('', true).".".$fileActualExt;
					$fileDestination = 'New folder (2)/'.$fileNameNewB;
					move_uploaded_file($fileTmpName, $fileDestination);
					$sql = "INSERT INTO Cv(user_id, cv_name) VALUES ('$latest_id', '$fileNameNewB')";
					mysqli_query($conn, $sql);
				}else{
					echo "Your file is too large!";
				}
			}else{
				echo "There was an error uploading your file!"; 
			}
		}else{
			echo "You cannot upload file of this type";
		}
 	}
header("Location: registration.php?uploadsucess");

//mysqli_query($conn, $sql);
mysqli_close($conn);

}