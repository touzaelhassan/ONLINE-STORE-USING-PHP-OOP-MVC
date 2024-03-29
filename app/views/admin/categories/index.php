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
      <div class="categories">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header d-flex justify-content-between">
                <h4>Categories</h4>
                <a href="<?php echo URLROOT; ?>/categories/create" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['categories'] as $category) : ?>
                      <tr>
                        <td><?php echo $category->id ?></td>
                        <td><?php echo $category->name ?></td>
                        <td><?php echo $category->description ?></td>
                        <td>
                          <a href="<?php echo URLROOT; ?>/categories/update/<?php echo $category->id ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                          </a>
                        </td>
                        <td>
                          <a href="<?php echo URLROOT; ?>/categories/delete/<?php echo $category->id ?>" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>
</div>
</div>

<?php require APPROOT . '/views/admin/includes/footer.php' ?>