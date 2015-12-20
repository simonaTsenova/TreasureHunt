<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add New Question</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form action="<?php echo base_url('index.php/Site/add_question') ?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Complexity</label>
                              <div class="col-sm-10">
                                  <input type="text" name="complexity" class="form-control" placeholder="Complexity">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category</label>
                              <div class="col-sm-10">
                                  <input type="text" name="category" class="form-control" placeholder="Category">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question</label>
                              <div class="col-sm-10">
                                  <input type="text" name="question" class="form-control" placeholder="question">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Week</label>
                              <div class="col-sm-10">
                                  <input type="text" name="week" class="form-control" placeholder="week">
                              </div>
                          </div>

                          <input type="submit" class="btn btn-success" name="add" value="Add Question"/>

                          <?php echo validation_errors(); ?>
                          
                          
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->