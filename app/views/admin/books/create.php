<?php require APPROOT . '/views/admin/includes/header.php' ?>

<div class="container-fluid">
  <div class="row">
    <?php require APPROOT . '/views/admin/includes/sidebar.php' ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>

      <div class="categories__create mt-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="text-center">Add new book</h4>
              </div>
              <div class="card-body">
                <form action="" method="POST">
                  <div class="mb-3">
                    <select class="form-select" name="category_id">
                      <option value="">Select Category</option>
                      <?php foreach ($data['categories'] as $category) : ?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                      <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Example invalid select feedback</div>
                  </div>
                  <div class="mb-3">
                    <select class="form-select" name="publisher_id">
                      <option value="">Select Publisher</option>
                      <?php foreach ($data['publishers'] as $publisher) : ?>
                        <option value="<?php echo $publisher->id ?>"><?php echo $publisher->name ?></option>
                      <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Example invalid select feedback</div>
                  </div>
                  <div class="mb-3">
                    <select class="form-select" name="author_id">
                      <option value="">Select Author</option>
                      <?php foreach ($data['authors'] as $author) : ?>
                        <option value="<?php echo $author->id ?>"><?php echo $author->name ?></option>
                      <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Example invalid select feedback</div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="title">Title : <sup class="text-danger">*</sup></label>
                    <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
                    <span class="invalid-feedback"><?php echo $data['title_error']; ?></span>
                  </div>
                  <div class="form-group mb-3">
                    <label for="description">Description : <sup class="text-danger">*</sup></label>
                    <textarea name="description" class="form-control form-control-lg <?php echo (!empty($data['description_error'])) ? 'is-invalid' : ''; ?>"><?php echo $data['description']; ?></textarea>
                    <span class="invalid-feedback"><?php echo $data['description_error']; ?></span>
                  </div>
                  <div class="form-group mb-3">
                    <label for="price">Price : <sup class="text-danger">*</sup></label>
                    <input type="number" name="price" class="form-control form-control-lg <?php echo (!empty($data['price_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['price']; ?>">
                    <span class="invalid-feedback"><?php echo $data['price_error']; ?></span>
                  </div>
                  <div class="form-group mb-3">
                    <label for="image">Image : <sup class="text-danger">*</sup></label>
                    <input type="text" name="image" class="form-control form-control-lg <?php echo (!empty($data['image_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['image']; ?>">
                    <span class="invalid-feedback"><?php echo $data['image_error']; ?></span>
                  </div>
                  <div class="form-group mb-3">
                    <label for="copies">Copies : <sup class="text-danger">*</sup></label>
                    <input type="number" name="copies" class="form-control form-control-lg <?php echo (!empty($data['copies_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['copies']; ?>">
                    <span class="invalid-feedback"><?php echo $data['copies_error']; ?></span>
                  </div>
                  <div class="row mt-3 form__footer">
                    <div class="col form__footer__right">
                      <input type="submit" value="Add" class="btn btn-success d-block form__btn">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<?php require APPROOT . '/views/admin/includes/footer.php' ?>