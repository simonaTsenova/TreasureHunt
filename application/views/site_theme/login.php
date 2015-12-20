 	<section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Log in</h1>
                    <p> Log in here to get access to admin pane and play the game </p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="home">Home</a></li>
                        <li class="active">Log in</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
        <form class="center" action="<?php echo base_url('index.php/Site/validate_credentials')?>" role="form" method="post">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-md btn-block" name="login" value="Log in">
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->