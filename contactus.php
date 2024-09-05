
<!DOCTYPE html>
<html>
 
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  
    <link rel="stylesheet"
          href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet"
          href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
          href=
"contact.css" />
</head>
 
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="logo2.png" alt="logo" style="height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="aboutus.html">About Us</a>
          </li>
        
        </ul>
    
      </div>
    </div>
  </nav>
    <section id="last">
        
        <!-- heading -->
        <div class="full">
        <?php
        
if(isset($POST["submit"])){
    $hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
    echo "hello";

 $sql = "INSERT INTO contact(name,email,message) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$name, $email, $message);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>message sent successfully.</div>";
            }else{
                die("Something went wrong");
            }
        }
?>

	
            <h3>Drop a Message</h3>
 
            <div class="lt">
 
                <!-- form starting  -->
                <form class="form-horizontal" action="contactus.php" method="post"
                      >
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- name  -->
                            <input type="text" class="form-control"
                                   id="name" placeholder="NAME"
                                   name="name" value="" />
                        </div>
                    </div>
 
                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- email  -->
                            <input type="email" class="form-control"
                                   id="email" placeholder="EMAIL"
                                   name="email"
                                value="" />
                        </div>
                    </div>
 
                    <!-- message  -->
                    <textarea class="form-control" rows="10"
                              placeholder="MESSAGE" name="message">
            </textarea>
 
                    <button class="btn btn-primary send-button"
                            id="submit" name="submit" value="SEND">
                        <i class="fa fa-paper-plane"></i>
                        <span class="send-text">SEND</span>
                    </button>
                </form>
                <!-- end of form -->
            </div>
 
            <!-- Contact information -->
            <div class="rt">
                <ul class="contact-list">
                    <li class="list-item">
                        <i class="fa fa-map-marker fa-1x">
                            <span class="contact-text place">
                                your address
                            </span>
                        </i>
                    </li>
 
                    <li class="list-item">
                        <i class="fa fa-envelope fa-1x">
                            <span class="contact-text gmail">
                                <a href="mailto:yourmail@gmail.com"
                                   title="Send me an email">
                                    email@gmail.com</a>
                            </span>
                        </i>
                    </li>
 
                    <li class="list-item">
                        <i class="fa fa-phone fa-1x">
                            <span class="contact-text phone">
                                (033) 12345678
                            </span>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
   
          
</body>
</html>