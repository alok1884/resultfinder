<?php require('header.php'); ?>
<div class="row">
    <div class="col-lg-4 mt-5">
        <div class="card">
    <div class="card-header bg-info text-light"><h6>Intermidiate</h6></div>
    <div class="card-body">
        <p><a href="" class="text-dark" style="text-decoration:none;">Total Students +3.9 Lakh</a></p>
        <a href="" style="text-decoration:none;">create result</a>
    </div>
</div>
    </div>
       <div class="col-lg-4 mt-5">
        <div class="card">
    <div class="card-header bg-info text-light"><h6>Matric</h6></div>
    <div class="card-body">
        <p ><a href="" class="text-dark" style="text-decoration:none;">Total Students +4.5 Lakh</a></p>
        <a href="" style="text-decoration:none;">create result</a>
    </div>
</div>
    </div>  
       <div class="col-lg-4 mt-5">
        <div class="card">
    <div class="card-header bg-info text-light"><h6>SSC</h6></div>
    <div class="card-body">
        <p ><a href="" class="text-dark" style="text-decoration:none;">Total Students +14.5 Lakh</a></p>
        <a href="" style="text-decoration:none;">create result</a>
    </div>
</div>
    </div>
</div>
<div class="col-lg-12 p-0 mt-5">
    <div class="card">
        <div class="card-header bg-info text-light"><h6>CREATE NOTICE</h6></div>
        <div class="card-body">
            <form action="" method="post">
                <label for="">Notice Title </label>
                <input type="text" name="notice_title" class="form-control">
                <label for="" class="mt-3">Notice description </label>
                <input type="text" name="notice_description" class="form-control">
                <label for="" class="mt-3">Notice link: </label>
                <input type="text" name="notice_link" class="form-control">
                <input type="submit" name="generate" class="btn btn-block btn-success mt-4">
            </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['generate'])){
    $notice = [
    'notice_title' => $_POST['notice_title'],
    'notice_description' => $_POST['notice_description'],
    'notice_link' => $_POST['noticelink']
    
];

if($new->insertData('notice',$notice)){
    echo "<script>alert('notice successfully generated')</script>";
}else{
    echo "<script>alert('something went wrong notice not generated')"; 
}
}
require('footer.php'); ?>