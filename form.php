<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/cf/ContactFrom_v4/index.html -->
<html lang="fa"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Contact V4</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="https://colorlib.com/etc/cf/ContactFrom_v4/images/icons/favicon.ico">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/animate.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/select2.min.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="./Contact V4_files/util.css">
    <link rel="stylesheet" type="text/css" href="./Contact V4_files/main.css">

    <meta name="robots" content="noindex, follow">
    <script type="text/javascript" async="" src="./Contact V4_files/analytics.js.download" nonce="4ce17dd3-cd96-4508-b8fc-1d4a673a8ea8"></script><script defer="" referrerpolicy="origin" src="./Contact V4_files/s.js.download"></script><script nonce="4ce17dd3-cd96-4508-b8fc-1d4a673a8ea8">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post">
<span class="contact100-form-title">
Test Form
</span>
            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Your Name</span>
                <input class="input100" type="text" name="name" placeholder="Enter your name">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Family</span>
                <input class="input100" type="text" name="family" placeholder="Enter your Family">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Username is required">
                <span class="label-input100">Username</span>
                <input class="input100" type="text" name="username" placeholder="Enter your Username">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" name="password" placeholder="Enter your Password">
                <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        <span>
                        Submit
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="dropDownSelect1"></div>

<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "farzad";
$obj_c = mysqli_connect(
    $server,
    $username,
    $password,
    $database
);


if(isset($_GET) && array_key_exists("delete", $_GET)){
    $query = "delete from account where id='{$_GET['delete']}'";
    $result = mysqli_query($obj_c, $query);
}

if(isset($_POST) && array_key_exists("name", $_POST) &&
    array_key_exists("family", $_POST) &&
    array_key_exists("username", $_POST) &&
    array_key_exists("password", $_POST)){
    $query = "insert into account (`firstname`, `lastname`, `username`, `password`) VALUES ('{$_POST['name']}','{$_POST['family']}','{$_POST['username']}','{$_POST['password']}')";
    $result = mysqli_query($obj_c, $query);

}
/*comment for PHP*/
$query = "select * from account";
$result = mysqli_query($obj_c, $query);
$result = mysqli_fetch_all($result, MYSQL_ASSOC);
?>

<div class="container">
    <div class="align-content-center col-md-6 col-lg-6">
        <div class="row">
            <div class="col ">
                Name
            </div>
            <div class="col ">
                Family
            </div>
            <div class="col ">
                Username
            </div>
            <div class="col align-self-end">
                Tool
            </div>
        </div>
        <?php
        foreach ($result as $row){
            echo "<div class='row'>
            <div class='col '>
                {$row['firstname']}
            </div>
            <div class='col '>
            {$row['lastname']}
            </div>
            <div class='col '>
                {$row['username']}
            </div>
            <div class='col align-self-end'>
                <button class='btn btn-primary' onclick='delete_row({$row['id']})'>
                        delete
                </button>
            </div>
        </div>";
        }

        ?>
    </div>
</div>
<form id="delete_form" style="display: none" method="get">
    <input type="hidden" id="delete_id" name="delete"/>
</form>

<script src="./Contact V4_files/jquery-3.2.1.min.js.download"></script>

<script src="./Contact V4_files/animsition.min.js.download"></script>

<script src="./Contact V4_files/popper.js.download"></script>
<script src="./Contact V4_files/bootstrap.min.js.download"></script>

<script src="./Contact V4_files/select2.min.js.download"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>

<script src="./Contact V4_files/moment.min.js.download"></script>
<script src="./Contact V4_files/daterangepicker.js.download"></script>

<script src="./Contact V4_files/countdowntime.js.download"></script>

<script src="./Contact V4_files/main.js.download"></script>

<script async="" src="./Contact V4_files/js"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

    function delete_row(id) {
        const delete_form = document.getElementById("delete_form");
        const delete_id = document.getElementById("delete_id");
        console.log(delete_id);
        delete_id.value = id;
        delete_form.submit();
        // window.location = "http://localhost/form_register/form.php?delete="+id;
    }
</script>
<script defer="" src="./Contact V4_files/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;719a0f5669109201&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>

</body></html>
