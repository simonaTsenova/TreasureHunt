<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add New Trace</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form action="<?php echo base_url('index.php/Site/add_trace'); ?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Trace</label>
                              <div class="col-sm-10">
                                  <input type="text" name="trace" class="form-control" placeholder="Trace">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                              <div class="col-sm-10">
                                  <input type="text" name="answer" class="form-control" placeholder="Answer">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Week</label>
                              <div class="col-sm-10">
                                  <input type="text" name="week" class="form-control" placeholder="Week">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Trace Number</label>
                              <div class="col-sm-10">
                                  <input type="text" name="trace_number" class="form-control" placeholder="Trace Number">
                              </div>
                          </div>

                          <input type="submit" class="btn btn-success" name="add" value="Add Trace"/>

                          <?php echo validation_errors(); ?>
                          
                          
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->