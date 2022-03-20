<!--Action Code-->
<?php
   $id = $_GET['id'];
   $selectProduct = "select * from productimage where id = '$id'";
   $rows = fetchDataWithID($selectProduct);
   $productName = $rows['productName'];
   $description = $rows['description'];
   $price = $rows['price'];
   

   if(isset($_POST['editProductImage'])){
   $productName = $_POST['productName'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   
   //-- Check ProductName--//  
   if(empty($productName))
   {
     $page = 'dashboard.php?page=editProductImage&id='.$id.'&err=1&msg2=Falied';
     header('Location: '.$page);
   }
   else
   {
     $checkProductName = "SELECT * FROM productimage WHERE productName = '$productName'"; 
     $num = numRows($checkProductName);
     if($num>0){
         $page = 'dashboard.php?page=editProductImage&id='.$id.'&err=1&msg=Falied';
         header('Location: '.$page);
     }
     else
     {          
       $editProductImageQ = "UPDATE productimage set productName = '$productName', description = '$description',price = '$price' WHERE id = $id ";
       query($editProductImageQ);
       $page = 'dashboard.php?page=editProductImage&id='.$id.'&err=0&msg3=Success';
       header('Location: '.$page); 
     }
   }
 }
if(isset($_POST['returnProductImage'])){
      $page = 'dashboard.php?page=addProductImage';
      header('Location: '.$page);
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
                        ?>
                     </label>
                    </div> 
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" role="form" method="post" name="productImage">
                     <!--Product Name-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productName">Product Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="productName" name="productName" required="required" class="form-control col-md-7 col-xs-12"  value = "<?php echo $productName; ?>">
                        </div>
                      </div>
                     <!--Product Description-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Product Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="description" required="required" class="form-control col-md-7 col-xs-12" value = "<?php echo $description; ?>">
                        </div>
                      </div>
                     <!--Product Price-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caption">Product Price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12" value = "<?php echo $price; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-2 text-center">
                          <button type="submit" class="btn btn-danger" id = "returnProductImage" name = "returnProductImage">Return</button>
                          <button type="submit" class="btn btn-success" id = "editProductImage" name = "editProductImage">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>
<!-- /page content -->
