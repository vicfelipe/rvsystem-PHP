<?php 


		// Only to make sure (it isn't really needed)
		unset( $_SESSION['userdata'] );
		
		// Regenerates the session ID
		session_regenerate_id();
		
					// Redireciona
			echo '<meta http-equiv="Refresh" content="0; url=' . 'login/'. '">';
			echo '<script type="text/javascript">window.location.href = "' . 'login/'. '";</script>';
			// header('location: ' . $login_uri);


?>

