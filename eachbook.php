<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="eachbook.css">
  <title>Document</title>
</head>

<?php $book_name =  $_GET['bookname'];
      $connec = mysqli_connect("localhost", "root", "","bookinfo") or die ("Could not connect: " . mysql_error());
      mysqli_query($connec, "SET CHARACTER SET utf8");
      mysqli_query($connec, "SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());

      $bookid = mysqli_query($connec, "SELECT book_id FROM `books` where `bookname` LIKE '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
      extract(mysqli_fetch_assoc($bookid)); // $book_id


      $writerquery = mysqli_query($connec, "SELECT writer FROM `books` where `bookname` like '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
      extract(mysqli_fetch_assoc($writerquery)); // $writer

      $summaryquery = mysqli_query($connec, "SELECT summary FROM `books` where `bookname` like '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
      extract(mysqli_fetch_assoc($summaryquery)); //$summary


?>
<body>
  <div class="wrapper">
    <div class="side">
      <img src="<?php echo "Images/" . $book_id . ".jpg"; ?>" height="600px" width="450px" alt="">
    </div>
    <div class="main">
      <center><h1 id="booknametitle"><?php echo $book_name; ?></h1></center>
      <center><h2>BY</h2></center>
      <center><h1 id="bookwriter"><?php echo $writer ;?></h1></center>
      <center>
      <p>"SUMMARY"</p>
      <p id="booksummary"><?php echo $summary ;?></p>
      </center>
        <center>
 <form  name="myForm" onsubmit="validateForm()" action = "review.php" method="POST" traget = "reviewframe">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
          </div>
          <br>
          <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
          </div>
          <br>
          <div><label>Give Your Rating:</label></div>
          <div>
          <ul name = "rating" class="list-inline rating-list">
            <li><i class="fa fa-star" title="Rate 5"></i></li>
            <li><i class="fa fa-star" title="Rate 4"></i></li>
            <li><i class="fa fa-star" title="Rate 3"></i></li>
            <li><i class="fa fa-star" title="Rate 2"></i></li>
            <li><i class="fa fa-star" title="Rate 1"></i></li>
          </ul>
          </div>
          <br>
          <div><label>Write a review?:</label></div>
          

          <textarea name="review" class="form-control" id="exampleInputPassword1" placeholder="Your message" name="" id="" cols="30" rows="10"></textarea>
          <br>
          <button class="btn" style="background-color: #FBD062; border: none; color: black;font-weight: 600 " type="submit">Send</button>

      </form>

      <iframe width="1080px" name= "reviewframe"  style= "border:none"></iframe>

    </div>
  </div>

    <script>
function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
    x = document.forms["myForm"]["email"].value;
    if (x == "") {
        alert("email must be filled out");
        return false;
    }

}
  </script>
  
</body>
</html>

    <!-- ----------------------------------------------- -->
