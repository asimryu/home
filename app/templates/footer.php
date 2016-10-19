   <hr>      
   <footer>
     <p>&copy; 유승열 2016</p>
   </footer>
 </div> <!-- /container -->

	<?php 
	if( ! $member['userlogin'] ){
		 require(PAGES . "signupform.php");
	}
	?>
 <script src="<?php echo JS;?>vendor/jquery-1.11.2.min.js"></script>
 <script src="<?php echo JS;?>vendor/bootstrap.min.js"></script>
 <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>

 <script src="<?php echo JS;?>main.js"></script>
 </body>
</html>
