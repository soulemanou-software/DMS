<style media="screen">
*{
  padding: 0;
  margin: 0;

}
body{
  padding: 0;
  margin: 0;
  background-color: #D2D2D2;
}
.contaner{
margin: 0px;
padding: 0px;
background-color: #D2D2D2;
display:flex;
justify-content: center;
align-items: center;
grid-gap: 5rem;
width: 100%;
height: 100%;
}
#sign_in{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: none;
  border-radius: 10px;
  background-color: #fff;
  width: 309px;
  height: 390;
}
#sign_in > h3{
  font-size: 33px;
  font-weight: 650;
  font-family: Baloo;
}
.sign_socil_logo{
  border:none;

}
.sign_socil_logo > img{
border: 2px solid #F3F3F3;
border-radius: 50%;
width: 40px;
hieght:40px;
}
#sign_up_info{
  border: 1px ;
  border-radius: 10px;
  background-color: #fff;
  width: 309px;
  height: 390;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#sign_up_info{
    border: 4px solid #319197;
}
.sign_in_from{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 5px;

}
.sign_in_from input:focus{
outline: none;
border-color: #6D9DEF;
box-shadow: 0px 1px 10px  #6D9DEF;
}
.sign_in_from input::placeholder{
  font-weight: 600;
  color: #F9711A;
}
.sign_in_from input{
  width: 250px;
  height: 35px;
  margin: 5px;
  padding: 9px;
  border-radius: 8px;
  background-color: #E1E1E1;
  border:none;
}
.sign_in_from input[type="submit"]{
  width: 190px;
  background: linear-gradient(98deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
  font-weight: 600;
  color: #FFFFFF;
}
.sign_in_from{
}
#sign_in_message{
border: none;
  border-radius: 10px;
  background-color: #fff;
  width: 409px;
  height: 490;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.sing-up-btn{
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  border-radius: 10px;
  margin-top: 5rem;
  width: 190px;
  height: 35px;
  background: linear-gradient(98deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
  font-weight: 600;
  color: #FFFFFF;

}
.sing-up-btn:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 10px  #6D9DEF;
}
.sign_in_btn:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 10px  #6D9DEF;
}
.sign_in_btn{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 3rem;
  border-radius: 10px;
  border: none;
  width: 190px;
  height: 35px;
  background: linear-gradient(-48deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
  font-weight: 600;
  color: #FFFFFF;
}
.cart--sign--up-mgs{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 421px;
  height: 502px;
  border-radius: 10px;
  background: linear-gradient(-48deg ,#319197,#D03224,#AE022E,#319197,#477885,#319197,#319197,#319197,#902447 ,#F9711A,#D03224,#AE022E);
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -38px rgba(0,0,0,5);
}
.sign--in--box{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: -105px;
  z-index: 5;
  width: 322px;
  height: 403px;
  background: linear-gradient(48deg ,#319197,#D03224,#AE022E,#319197,#477885,#319197,#319197,#319197,#902447 ,#F9711A,#D03224,#AE022E);
  border-radius: 10px;
}
.note_about-login{
  text-align: center;
  margin: 25px 30px -25px 30px;
}
a{
  text-decoration: none;
  cursor: pointer;
}
#sign_in_message h2{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 38px;
    color: #F66C1B;
}
p{
  font-family: 'Baloo 2', cursive;
  font-weight: lighter;
}

#sign_in h3{
  font-family: 'Baloo 2', cursive;
  font-weight:900;
  font-size: 33px;
  color: #F66C1B;
}
.sign_in_from input[type="submit"]{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 15px;
}
.sing-up-btn{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 15px;
}
</style>
<link rel="stylesheet" href="css__font__family\font.css">
<div class="contaner">
  <!-- sign in form box begins  -->
  <div class="contaner">

    <div class="sign--in--box">
      <div id="sign_in" class="rotate_sign_in">
        <p><h3>Sign In</h3></p>
        <p class="sign_socil_logo">
           <img src="images\icons8_facebook_48px.png" alt="">
           <img src="images\icons8_twitter_32px.png" alt="">
           <img src="images\icons8_windows_xp_48px.png" alt="">
         </p>
         <p class="optional_note"> or use your email account</p>
            <form class="sign_in_from" action="../index.php" method="post">
              <p><input type="text" name="" value="" placeholder="Email"></p>
              <p><input type="text" name="" value="" placeholder="Password"></p>
              <p><u><a href="http://localhost/www.ispa.cm/dms/resetpassword/reset__password.php">forgot your password ?</a></u></p>
              <input type="submit" name="submit" placeholder="sign in">
            </form>
      </div>
    </div>
    <!-- end of sign in form -->

    <div class="cart--sign--up-mgs">
      <!-- this is the sign message box -->
      <div id="sign_in_message" class="rotate_sign_in_message">
        <h2>Welcome Back !</h2>
        <p class="note_about-login"> Enter personal details to your employee account <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<a href="http://localhost/www.ispa.cm/dms/sign__up.php"><button class="sing-up-btn">
    Sign Up
</button></a>
      </div>
    </div>
    <!-- end of sign in message box -->
</div>
