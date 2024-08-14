<?php
include 'header.php';
?>
<style>
    .float{
	position:fixed;
	width:50px;
	height:50px;
	bottom:60px;
  left:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:20px;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://web.whatsapp.com/send?phone=+919730840590&amp;text=Hello" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
   
    <div class="containerrrrr">
     
        <div class="fb-plugin">
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" 
                src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0" 
                nonce="XXXXXXXXXX"></script>
            <div class="fb-page" 
                data-href="https://www.facebook.com/websaritsolutions" 
                data-tabs="timeline" 
                data-width="3000px" 
                data-height="700px" 
                data-small-header="false" 
                data-adapt-container-width="true" 
                data-hide-cover="false" 
                data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/facebook" 
                            class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/facebook">Facebook</a>
                </blockquote>
            </div>
        </div>

        <div class="content100">
          <h1 class="faceh1">
            Facebook
          </h1>
            <p class="joinus">Follow us on social media to stay updated with the latest<br> news, special offers, and behind-the-scenes insights. We<br> love connecting with our community and sharing <br>exciting content that you won't want to miss.</p>
            <img src="https://t3.ftcdn.net/jpg/07/21/23/14/360_F_721231488_wVgeZGDXkhrxCCgvcfCYVbuR8h8p31rA.jpg" alt="" style="width:400px;margin-top:70px">
            <div>
            <button class="follwbtn"><a href="https://www.facebook.com/websaritsolutions">follow us for more</a></button></div>
        </div>
        
    </div>


<?php
		include 'footer.php';
		?>