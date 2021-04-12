<style media="screen">
  *{
    padding: 0;
    margin: 0;

  }
  body{
background: #D2D2D2;
  }
  nav{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-98deg ,#F9711A,#F9711A,#BB5613, #AF4316 ,#7D0626 ,#7D0626  ,#7D0626 ,#7D0626 ,#7D0626,#563448, #2C646B ,#319197);
    border-radius: 0px 0px 10px 10px;
    border: none;
    width: 100%;
    height: 70px;
    box-shadow: 0px 1px 10px  #6D9DEF;
  }
  .company__name{
    background: transparent;
    position: relative;
    left: -460px;
    float: left;
    border: none;
    opacity: 25px;
  }
  .company__name p{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    grid-gap: 1.5rem;
  }
  .profile__notification{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    float: right;
    right: -478px;
  }
  .profile__notification img{
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;

  }
  .profile__picture__icon{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    margin: 25px;
    padding: 0;
   box-shadow: 0px 1px 10px  #6D9DEF;
  }
  .notification__icon{
    width: 25px;
    height: 25px;
    border-radius: 50%;
  }
  .Company__Logo{
    background-color: #fff;
    border-radius: 50%;
    width: 55px;
    height: 55px;
  }
#company--name{
  font-family: 'Baloo 2', cursive;
  font-weight: 800;
  font-size: 20px;
  color: #fff;
  }

</style>

<!-- ##################### html start here###################################### -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDM App {fastdevz}</title>
  </head>
  <body>
<header>

  <link rel="stylesheet" href="css__font__family\font.css">
  <nav class="contaner">
    <div class="company__name">
      <p><img src="images/logo-ispa.png" alt="Company Logo" class="Company__Logo"> <span id="company--name">Intelligencia Coporation</span></p>
    </div>
    <div class="profile__notification">
      <img src="images/icons8_notification_40px.png" alt="Notitfication" class="notification__icon">
      <img src="images\icons8_private_account_male_50px.png" alt="Profile picture" class="profile__picture__icon">
    </div>
  </nav>

</header>
