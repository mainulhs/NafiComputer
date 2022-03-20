<!--action code-->
<?php
$updir = '../public/upload/';
	if(isset($_POST['addSlide'])){
	$category = $_POST['category'];
	$imageName = $_POST['imageName'];
	$caption = $_POST['caption'];
	
	$filename = $_FILES['image']['name'];
	$tmpfile = $_FILES['image']['tmp_name'];
	$filesize = $_FILES['image']['size'];
	$filetype = $_FILES['image']['type'];
	$path_parts= pathinfo($_FILES['image']['name']);
	$ext=$path_parts['extension'];
	$filename=trim(GUID(),'{}').'.'.$ext;
	$filepath=$updir.$filename;
	$result=move_uploaded_file($tmpfile, $filepath);
	
	if(!$result){
        $page = 'dashboard.php?page=addSlide&err=1&msg5=Falied';
        header('Location: '.$page);
		exit();
      }
   
   //-- Check Title--//  
   if(empty($imageName))
   {
     $page = 'dashboard.php?page=addSlide&err=1&msg2=Falied';
     header('Location: '.$page);
   }
   else
   {
     $checkImageName = "SELECT * FROM slide WHERE title = '$imageName'"; 
     $num = numRows($checkImageName);
     if($num>0){
         $page = 'dashboard.php?page=addSlide&err=1&msg=Falied';
         header('Location: '.$page);
     }
     else
     {          
        $addSlideQ = "insert into slide(id,category,title, name, size, type, path, caption) Values('','$category','$imageName', '$filename', '$filesize', '$filetype', '$filepath', '$caption')";
        query($addSlideQ);
        $page = 'dashboard.php?page=addSlide&err=0&msg3=Success';
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
                <h3>Slide Content</h3>
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
                    <h2>Slide Image<small>Insertion</small></h2>
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
                              Image Name Already Entered!
                          </div>
                      <?php
                          } 
                          else if(isset($_GET['msg2']))
                          {
                        ?>
                          <div class="form-error bg-danger">
                               Image Name Field Required!
                          </div>
                      <?php 
                          }
                        else if(isset($_GET['msg3']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Slide Successfully Inserted!
                          </div>
                      <?php
                         }
                         else if(isset($_GET['msg4']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Slide Successfully Deleted!
                          </div>
                      <?php
                         }
                         else if(isset($_GET['msg5']))
                         {
                        ?>
                          <div class="form-error bg-danger">
                               Please Fill up all Information!
                          </div>
                        <?php
                         }
                        ?>
                     </label>
                    </div> 
                    <br /> 
                    <form id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" role="form" method="post" name="slide">
                    <!--Category-->
                      <div class="form-group">
                        <label class = "control-label col-md-3 col-sm-3 col-xs-12">Image Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id = "heard" class="form-control" required name="category">
                            <option value = "" >Choose Category</option>
                            <option>slide</option>
                            <option>ads</option>
                            <option>bannar</option>
                            <option>logo</option>
                            <option>payment</option>
                            <option>brands</option>
                            <option>offers</option>
                          </select>
                        </div>
                      </div>
                     <!--Image Name-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="imageName" name="imageName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <!--Image Caption-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Image Caption<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="caption" name="caption" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!--Image Upload-->
                      <div class="form-group">
                          <label for="InputFile" class="control-label col-md-3 col-sm-3 col-xs-12">Upload Image</label>
                          <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000">
                          <input name="image" type="file" id="userfile">
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-3 text-center">
                          <button type="submit" class="btn btn-success" id = "addSlide" name = "addSlide">Submit</button>
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
                <h2>Slide Image<small>Data</small></h2>
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
                  <th>Image Category</th>
                  <th>Image Name</th>
                  <th>Caption</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
               <!--for data retrive-->
                 <?php
			          $query = "SELECT * FROM slide";
                      $record = fetchData($query);
                      foreach ($record as $slide) {
                          $id = $slide['id'];
                          
                          echo "<tr>";
                                    echo "<td>".$slide['category']."</td>";
                                    echo "<td>".$slide['title']."</td>";
                                    echo "<td>".$slide['caption']."</td>";
                                    echo "<td><img width = 100px, hight = 100px, src='../public/upload/".$slide['name']."'></td>";
                                     
                                    echo "<td>
                                        <a href='dashboard.php?page=delSlide&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                        <a href='dashboard.php?page=editSlide&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a></td>";
                          echo "</tr>";
                      }
		          ?>
                  <?php 
                  
                  ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
