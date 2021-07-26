<?php
include 'projectconnection.php';

// submitting data to the  patient database
if(isset($_POST['Submit1'])){
	// echo "working";
	$patientId=$_POST['patientId'];
	//echo $studentid."<br>";
	$Nin=$_POST['Nin'];
	//echo $fname."<br>";
	$hospitalId=$_POST['hospitalId'];
	//echo $lname."<br>";
	$image_link=$_POST['image_link']; 
	//echo $sex."<br>";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$date_of_birth=$_POST['date_of_birth'];
	$patientOccupation=$_POST['patientOccupation'];
	$email=$_POST['email'];
	$telNumber=$_POST['telNumber'];
	$nationality=$_POST['nationality'];
	$district=$_POST['district'];
	$subcounty=$_POST['subcounty'];
	$parish=$_POST['parish'];
	$village=$_POST['village'];
	
	

	$sql_insert="INSERT INTO patient(patientId,Nin,hospitalId,image_link,fname,lname,sex,date_of_birth,patientOccupation,email,telNumber,nationality,district,subcounty,parish,village) VALUES ('$patientId','$Nin','$hospitalId','$image_link','$fname','$lname','$sex','$date_of_birth','$patientOccupation','$email','$telNumber','$nationality','$district','$subcounty','$parish','$village')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}


// submitting data to the hospital database
if(isset($_POST['Submit2'])){
	//echo working
	$hospitalId=$_POST['hospitalId'];
	$regNO=$_POST['regNO'];
	$patientId=$_POST['patientId'];
	$hospitalname=$_POST['hospitalname'];
	$district=$_POST['district'];
	$subcounty=$_POST['subcounty'];
	$parish=$_POST['parish'];
	$village=$_POST['village'];
	
	

	$sql_insert="INSERT INTO hospital(hospitalId,regNO,patientId,hospitalname,district,subcounty,parish,village) VALUES ('$hospitalId','$regNO','$patientId','$hospitalname','$district','$subcounty','$parish','$village')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}


// submitting data to the healthworker database
if(isset($_POST['Submit3'])){
	//echo working
	$workerId=$_POST['workerId'];
	$hospitalId=$_POST['hospitalId'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$Nin=$_POST['Nin'];
	$sex=$_POST['sex'];
	$dateOfBirth=$_POST['dateOfBirth'];
	$positionOccupied=$_POST['positionOccupied'];
	$workerNationality=$_POST['workerNationality'];
	$District=$_POST['District'];
	$subCounty=$_POST['subCounty'];
	$parish=$_POST['parish'];
	$village=$_POST['village'];
	
	

	$sql_insert="INSERT INTO healthworker(workerId,hospitalId,firstName,lastName,Nin,sex,dateOfBirth,positionOccupied,workerNationality,District,subCounty,parish,village) VALUES ('$workerId','$hospitalId','$firstName','$lastName','$Nin','$sex','$dateOfBirth','$positionOccupied','$workerNationality','$District','$subCounty','$parish','$village')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the hospital vaccine details
if(isset($_POST['Submit4'])){
	//echo working
	$hospitalVaccineId=$_POST['hospitalVaccineId'];
	$hospitalId=$_POST['hospitalId'];
	$vaccineid=$_POST['vaccineid'];
	$manufactureid=$_POST['manufactureid'];
	$quantity=$_POST['quantity'];
	
	

	$sql_insert="INSERT INTO hospitalvaccine(hospitalVaccineId,hospitalId,vaccineid,manufactureid,quantity) VALUES ('$hospitalVaccineId','$hospitalId','$vaccineid','$manufactureid','$quantity',)";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the vaccine details database.
if(isset($_POST['Submit5'])){
	//echo working
	$vaccineid=$_POST['vaccineid'];
	$vaccineName=$_POST['vaccineName'];
	$manufacturedate=$_POST['manufacturedate'];
	$expirydate=$_POST['expirydate'];
	$manufactureid=$_POST['manufactureid'];
	
	

	$sql_insert="INSERT INTO vaccine(vaccineid,vaccineName,manufacturedate,expirydate,manufactureid) VALUES ('$vaccineid','$vaccineName','$manufacturedate','$expirydate','$manufactureid')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

// submitting data to the vaccine manufacturer database
if(isset($_POST['submit6'])){
	//echo working
	$manufactureid=$_POST['manufactureid'];
	$name=$_POST['name'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$telNo=$_POST['telNo'];
	
	

	$sql_insert="INSERT INTO vaccinemanufacuter(manufactureid,name,country,email,telNo) VALUES ('$manufactureid','$name','$country','$email','$telNo')";
	$sql_query=mysqli_query($conn,$sql_insert);
	if ($sql_query==TRUE) {
		echo "successful";
	}else{
		echo mysqli_error($conn);
	}
}

?>