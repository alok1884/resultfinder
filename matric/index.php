
<?php require('../header.php'); ?>
<div class="container-fluid p-5">
    <div class="card">
    <div class="card-header bg-info text-light"><h5>MATRIC ANNUAL EXAMINATION RESULT 2020</h5></div>
    <div class="col-lg-5 mx-auto">
           <div class="card-body">
        <form action="index.php" method="get" >
                <div class="form-group" >
                <div class="row">
                    <div class="col-lg-3"><strong>Name</strong> </div>
                    <div class="col-lg-9"><input type="text" class="form-control"></div>
                </div>
            </div><div class="form-group" hidden>
                <div class="row">
                    <div class="col-lg-3"><strong>Roll Code </strong></div>
                    <div class="col-lg-9"><input type="text" class="form-control" value="93012" hidden></div>
                </div>
            </div><div class="form-group">
                <div class="row">
                    <div class="col-lg-3"><label for=""><strong>Roll No </strong><label for="" class="text-danger">*</label> </label></div>
                    <div class="col-lg-9"><input type="search" class="form-control" name="roll"></div>
                </div>
            </div>
            <div class="form-group mt-5">
                <div class="col-lg-8 mx-auto"><input type="reset" class="btn btn-info">
                <input type="submit" class="btn btn-info" value="view" name="view">
                <a href="index.php" class="btn btn-danger">Refresh</a>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<?php 

if(isset($_GET['view'])):
    $roll = $_GET['roll'];
    $call = mysqli_query($new->connect,"select * from matric where id = '$roll'");
    $row = mysqli_fetch_array($call); 

?>
<div class="container">
    <table class="table table-bordered table-hover">
        <tr class="bg-info text-light">
            
            <th>Name</th>
            <th>Roll No</th>
            <th>Roll Code</th>
            <th>Total Marks</th>
            <th>Percentage</th>
            <th>Result</th>
            <th>Action</th>
        </tr>
        <tr>
            <td class="text-capitalize"><?= $row['name']; ?></td>
            <td><?= $row['id']; ?></td>
            <td>93012</td>
            <td><?= $row['total_mark']; ?></td>
            <td><?php $status = $row['total_mark']/6; echo $status."%"; ?></td>
            <td><?php if($row['total_mark']>= 300){ echo "1st";}elseif($row['total_mark']<300){echo "2nd";}elseif($row['total_mark']<200){echo "3rd";}else{echo "fail";} ?></td>
            <td><a href="" data-toggle="modal"class="btn btn-success " data-target="#kick">print</a></td>
        </tr>
    </table>
</div>
  
  <div class="modal fade " id="kick" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header bg-info text-light">
        <h5 class="modal-title">MATRIC ANNUAL EXAMINATION RESULT 2020</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-light">
        <table class="table table-bordered">
    <tr>
        <td style="width:20%;"><img src="http://localhost/result_finder/PinClipart.com_certificate-clip-art_3450734.png"  style="height:60px; width:60px; margin-left:35%;"alt=""></td>
        <td class="text-center h4 pt-3">BIHAR SCHOOL EXAMINATION BOARD, PATNA</td>
    </tr>
    
</table>
<p class="text-center h6 ">MATRIC ANNUAL EXAMINATION RESULT 2020</p>
<table class="table table-bordered">
     <tr>
        <th style="" colspan="2">Name</th>
        <td colspan="4"  class="text-capitalize"><?= $row['name']; ?></td>
    </tr><tr>
        <th style="" colspan="2">Father Name</th>
        <td colspan="4" class="text-capitalize"><?= $row['father_name']; ?></td>
    </tr><tr>
        <th style="" colspan="2">College Name</th>
        <td colspan="4" class="text-capitalize">ABCD COLLEGE, PURNEA</td>
    </tr><tr>
        <th style="" colspan="2">Roll Code</th>
        <td colspan="4">93012</td>
    </tr><tr>
        <th style="" colspan="2">Roll No</th>
        <td colspan="4"><?= $row['id']; ?></td>
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
      </div>
    </div>
  </div>
</div>
  
  
  <?php
   else:
   endif;
?>









<?php require('../footer.php'); ?>