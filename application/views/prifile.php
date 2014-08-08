<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>OK Google</title>
		<meta name="description" content="OK Google" />
		<meta name="keywords" content="OK Google" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/component.css" />
        
		<script src="../../assets/js/modernizr.custom.js"></script>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
   <script>
  $(function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  });
  </script>
  <style>
  .ui-tooltip, .arrow:after {
    background: black;
    border: 2px solid white;
  }
  .ui-tooltip {
    padding: 5px 10px;
    color: white;
    border-radius: 20px;
    font: bold 14px "Helvetica Neue", Sans-Serif;
    text-transform: uppercase;
    box-shadow: 0 0 7px black;
  }
  .arrow {
    width: 30px;
    height: 16px;
    overflow: hidden;
    position: absolute;
    left: 50%;
    margin-left: -35px;
    bottom: -16px;
  }
  .arrow.top {
    top: -16px;
    bottom: auto;
  }
  .arrow.left {
    left: 20%;
  }
  .arrow:after {
    content: "";
    position: absolute;
    left: 20px;
    top: -20px;
    width: 25px;
    height: 25px;
    box-shadow: 6px 5px 9px -9px black;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    tranform: rotate(45deg);
  }
  .arrow.top:after {
    bottom: -20px;
    top: auto;
  }
  </style>
        <style type="text/css">
		input
{
height:1.8em;
width:200px;
color:rgb(12,177,235);
font-size:17px;
text-align:center;
}
</style>
	</head>
	<body>
		<div class="container">
			
			<div id="cbp-so-scroller" class="cbp-so-scroller">
            <?php
			$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('GPlusLibrary');
		$this->load->library('form_validation');
		$this->load->library('table');
            $uid = $this->session->userdata('uid');
			$name = $this->session->userdata('name');
					//echo "uuuuu".$uid;
					$this->load->database(); 
		$this->load->helper('string');
	    $PR=random_string('nozero', 3);
	    //$arg4=$arg1.$PR;
		 //$query = $this->db->get('users');
		 
		$this -> db -> select('');
		$this -> db -> from('');
		$this -> db -> where(''); 
		
		$this -> db -> limit(1);

		$query = $this -> db -> get();
		foreach ($query->result() as $row)
{
	//echo $row->uid;
	//echo "mhash". $row->mhash;
	if(strlen($row->mhash)==0)
	{
		
		?>
		<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
							<h3><?php echo "welcome&nbsp;".  $name;  ?><a href="http://fb-prapps.rhcloud.com/ok/index.php/gauth/logout">&nbsp;<b style="color:#F00;">Logout</b>&nbsp;</a></h3>
						
<p>Congratulations! You are one step away from enjoying Google on your mobile phone.
</p><p>Send #google to 55444<a  title="txtbrowser is now only available on 55444, in Bangladesh, Middle east and Africa.">(how?)</a> to receive a 6 character confirmation pin.
</p><p>Enter and submit the pin, and you're good to go.
</p>
                        <img style="margin-top:-30px;" src="../../assets/images/down.png" alt="img01" width="80" height="80">
					</article>
					<figure  class="cbp-so-side cbp-so-side-right">
                    <img src="../../assets/images/i.png" alt="img01">
                         
                         <br/>
                         
						<?php echo validation_errors(); ?>
 
<?php echo form_open(''); ?>


<input style="margin-top:120px;" type="text" name="username" value="" size="50" />
<input type="hidden" name="provider" value=<?php echo $k; ?> size="50" />


<div><input type="submit" value="Submit" /></div>
<div style="color:#F00;">

<?php  print_r($user);  ?>


</div>
<br/>

</form>
					</figure>
				</section>
	<?php
	}
	else{
	?>	

                
            <section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h3>"OK Google(&#946;)"-Instructions <a href="http://fb-prapps.rhcloud.com/ok/index.php/gauth/logout">&nbsp;<b style="color:#F00;">Logout</b>&nbsp;</a></h3>
						<p>
                       You have already registered a device with OK Google. If you have changed your phone number and wish to switch the number associated with this account, send a mail to prashanth726@gmail.com with your email id.
                        
					</article>
					<figure style=""  class="cbp-so-side cbp-so-side-right">
                   Scroll down... Successfully done   <img style="" src="../../assets/images/down.png" alt="img01" width="80" height="80">
					<br/><br/>
					
						
					</figure>
				</section>
                <?php

	}
	
	//echo $row->code;
}
				
				?>
				<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h3>"OK Google(&#946;)"</h3>
						<p>Access the Power of Google Through SMS <br> Use Google calender.,Google Tasks.,Google Contacts and the amazing <b>Google Mail</b>
                        .</p>
                        <img style="margin-top:-30px;" src="../../assets/images/down.png" alt="img01" width="80" height="80">
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="../../assets/images/g.png" alt="img01">
					</figure>
				</section>
                 
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="../../assets/images/me.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h1>Google Calender!!</h1>
						<p>Use Google Calender through sms ., Send #google.events to get all upcoming Events In Your Google Calender ., <br/> Coming Soon : Create events with natural language</p>
					</article>
				</section>
				<section class="cbp-so-section" id="People">
					<article class="cbp-so-side cbp-so-side-left">
						<h1>Google Contacts !!</h1>
						<p>Use Google Contacts through sms ., Send #google.people to get all contacts In Your Google Contacts  <br/>send #google.people&lt;space&gt; &lt;Your Query&gt;(with out braces) to txtweb <br/>For Example send #google.people <b><i>prashanth</i></b> To serach for contact name <b><i>prashanth</i></b>., <br/> Coming Soon : Create contacts with natural language</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="../../assets/images/mp.png" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="../../assets/images/mt.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h1>Google Tasks</h1>
						<p>Use Google Tasks through sms ., Send #google.tasks to get all Tasks In Your Google Tasks <br/>send #google.tasks to txtweb <br/>For Example send #google.tasks to get your upcoming tasks., <br/> Coming Soon : Create tasks through SMS</p>
					</article>
				</section>
				<section class="cbp-so-section" id="People">
					<article class="cbp-so-side cbp-so-side-left">
						<h1>Google Gmail(Coming Soon) !!</h1>
						<p>Use Gmail through sms ., Send #google.gmail to get all your unread email in your gmail <br/> Coming Soon : Send mail</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="../../assets/images/mail.png" alt="img01">
					</figure>
				</section>
               
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="../../assets/images/dev.png" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Developed By:</h2>
						<p>K.Prashanth Reddy <br/>
                        
                        <a href="http://www.google.com/+PrashanthReddy" target="_blank">www.google.com/+PrashanthReddy</a>
                        
                        
                      </p>
					</article>
				</section>
                
		  </div>
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/cbpScroller.js"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
	</body>
</html>
