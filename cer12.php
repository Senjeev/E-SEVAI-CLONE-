<html>
<head>
<title>aadhaar</title>
</head>


<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$nums=$_POST['id2'];
$query = "SELECT * FROM community where num='$nums'";
$result=mysqli_query($connecto,$query);

require("fpdf.php");
$i=0;
while($row = mysqli_fetch_array($result))
{
$a=$row["name"];
$b=$row["number"];
$c=$row["result"];
$d=$row["dob"];
$e=$row["gender"];
$f=$row["fname"];
$g=$row["mname"];
$h=$row["address"];
$i=$row["district"];
$j=$row["phone"];
$k=$row["pincode"];
$l=$row["caste"];
$m=$row["religion"];
}


?>
                   
<?php 
ob_start(); 
$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",16);

$pdf->Image('logo.jpg',90,0,33,25,'JPG',0,1,'C',true);
$pdf->Cell(0,17,"",0,1,'L');
$pdf->SetFillColor(34,139,34);

$pdf->Cell(0,10,"GOVERNMENT OF TAMILNADU",0,1,'C',true);
$pdf->Cell(0,5,"",0,1,'L');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(0,10,"COMMUNITY CERTIFICATE",0,1,'C',true);
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(0,0,"",1,1,'L');
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(0,10,"Name:                          $a",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Data of Birth:               $d",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Gender:                         $e",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Father's name:              $f",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Mother's name:              $g",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Address:                         $h",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"District:                           $i",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Pincode:                           $k",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Phone number:                $j",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Caste:                                 $l",0,1,'B');
$pdf->Cell(0,8.2,"",0,1,'L');
$pdf->Cell(0,10,"Religion:                            $m",0,1,'B');
$file=time().'.pdf';
$pdf->Output($file,'D');
ob_end_flush(); ?></h3>

</body>
</html>