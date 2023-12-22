<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Bootsrap Start -->
          <?php $this->load->view($bootstrap); ?>
        <!-- Bootsrap End -->
    </head>
    <body>
        <div class="container-fluid position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


           <!-- Sidebar Start -->
              <?php $this->load->view($sidebar); ?>
           <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                    <?php $this->load->view($navbar);?>
                <!-- Navbar End -->


                <!-- Isi -->
                    <?php $this->load->view($content);?>
                <!-- Isi -->

                <!-- Footer Start -->
                    
                <!-- Footer End -->
            </div>
            <!-- Content End -->
        </div>

        <!-- Script Start -->
            <?php $this->load->view($script); ?>
        <!-- Script End -->
    </body>
</html>