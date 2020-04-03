<?php require('header.php'); ?>
<div class="container-fluid p-2 bg-info mt-3 shadow shadow-sm" style="border-radius:5px;">
<h4 class="text-light text-center">CREATE RESULT</h4>
</div>
<div class="container mt-4">
    <form action="" method="post" class="mx-auto" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Name</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Father's Name</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="father_name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Mother's Name</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="mother_name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>D:O:B</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="date" class="form-control" name="dob">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Gender</strong></label>
                </div>
                <div class="col-lg-9">
                    <select name="gender" id="" class="form-control">
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="male">Female</option>
                        <option value="male">Others</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Phone</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="tel" class="form-control" name="phone">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-3">
                    <label><strong>Email</strong></label>
                </div>
                <div class="col-lg-9">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
        </div>
        <table class="table">
            <tr>
                <th>SUBJECT</th>
                <th>FULL MARKS</th>
                <th>PASS MARKS</th>
                <th>THEORY</th>
                <th>PRACTICAL</th>

            </tr>
            <tr>
                <td><label class="h6">HINDI</label></td>
                <td><input type="tel" class="form-control" value="100" name="h_full"></td>
                <td><input type="tel" class="form-control" value="30" name="h_pass"></td>
                <td><input type="tel" class="form-control" name="h_theory"></td>
                <td></td>
            </tr>
            <tr>
                <td><label class="h6">ENGLISH</label></td>
                <td><input type="tel" class="form-control" value="100" name="eng_full"></td>
                <td><input type="tel" class="form-control" value="30" name="eng_pass"></td>
                <td><input type="tel" class="form-control" name="eng_theory"></td>
                <td></td>
            </tr>
            <tr>
                <td><label class="h6">MATHEMATICS</label></td>
                <td><input type="tel" class="form-control" value="100" name="maths_full"></td>
                <td><input type="tel" class="form-control" value="30" name="maths_pass"></td>
                <td><input type="tel" class="form-control" name="maths_theory"></td>
                <td></td>
            </tr>
            <tr>
                <td><label class="h6">PHYSICS</label></td>
                <td><input type="tel" class="form-control" value="100" name="phy_full"></td>
                <td><input type="tel" class="form-control" value="21" name="phy_pass"></td>
                <td><input type="tel" class="form-control" name="phy_theory"></td>
                <td><input type="tel" class="form-control" name="phy_practical"></td>
            </tr>
            <tr>
                <td><label class="h6">CHEMISTRY</label></td>
                <td><input type="tel" class="form-control" value="100" name="chem_full"></td>
                <td><input type="tel" class="form-control" value="21" name="chem_pass"></td>
                <td><input type="tel" class="form-control" name="chem_theory"></td>
                <td><input type="tel" class="form-control" name="chem_practical"></td>
            </tr>
            <tr>
                <td><label class="h6">BIOLOGY</label></td>
                <td><input type="tel" class="form-control" value="100" name="bio_full"></td>
                <td><input type="tel" class="form-control" value="21" name="bio_pass"></td>
                <td><input type="tel" class="form-control" name="bio_theory"></td>
                <td><input type="tel" class="form-control" name="bio_practical"></td>
            </tr>
        </table>
        <input type="submit" class="btn btn-block btn-success" name="send">
    </form>
</div>
<?php
if(isset($_POST['send'])):
$total = $_POST['h_theory']+$_POST['eng_theory']+$_POST['maths_theory']+$_POST['chem_theory']+$_POST['phy_theory']+$_POST['bio_theory']+$_POST['bio_practical']+$_POST['chem_practical']+$_POST['phy_practical'];

$data= [
    'name' => $_POST['name'],
    'father_name' => $_POST['father_name'],
    'mother_name' => $_POST['mother_name'],
    'dob' => $_POST['dob'],
    'gender' => $_POST['gender'],
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'h_full' => $_POST['h_full'],
    'h_theory' => $_POST['h_theory'],
    'h_pass' => $_POST['h_pass'],
    'eng_full' => $_POST['eng_full'],
    'eng_pass' => $_POST['eng_pass'],
    'eng_theory' => $_POST['eng_theory'],
    'maths_full' => $_POST['maths_full'],
    'maths_pass' => $_POST['maths_pass'],
    'maths_theory' => $_POST['maths_theory'],
    'phy_full' => $_POST['phy_full'],
    'phy_pass' => $_POST['phy_pass'],
    'phy_theory' => $_POST['phy_theory'],
    'phy_practical' => $_POST['phy_practical'],
    'chem_full' => $_POST['chem_full'],
    'chem_pass' => $_POST['chem_pass'],
    'chem_theory' => $_POST['chem_theory'],
    'chem_practical' => $_POST['chem_practical'],
    'bio_full' => $_POST['bio_full'],
    'bio_pass' => $_POST['bio_pass'],
    'bio_theory' => $_POST['bio_theory'],
    'bio_practical' => $_POST['bio_practical'],
    'total_mark' => $total,
    
];
if($new->insertData('intermidiate',$data)){
                echo"<script>alert('successfully added')</script>";
            }else{
                echo"fail";
            }  
endif;
?>


<?php require('footer.php'); ?>