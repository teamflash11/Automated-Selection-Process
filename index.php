<?php 
include ("connect.php");  
include('PdfToText-master/PdfToText.phpclass');
$pdf=new PdfToText('http://localhost/GitHub/Automated-Selection-Process/tset1.pdf');
$string1 = "C";
$string2 = "Java";
$string3 = "Python";
$data = $pdf->Text;
if(strpos($data,$string1)!== false){
	echo $string1;
	$sql = "INSERT INTO languages (C,Java,Python)
    VALUES ('true','','')";
	$conn->query($sql);

}
if(strpos($data,$string2)!== false){
	echo $string1;
	$sql = "INSERT INTO languages (C,Java,Python)
    VALUES ('','true','')";
	$conn->query($sql);

}
if(strpos($data,$string3)!== false){
	echo $string1;
	$sql = "INSERT INTO languages (C,Java,Python)
    VALUES ('','','true')";
	$conn->query($sql);

}

mysqli_close($conn);
?>