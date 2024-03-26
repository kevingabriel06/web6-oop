<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Username:</label>
    <input type="text" name="name" value="<?php if(isset($row)) { echo htmlspecialchars($row['name']); } ?>" class="form-control" required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-email">Email:</label>
    <input type="email" name="email" value="<?php if(isset($row)) { echo htmlspecialchars($row['email']); } ?>" class="form-control" required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-phone">Phone:</label>
    <input type="text" name="phone" value="<?php if(isset($row)) { echo htmlspecialchars($row['phone']); } ?>" class="form-control" required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-subject">Subject:</label>
    <input type="text" name="subject" value="<?php if(isset($row)) { echo htmlspecialchars($row['subject']); } ?>" class="form-control" required>
</div>
<div class="col-md-12 col-sm-12 form-group">
    <label for="register-form-message">Message:</label>
    <textarea class="form-control" name="message" placeholder="Message..."><?php if(isset($row)) { echo htmlspecialchars($row['message']); } ?></textarea>
</div>
