<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
=================================
Authore : Rinto
Company: Subornovumi
Project: Mayla Investment
=================================
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>From Test</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                $('.secondform').hide();
                $("#next1").click(function(){
                	var firstName=$("#firstName").val();
                	var lastName =$("#lastName").val();
                	alert(firstName + lastName);
                	$('.firstform').hide();
                	$('.secondform').show();

                });
                });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
            	<div class="firstform">
            		<form name="formOne" class="contact_form" method="post">
            			<ul>
	            			<li>
	            				<label>First Name :</label>
	            				<input type="text" name="firstName" id="firstName" placeholder="john" required>
	            			</li>
	            			<li>
	            				<label>Last Name :</label>
	            				<input type="text" name="lastName" id="lastName" placeholder="doe" required>
	            			</li>
	            			<li>
	            				<button class="submit" name="next1" id="next1">Next</button>
	            			</li>
	            		</ul>	
            		</form> <!-- First form end -->
            	</div> <!-- First Form -->
            </div> <!-- div first row -->
            <div class="row">
            	<div class="secondform">
            		<form name="formTwo" class="contact_form" method="post">
            			<ul>
	            			<li>
	            				<label>E-mail :</label>
	            				<input type="email" name="email" id="email" placeholder="john_doe@example.com" required>
	            				<span class="form_hint">Proper format "john_doe@example.com"</span>
	            			</li>
	            			<li>
	            				<label>Phone Number :</label>
                                                <input type="text" name="phone" id="phone" placeholder="+880-1676670862" required>
	            				<span class="form_hint">Proper format "+880-1676670862"</span>
	            			</li>
	            			<li>
	            				<button class="submit" name="next2" id="next2">Next</button>
	            			</li>
	            		</ul>	
            		</form> <!-- Second form end -->
            	</div> <!-- Second Form -->
            </div> <!-- div second row -->
        </div><!--container div-->
    </body>
</html>
