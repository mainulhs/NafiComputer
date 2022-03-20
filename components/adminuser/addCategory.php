<!--action code-->
<?php
	if(isset($_POST['addCategory'])){
	$categoryName = $_POST['categoryName'];
   
   //-- Check Title--//  
   if(empty($categoryName))
   {
     $page = 'dashboard.php?page=addCategory&err=1&msg2=Falied';
     header('Location: '.$page);
   }
   else
   {
     $checkCategoryName = "SELECT * FROM category WHERE title = '$categoryName'"; 
     $num = numRows($checkCategoryName);
     if($num>0){
         $page = 'dashboard.php?page=addCategory&err=1&msg=Falied';
         header('Location: '.$page);
     }
     else
     {          
        $addCateQ = "insert into category(id,categoryName) Values('','$categoryName')";
        query($addCateQ);
        $page = 'dashboard.php?page=addCategory&err=0&msg3=Success';
        header('Location: '.$page);
    }
   }
}
?>
    <!-- page content -->
        <div class="right_col" role="main" style="min-height: 700px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Category Content</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Category<small>Insertion</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                <!--Validation Message-->
                  <div class="form-group">
                     <label class="col-sm-6 col-sm-offset-3">
                      <?php
                          if(isset($_GET['msg']))
                          {
                        ?>
                          <div class="form-error bg-danger">
                              Category Name Already Entered!
                          </div>
                      <?php
                          } 
                          else if(isset($_GET['msg2']))
                          {
                        ?>
                          <div class="form-error bg-danger">
                               Category Name Field Required!
                          </div>
                      <?php 
                          }
                        else if(isset($_GET['msg3']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Category Successfully Inserted!
                          </div>
                      <?php
                         }
                         else if(isset($_GET['msg4']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Category Successfully Deleted!
                          </div>
                      <?php
                         }
                       ?>
                     </label>
                    </div> 
                    <br /> 
                    <form id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" role="form" method="post" name="slide">
                     <!--Image Name-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="categoryName" name="categoryName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-3 text-center">
                          <button type="submit" class="btn btn-success" id = "addCategory" name = "addCategory">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Category<small>Data</small></h2>
                <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </thead>
               <!--for data retrive-->
                 <?php
			          $query = "SELECT * FROM category";
                      $record = fetchData($query);
                      foreach ($record as $category) {
                          $id = $category['id'];
                          
                          echo "<tr>";
                                    echo "<td>".$category['categoryName']."</td>";         
                                    echo "<td>
                                        <a href='dashboard.php?page=delCategory&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a></td>";
                          echo "</tr>";
                      }
		          ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
