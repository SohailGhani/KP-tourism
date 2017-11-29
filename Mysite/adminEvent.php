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
            <ul>
            <li><a href="adminDestination.php">DESTINATION</a></li>
            <li><a href="adminEvent.php">EVENTS</a></li></ul>

            </ul>
</div>

<div id="content" style="margin-top:70px;">

        <table width="1200px" border="1px" align="center" style="color:white;">
          
          <tr>
              <td align="center">ID</td>
              <td align="center">Event Title</td>
              <td align="center">Event Vanue</td>
              <td align="center">Event Status</td>
              <td align="center">Event Description</td>
              <td align="center">Delete</td>
              <td align="center">Edit</td>
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
           
              <td align="center"><a href="delete.php?del=<?php echo $id;?>">DELETE</a></td>  
               <td align="center"><a href="edit.php?edit=<?php echo $id;?>">EDIT</a></td>
          </tr>
          <?php
          }
          ?>
      </table><br><br>        
<a href="insert.php" style="margin-left:700px;"><input type = "submit" name="submit" value = "insert New Event"></a>






    
</div>
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