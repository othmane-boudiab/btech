<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container">
        <div class="col-md-8 m-auto">
          <img src="<?php  echo URLROOT ?>/public/upload/<?php echo $data['post']->post_image; ?>" alt="image" class="img-fluid rounded-3">
          <h1 class="my-3"><?php echo $data['post']->title; ?></h1>
        </div>
        <div class="bg-post mb-4 border-top border-info border-5 ">
          
          <div class="col-md-8 m-auto mt-3">
            <div class="d-flex  mb-3 color-post">
              <div class="d-flex me-4 align-items-center">
                <i class="far fa-clock font-s me-1 icon-post"></i>
                <small><?php echo $data['post']->created_at; ?></small>
              </div>
              <div class="d-flex align-items-center">
                <i class="far fa-edit me-1 icon-post"></i>
                <small><?php echo $data['user']->name; ?></small>
              </div>
            </div>
            
            <p class="pb-3"><?php echo $data['post']->body; ?></p>
          </div>
          
        </div>
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>