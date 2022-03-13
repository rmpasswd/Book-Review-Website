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
 <form  name="myForm"  action = <?php echo "review.php?bookname=" . $book_name ?> method="POST" target = "reviewframe">
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
          </div>
          <br>
          <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
          </div>
          <br>
          <div>
          <label>Give Your Rating:</label>
          <select name="rating" id="rate">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          </select><br><br>
          </div>
          <br>
          <div><label>Write a review?:</label></div>
          

          <textarea name="review" class="form-control" id="exampleInputPassword1" placeholder="Your message" name="" id="" cols="30" rows="10"></textarea>
          <br>
          <button onclick="validateForm()" class="btn" style="background-color: #FBD062; border: none; color: black;font-weight: 600 " type="submit">Send</button>

      </form>
      <?php

              $reviews = mysqli_query($connec, "SELECT review FROM `bookreview` where `bookname` LIKE '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
              $reviewuser = mysqli_query($connec, "SELECT Name FROM `bookreview` where `bookname` LIKE '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
              $rating = mysqli_query($connec, "SELECT star FROM `bookreview` where `bookname` LIKE '$book_name';") or die("Query failed, try again later". mysqli_error($connec));
              

              if (mysqli_fetch_assoc($rating) != null){

                extract(mysqli_fetch_assoc($reviewuser)); 
              echo "<p>$Name</p>";
                
                extract(mysqli_fetch_assoc($rating)); 
              echo "<p>Rating: $star</p>";

                extract(mysqli_fetch_assoc($reviews));               
              echo "<p>$review</p>";
              
              }


      ?>
      <iframe width="1080px" name= "reviewframe"  style= "border:none"></iframe>
    </center>
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
