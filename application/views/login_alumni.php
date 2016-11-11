<!-- Modal -->
<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url('assets/img/img_avatar.png'); ?>" alt="Card image cap">
        </div>
          <?php echo form_open('Welcome_alumni/verifylogin'); ?>
            <div class="form-group">
              <label for="exampleInputUsername">Username</label>
              <input type="email" name="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" required> Remember me
              </label>
            </div>
              <button type="submit" class="btn btn-success btn-lg btn-block" id="btnl">Login</button>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>