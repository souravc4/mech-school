<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (isset($user)) : ?> 
			<div class="col-md-12">
				<div class="page-header">
					<h1>Set Status</h1>
				</div>
				<?= form_open() ?>
					<div class="form-group">
						<label for="post">Message</label>
						<input type="text" class="form-control" id="post" name="post" placeholder=" Set status message">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-default" value="Submit">
					</div>
				</form>
			</div>
			<?php if (validation_errors()) : ?>
				<div class="col-xs-12">
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if (isset($error)) : ?> 
				<div class="col-xs-12">
					<div class="alert alert-danger" role="alert">
						<?= $error ?>
					</div>
				</div>
			<?php endif; ?>
			<?php if (isset($message)) : ?> 
				<div class="col-xs-12">
					<div class="message">
						<h4>Previous Status</h4>
						"<?= $message ?>"
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
		<?php if (isset($admin)) : ?>
			
			<div class="col-xs-12">
				<div class="alert alert-danger post-head">
					<h4>Admin View</h4>
				</div>
				<div class="message post-list">
					<table class="table table-bordered">
						<thead>
							<tr>
							<th>Status Messages</th>
							</tr>
						</thead>
						<tbody>
							<?php
									for ($x = 0; $x < sizeof($user_posts); $x++) {
										echo "<tr><td>";
									    echo "$user_posts[$x]";
									    echo "</td></tr>";
									}
									?>
							
						</tbody>
					</table>
				</div>
			</div>	
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .container -->