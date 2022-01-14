<?php
    headerLogin();
?> 
 <!-- Start Login Area -->

        <div class="login-area" >
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="login-form">
                        <div class="logo">
                            <img style="width:100px;" src="<?= media();?>/images/uploads/dorado.png" alt="image">
                        </div>

                        <h2>Bienvenido  <br>Sistema Logistica</h2>

                        <form name="formLogin" id="formLogin" >
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtEmail" id="txtEmail" autocomplete="off"  placeholder="Email">
                                <span class="label-title"><i class='bx bx-user'></i></span>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="txtPassword" id="txtPassword" autocomplete="off" placeholder="Password">
                                <span class="label-title"><i class='bx bx-lock'></i></span>
                            </div>

                            <div class="form-group">
                                <div class="remember-forgot">
                                    
                                    <a href="forgot-password.html" class="forgot-password">Resetear Contraseña?</a>
                                </div>
                            </div>

                            <button type="submit" style="background:#e2c353;color: black;" class="login-btn">Login</button>

                            
                        </form>
                        <img class="img-bienvenido" src="<?= media();?>/images/bienvenidos.png">
                    </div>
                </div>
            </div>

        </div>

        <!-- End Login Area -->
<?php footerLogin();?>