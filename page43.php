<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="page27.css">
</head>
<body>

<?php

session_start(); 
$db = mysqli_connect("localhost","root", "", "addmission");

$name="Unnamed";

if(isset($_POST['submit'])){

if (empty($_POST["name"])) {$name = "Unnamed";} 
else {$name= $_POST["name"] ;}

date_default_timezone_set("America/New_York");
$d=strtotime("+10 Hours");
$date= date("d M Y h:i a", $d);

$catagory= $_POST["catagory"] ;
$title= $_POST["title"];
$detail= $_POST["detail"];
$img= $_POST["fileToUpload"];
$heading= $_POST["heading"];

  $sql="INSERT INTO notice( name, catagory, title, date, detail, img, heading ) VALUES('$name','$catagory','$title','$date','$detail','$img','$heading')";

  if (mysqli_multi_query($db, $sql)) {
    echo "<script>alert('New records created successfully')</script>";
  } else {
    echo "<script>alert('Sorry, No records created. Try again.')</script>";
  }
}

?>

<h3 style="text-align: center;">Writer Form</h3>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="Catagory">Catagory</label>
    <select id="Catagory" name="catagory">
      <option value="notice">Notice</option>
      <option value="result">Result</option>
      <option value="scholarship">Scholarship</option>
    </select>

    <label for="Title">Title</label>
    <input type="text" id="Title" name="title" placeholder="Your Title.." required>

    <label for="Details">Details</label>
    <textarea id="Details" name="detail" placeholder="Write details.." style="height:200px" required></textarea>

    <label for="Image">Image</label><br><br>
    <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>


    <label for="heading">Image heading</label>
    <input type="text" id="heading" name="heading" placeholder="Image heading.." required>

    <input type="submit" value="Submit" name="submit" >
  </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
<body>

<h2>CSS Buttons</h2>

<button>Default Button</button>
<a href="#" class="button">Link Button</a>
<button class="button">Button</button>
<input type="button" class="button" value="Input Button">

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=trycss_buttons_basic by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Feb 2018 17:05:42 GMT -->
</html>
