<?php
include 'header.php';
?>
<main>
<div class=thankyoucontent>
 <div class="wrapper-1">
    <div class="wrapper-2">
       <img src="https://i.ibb.co/Lkn7rkG/thank-you-envelope.png" alt="thank-you-envelope">
     <h1>Thank you!</h1>
    
      <button class="go-home changeeecolor"><a href="index">
        home page</a>
      </button>
    </div>
   
    <div class="footer-like">
      <p>
      </p>
    </div>
</div>
</main>



<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,600,900');

*{
  box-sizing:border-box;
 /* outline:1px solid ; */
 padding: 0;
 margin: 0;
}
main{
        background:#ffb606;
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
  
}
.changeeecolor a{
color: #fff !important;
}
a {
  color: black;
  text-decoration: none;
  transition: all 0.30s linear 0s;
}
@media(max-width:1200px){
  main{
    padding-top: 50px;
  }
}

.wrapper-1{
  width:100%;
  /* height:100vh; */
  display: flex;
flex-direction: column;
}
@media(max-width: 1200px){
  .wrapper-2{
    background-color: #ffb606 !important;
    /* margin-top: 55px !important; */
  }
}
.wrapper-2{
  text-align:center;
  /* margin-top:20px; */
  padding-top: 30px;
}
h1{
  font-family: 'Raleway', Arial Black, Sans-Serif;
  font-size:4em;
  font-weight: 900;
  letter-spacing:3px;
  color: #fff;
  margin:0;
  margin-top: 40px;
  margin-bottom:40px;
}
.wrapper-2 p{
 
  font-size:1.3em;
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
   background: black;
    border: none;
    padding: 20px 50px;
    margin: 30px 0;
    border-radius: 5px;
    cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-family: 'Raleway', Arial Black;
  font-size: 2rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.footer-like{
  margin-top: auto; 
  background: white;
  /* padding:6px; */
  text-align:center;
}
.footer-like p{
  margin:0;
  /* padding:4px; */
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  color:#FFF;
 }

@media (max-width:360px){
  h1{
    /* font-size:12.5em; */
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media screen and (max-width: 600px) {
  body {
    background-color: olive;
  }
}

@media (max-width:600px){
  main{
    padding-top:50px;
  }
  .thankyoucontent{
  max-width:1000px;
  margin:0 auto;
      margin-top: -71px;

}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:73px;
  }
  .go-home{
   background: black;
    border: none;
    padding: 40px 100px;
    margin: 30px 0;
    border-radius: 5px;
    cursor: pointer;
}
  
  
}
</style>

<script>
   setTimeout(function(){
      window.location.href = 'index.php';
   }, 3000); // Redirects after 5 seconds
</script>

<?php
    include 'footer.php';
    ?>