<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDMS APP</title>
    <style media="screen">
    *{
      font-family: 'Baloo 2', cursive;
      font-weight: 800;
    }
      body{
        margin: 0;
        padding: 0;
        /* ############need to grid them all##### */
        background: #E1E1E1;

      }
      .document__nav__side{
        position: fixed;
        display: flex;
        flex-direction:column;
        justify-content: center;
        align-items: center;
        height: 693px;
        color: #FFFFFF;
        width: 190px;
        margin-bottom: 0;
        background:#ABB0B8;

      }
      .document__navigators{
        display: flex;
        justify-content: center;
        align-items: center;


      }
      .list--nav{

        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        float: left;
        left: -25px;
        border-top: none;
        border-bottom: none;
        border-right: none;
        border-left: none;
        margin-top:0px;
        height: 55px;
        border-radius: 0px 10px 10px 0px;

      }
      .list--nav p{
        background-color: #ABB0B8;
        font-size: 16PX;
      }
      .list--nav img{
        margin-right:15px;
        width: 150px;
        height: 150px;
      }

      .list--nav:hover{
        border-top: none;
        border-bottom: none;
        border-right: none;
        border-left: 6px solid #F9711A;
        outline: none;
        box-shadow: 0px 1px 10px  #F9711A;
        background:#ABB0B8;
      }
      .list--nav:active{
        color: #fff;
        outline: none;
        box-shadow: 0px 1px 10px  #F9711A;
      }
    #msg{
      border-top: none;
      border-bottom: none;
      border-right: none;
      border-left: 6px solid #F9711A;
      outline: none;
      box-shadow: 0px 1px 10px  #F9711A;
      background:#ABB0B8;
      }
      .list--nav:focus{
          color: #fff;
        outline: none;
        box-shadow: 0px 1px 10px  #F9711A;
      }

      .document__nav__side ul img{
        border: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-left: 15px;
      }
      .document__nav__side ul p{
        margin-right: 16px;
      }
      .document__nav__side ul{
        list-style-type: none;
      }
.document__navigators{
  margin-top: -55px;
}
.main__nav{
  margin-top: -80px;
}
.New--bottom{
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin-top: 80px;
  border: none;
  height: 40px;
  width: 175px;
  border-radius: 10px;
  color: #FFF;
  font-size: 20px;
  background: #2A7FFF;
}
.New--bottom p{
    background: #2A7FFF;
}
.New--bottom img{
  margin-left: -18px;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  margin-right: 10px;

}
.setting--bottom{
  position:absolute;
  display: flex;
justify-content: center;
align-items: center;
flex-direction: row;
margin-top: 538px;
margin-bottom: 15px;
padding-left: 25px;
width: 140px;
height:55px;
z-index: 5;
  border-radius: 15px;
  background: #ABB0B8;

}
a{
  text-decoration: none !important;
  color: #FFF !important;
}
.setting--bottom:hover{
  border-bottom: 2px solid #E9581E;
  box-shadow: 0px 1px 10px  #F9711A;

}
.setting--bottom img{
  width: 30px;
  height: 30px;
  border-radius: 50%;
background: #ABB0B8;
}
.setting{
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ABB0B8;



}
.setting P{
  background: #ABB0B8;
}

.setting img{
  margin-right:15px;
  margin-left: -45px;

}
.double_right{
  position: absolute;
  background: #ABB0B8;
  z-index: 6;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: -630px;
  margin-right: -150px;

}
.double_right img{
  width: 35px;
  height: 35px;
  border-radius: 50%;
  background: #ABB0B8;
}
form{
  display: flex;
  justify-content: center;
  align-items: center;

}
.header--nav{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  margin-left: -1px;
  border: 3px solid #ABB0B8;
  width: 1165px;
  height: 50px;
  background-color: #ABB0B8;
  margin-top: -637px;
  position: fixed;
}
.messages{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 3px solid #D2D2D2;
  margin-left: 190px;
  width: 1170px;
  height: 685px;

}
.message--area{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border: 2px solid #D2D2D2;
  width: 1170px;
  height: 635px;
  margin-bottom: -57px;
}
.message--area p{
position: fixed;
}
.header--nav button{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  width: 260px;
  height: 45px;
  margin: 15px;
  border-radius: 10px;
  border: none;
  font-size: 20px;
}
.header--nav button:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 20px  #6D9DEF;
}
.header--nav button img{
  width: 35px;
  height: 35px;
  margin-right: 25px;
}
.text--area{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  margin-bottom: -540px;
}
.text--area input[type="text"]{
  width: 1000px;
  height: 50px;
  border-radius: 10px;
  border: none;
}
.text--area input[type="text"]:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 20px  #6D9DEF;
}
.text--area button[type="submit"]{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 55px;
  border-radius: 10px;
  border: none;
  position: fixed;
  margin-right: -980px;
}
.text--area button[type="submit"]:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 20px  #6D9DEF;
}
.img--subbmit{
  z-index: 2;
  width: 40px;
  height: 40px;
}
.messaging--space{
  border: 2px solid red;
  width: 1150px;
  height: 560px;
  margin-top: -52px;
  display: grid;
  grid-template-columns: auto;
  grid-template-rows: 1fr 5fr 1fr;
  grid-template-areas: 'text--in'
  'simple--text'
  'text--out';
}
.text--out{
  border: 2px solid red;
  border-radius: 10px;
  max-width: 300px ;
  height: 50px auto;
  color:black;
grid-area:text--out;
}
.simple--text{
grid-area:simple--text;
}
.text--in{
  grid-area:text--in;
}
    </style>
  </head>

<body>
  <link rel="stylesheet" href="css__font__family\font.css">
  <section class="document__nav__side">

    <!-- ###############this is the navigators option############################## -->

<?php
$home__page="../index.php";
 ?>
    <div class="document__navigators">
      <ul class="main__nav">
        <a href=<?php echo $home__page ?>> <li class="list--nav"><img src="../images\icons8_four_squares_24px.png" alt="Home__dropdown" class="img--id"><p >Home</p></li></a>
        <a href="#"> <li class="list--nav"><img src="../images\icons8_double_right_24px.png" alt="Document__dropdown"> <p>Document</p></li></a>
          <a href="#"> <ul class="sub__nav">
                <li class="list--nav"><img src="../images\icons8_double_right_24px.png" alt="Files__dropdown"> <p>Files</p></li>
              </ul></a>
      <a href="#" id="Message1"> <li class="list--nav" id="msg"><img src="../images\icons8_double_right_24px.png" alt="Folders__dropdown"> <p>Message</p></li></a>
      <a href="#"> <li class="list--nav"><img src="../images\icons8_double_right_24px.png" alt="services__dropdown"> <p>Category</p></li></a>
      <a href="#"><li class="list--nav"><img src="../images\icons8_double_right_24px.png" alt="department__dropdown"> <p>Department</p></li></a>
          <a href="#"> <li class="list--nav"><img src="../images\icons8_double_right_24px.png" alt="user Management__dropdown"> <p>User Management</p></li></a>
      </ul>
    </div>

    <!-- ##################this is the add item botton#################### -->
<a href="../upload\index.php"><div class="New--bottom">
  <img src="../images\icons8_files_100px.png" alt="add items bottom">
  <p>NEW DOC</p>
</div></a>


<!-- ######################## this is the setting option################################################ -->

<div class="setting--bottom">
  <p class="setting"><a href="#"><img src="../images\icons8_settings_40px.png" alt="setting__link"><p> My Account</p></a> </p>
</div>
<p class="double_right"> <img src="../images\icons8_double_left_24px.png" alt="opened nav"> </p>
  </section>
  <section class="messages">
    <div class="header--nav">
    <a href="#"><button type="button" name="button"><img src="../images\icons8_inbox_26px.png" alt="">Inbox</button></a>
    <a href="#"><button type="button" name="button"><img src="../images\icons8_compose_100px.png" alt="">Compose</button></a>
    <a href="#"><button type="button" name="button"><img src="../images\icons8_sent_64px.png" alt="">Sent Items</button></a>
    <a href="#"><button type="button" name="button"><img src="../images\icons8_delete_message_30px.png" alt="">Delated message</button></a>
    </div>
      <form action="../message\index.php" method="post"class="message--area">
        <p class="messaging--space"><div class="text--in">
          recieved
        </div> <p class="simple--text">No message available !</p> <div class="text--out">
Lrit in voluptate velit esse cillum dolore eu fugiat         </div> </p>

        <p class="text--area"><input type="text" name="mgsbox" value="">
          <button type="submit" name="" value=""><img src="../images\icons8_email_send_24px.png" alt="" class="img--subbmit"></button></p>
      </form>

  </section>

</body>
