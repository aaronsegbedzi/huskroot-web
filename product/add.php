<?php require_once($_SERVER['DOCUMENT_ROOT'].'/include/protect.php'); $scriptName = basename(__FILE__, '.php'); function HeaderContent() { ?>
<link href="/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" />
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/header.php"); ?>
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
  <?php include($_SERVER['DOCUMENT_ROOT']."/include/layouts/sidebar.php"); ?>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content">
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>YOU ARE HERE
          </p>
        </li>
        <li>PRODUCTS
        </li>
        <li>
          <b>ADD PRODUCT
          </b>
        </li>
      </ul>
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
        <i class="material-icons">library_add
        </i>
        <h3>Add Product
        </h3>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="row-fluid">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title">
              <h4>You are currently uploading a product. Complete this form to continue.
              </h4>
            </div>
            <div class="grid-body">
              <form id="product-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group" >
                          <label class="form-label">Product Image
                          </label>
                          <span class="help">Upload your image file here. Supported file type is (.jpg).
                          </span>
                          <div class="controls">
                            <input type="file" class="form-control" style="line-height: 0;" id="img" name="img" accept=".jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Product Name
                          </label>
                          <span class="help">e.g. "My Sweet Yams"
                          </span>
                          <div class="controls">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="form-label">Product Price
                          </label>
                          <span class="help">e.g. "200.14"
                          </span>
                          <div class="controls">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Product Price" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="form-label">Currency
                          </label>
                          <span class="help">e.g. "GHC"
                          </span>
                          <div class="controls">
                            <select class="form-control" id="currency" name="currency" required>
                              <option value="GHC" selected="true">GHC
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="form-label">Unit
                          </label>
                          <span class="help">e.g. "Kg"
                          </span>
                          <div class="controls">
                            <select class="form-control" id="unit" name="unit" required>
                              <option value="KG" selected="true">KG
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Product Location
                          </label>
                          <span class="help">Type product location.
                          </span>
                          <div class="controls">
                            <input type="text" class="form-control" id="location" name="location" placeholder="Product Location" required> 
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="form-label">Product Type
                          </label>
                          <span class="help">Select product category.
                          </span>
                          <div class="controls" id="subsubcategory">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Product Description
                          </label>
                          <span class="help">Descripe you product in short words.
                          </span>
                          <div class="controls">
                            <textarea id="description" name="description" placeholder="Enter your description here ..." class="form-control" rows="10"></textarea> 
                          </div>
                        </div>
                      </div>
                    </div>   
                  </div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-md-12"> 
                        <div class="form-group">
                          <label class="form-label">Audio Description
                          </label>
                          <span class="help">Upload your audio file here. Supported file type is (.wav).
                          </span>
                          <div class="controls">
                            <input type="file" class="form-control" style="line-height: 0;" id="audio" name="audio" accept=".wav">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Video Description
                          </label>
                          <span class="help">Upload your video file here. Supported file type is (.mp4).
                          </span>
                          <div class="controls">
                            <input type="file" class="form-control" style="line-height: 0;" id="video" name="video" accept=".mp4">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="grid simple">
                          <div class="form-group">
                            <label class="form-label">Product Location - 
                              <b>Powered by Google Maps.
                              </b>
                            </label>
                            <span class="help">Click the map location to set the marker. Drag the marker for maximum accuracy.
                            </span>
                            <div id="map" style="width: 100%; height: 310px;">
                            </div>
                            <input type="hidden" name="lat" id="lat" value="5.596617">
                            <input type="hidden" name="lng" id="lng" value="-0.223794">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <button class="btn btn-cons btn-info btn-large btn-block" type="submit">
                          <i class="material-icons">check_circle
                          </i>&nbsp;<br>Upload
                        </button>
                      </div>
                      <div class="col-md-6">
                        <button type="reset" class="btn btn-danger btn-cons btn-block">
                          <i class="material-icons">refresh
                          </i>&nbsp;
                          <br>Reset
                        </button>      
                      </div>
                    </div>
                  </div>
                </div>   
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>
  <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT -->
<?php function FooterContent() { ?>
<script src="/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript">
</script>
<script src="/assets/js/pages/product/add.min.js" type="text/javascript">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB59XziNtopRDb7unsQ7nXDXS9HdsdidPU">
</script>
<?php } include($_SERVER['DOCUMENT_ROOT']."/include/layouts/footer.php"); ?>