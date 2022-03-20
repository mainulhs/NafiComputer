<!--Action Code-->
<?php
   error_reporting(0);
   $updir = '../public/upload/';
   if(isset($_POST['addProductImage'])){
   $category = $_POST['category'];
   $productName = $_POST['productName'];
   $description = $_POST['description'];
   $price = $_POST['price'];
       
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
        $page = 'dashboard.php?page=addProductImage&err=1&msg5=Falied';
        header('Location: '.$page);
		exit();
      }
   
   //-- Check ProductName--//  
   if(empty($productName))
   {
     $page = 'dashboard.php?page=addProductImage&err=1&msg2=Falied';
     header('Location: '.$page);
   }
   else
   {
     $checkProductName = "SELECT * FROM productimage WHERE productName = '$productName'"; 
     $num = numRows($checkProductName);
     if($num>0){
         $page = 'dashboard.php?page=addProductImage&err=1&msg=Falied';
         header('Location: '.$page);
     }
     else
     {          
       $addProductImageQ = "insert into productimage(id,category,productName, name, size, type, path, description,price) Values('','$category','$productName','$filename', '$filesize', '$filetype', '$filepath', '$description', '$price')";
       query($addProductImageQ);
       $page = 'dashboard.php?page=addProductImage&err=0&msg3=Success';
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
                <h3>Product Image Content</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product Image<small>Insertion</small></h2>
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
                              Product Name Already Entered!
                          </div>
                      <?php
                          } 
                          else if(isset($_GET['msg2']))
                          {
                        ?>
                          <div class="form-error bg-danger">
                               Product Name Field Required!
                          </div>
                      <?php 
                          }
                        else if(isset($_GET['msg3']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Product Image Successfully Inserted!
                          </div>
                      <?php
                         }
                         else if(isset($_GET['msg4']))
                         {
                        ?>
                          <div class="form-error bg-success">
                               Product Image Successfully Deleted!
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" role="form" method="post" name="productImage">
                     <!--Category-->
                     <div class="form-group">
                        <label class = "control-label col-md-3 col-sm-3 col-xs-12">Product Category</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id = "heard" class="form-control" required name="category">
                            <option>Choose Category</option>
                             <?php 
                                $query = "SELECT * FROM category";
                                $record = fetchData($query);
                                foreach ($record as $data) 
                                {
                                  $categoryName = $data['categoryName'];
                             ?>
                                  <option><?php echo $categoryName; ?></option>
                             <?php    
                                } 
                            ?>
                          </select>
                        </div>
                      </div>
                     <!--Product Name-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productName">Product Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="productName" name="productName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <!--Product Description-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Product Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     <!--Product Price-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Product Price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
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
                          <button type="submit" class="btn btn-success" id = "addProductImage" name = "addProductImage">Submit</button>
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
                <h2>Product Image<small>Data</small></h2>
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
                  <th>Product ID</th>
                  <th>Product Category</th>
                  <th>Product Name</th>
                  <th>Product Description</th>
                  <th>Product Price</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
               <!--for data retrive-->
                 <?php
			          $query = "SELECT * FROM productimage";
                      $record = fetchData($query);
                      foreach ($record as $productimage) {
                          $id = $productimage['id'];
                          
                          echo "<tr>";
                                    echo "<td>".$id."</td>";
                                    echo "<td>".$productimage['category']."</td>";
                                    echo "<td>".$productimage['productName']."</td>";
                                    echo "<td>".$productimage['description']."</td>";
                                    echo "<td>".$productimage['price']."</td>";
                                    echo "<td><img width = 100px, hight = 100px, src='../public/upload/".$productimage['name']."'></td>";
                                     
                                    echo "<td>
                                        <a href='dashboard.php?page=delProductImage&id=$id'><button type='submit' class='btn btn-danger'>Delete</button></a>
                                        <a href='dashboard.php?page=editProductImage&id=$id'><button type='submit' class='btn btn-primary'>Update</button></a></td>";
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
<!-- /page content -->
