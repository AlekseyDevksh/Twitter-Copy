 <footer class="footer">
 	<div class="container">
		<p>&copy; Twitter</p>
	</div>
 </footer>



    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>


	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title" id="loginModalTitle">Login</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      <div class="alert alert-danger" id="loginAlert"></div>
	        <form>
	        	<input type="hidden" name="loginActive" id="loginActive" value="1">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" id="email" placeholder="Email adress">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" placeholder="Password">
			  </div>
			</form>
	      </div>
	      <div class="modal-footer">
	      	<a href="#" id="toggleLogin">Sign up</a>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" id="loginSignupButton">Login</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script>

		$("#toggleLogin").click(function(e) {
			e.preventDefault();
			
			if ($("#loginActive").val() == "1") {

				$("#loginActive").val("0");
				$("#loginModalTitle").html("Sign Up");
				$("#loginSignupButton").html("Sign Up");
				$("#toggleLogin").html("Login");

			} else {

				$("#loginActive").val("1");
				$("#loginModalTitle").html("Login");
				$("#loginSignupButton").html("Login");
				$("#toggleLogin").html("Sign Up");

			}


		});

		$("#loginSignupButton").click(function() {

	
			$.ajax({
			  type: 'POST',
			  url: "actions.php?action=loginSignup",
			  data: "email=" + $("#email").val() + "&password=" + $("#password").val() + "&loginActive=" + $("#loginActive").val(),
			  success: function (result) {
					if (result == "1") {

						window.location.assign("http://develop.course/twitter/");

					} else {

						$("#loginAlert").html(result).show();

					}

				} 
			});

			

		});

		$('.toggleFollow').click(function(e) {

			var id = $(this).attr("data-userId");

			e.preventDefault();
			$.ajax({
			  type: 'POST',
			  url: "actions.php?action=toggleFollow",
			  data: "userId=" + id,
			  success: function (result) {
					
					if (result == "1") {

						$("a[data-userId='" + id + "']").html("Follow");

					} else {

						$("a[data-userId='" + id + "']").html("Unfollow");

					}

				} 
			});


		});

		 $("#postTweetButton").click(function() {
        
        $.ajax({
            type: "POST",
            url: "actions.php?action=postTweet",
            data: "tweetContent=" + $("#tweetContent").val(),
            success: function(result) {
                
                if (result == "1") {
                    
                    $("#tweetSuccess").show();
                    $("#tweetFail").hide();
                    
                } else if (result != "") {
                    
                    $("#tweetFail").html(result).show();
                    $("#tweetSuccess").hide();
                    
                }
            }
            
        })
        
    })

		
	</script>

  </body>
</html>