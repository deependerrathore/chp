<form method="post" class="form-inline" >
	<fieldset>
    <legend>Contact Us</legend>
    	
        	Name :<br>
        		<input type="text" required id="name" pattern="[A-Za-z ]+" /><br><br>
            <!-- NO need of email address we can get it from session-->
            
            Subject :<br>
                <input type="text"  id="subject" /><br><br>
            Query :<br>
            <textarea id="query" class="message"></textarea><br><br>
        	
        	<input type="submit" value="Submit" id="submitcontactus" class="btn btn-primary"/><br>
        	
    </fieldset>
</form>
