<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="d-flex">
<?php require APPROOT . '/views/inc/verticalnavbar.php'; ?>

    <div class="m-5 w-700">
    <a href="<?php echo URLROOT; ?>/dashboard" class="btn btn-light mb-4"><i class="fa fa-backward"></i> Back</a>
    <h5 class="title ">Add Post</h5>
    <form action="<?php echo URLROOT; ?>/dashboard/add" method="post" enctype="multipart/form-data">
        <div class="form-group mb-4">
            <label for="title">Title: <sup class="text-danger">*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="body">Body: <sup class="text-danger">*</sup></label>
            <textarea name="body" class="form-control form-control-lg h-300 <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
        </div>
        <div class="custom-file form-group mb-4">
        <input type="file" class="custom-file-input" name="post_image" value="<?php echo $data['post_image']; ?>">
        </div>
              <input type="submit" class="btn btn-Subscribe text-light" value="Submit">
            </form>
        </div>

</div>

<?php 
$noFooter = '';
require APPROOT . '/views/inc/footer.php';
?>