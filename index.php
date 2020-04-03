<?php require('header.php'); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-7">
            <div class="card shadow shadow-sm">
                <div class="card-header bg-dark text-light">
                    <h6>SELECT CLASS</h6>
                </div>
                <div class="card-body " style="height:150px;">
                    <div class="col-lg-10 mx-auto mt-3" style="">
                        <a href="http://localhost/result_finder/inter/index.php" class="btn btn-success py-3 shadow shadow-sm" style="width:199px; height:58px;">INTERMIDIATE</a>
                        <a href="http://localhost/result_finder/matric/index.php" class="btn btn-primary shadow shadow-sm ml-5 py-3" style="width:199px; height:58px;">MATRIC</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card shadow shadow-sm">
                <div class="card-header bg-info text-light">
                    <h6>NOTICE</h6>
                </div>
                <div class="card-body" style="height:150px;">
                    <marquee width="100%" direction="up" height="100px" behavior="scroll"  scrollamount="2">
                        <?php 
                    $call = $new->callingData('notice');
                    foreach($call as $value): ?>
                    <p><a href="<?= $value['notice_link']; ?>" style="text-decoration:none;" ><?= $value['notice_id']; ?>. <?= $value['notice_title']; ?></a><span class="badge badge-danger">new</span></p><?php endforeach; ?>
                    </marquee>

                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <strong>NOTE: </strong><br>
        <p class="mt-2">1. The online result verification system of old results verification of Matric (10th) & Intermediate (10+2) conducted by Bihar School Examination Board, Patna for the benefit of individuals / organisations / agencies for their respective purpose. The result made available is as declared, however in case of any variation in the document(s) produced by the candidate(s) and the declared result, the same may be forwarded to the board.</p>
        <p>2. Bihar School Examination Board, Patna is not responsible for any inadvertent error that may have crept in the Data being published on Net. The result data cannot be treated as updated Data.</p>
    </div>

</div>
<!--subfooter-->
<div class="container-fluid bg-dark mt-5">
    <div class="row">
        <div class="col-lg-4 p-5 ">
            <h3 class="text-light ml-5">RESULTS</h3>
            <ul class="navbar-nav ml-5">
                <li class="nav-item"><a href="" class="nav-link text-light"> INTERMIDIATE</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> MATRIC Xth result</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> SSC result 2020</a></li>

            </ul>
        </div>
        <div class="col-lg-4 p-5">
            <h3 class="text-light ml-5">SECONDARY</h3>
            <ul class="navbar-nav ml-5">
                <li class="nav-item"><a href="" class="nav-link text-light"> EXAMINATION SCHEDULE</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> MODEL QUESTION PAPER</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> SSC result 2020</a></li>

            </ul>
        </div>
        <div class="col-lg-4 p-5">
            <h3 class="text-light ml-5">OTHER RESULTS</h3>
            <ul class="navbar-nav ml-5">
                <li class="nav-item"><a href="" class="nav-link text-light"> EXAMINATION SCHEDULE</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> MODEL QUESTION PAPER</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light"> SSC result 2020</a></li>

            </ul>
        </div>
    </div>
</div>
<!--footer credit-->
<div class="container-fluid pl-5 p-2" style="background:black;">
    <p class="text-secondary">Copyright © 2020 Result finder.com. All rights reserved.</p>
    <p class="text-secondary" style="margin-top:-10px;">Designed & Developed by BSEB IT Team</p>
</div>



<?php require_once("footer.php"); ?>
