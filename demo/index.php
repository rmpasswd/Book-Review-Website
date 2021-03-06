<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWorm</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <nav>
        <!---->
        <div class="navbar">
          <!-- <div class="logo"><a href="#">Tahmina Meem</a></div> -->
          <ul class="menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="#fiction">Fiction</a></li>
              <li><a href="#nonFiction">Non-fiction</a></li>
              <li><a href="#children">Children</a></li>
              <li><a href="#contact">Contact US</a></li>
              
          </ul>
          <div class="media-icons">
            <a href="https://www.facebook.com/profile.php?id=100009072027869"><i class="fab fa-facebook-f"></i></a>
            <a href="mailto:tahminameem1999@gmail.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/tahi09"><i class="fab fa-github"></i></a>
    
          </div>
        </div>
      </nav>
            
     <br>
     <br>
     <br>
     <br>
     <div class="hfcolor">

         <div class="container">
            <div class="row">
                <div class="col-4">
                    <img style="border-radius: 80%" src="./Images/ab.png" alt="">
                </div>
                <div class="col-8">
                    <h1 class="p-5" style="color: white">Bookworm</h1>
                </div>
            </div>
        </div>
     </div>
    <br><br>   
        <div id="carouselExampleControls" class="carousel slide bg-color" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="caroselImg">
                        <img  style="height: 800px;" src="./Images/c4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item">

                    <div class="caroselImg">
                        <img style="height: 800px;" src="./Images/c3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="caroselImg">
                        <img style="height: 800px;" src="./Images/c2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="caroselImg">
                        <img style="height: 800px;" src="./Images/c1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div id="fiction" class="container mt-5">
            <h2>Fiction</h2>

            <div class="row">
                
                <div class="col-4">
                    <div>
                        <!-- <a href="fictionReview1.html"> -->
                        <a href="./eachbook.php?bookname=1984" target='_blank'>
                            <img  style="height: 500px; width:350px; border-radius: 5px;" src="Images/3.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=The Cruel Prince" target='_blank'>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/5.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=The Mother"   target='_blank'>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/6.jpg" alt="">
                    </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                
                <div class="col-4">
                    <div>
                        <a href="./eachbook.php?bookname=???????????? ???????????? ??? ???????????? ????????????" target='_blank'>   
                            <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/10.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=?????????????????????" target='_blank'>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/8.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/fiction5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div id="nonFiction" class="container mt-5 pt-5">
            <h2>Non-Fiction</h2>

            <div class="row">
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=The Hill We Climb: An Inaugural Poem for the Country" target='_blank'>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/1.jpg" alt="">
                        </a>    
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=Dream Work" target='_blank'>   
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=????????????????????????????????? ??????????????? ???????????????" target='_blank'>   
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=????????????????????? ??????????????????" target='_blank'>   
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/7.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <a href="./eachbook.php?bookname=????????? ?????????" target='_blank'>   
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/9.jpg" alt="">
                        </a>
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/nf5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="children" class="container mt-5 pt-5">
            <h2>Children</h2>

            <div class="row">
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/a.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/b.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/c.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/d.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/g.jpg" alt="">
                    </div>
                </div>
                
                <div class="col-4">
                        <div>
                        <img style="height: 500px; width:350px; border-radius: 5px;" src="./Images/f.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
  <br>
  <br>
  
  <div id = "contact" class="container mt-5">
      <h1>Contact <span style="color: rgb(251, 208, 98);"> Us</span> </h1>
    <form>
        <div class="form-group">
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your name">
        </div>
        <br>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your email address">
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" id="exampleInputPassword1" placeholder="Your message" name="" id="" cols="30" rows="10"></textarea>
        </div>
        <br>
        <button class="btn" style="background-color: #FBD062; border: none; color: black;font-weight: 600 " type="submit">Send</button>
      
    </form>
  </div>
  <footer class="hfcolor">
    <div class="container mt-5 pt-5" >
        <div class="row main-footer">
            <h2>Browse Books</h2>

                <div class="col-md-3">
                    <ul>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Non-Fiction</a></li>
                        <li><a href="#">Children and YA Fiction</a></li>
                        <li><a href="#">Bengali language movement</a></li>
                        <li><a href="#">Festive Fiction</a></li>

                    </ul>
                </div>

                <div class="col-md-3">
                    <ul>
                        <li><a href="#">Shorot Rochonaboli</a></li>
                        <li><a href="#">Rabindranath Somogro</a></li>
                        <li><a href="#">Satyajit Ray</a></li>
                        <li><a href="#">Najrul Somogro</a></li>
                        <li><a href="#">Josimuddin</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="#">Parenting</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Poetry</a></li>
                        <li><a href="#">Science Fiction</a></li>
                        
                    </ul>
                </div>

                <div class="col-md-3">
                    <h3>Contact</h3>
                    <span><i class="fas fa-map-marker-alt"></i> Nobinagar, Savar</span><br><br>
                    <span><i class="fas fa-phone"></i> +8801759859649</span><br><br>
                    <span><i class="fas fa-envelope"></i> agdumbagdum@gmail.com</span><br>
                    
                </div>
               
            
            
        </div>
        
        <div class="row mt-3">
            <div class="col-md-12 copyright text-center">
                <p>Copyright@IIT, JU  2022</p>
            </div>
            
        </div>

        
    </div>
  </footer>
  
        

    <script type="text/javascript" src="../JavaScript/script.js"></script>

</div>



        <script src="script.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js
" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js
" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js
" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>