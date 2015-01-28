<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class='modal-header no-padding align-center'>
            <h2>Sign In</h2>
        </div>
      <div class="modal-body">
            <form method="POST" action=''>
            <div class="input-group mb10">
                <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                <input class="form-control" type="text" placeholder="Email" required>
            </div>
            <div class="input-group mb10">
                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                <input class="form-control" type="password" placeholder="Password">
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <a href='<?php echo $sr ; ?>/signup/student' type='button' class="btn btn-primary pull-left"><i class='fa fa-plus fa-fw'></i> Create Account</a>
                <button type='submit' name="signin" class="btn btn-dark-grey pull-right"><i class='fa fa-arrow-right fa-fw'></i> Sign In</button>
              </div>
                <div class='clear'></div>
                <br>
                <div class='align-center'><a href='<?php echo $sr?>/reset'>Forgot my password</a></div>
            </div>
            </form>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class='fa fa-times fa-fw'></i> Close</button>
        </center>
      </div>
    </div>
</div>
</div>