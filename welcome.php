<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="welcome.css">
</head>
<body>
    


    <!-- Nav Bar Part  -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Find My University</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reviews</a>
        </li>
      </ul>
      
      
      <button  type="button" class="btn btn-primary"> <?php echo "<h6>Welcome " . $_SESSION['username'] . "</h6>"; ?>  <a class="text-white" href="logout.php"> Logout</a></button>
    </div>
  </div>
</nav>

<!-- body part  -->



<section>
<div class="input-group mb-3 mx-auto w-50 mt-5">
  <input type="text" class="form-control" placeholder="Search Your Subject " aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">Search</span>
</div>
<div class="container w-75">
<!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN51jjEuDRdgP19e5KC4gbYNNXBsNebthQqtgpRxcN0wML1ISYAiRQo6hnVfTXOYeEh48&usqp=CAU" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">North South University</h5>
       
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://bizdatainsights.com/wp-content/uploads/2020/06/Brac-Uni.jpg" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Brac University</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyy2ZIQ5Sum32s8Ic8YHEf08pJOTiS0sIBisX6lcU0tZ3EaxSFRaTdpHA4jDdP_zzc-gI&usqp=CAU" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">Independent University Bangladesh</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://www.zooinfotech.com/wp-content/uploads/2018/12/est.jpg" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">East West University</h5>
        
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://scholarship-positions.com/wp-content/uploads/2013/03/Scholarship-for-US-Students-at-Southeast-University-in-China-2013.jpg" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">South East University</h5>
       
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://thefinancialexpress.com.bd/uploads/1649329316.jpg" class="card-img-top img1" alt="...">
      <div class="card-body">
        <h5 class="card-title">United International University</h5>
        
      </div>
    </div>
  </div>
</div> -->


    
    <div class="allWrapper">
        <header class="header" id="header">

        </header><!-- end of header -->

        <section class="quiz_section" id="quizeSection">
            <div class="container">
                <div class="row">
                    

                    <div class="col-sm-12">
                        <div class="quiz_content_area">
                            <h1 class="quiz_title text-white">Seclect Your Universities</h1>
    
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="1" value="1" checked="checked" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSN51jjEuDRdgP19e5KC4gbYNNXBsNebthQqtgpRxcN0wML1ISYAiRQo6hnVfTXOYeEh48&usqp=CAU" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> North South Universty</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://bizdatainsights.com/wp-content/uploads/2020/06/Brac-Uni.jpg" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> Brac University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://scholarship-positions.com/wp-content/uploads/2013/03/Scholarship-for-US-Students-at-Southeast-University-in-China-2013.jpg" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> South East University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->


                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://www.zooinfotech.com/wp-content/uploads/2018/12/est.jpg" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i>East West University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://thefinancialexpress.com.bd/uploads/1649329316.jpg" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i>United International University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyy2ZIQ5Sum32s8Ic8YHEf08pJOTiS0sIBisX6lcU0tZ3EaxSFRaTdpHA4jDdP_zzc-gI&usqp=CAU" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> Independent University Bangladesh</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="https://i2.wp.com/futrlaw.org/wp-content/uploads/2019/03/AIUB-Campus.jpg?fit=695%2C360&" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> American International University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-3">
                                    <div class="quiz_card_area">
                                        <input class="quiz_checkbox" type="checkbox" id="2" value="2" />
                                        <div class="single_quiz_card">
                                            <div class="quiz_card_content">
                                                <div class="quiz_card_icon">
                                                <img src="data:image/jpeg;base64,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" class="card-img-top img1" alt="...">
                                                </div><!-- end of quiz_card_media -->
        
                                                <div class="quiz_card_title">
                                                        <h3><i class="fa fa-check" aria-hidden="true"></i> Daffodil International University</h3>
                                                </div><!-- end of quiz_card_title -->
                                            </div><!-- end of quiz_card_content -->
                                        </div><!-- end of single_quiz_card -->
                                    </div><!-- end of quiz_card_area -->
                                </div><!-- end of col3  -->

                                <div class="col-sm-12 mb-5">
                                    <div class="quiz_next mb-5">
                                        <button class="quiz_continueBtn">Continue</button>
                                    </div><!-- end of quiz_next -->
                                </div><!-- end of col12 -->

                            </div><!-- end of quiz_card_area -->
                        </div><!-- end of quiz_content_area -->

                    </div><!-- end of col12 -->
                </div><!-- end of row -->
            </div><!-- end of container -->
        </section><!-- end of quiz_section -->
    </div><!-- end of allWrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    


</div>

</div>

</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>