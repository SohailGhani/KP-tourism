<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("event");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
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
            <ul><li><a href="Mysite.php">HOME</a></li>

            </ul>
</div>

<div id="content">

        
          <form method="post" action="" style="margin-top:100px;">
            <table width="1500px" align="center" bgcolor="blue">
<tr align="center">
<td colspan="2"><h2><b>LOGIN HERE </b></h2></td><tr><td>.</td></tr><tr><td>.</td></tr><tr><td>.</td></tr>
</tr>
<tr>
  <td align="right"><b>NAME:</b></td>  
<td><input type="text" name="name" placeholder="Enter name here" required></td>    
</tr> 
<tr>
  <td align="right"><b>PASSWORD:</b></td>  
<td><input type="password" name="password" placeholder="Enter password here" required></td>    
</tr> 
    <tr align="center">
  
<td colspan="4"><input type="submit" name="login" value="Login as an Admin" ></td>    
</tr>
    
</table>
    

</form>
    
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
<?php

 
if(isset($_POST['login'])) {
    
    $c_name=mysql_real_escape_string($_POST['name']);
    $c_password=mysql_real_escape_string($_POST['password']);
    

    $sel_c="select * from admin where password='$c_password' AND name='$c_name'";

    $run_c=mysql_query($sel_c);
    $check_customer=mysql_num_rows($run_c);
    
    if($check_customer==0) {
        
        echo "<script>alert('Password or Email is incorrect, Please try again')</script>";
    
    } 
    else {
        
        /*echo "<script>alert(' USER you are successfully logged in!!! ')</script>";*/
        
        $_SESSION['currentuser']=$c_name;
        header("location:adminEvent.php");
        

    }
}

    
    ?>