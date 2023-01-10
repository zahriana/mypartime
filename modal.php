<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <div class="avatar">
					<img src="assets/img/icon/avatar.png" alt="Avatar">
				</div>				 -->
				<div>
					<img src="assets/img/logo/logo.png" height="70"> 
				</div>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="action/act_login.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" name="login" class="genric-btn btn-lg btn-block login-btn primary">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				Belum memiliki akun? <a href="register.php">Daftar disini</a>
			</div>
		</div>
	</div>
</div> 