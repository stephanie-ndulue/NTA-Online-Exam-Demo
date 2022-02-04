<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Feedback - NTA Online Exam</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>

<body>
<!--nav section-->
<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="image/Header-logo-NTA-transparent.png" width="70" height="50" class="d-inline-block align-top" alt=""> NTA Online Exam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-lg-10">
                    <li class="nav-item ">
                        <button><a class="nav-link" href="index.php">HOME</a></button>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

<div class="bg1"><br><br><br><br>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 panel" style="min-height:430px;">
<h2 align="center" style=" color:#c55617">SEND A FEEDBACK OR REPORT A PROBLEM</h2>
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

</div><div class="col-md-1"></div></div>

<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text"> <br />   

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email address" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row--> <br>

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write here..."></textarea>
</div> <br>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</div><!--container end-->


<!--Footer-->
<div class="footer text-center" >
        <div class="text-center p-3"style="background-color:#c55617, color:white;" >
            © 2021 Copyright: NTA - Nigerian Television Authority
        </div>
    </div>
</body>
</html>
