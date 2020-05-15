<!doctype html>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setrawcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
  <head>
    <title>
      medaves
    </title>
  </head>
  <body>

    <canvas id="sym" width="950" height="1500" style="">ghji</canvas>
    <script>
    var h=document.getElementById('sym');
    var ctx=h.getContext('2d');
    var grd=ctx.createLinearGradient(0,0,200,500);
    grd.addColorStop(0,"blue");
    grd.addColorStop(1,"white");
    ctx.fillStyle="cornflowerblue";
    ctx.beginPath();
    ctx.arc(450,700,200,0,2*Math.PI);
    ctx.fill();
 //   ctx.stroke();
    ctx.font="350px cursive";
    ctx.fillStyle="white";
    ctx.fillText("M",320,850);

    ctx.font="200px cursive";
    ctx.fillstyle="blue";
 //   ctx.fillText("by Darkcloud.",500,1000);
    function seT() {
       document.getElementById('div').style.width="0%";
  document.getElementById('div').style.height="0%";
  document.getElementById('div').style.height="700";
document.getElementById('sym').height="0";

  var x=document.createElement("INPUT");
  x.setAttribute("type","text");
 // document.body.appendChild(x);
    }
  setTimeout(seT,8000);


    </script>
    <div id="div">
     <k>  </k>loading..
    </div>
   <canvas id="ned" width="760"height="260"></canvas>
   <script>
     var r=document.getElementById('ned');
     var ctd=r.getContext('2d');
     ctd.beginPath();
     ctd.fillStyle="cornflowerblue";
     ctd.arc(450,120,120,0,3*Math.PI);
     ctd.fill();
   //  ctd.stroke();
ctd.font="80px cursive";
    ctd.fillStyle="blue";
    ctd.fillText("Medaves",500,250);
ctx.font="600px cursive";
    ctd.fillStyle="white";
    ctd.fillText("M",420,155);

  function show() {
    var form=document.forms['fom']['pas'].value;
    var fom=document.forms['fom']['pas'];

    fom.setAttribute("type","text");
    document.getElementById('pass').innerHTML=form;
    setTimeout(unshow,3000);
  }
    function unshow() {
      var fo=document.forms['fom']['pas'];
      fo.setAttribute("type","password");
    }
    setTimeout(unshow,15000);
     function regexp () {
     var def=document.forms['fom']['pas'].value;
     var re=/([0-9]+)[a-z]+/;
     var match;
     while((match=re.exec(def))!==null) {
         alert("password must contain special characters");
     }
   }

   </script>
    <div id="c">
    <p id="p">login</p>
    <form name="fom" onsubmit="regexp() " action="new.php"method="POST">
    <input type="email" name="email" placeholder="Email"/><span id="s"></span>
    <br>

    <input id="pass" type="password"placeholder="password" name="pas"/>
    <span id="s" onclick="show()">&#128065;</span><br>
    <input id="sub" type="submit"/>
    </form>
      <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
          $email=$_REQUEST['email'];

        }
      if(empty($_POST["email"])) {
        $emailErr ="Email is required";
        }
      else {
        $email =test_input($_POST["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          $emailErr="invalid mail";
        }
      }
      function test_input($data) {
        $data=trim($data);
        $data=stripslashes($data);
        htmlspecialchars($data);
        return $data;
      }
$mail_data=fopen("newfile.txt","w");
      $dataM=$_REQUEST["email"];
      fwrite($mail_data,$dataM);
      fclose($mail_data);
?>
    </div><br>
    <p id="d">Don't have an account? <a href="signup.php">Signup</a></p><br><br>
    <style>
    #d {
      font-size:200%;
      text-align:right;
      font-weight:bolder;
      font-family:cursive;
    }
   /** # {
      background-color:blue;
      border-bottom-left-radius:70%;
      border-bottom-right-radius:70%;
      padding-bottom:50%;
    }**/
    #s {
      margin-left:-3%;
      font-size:100%;
    }
    #c {
      margin-top:20%;
      border:2px solid blue;
      padding-top:10%;
      padding-bottom:20%;
      border-radius:7px;
      box-shadow:10px 10px 10px 10px lightgrey;
      width:85%;
      float: center;
      margin-left:6%;
    }
input[type=submit] {
      width:40%;
      border:hidden;
      padding:4%;
      border-bottom:2px solid grey;
      color:white;
      margin-top:18%;
      font-family:cursive;
      margin-left:26%;
      border-radius:7px;
      text-align:center;
      font-size:150%;
      background-color:#0099ff;
box-shadow: 0px 10px #cccccc;
}

    input[type=email] {
      width:80%;
      border:hidden;
      padding:2%;
      border-bottom:2px solid black;
      font-family:cursive;
      margin-left:6%;
      font-size:150%;
box-shadow: 0px 10px #cccccc;
}
input[type=password] {
      width:80%;
      border:hidden;
      padding:2%;
      border-bottom:2px solid black;
      margin-top:10%;
      font-family:cursive;
      margin-left:6%;
      font-size:150%;
box-shadow: 0px 10px #cccccc;
}

input[type=text] {
      width:80%;
      border:hidden;
      padding:2%;
      border-bottom:2px solid black;
      margin-top:10%;
      font-family:cursive;
      margin-left:6%;
      font-size:150%;
box-shadow: 0px 10px #cccccc;
}






#p {
  font-size:300%;
  text-align:center;
  font-family:cursive;

}

  @keyframes exc {
       0% {background-color:red;

            width:20%;}

         75% {background-color:cornflowerblue;

            width:90%;}
           100% {background-color:cornflowerblue;

            width: 100%;}
            }
      #div {
        margin-bottom:10;
        width:0%;
        height:10%;
        color: white;
        font-family:cursive;
        font-weight:bolder;
        margin-top:1%;
        margin-left:-1%;
        font-size:300%;
        animation-name:exc;
  background-color:cornflowerblue;
       animation-duration:5s;
       animation-delay:2s;
       animation-iteration-count:1;
       animation-timing-function:ease-out;
      }


    </style>
  </body>
</html>