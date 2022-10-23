<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous" />

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <!-- my css -->
    <link href="style.css" rel="stylesheet" />

    <title>WA GENERATOR</title>
    <link rel="shortcut icon" href="img/ANICONB.png" type="image/x-icon" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#home">Adham Nugraha</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i>Menu</button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <section id="input" >
      <h4 class="text-center" style="padding-top: 2rem;">Generate API Whatsapp</h4>
      <div class="generate position-absolute top-50 start-50 translate-middle">
        <div class="container">
          <form action="" method="post">
            <div class="row">
              <div class="col-sm-8">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">+62</span>
                  <input class="form-control" type="text" name="nomor" placeholder="Masukan Nomor" aria-label="default input example" aria-describedby="basic-addon1" value="<?=isset($_POST['nomor']) ? $_POST['nomor'] : ''?>">
                </div>
              </div>
              <div class="col-sm-4 ">
                
              <button type="submit"  class="btn btn-sm btn-primary">Generate</button>
                <button type="reset" class="btn btn-sm btn-danger">Reset</button>
              </div>
            <div class="row">
              <div class="col-sm-12">              
                <a href="https://wa.me/62 <?php echo ($_POST['nomor']) ?>"><button type="button" class="btn btn-outline-success">GO TO WA.ME</button></a>
              </div>
            </div>   
          </form> 
          </div>
        </div>
      </div>
		</section>
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script type="text/javascript">
      $(function () {
        $(".pop").on("click", function () {
          $(".imagepreview").attr("src", $(this).find("img").attr("src"));
          $("#imagemodal").modal("show");
        });
      });
    </script>

    <script>
      AOS.init({
        once: true,
        duration: 900,
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>

    <script>
      gsap.registerPlugin(TextPlugin);
      gsap.to(".lead", { duration: 3, delay: 1.5, text: "Junior Web Developer | Graphic Designer" });
      gsap.from(".navbar ", { duration: 1, y: -50, opacity: 0 });
      gsap.from(".jumbotron img", { duration: 1, opacity: 0, delay: 0.5 });
      gsap.from(".display-4", { duration: 1, x: -50, opacity: 0, delay: 1, ease: "back" });
    </script>

  </body>
</html>

	