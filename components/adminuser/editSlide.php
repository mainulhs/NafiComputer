<!--action code-->
<?php
   $id = $_GET['id'];
   $selectSlide = "select * from slide where id = '$id'";
   $rows = fetchDataWithID($selectSlide);
   $imageName = $rows['title'];
   $caption = $rows['caption'];

	if(isset($_POST['editSlide'])){
	
	$imageName = $_POST['imageName'];
	$caption = $_POST['caption'];
        
   //-- Check Title--//  
   if(empty($imageName))
   {
     $page = 'dashboard.php?page=editSlide&id='.$id.'&err=1&msg2=Falied';
     header('Location: '.$page);
   }
   else
   {
     $checkImageName = "SELECT * FROM slide WHERE title = '$imageName'"; 
     $num = numRows($checkImageName);
     if($num>0){
         $page = 'dashboard.php?page=editSlide&id='.$id.'&err=1&msg=Falied';
         header('Location: '.$page);
     }
     else
     {          
        $editSlideQ = "UPDATE slide set title = '$imageName', caption = '$caption' WHERE id = $id";
        query($editSlideQ);
        $page = 'dashboard.php?page=editSlide&id='.$id.'&err=0&msg3=Success';
        header('Location: '.$page);
    }
   }
}
if(isset($_POST['returnSlide'])){
      $page = 'dashboard.php?page=addSlide';
      header('Location: '.$page);
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
                        ?>
                     </label>
                    </div> 
                    <br /> 
                    <form id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data" role="form" method="post" name="slide">
                     <!--Image Name-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="imageName" name="imageName" required="required" class="form-control col-md-7 col-xs-12" value = "<?php echo $imageName; ?>">
                        </div>
                      </div>
                     <!--Image Caption-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Image Caption<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="caption" name="caption" required="required" class="form-control col-md-7 col-xs-12" value = "<?php echo $caption; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-2 text-center">
                          <button type="submit" class="btn btn-danger" id = "returnSlide" name = "returnSlide">Return</button>
                          <button type="submit" class="btn btn-success" id = "editSlide" name = "editSlide">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </div>
</div>
<!-- /page content -->
