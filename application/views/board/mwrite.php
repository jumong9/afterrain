<form class="form-horizontal" method="post" action="/index.php/board/write" class="span10">
<?php echo validation_errors(); ?>
  <div class="control-group">
    <label class="control-label" for="inputCompanyName">Company Name</label>
    <div class="controls">
      <input type="text" name="comp_name" placeholder="Company Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPhone">Phone</label>
    <div class="controls">
      <input type="text" name="comp_phone" placeholder="Phone">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputFax">Fax</label>
    <div class="controls">
      <input type="text" name="comp_fax" placeholder="Fax">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputAddress">Address</label>
    <div class="controls">
      <input type="text" name="comp_addr" placeholder="Address">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Add</button>
    </div>
  </div>
 
</form>