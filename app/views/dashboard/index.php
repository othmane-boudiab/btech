<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="d-flex">
<?php require APPROOT . '/views/inc/verticalnavbar.php'; ?>
        
          <div class="m-5">
            <div class="header">
            <?php flash('post_message'); ?>
            <a href="<?php echo URLROOT; ?>/dashboard/add" class="btn btn-Subscribe mb-2 text-light pull-right">
            <i class="fas fa-plus"></i> Add Post
            </a>
            </div>
            <table class="table ">
                <thead class="bg-blue text-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">author</th>
                    <th scope="col">Date</th>
                    <th scope="col">Controler</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data['posts'] as $post) : ?>
                  <tr>
                    <th scope="row"><?php echo $post->postId; ?></th>
                    <td><?php echo $post->title; ?></td>
                    <td><?php echo $post->name; ?></td>
                    <td><?php echo $post->postCreated; ?></td>
                    <td class="d-flex">

                        <?php if($post->name == $_SESSION['user_name']) : ?>
                        
                        <a href="<?php echo URLROOT; ?>/dashboard/edit/<?php echo $post->postId; ?>" class="btn btn-edit text-light me-2">Edit</a>

                        <form class="pull-right" action="<?php echo URLROOT; ?>/dashboard/delete/<?php echo $post->postId; ?>" method="post">
                            <input type="submit" value="Delete" class="btn btn-delete text-light">
                        </form>
                        <?php  endif; ?>
                        
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
          </div>
    </div>





        
<?php 
$noFooter = '';
require APPROOT . '/views/inc/footer.php';
?>
