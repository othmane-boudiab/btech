<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


    <!-- ************************** -->

    <div class="album py-5 ">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php foreach($data['posts'] as $post) : ?>
            <div class="col">
                <a href="<?php echo URLROOT; ?>/pages/show/<?php echo $post->postId; ?>">
                  <img src="<?php  echo URLROOT ?>/public/upload/<?php echo $post->post_image; ?>" alt="image" class="img-fluid rounded-3">
                </a>
                
                <h3><a href="<?php echo URLROOT; ?>/pages/show/<?php echo $post->postId; ?>" class="text-dark text-decoration-none title"><?php echo $post->title; ?></a></h3>
                <small class="text-muted">Written by <?php echo $post->name; ?> <span class="pull-right">on <?php echo $post->postCreated; ?></span></small>
            </div>
            <?php endforeach; ?>

           
          </div>
        </div>
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
