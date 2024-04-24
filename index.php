<?php
      require_once 'db_connect.php';

      $sql = "SELECT * FROM events";
      $result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ItAcademy</title>
    <link href="images/icon1.png" rel="icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!--link href="css/bootstrap.min.css" rel="stylesheet" /-->
    <link href="css/styles.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <style>
       #carouselExampleIndicators {
        width : 100%;
        padding: 10px 30px 10px 30px;
        height: 80%;
    }
    </style>
  </head>
  <body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
      </symbol>
      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </symbol>
    </svg>
    <!--
        https://getbootstrap.com/docs/5.2/getting-started/introduction/
        https://bootswatch.com/ -- темы Bootstrap

    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="images/icon1.png" alt="Logo" width="30" height="26" class="d-inline-block align-text-top">
              &nbsp;&nbsp;<span class="text-dark myLogo">ItAcademy</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#products">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contacts">Register Child</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid bg-light">
        <div class="text-end">
          <button type="button" class="btn btn-outline-success m-2"><a class="nav-link" href="login.php">Login</a></button>
          <button type="button" class="btn btn-success"><a class="nav-link" href="signup.php">Sign up</a></button>
        </div>
      </div>

<!-- Carousel goes here -->
<?php
	// Array of image URLs
	$images = array(
		'https://go.psmj.com/hs-fs/hub/279002/file-2525282172-jpeg/Technology.jpeg',
		'https://media.licdn.com/dms/image/C4D12AQGGH-kASYkvCA/article-cover_image-shrink_720_1280/0/1623660324491?e=2147483647&v=beta&t=-YhqgCpz6HRApEHDml6SSkioOdK7bvCP9sLMuCixJ_k',
		'https://ats.org/wp-content/uploads/2020/04/Index-High-Tech-Future-2400x1374.jpg',
		'https://assets.weforum.org/editor/fljkaKvxWMu7Q0Kgvr7q1oqkQLL_8cjRa-MES0jPBYo.jpg'
	);
	?>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php for ($i = 0; $i < count($images); $i++) { ?>
			<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) { echo 'active'; } ?>"></li>
		<?php } ?>
	</ol>
	<div class="carousel-inner">
		<?php foreach ($images as $key=>$image) { ?>
			<div class="carousel-item <?php if ($key == 0) { echo 'active'; } ?>">
				<img class="d-block w-100" src="<?php echo $image; ?>" alt="Slide <?php echo $key; ?>">
			</div>
		<?php } ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>


      <hr id="about" class="my-3 container pt-4" />
      <div class="container my-4">
        <h2 class="text-center">About us</h2>
        <p>There isn’t a winning template to create a great About Us page. However, there are key components to make a convincing pitch with your brand story. You don’t need to outright say, but you should convey the mission of your business in your About Us copy. This is key for attracting talent, as well as leads that have Corporate Social Responsibility (CSR) goals. There’s no shame in admitting how your business strategy — or even your way of thinking — has changed since you began. In fact, these evolutions can improve the story you tell to website visitors.</p>
        <p>Every business has an origin story worth telling, and usually, one that justifies why you even do business and have clients. Some centennial enterprises have pages of content that can fit in this section, while startups can tell the story of how the company was born, its challenges, and its vision for the future. About pages are perfect spaces to talk about where you started, how you’ve grown, and the ideals that have helped your organization mature. Use these moments to show people that you're always ready to change and adapt to the needs of your industry.</p>
      </div>

      <hr id="products" class="my-3 container pt-4" />
      <div class="container my-4">
          <h2 class="text-center">Our courses</h2>
          <div class="row">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                      <img src="images/<?php echo $row['id'] ?>.png" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><? echo $row['id']. ". " .$row['title'] ?></h5>
                            <p class="card-text"><?= $row['description'] ?></p>
                        </div>
                    </div>
                  </div>
                <?php endwhile; ?>
            </div>
          </div>
      </div>

    <hr id="contacts" class="my-3 container pt-4" />
    <div class="container p-3">
        <h2 class="text-center">Register Child</h2>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2">
                <form action="register_child_process.php" method="post" class="row g-3">
                    <div class="col-md-12">
                        <label for="event_id" class="form-label">Event ID</label>
                        <input type="number" class="form-control" name="event_id" id="event_id" required>
                    </div>
                    <div class="col-md-12">
                        <label for="child_name" class="form-label">Child Name</label>
                        <input type="text" class="form-control" name="child_name" id="child_name" required>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-2 imgContact">
                <img src="images/register.jpg" alt="Contact" class="px-4" />
            </div> 
        </div>
        <hr />
      
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 myMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6490.396360145837!2d31.339909028102465!3d30.034215026284578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e901a09d581%3A0x2450ed2faf09f6f6!2siSteps%20Company!5e0!3m2!1sru!2s!4v1683729970632!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
    <div class="container-fluid bg-primary">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="images/icon1.png" alt="Logo" width="30" height="26" class="d-inline-block align-text-top">
          </a>
          <span class="text-muted" >&copy; <span id="year"></span> Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" title="icon" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" title="icon" href="https://www.instagram.com/natalia_plesca_dragancea/"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" title="icon" href="https://www.facebook.com/eUSMinformatica/"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </footer>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
  </body>
</html>
<?php 
$conn->close();
?>