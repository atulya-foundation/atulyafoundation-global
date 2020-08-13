<?php
    ob_start();
    echo "Submitting Details...";
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>

<body>

    <?php
	 if(!empty($_POST)){ 
       
		 $name 			= $_POST['name'];
		 $email 			= $_POST['email'];
		 $phone 		= $_POST['phone']; 
		 $me 	= $_POST['age']; 
         $to = "shubham.aladinn@gmail.com";
         $subject = "Atulya Enquiry";		 
        
         $message="<b>Hello</b>";
         $message .= "<table width='600' height='124' border='1' cellpadding='0' cellspacing='0' bgcolor='#FFFFCC'>
								<tr>
									<td>Name :</td><td>".$name."</td>
								</tr>
									<tr>
									<td>Email :</td><td>".$email."</td>
								</tr>
								
								<tr>
									<td>Mobile :</td><td>".$phone."</td>
								</tr> 
								
								<tr>
									<td>Age :</td><td>".$me."</td>
								</tr>
								
								<tr>
									<td>Gender :</td><td>".$_POST['gender']."</td>
								</tr>
								
								<tr>
									<td>Street :</td><td>".$_POST['street']."</td>
								</tr>
								
									<tr>
									<td>Locality :</td><td>".$_POST['locality']."</td>
								</tr>
								
									<tr>
									<td>City :</td><td>".$_POST['city']."</td>
								</tr>
								
									<tr>
									<td>State :</td><td>".$_POST['state']."</td>
								</tr>
								
									<tr>
									<td>Zip :</td><td>".$_POST['zip']."</td>
								</tr>
								
									<tr>
									<td>Bio :</td><td>".$_POST['bio']."</td>
								</tr>
								
									<tr>
									<td>Short Note :</td><td>".$_POST['note']."</td>
								</tr>
				 
							</table>";
         
                           
		 $header = "From:".$email." \r\n";
		 $header .= "Cc: shubham.aladinn@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
		 $header .= "Reply-To: ". strip_tags($email) . "\r\n";
         $retval = mail ($to,$subject,$message,$header);
         //echo '<pre>';print_r($retval);die('i am in');
          
         if( $retval == true ) {
           
         }else {
           $message =  'There was a problem sending the email.';
         }
	   }
	  
      ?>

</body>

</html>


<form id="subform" method="post">
    <div class="row">
        <div class="col-xl-8">
            
                <input type="hidden" value="<?php echo $_POST['name'] ?>" class="form-control" name="name" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['email'] ?>" class="form-control" name="email" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['age'] ?>" class="form-control" name="age" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['phone'] ?>" class="form-control" name="phone" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['gender'] ?>" class="form-control" name="gender" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['street'] ?>" class="form-control" name="street" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['state'] ?>" class="form-control" name="state" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['locality'] ?>" class="form-control" name="locality" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['city'] ?>" class="form-control" name="city" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['zip'] ?>" class="form-control" name="zip" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['note'] ?>" class="form-control" name="note" placeholder=""
                    required>
                    <input type="hidden" value="<?php echo $_POST['bio'] ?>" class="form-control" name="bio" placeholder=""
                    required>

            
            

        </div>
    </div>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script>
    var request;

    // Bind to the submit event of our form


    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $('#subform');

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();
    //alert(serializedData);
    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwc9mpNjNuyL5LVfEeLSfi31biHKi6x7GcRmgjqJ2--Srvmb8OU/exec",
        type: "post",
        data: serializedData
    });



    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR) {
        // Log a message to the console
        location.href = "https://alpha.atulyafoundation.org";
        console.log("Hooray, it worked!");
        console.log(response);
        console.log(textStatus);
        console.log(jqXHR);
        

    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown) {
        // Log the error to the console
        console.error(
            "The following error occurred: " +
            textStatus, errorThrown
        );

    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

    // Prevent default posting of form
</script>