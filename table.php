<?php include('include/config.php'); ?>
  <link rel="stylesheet" href="bootstrap.css">
   <?php $call = mysqli_query($work->connect,"select * from intermidiate where id= '170001'");
$row = mysqli_fetch_array($call); ?>

   <table class="table table-bordered">
    <tr>
        <td style="width:20%;"><img src="PinClipart.com_certificate-clip-art_3450734.png"  style="height:60px; width:60px; margin-left:40%;"alt=""></td>
        <td class="text-center h3 pt-3">BIHAR SCHOOL EXAMINATION BOARD, PATNA</td>
    </tr>
    
</table>
<p class="text-center h6 ">INTERMIDIATE ANNUAL EXAMINATION RESULT 2020</p>
<table class="table table-bordered">
     <tr>
        <th style="" colspan="2">Name</th>
        <td colspan="4">akon</td>
    </tr><tr>
        <th style="" colspan="2">Father Name</th>
        <td colspan="4">Mr .akon</td>
    </tr><tr>
        <th style="" colspan="2">College Name</th>
        <td colspan="4">ABCD COLLEGE, PURNEA</td>
    </tr><tr>
        <th style="" colspan="2">Roll Code</th>
        <td colspan="4">akon</td>
    </tr><tr>
        <th style="" colspan="2">Roll No</th>
        <td colspan="4">akon</td>
    </tr><tr>
        <th style="" colspan="2">Faculty</th>
        <td colspan="4">Science</td>
    </tr><tr>
        <th style="" colspan="6">Marks Details</th>
        
    </tr><tr style="height:80px;">
        <th>Subjects</th>
        <th>Full marks</th>
        <th>Pass marks</th>
        <th>Theory</th>
        <th>Practical</th>
        <th>Subject Total</th>
        
    </tr>
    <tr><th colspan="6"> Compulsory</th></tr>
    <tr>
        <td>Hindi</td>
        <td><?= $row['h_full']; ?></td>
        <td><?= $row['h_pass']; ?></td>
        <td><?= $row['h_theory']; ?></td>
        <td></td>
        <td><?= $row['h_theory']; ?></td>
    </tr><tr>
        <td>English</td>
        <td><?= $row['eng_full']; ?></td>
        <td><?= $row['eng_pass']; ?></td>
        <td><?= $row['eng_theory']; ?></td>
        <td></td>
        <td><?= $row['eng_theory']; ?></td>
    </tr>
    <tr><th colspan="6"> Optional</th></tr>
    <tr>
        <td>Maths</td>
        <td><?= $row['maths_full']; ?></td>
        <td><?= $row['maths_pass']; ?></td>
        <td><?= $row['maths_theory']; ?></td>
        <td></td>
        <td><?= $row['maths_theory']; ?></td>
    </tr><tr>
        <td>Physics</td>
        <td><?= $row['phy_full']; ?></td>
        <td><?= $row['phy_pass']; ?></td>
        <td><?= $row['phy_theory']; ?></td>
        <td><?= $row['phy_practical']; ?></td>
        <td><?= $sub_total = $row['phy_theory']+$row['phy_practical']; ?></td>
    </tr><tr>
        <td>Chemistry</td>
        <td><?= $row['chem_full']; ?></td>
        <td><?= $row['chem_pass']; ?></td>
        <td><?= $row['chem_theory']; ?></td>
        <td><?= $row['chem_practical']; ?></td>
        <td><?= $sub_total = $row['chem_theory']+$row['chem_practical']; ?></td>
    </tr><tr>
        <td>Biology</td>
        <td><?= $row['bio_full']; ?></td>
        <td><?= $row['bio_pass']; ?></td>
        <td><?= $row['bio_theory']; ?></td>
        <td><?= $row['bio_practical']; ?></td>
        <td><?= $sub_total = $row['bio_theory']+$row['bio_practical']; ?></td>
    </tr>
    <tr><th colspan="6"> Final Result</th></tr>
    <tr>
        <th colspan="2">Aggregate Marks:</th>
        <td colspan="4"><?= $row['total_mark'];?></td>
    </tr><tr>
        <th colspan="2">Result/Division:</th>
        <td colspan="4"><?php if($row['total_mark']>= 300){ echo "1st";}elseif($row['total_mark']<300){echo "2nd";}elseif($row['total_mark']<200){echo "3rd";}else{echo "fail";} ?></td>
    </tr>
    
</table>
<strong>NOTE:</strong><br>
<p  class="mt-2">1. Intermediate exam result system conducted by Bihar School Examination Board, Patna for the benefit of individuals / organisations / agencies for their respective purpose. The result made available is as declared, however in case of any variation in the document(s) produced by the candidate(s) and the declared result, the same may be forwarded to the board.</p>

<p>2. Bihar School Examination Board, Patna is not responsible for any inadvertent error that may have crept in the Data being published on Net. The result data cannot be treated as updated Data.</p>