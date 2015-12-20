MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Questions </h3>
          <div class="row mt">
            <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Questions</h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Complexity</th>
                                  <th>  Category </th>
                                  <th>  Question </th>
                                  <th class="numeric">Week</th>
                                  
                                  <th>Update</th>
                                  <th>Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
                                  $count = 1;
                                  foreach ($questions as $key => $value) {
                                    echo "<tr> <td> $count </td>";
                                    $count++;
                                    echo "<td> $value[complexity] </td>
                                        <td> $value[category] </td>
                                        <td> $value[question] </td>
                                        <td> $value[week] </td> 
                                        <td> <a class='btn btn-info' href='/treasure_hunt/treasure_hunt/index.php/Site/update_question/$value[question_id]'> Update </a> </td>  
                                        <td> <a class='btn btn-danger' href='/treasure_hunt/treasure_hunt/index.php/Site/delete_question/$value[question_id]'> Delete </a> </td>
                                    </tr>";
                                  }
                              ?>



                              </tbody>
                          </table>
                          </section>
                          <a class='btn btn-success' href='/treasure_hunt/treasure_hunt/index.php/Site/add_question_show'> Add new question </a> 
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
        </div><!-- /row -->
    

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->