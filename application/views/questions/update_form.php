<section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Add New Question</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  
                      <form action="<?php echo base_url('index.php/Site/update_question/$question['question_id']) ?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Complexity</label>
                              <div class="col-sm-10">
                                  <input type="text" name="complexity" class="form-control" value="<?php echo $question['complexity']; ?>" placeholder="<?php echo $question['question']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category</label>
                              <div class="col-sm-10">
                                  <input type="text" name="category" class="form-control" value="<?php echo $question['category']; ?>" placeholder="<?php echo $question['category']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Question</label>
                              <div class="col-sm-10">
                                  <input type="text" name="question" class="form-control" value="<?php echo $question['question']; ?>" placeholder="<?php echo $question['question']; ?>">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Week</label>
                              <div class="col-sm-10">
                                  <input type="text" name="week" class="form-control" value="<?php echo $question['week']; ?>" placeholder="<?php echo $question['week']; ?>">
                              </div>
                          </div>

                          <input type="submit" class="btn btn-info" name="update_question" value="Update Question"/>

                          <?php echo validation_errors(); ?>
                          
                          
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->