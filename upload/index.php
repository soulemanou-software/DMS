
<style media="screen">
  *{
    margin: 0;
    padding: 0;
    font-family: 'Baloo 2', cursive;
    font-weight: 900;
    text-decoration: none;
  }
  body{
    margin: 0;
    padding:0 ;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #E1E1E1;

  }
  .main--contaner{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 450px;
    height: 650px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(98deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1), 0 32px 64px -38px rgba(0,0,0,10);
  }
  .content{
    display: flex;
    justify-content: center;
    align-items: center;
    background:linear-gradient(-98deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
    width: 435px;
    height: 635px;
    border: none;
    border-radius: 10px;
  }
.main--form{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background:#fff;
  width: 425px;
  height: 625px;
  border: none;
  border-radius: 10px;
}
.main--form input[type="text"]{
  width: 350px;
  height: 40px;
  border: none;
  border-radius: 10px;
  background:#E1E1E1;
}
.main--form input[type="text"]:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 10px  #6D9DEF;
}
.main--form input[type="submit"]{
  width: 250px;
  height: 30px;
  border: none;
  border-radius: 10px;
  color: #fff;
  background:linear-gradient(398deg ,#319197, #F9711A,#D03224,#AE022E,#902447,#477885,#319197);
  font-size: 20px;
}
.main--form input[type="submit"]:focus{
  outline: none;
  border-color: #6D9DEF;
  box-shadow: 0px 1px 10px  #6D9DEF;
}
.down__content{
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  font-size: 15px;

}
.down__content .ps{
  margin-right:85px;
  font-size: 14px;
    margin-bottom: 25px;
}
.browser{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: 2px dotted black;
  border-radius: 10px;
  width: 350px;
  height: 320px;
  margin-bottom: 10px;
}
.down__content .ps--img{
  font-size: 14px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
margin-bottom: 25px;
}
.main--form .doc{
  font-size: 25px;
  margin-bottom: 25px;
}
.ps--img img{
  width: 20px;
  height: 20px;
}
.img__upload{
  width: 150px;
  height: 150px;
}
a{
  font-size: 30px;
}
.doc{
  margin-top: -8px;
}
.title{
    margin-left: -310px;
}
</style>
  <link rel="stylesheet" href="css__font__family\font.css">
<div class="main--contaner">

    <div class="content">
      <form class="main--form" action="upload__process.php" method="post">
        <p class="doc">Add Document</p>
        <p class="title">Title</p>
        <input type="text" name="" value="" placeholder="Title Here"><br>
        <div class="browser">
        <img src="../images\icons8_upload_64px.png" alt="upload__image" class="img__upload">
          <p><a href="#">Browse Files</a></p>
        </div>
        <div class="down__content">
          <p class="ps">accepted File: PDF,JPG,Zip,png,</p>
          <p class="ps--img"><img src="../images\icons8_protect_24px.png" alt="">Secured</p>
        </div>
        <input type="submit" name="submit" value="Upload Now">
      </form>


    </div>
</div>
