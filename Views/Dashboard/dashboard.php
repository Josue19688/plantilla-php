<?php
    headerAdmin();
?>  
<div class="welcome-area">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-content">
                            <h1 class="mb-2">Bienvenidos!!</h1>
                            <p class="mb-0">Just Do Somethings Better</p>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12 p-0">
                        <div class="welcome-img">
                            <img src="<?= media();?>/images/bienvenidos.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="breadcrumb-area">
                <h1>Dashboard</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="<?= base_url();?>/home"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Dashboard</li>

                    <li class="item">Blank Page</li>
                </ol>
            </div>
             
          

<?php footerAdmin();?>