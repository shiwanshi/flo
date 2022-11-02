<?php
echo '<body style="background-color:white;

text-align:center;

font-family-sans-serif: "Poppins", sans-serif;
    font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;

"
>'; 
echo "<html><head>
<meta charset='utf-8'>
<title>Flo</title>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<meta content='Free HTML Templates' name='keywords'>
<meta content='Free HTML Templates' name='description'>


<link href='img/favicon.ico' rel='icon'>


<link rel='preconnect' href='https://fonts.gstatic.com'>
<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap' rel='stylesheet'>


<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>


<link href='lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>
<link href='lib/lightbox/css/lightbox.min.css' rel='stylesheet'>

<link href='css/style.css' rel='stylesheet'>
</head>

<body>
<!-- Topbar Start -->
<div class='container-fluid bg-primary py-3 d-none d-md-block'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6 text-center text-lg-left mb-2 mb-lg-0'>
                <div class='d-inline-flex align-items-center'>
                    <a class='text-white pr-3' href=''>FAQs</a>
                    <span class='text-white'>|</span>
                    <a class='text-white px-3' href=''>Help</a>
                    <span class='text-white'>|</span>
                    <a class='text-white pl-3' href=''>Support</a>
                </div>
            </div>
            <div class='col-md-6 text-center text-lg-right'>
                <div class='d-inline-flex align-items-center'>
                    <a class='text-white px-3' href=''>
                        <i class='fab fa-facebook-f'></i>
                    </a>
                    <a class='text-white px-3' href=''>
                        <i class='fab fa-twitter'></i>
                    </a>
                    <a class='text-white px-3' href=''>
                        <i class='fab fa-linkedin-in'></i>
                    </a>
                    <a class='text-white px-3' href=''>
                        <i class='fab fa-instagram'></i>
                    </a>
                    <a class='text-white pl-3' href=''>
                        <i class='fab fa-youtube'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class='container-fluid position-relative nav-bar p-0'>
    <div class='container-lg position-relative p-0 px-lg-3' style='z-index: 9;'>
        <nav class='navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0'>
            <a href='index.html' class='navbar-brand d-block d-lg-none'>
                <h1 class='m-0 display-4 text-primary'><span class='text-secondary'>f</span>LO!</h1>
            </a>
            <button type='button' class='navbar-toggler' data-toggle='collapse' data-target='#navbarCollapse'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse justify-content-between' id='navbarCollapse'>
                <div class='navbar-nav ml-auto py-0'>
                    <a href='index.php' class='nav-item nav-link active'>Home</a>
                    <a href='about.php' class='nav-item nav-link'>About</a>

                </div>
                <a href='index.php' class='navbar-brand mx-5 d-none d-lg-block'>
                    <h1 class='m-0 display-4 text-primary'><span class='text-secondary'>f</span>LO!</h1>
                </a>
                <div class='navbar-nav mr-auto py-0'>

                    <a href='gallery.php' class='nav-item nav-link'>Gallery</a>
                    <a href='logout.php' class='nav-item nav-link'>Logout</a>
                </div>
            </div>
        </nav>
    </div>
</div>
</html>";
$name= $_POST['name'];
 $age= $_POST['age'];
 $periodStAge= $_POST['stage'];
 $country= $_POST['country'];
 $city= $_POST['city'];
 $pincode= $_POST['pincode'];
 $bdate=date('Y-m-d', strtotime($_POST['bdate']));
 $start_date=date('Y-m-d', strtotime($_POST['start_date']));
 $end_date=date('Y-m-d', strtotime($_POST['end_date']));
 $user_name=$_POST['username'];
 $password= $_POST['password_new'];
 $conn = new mysqli('localhost', 'root', '', 'userdetails');
 if($conn->connect_error){
    die(-'Connection failed' .$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("insert into visitor(name, age, birthDate, periodStAge,username,password) values(?, ?, ?, ?,?,?)  \r\n");
    $stmt -> bind_param('sisiss', $name, $age, $bdate, $periodStAge,$user_name,$password);
    $stmt->execute();
    $stmt = $conn->prepare("insert into contact(vid, city, pincode, country) values(LAST_INSERT_ID(),?, ?, ?)  \r\n");
    $stmt -> bind_param('sis', $city, $pincode, $country);
    $stmt->execute();
    $stmt = $conn->prepare("insert into cycle(vid,start_date , end_date) values(LAST_INSERT_ID(),?, ?)  \r\n");
     $stmt -> bind_param('ss', $start_date , $end_date);
    
      $stmt->execute();
      $result=$conn->query("select * from cycle where vid=LAST_INSERT_ID()");
      while($rows=$result->fetch_assoc()){
        $start= new DateTime($rows['start_date']);
        $end= new DateTime($rows['end_date']);
        
      $interval = $start->diff($end)->format("%d");
       
      $approx = date_add($start,date_interval_create_from_date_string("28 days"));
      $approx_date = date_format($approx,"Y/m/d");
        $stmt = $conn->prepare("insert into predictiontable(vid, ApproxDate,Pduration) values(LAST_INSERT_ID(), ?, ? ) \r\n");
        $stmt -> bind_param('si', $approx_date , $interval);
        
        $stmt->execute();
    }
      

    echo '<div style="font-size:1.7em;margin-top: 94px; color:#F195B2; font-weight: bold;" > DATA STORED SUCCESSFULLY </div>';
    $stmt->close();
    $conn->close();
 }
 
 
 ?>