<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EDMS APP</title>
    <style media="screen">
    p{
      font-family: 'Baloo 2', cursive;
      font-weight: 800;
    }
      body{
        margin: 0;
        padding: 0;
        /* ############need to grid them all##### */
        display: grid;
        grid-columns: 0.01fr 6fr 1fr;
        grid-rows:1fr;

        background: #E1E1E1;

      }
      .main__items{
        display: grid;
        grid-template-columns: 2fr 2fr 2fr ;
        grid-template-rows: auto;
        grid-gap: 1.5rem;
        margin-left: -40px;
        align-items: center;
        width: 980px;
        position: relative;
        float: right;
        right: -290px;

      }
      .main__content{
        display: grid;
        grid-column: 1fr;
        grid-row: 0.01fr 12fr;
        margin-top: -0px;

      }
      .card__files--contaner{
        margin: -25 40px -25 40px;
        border: 1px solid blue;
        width: 190px;
        height: 200px;
        border-radius: 10px;
        display: grid;
        grid-column: 1fr;
        grid-row: 5fr 2fr .5fr;

      }

      .img__banner{
        grid-column: 1;
        grid-row: 1;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        border: 2px solid grey;
        border-radius: 10px 10px 0px 0px;
        height: 120px;
        width: 186px;
        margin-bottom: -20px;


      }
      .Edit__rename{
        margin-top: -350px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      }
    .Rename, .Edit{
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        border-radius: 10px;
        z-index: 3;
        font-family: 'Baloo 2', cursive;
        font-weight: 800;
        background-color: rgba(0, 0, 0, 0.4);
        color: #FFFFFF;


      }
      .Rename:hover, .Edit:hover{
        background:  linear-gradient(48deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
      }
        .Rename{
          width: 65px;
          height: 20px;
          margin-right: 55px;
        }
      .Edit{
        width: 60px;
        height: 20px;
      }
      .content__card{
        grid-column: 1;
        grid-row: 2;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Baloo 2', cursive;
        font-weight: 800;
              color: #FFFFFF;
        background-color: #2A7FFF;
      }
      .download__bottum{
        grid-column: 1;
        grid-row: 3;
        display: flex;
        margin-bottom: -17px;
        justify-content: center;
        align-items: center;
        background-color: #2A7FFF;
        border-radius: 0px 0px 10px 10px;

      }
      #download--btn{
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        border-radius: 10px;
        height: 20px;
        font-family: 'Baloo 2', cursive;
        font-weight: 800;
        background: linear-gradient(48deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
        font-weight: 600;
        color: #FFFFFF;
      }
      .upper__nav{
      position:fixed;
      z-index: 5;
      margin-left: 190px;
      grid-column: 1;
      grid-row: 1;
      height: 40px;
      width: 973px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      background: #ABB0B8;
      box-shadow: 0px 1px 10px  #6D9DEF;
      }
      .upper__nav input{
        position: relative;
        float: right;
        right: -280px;
        font-family: 'Baloo 2', cursive;
        font-weight: 900;
        width: 250px;
        height: 30px;
        margin: 1px;
        padding: 9px;
        border-radius: 8px;
        background-color: #E1E1E1;
        background-image: url('images/icons8_double_left_24px.png');
        background-repeat: no-repeat;
        border:none;
      }
      .upper__nav input:focus{
        outline: none;
        border-color: #6D9DEF;
        box-shadow: 0px 1px 10px  #6D9DEF;
      }
      .nav__refference__titles{
        position: relative;
        float: left;
        left: -250px;
      }
      .document__nav__side{
        grid-column: 1;
      grid-row: 1;
      box-shadow: 0px 1px 10px  #6D9DEF;

    }
      .main__items{
        grid-column: 1;
      grid-row: 2;
      height: 550px;
      margin-top: 50px;
      }
      .details{
      position: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      float: right;
      right: -0px;
      grid-column: 3;
      grid-row: 1;
      background: #ABB0B8;
      width: 185px;
      height: 693px;
      box-shadow: 0px 1px 10px  #6D9DEF;
      z-index: 5;
      color: #fff;

      }
      .nav__refference__titles p  input{
        color: yellow;

      }
      .first--dd{
            margin-top: -250px;
            font-family: 'Baloo 2', cursive;
            font-weight: 900;

          }
          .first--dd p{
                  margin-left: -44px;

          }
          .comment{
            margin-left: -65px;
          }

      .profile__grouped{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
      }
      .details__areas{
  margin-left: -50px;
      }
      .line{
        background: linear-gradient(48deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
        width: 2px;
        height: 100%;
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
#homess{
    border-top: none;
    border-bottom: none;
    border-right: none;
    border-left: 6px solid #F9711A;
    outline: none;
    box-shadow: 0px 1px 10px  #F9711A;
    background:#ABB0B8;

}

    </style>
  </head>

<body>
  <link rel="stylesheet" href="css__font__family\font.css">
  <section class="document__nav__side">

    <!-- ###############this is the navigators option############################## -->

<?php
$home__page="index.php";
 ?>
    <div class="document__navigators">
      <ul class="main__nav">
        <a href=<?php echo $home__page ?>> <li class="list--nav" id="homess"><img src="images\icons8_four_squares_24px.png" alt="Home__dropdown" class="img--id"><p >Home</p></li></a>
        <a href="#"> <li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="Document__dropdown"> <p>Document</p></li></a>
          <a href="#"> <ul class="sub__nav">
                <li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="Files__dropdown"> <p>Files</p></li>
              </ul></a>
      <a href="message\index.php"> <li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="Folders__dropdown"> <p>Message</p></li></a>
      <a href="#"> <li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="services__dropdown"> <p>Category</p></li></a>
      <a href="#"><li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="department__dropdown"> <p>Department</p></li></a>
          <a href="#"> <li class="list--nav"><img src="images\icons8_double_right_24px.png" alt="user Management__dropdown"> <p>User Management</p></li></a>
      </ul>
    </div>

    <!-- ##################this is the add item botton#################### -->
<a href="upload\index.php"><div class="New--bottom">
  <img src="images\icons8_files_100px.png" alt="add items bottom">
  <p>NEW DOC</p>
</div></a>


<!-- ######################## this is the setting option################################################ -->

<div class="setting--bottom">
  <p class="setting"><a href="#"><img src="images\icons8_settings_40px.png" alt="setting__link"><p> My Account</p></a> </p>
</div>
<p class="double_right"> <img src="images\icons8_double_left_24px.png" alt="opened nav"> </p>
  </section>

  <section class="main__content">
      <div class="upper__nav">

        <!-- #################### this is the header search####################################### -->

        <p class="nav__refference__titles"><?php echo "php here for ref doc"; ?></p>
       <form  action="search\search__process.php" method="post">
         <?php
       include 'search/search.php';
          ?>
       </form>
      </div>
<?php
$banner__img="images/DSC01060_1.JPG";
 ?>

      <!-- #####################this is the items area#################### -->
<div class="main__items">
  <!-- ##########################for each item here the class name is "card__files--contaner"################################# -->
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
  <div class="card__files--contaner">
    <!-- ########################### this the img banner card__files ############################### -->
    <img src="images\DSC01043_1.JPG"class="img__banner">
      <div class="Edit__rename">
        <button type="button" name="rename" class="Rename">View</button>
        <button type="button" name="edit" class="Edit">Edit</button>
      </div>
    </img>
        <div class="content__card">
          <?php echo "file name here"; ?>
        </div>
        <div class="download__bottum">
          <button type="download" name="download" id="download--btn">Download</button>
        </div>

  </div>
</div>
  </section>
  <section class="details">
    <!-- ###################### number 1 layer details ##################### -->
        <div class="first--dd">
     <h2>Details</h2>
     <p><?php echo "error message" ?></p>
        </div>
        <!-- ############## number 2 layer details################ -->
        <div class="comment">
          <?php echo "comment here" ?>
        </div>
          <!-- ############## number 3 layer details################ -->
          <?php
           $profile_logo ="images\icons8_lock_male_user_50px.png";
           ?>
          <div class="profile__grouped">
            <img src="<?php echo $profile_logo ?>" alt="profile_logo">
            <div class="line">
            </div>
            <img src="images\icons8_group_task_40px_1.png" alt="">
          </div>
            <!-- ############## number 4 layer details################ -->
<div class="details__areas">
  <p>location: <?php  ?></p>
  <p>owner:<?php  ?></p>
  <p>last modified:<?php  ?></p>
  <p>Create:<?php  ?></p>
  <p>size:<?php  ?></p>
  <p>stored:<?php  ?></p>
</div>
  </section>
</body>
