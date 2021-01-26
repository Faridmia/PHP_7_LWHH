 <?php 
    session_name("myapp");
    session_start();
 ?>
 <!--Contact Section-->
    <section class="contact-three">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <p>
                        <a href="index.php?task=report">All Students</a> |
                        <?php if(isAdmin() || isEditor()) : ?>
                        <a href="index.php?task=add">Add New Student</a> |
                        <?php endif;?>
                        <?php if(isAdmin()) : ?>
                        <a href="index.php?task=seed">Seed</a>
                        <?php endif;?>
                    </p>
                    <p>
                    <?php if(!$_SESSION['loggedin']) { ?>
                    <a href="/oop/curd_session/auth.php">Log In</a>
                    <?php } else{ ?>
                        <a href="/oop/curd_session/auth.php?logout=true">Log Out</a>
                  <?php  } ?>
                    </p>
                    <?php //echo dirname(__FILE__);?>
                   
                </div>

            </div>
        </div>
    </section>