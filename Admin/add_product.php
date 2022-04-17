<?php require('layout/header.php'); ?>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php require('layout/sidebar.php'); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">

          <!-- Content wrapper -->
          <div class="container">
            <!-- Content -->

            <h1>Welcome Admin, Add Product</h1>

            <form action="include/form_submits.php" method="POST">

            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Add Product Form</h5>

                    <div class="card-body">
                        <div>
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" >
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <label class="form-label">Price</label>
                            <input type="number" name="price" class="form-control" placeholder="100" >
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <input type="submit" name="add_product" class=" btn btn-success" >
                        </div>
                    </div>

                </div>
            </div>
                
            </form>
                        
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    </div>
    </div>

  <?php require('layout/footer.php'); ?>