<?php 
include ("connect.php");  
include('PdfToText-master/PdfToText.phpclass');
$pdf=new PdfToText('http://localhost/GitHub/Automated-Selection-Process/Sonu.pdf');
$string1 = "C";
$string2 = "Java";
$string3 = "Python";
$var1=$var2=$var3="false";
$data = $pdf->Text;
if(strpos($data,$string1)!== false){
	echo $string1;
	$var1="true";
	

}
if(strpos($data,$string2)!== false){
	echo $string2;
	$var2="true";
}
if(strpos($data,$string3)!== false){
	echo $string3;
	$var3="true";
	

}
$sql = "INSERT INTO languages (C,Java,Python)
    VALUES ($var1,$var2,$var3)";
	$conn->query($sql);
	
	
//mysqli_close($conn);

header('Location: startbootstrap-sb-admin-gh-pages/index.html');
?>