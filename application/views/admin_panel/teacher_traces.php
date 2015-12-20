MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Traces </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Traces</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Trace</th>
                                  <th>Answer</th>
                                  <th class="numeric">Week</th>
                                  <th class="numeric">Trace Number</th>
                                  <th>Update</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                  $count = 1;
                                  foreach ($traces as $key => $value) {
                                    echo "<tr> <td> $count </td>";
                                    $count++;
                                    echo "<td> $value[trace] </td>
                                        <td> $value[answer] </td>
                                        <td> $value[week] </td>
                                        <td> $value[trace_number] </td> 
                                        <td> <a class='btn btn-info' href='/treasure_hunt/treasure_hunt/index.php/Site/update_trace/$value[trace_id]'> Update </a> </td>  
                                        <td> <a class='btn btn-danger' href='/treasure_hunt/treasure_hunt/index.php/Site/delete_trace/$value[trace_id]'> Delete </a> </td>
                                    </tr>";
                                  }
                              ?>
                              </tbody>
                          </table>
                          </section>

                            <a class='btn btn-success' href='/treasure_hunt/treasure_hunt/index.php/Site/add_trace_show'> Add new trace </a> 
                          
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->