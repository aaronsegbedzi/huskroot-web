    <!-- Password Change Modal -->
      <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <br>
              <i class="fa fa-key fa-7x"></i>
              <h4 id="changePasswordLabel" class="semi-bold">We need you to change your temporary password.</h4>
              <br>
            </div>
            <div class="modal-body">
                <div class="row form-row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" id="" placeholder="Your Card Number">
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-12">
                    <input type="text" class="form-control" placeholder="Card Holder's Name">
                  </div>
                </div>
                <div class="row form-row">
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Month">
                  </div>
                  <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Year">
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.Password Change Modal -->
    <!-- BEGIN CORE JS FRAMEWORK-->
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/assets/js/global/webarch.js" type="text/javascript"></script>
    <script src="/assets/js/global/jquery.cookie.js" type="text/javascript"></script>
    <script src="/assets/js/global/main.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-notifications/js/sweetalert.min.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE JS -->
    <?php if (function_exists('FooterContent')) { FooterContent(); } ?>
    <!-- END PAGE JS -->
  </body> 
</html>