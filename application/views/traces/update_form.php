<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add New Trace</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form action="<?php echo base_url("index.php/Site/update_trace/$trace[trace_id]"); ?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Trace</label>
                              <div class="col-sm-10">
                                  <input type="text" name="trace" class="form-control" value="<?php echo $trace['trace']; ?>" placeholder="<?php echo $trace['trace']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Answer</label>
                              <div class="col-sm-10">
                                  <input type="text" name="answer" class="form-control" value="<?php echo $trace['answer']; ?>" placeholder="<?php echo $trace['answer']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Week</label>
                              <div class="col-sm-10">
                                  <input type="text" name="week" class="form-control" value="<?php echo $trace['week']; ?>" placeholder="<?php echo $trace['week']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Trace Number</label>
                              <div class="col-sm-10">
                                  <input type="text" name="trace_number" class="form-control" value="<?php echo $trace['trace_number']; ?>" placeholder="<?php echo $trace['trace_number']; ?>">
                              </div>
                          </div>

                          <input type="submit" class="btn btn-info" name="update_trace" value="Update Trace"/>

                          <?php echo validation_errors(); ?>
                          
                          
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->