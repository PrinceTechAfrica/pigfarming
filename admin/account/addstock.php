<?php
include 'head.php'; ?>
<div id="page-wrapper">
<center>
				<div class="activity_box activity_box1 "  >
        
					<h3> <i class='fas fa-user-plus'></i>Add Pig</h3>
          
                  <form action="registerstock.php" method="post">
                  
                  <div class="row">
                    
                    <div  class="col-md-12 form-group"  >
                      <label for="name">Pig Variety</label>
                      <input type="text" id="number" name="number" class="form-control py-2"  required="">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Quanity</label>
                      <input type="text" id="class" name="class" class="form-control py-2 "  required="">
                    </div>
                  </div>
                  <div class="row">
                    <divc  class="col-md-12 form-group">
                      <label for="name">Price</label>
                      <input type="number" id="male" name="male" class="form-control py-2" required="">
                    </div>
                  </div>
                  <div class="row mb-12">
                    <div class="col-md-12 form-group">
                      <label for="name">Quantity of Feed</label>
                      <input type="number" id="female" name="female" class="form-control py-2" required="">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Add" class="btn btn-primary px-5 py-2" name="submitBtn" id="submitBtn">
                    </div>
                  </div>
                </form>
              
					
									</div>
              </center>    
			</div>
			</div>


