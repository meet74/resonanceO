<?php
function function_alert($msg) { 
      
    // Display the alert box  
    echo "<script>alert('$msg');
            window.location='main/index.html';</script>"; 
} 
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
        $findus=$_POST['findus'];

		$to='meet237@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$message."\n"."Find-us :".$findus;
		$headers="From: ".$email;
        
		if(mail($to, $subject, $message, $headers)){
			function_alert("Welcome to Geeks for Geeks"); 
		}
		else{
			function_alert("Something went Wrong!");
		}
	}
?>