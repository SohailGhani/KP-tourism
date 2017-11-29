<html>
<head>
<title>Events</title>
 <link rel="stylesheet" href="Mysite.css" type="text/css"/>
 <link rel="stylesheet" type="text/css" href="CSS/800px.css" media="screen and (max-width: 800px)"/>

<head>
<body>

<div id="wrapper">
<div id="header">
            <div id="logo"><a href="Mysite.php"><img src="logo.png"></a></div>
            <input type="text box" placeholder="search here...">
            <ul><li><a href="Mysite.php">HOME</a>
            <ul><li><a href="about.html">ABOUT</a></li>
            </ul></li>
            <li><a href="destination.php">DESTINATION</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="downloads.html">DOWNLOADS</a></li>
            <li><a href="contacts.html">CONTACTS</a>
            <ul><li><a href="#">OFFICEINFO</a></li>
            <li><a href="#">EMAIL</a></li>
            <li><a href="#">SOCIALMEDIA</a>
            <ul><li><a href="#">FACEBOOK</a></li>
            <li><a href="#">TWITTER</a></li>
            <li><a href="#">INSTAGRAM</a></li>
            </li></ul></li>
            </li></ul>

            </ul>
</div>

<div id="content"><br><br><br>
<h1>Availebale events are</h1><br><br><br>

        <table width="1200px" border="1px" align="center" style="color:white;">
          
          <tr>
              <td align="center">ID</td>
              <td align="center">Event Title</td>
              <td align="center">Event Vanue</td>
              <td align="center">Event Status</td>
              <td align="center">Event Description</td>
          </tr>
          <?php
          mysql_connect("localhost","root","");
mysql_select_db("event");
          $query1 = "select * from eventsAll";
          $run = mysql_query($query1);
          while($row = mysql_fetch_array($run)){
               $id = $row['Id'];
               $name = $row['Name'];
              $vanue = $row['Vanue'];
              $status = $row['Status'];
                $desc= $row['Desciption'];
             
          ?>
          <tr>
            <td align="center"><?php echo  $id; ?></td>
            <td align="center"><?php echo $name; ?></td>
            <td align="center"><?php echo $vanue; ?></td>
            <td align="center"><?php echo  $status; ?></td>
            <td align="center"><?php echo  $desc; ?></td>
          </tr>
          <?php
          }
          ?>
      </table>
</div>

<html>
<head>
    <title>Event 1</title>
</head>
<body><br><br><br>
<form action="" method="post">
       
      <table align = "center" width="500px" border="1px" style="color:white;">
          <tr >
              <td  bgcolor = "wheat" colspan = "5" align ="center"><h1 style="color:black;">Register yourself for an Event</h1> </td>
          </tr>
          <tr>
              <td align="center">Name</td>
              <td><input type="text" name="name"></td>
          </tr>
          <tr>
              <td align="center">NIC</td>
              <td><input type="text" name="nic"></td>
          </tr>
           <tr>
              <td align="center">Phone #</td>
              <td><input type="text" name="phone"></td>
          </tr>
          
          <tr><td><a href="event1.php"><input type = "submit" name="submit" value = "Register"></a></td></tr>
          
      </table>
          
   </form>
</body>
</html>
<?php
 mysql_connect("localhost","root","");
mysql_select_db("event");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $phone = $_POST['phone'];
    
    $query = mysql_query ("insert into users (`name`,`nic`,`phone`) values ('$name','$nic','$phone')");
    header("location:Mysite.php");

      if($query){
         
      }                  
}

 ?>
<div id="footer">

<div id="share-buttons">
    
    <!-- Facebook -->
    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
        <img src="fb.png" alt="Facebook" />
    </a>
    
    
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
        <img src="lingdin.png" alt="LinkedIn" />
    </a>
    
    <!-- Pinterest -->
    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
        <img src="p.png" alt="Pinterest" />
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="twitter.png" alt="Twitter" />
    </a>


    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="googleplus.png" alt="Google" />
    </a>
    
    <!-- VK -->
    <a href="http://vkontakte.ru/share.php?url=https://simplesharebuttons.com" target="_blank">
        <img src="v.png" alt="VK" />
    </a>
    
    <!-- Print -->
    <a href="javascript:;" onclick="window.print()">
        <img src="print.png" alt="Print" />
    </a>
    
    <!-- Email -->
    <a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://simplesharebuttons.com">
        <img src="email.png" alt="Email" />
    </a>

</div>
<h2>Testimonial</h2><br>

    Thanks for this wonderful trip. I believe I learned a lot from the valuable company and comments of respected participants. I will send you my detailed feedback based on my initial ideas about these efforts i.e., conservation, promotion and sustainable use/tourism at archaeological sites in Pakistan”. (Dr Muhammad Arif, Islamic International University Islamabad, Participant of Swat Archaeological Tour)pants. I will send you my detailed feedback based on my initial ideas about these efforts i.e., conservation, promotion and sustainable use/tourism at archaeological sites in Pakistan”. (Dr Muhammad Arif, Islamic International University Islamabad, Participant of Swat Archaeological Tour)<br><br><br>
    <img src="user.jpg" alt="Testimonial" class="img-responsive">
    <br>Dr Muhammad Arif<br>Visited Swat Recently
   
</div>
</div>
<script type="text/javascript" src="Mysite.js"></script>
</body>
</html>