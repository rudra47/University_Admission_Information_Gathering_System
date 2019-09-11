
<div class="container" style="">
    <div class="footer-bottom col-md-12">
        <p class="pull-left"> Copyright © 2017 Ethereal World. All Rights Reserved By Asadur. </p>

    </div>
    <a href="footer.php"></a>
</div>

</div>
</div>
</div>
</div>
<!--Footer-->
</div>
<script src="js/nav.js"></script>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="js/form-validator.js"></script>
<script>
		$(function () {
			$("#register-form").validate({
				// Specify the validation rules
				rules: {
					name: "required",
                                        email: {
						required: true,
						email: true
					},
					username:"required",
                                        hsc_group: {
						required: true,
					   // notEqualTo:3
					},
					user_password: {
						required: true,
						minlength: 3,
						maxlength: 18
					},
					confirm_password:{
						equalTo: "#pw"
					},


                                        gender:{
						required: true,
					   // notEqualTo:3
					}

				},
				// Specify the validation error messages
				messages: {
					name: "Please enter your name",
                                        email:{
						required: "Please enter a valid email address"
					},
					username:"Please Enter Your USername",
                                        hsc_group:{
						required: "Please enter a valid HSC Group"
					},
					password: {
						required: "Password nedded",
						minlength: "11 ta lagbe",
						maxlength: "18 tar besi deya jabena "
					},
					confirm_password:{
						equalTo: "Password Does not Match!",
					},
					 gender:{
						required: "Select gender first",
					}

				},
				submitHandler: function (form) {
					form.submit();
				}
			});
		});
	</script>
</body>
</html>
