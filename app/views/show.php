<?php require APPROOT . '/views/includes/header.php' ?>

<section class="single__book">
  <div class="container">
    <div class="row g-5">
      <div class="col-12 col-md-6 col-lg-5">
        <div class="book__image">
          <img src="<?php echo URLROOT; ?>/images/books/<?php echo $data['book']->image; ?>" alt="<?php echo $data['book']->title; ?>" class="w-100">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-7 border px-4 py-3 ">
        <div class="book__content">
          <h1 class="book__title"><?php echo $data['book']->title; ?></h1>
          <p class="book__author">By <?php echo $data['book']->author_name; ?></p>
          <div class="small-ratings">
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-warning"></i>
            <i class="fa fa-star text-secondary"></i>
          </div>
          <p class="book__price">$<?php echo $data['book']->price; ?></p>
          <p class="book__description"><?php echo $data['book']->book_description; ?></p>
          <p><span class="text-secondary">Publisher : </span><span><?php echo $data['book']->publisher_name; ?></span></p>
          <p><span class="text-secondary">Published : </span><span>2015</span></p>
          <p><span class="text-secondary">Pages : </span><span>316</span></p>
          <p><span class="text-secondary">ISBN : </span><span>978-0-7356-6745-7</span></p>

          


          <?php if ($data['inCart']) : ?>
            <a href="<?php echo URLROOT; ?>/carts/create/<?php echo $data['book']->book_id; ?>" class="me-3 btn btn-outline-success rounded-0">IN CART</a>
            <a href="<?php echo URLROOT; ?>/carts/index/<?php echo $_SESSION['user_id']; ?>" class="btn btn-success rounded-0">VIEW CART</a>
          <?php else : ?>
            <a href="<?php echo URLROOT; ?>/carts/create/<?php echo $data['book']->book_id; ?>" class="btn btn-success rounded-0">ADD TO CART</a>
          <?php endif; ?>






        </div>
      </div>
    </div>
  </div>

</section>

<?php require APPROOT . '/views/includes/footer.php' ?>