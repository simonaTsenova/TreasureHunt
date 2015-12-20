<section id="pricing">
        <div class="container">
            <div class="center">
                <h2>Game</h2>
                <p class="lead"> Give your answer to trace or question </p>
            </div><!--/.center-->   
            <div class="gap"></div>
            <form class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
            <div id="pricing-table">
                <div class="row">
                <div class="col-md-12 col-xs-6">
                    <ul class="plan plan1">
                        <?php 
                            $current_week = $week+1;
                            echo "We're in week $current_week"; 
                        ?>
                    </ul>
                </div><!--/.col-md-3-->
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-6">
                    <ul class="plan plan2 featured">
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Answer"></textarea>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-lg">Answer</button>
                </div><!--/.col-md-3-->
            </div> 
            </div> 
        </form>
        </div>
    </section><!--/#pricing-->