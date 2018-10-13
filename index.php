<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Bootstrap UI Kit">
  <meta name="keywords" content="ui kit">
  <meta name="author" content="UIdeck">

  <title>Headers - Helium Bootstrap 4 UI Kit</title>

  <!-- CSS Files -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/style.css"

  <!-- Fonts icons -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
  <!-- Page Wrapper Start -->
  <div class="wrapper">
    <!-- Content Area Start -->
    <div id="content">
      <div class="container-fluid">
        <!-- sliders -->
        <div id="sliders">
          <div class="full-width">
            <!-- light slider -->
            <div id="light-slider" class="carousel slide">
              <div id="carousel-area">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <img src="img/slider/bg-1.jpg" alt="">
                      <div class="carousel-caption">
                        <h3 class="slide-title animated fadeInDown"><span class="text-primary">Helium </span> - Bootstrap 4 UI Kit</h3>
                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui.
                          Etiam rhoncus</h5>
                        <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Get Started</a>
                        <a href="#" class="btn btn-lg btn-common animated fadeInUp">Learn More</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/slider/bg-2.jpg" alt="">
                      <div class="carousel-caption">
                        <h3 class="slide-title animated fadeInDown"><span class="text-primary">Cutting-edge</span> Features</h3>
                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui.
                          Etiam rhoncus</h5>
                        <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Download Now</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/slider/bg-3.jpg" alt="">
                      <div class="carousel-caption">
                        <h3 class="slide-title animated fadeInDown"><span class="text-primary">100+ </span> UI Blocks & Components</h3>
                        <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui.
                          Etiam rhoncus</h5>
                        <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Get Started</a>
                        <a href="#" class="btn btn-lg btn-common animated fadeInUp">Download</a>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                    <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                    <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End sliders -->
        <div class="row">
          <div class="col-md-6 offset-4">
            <h4 class="d-inline">Company Name//</h4>
            <h4 class="blink_me d-inline">This Will Blink</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form>
              <h4 class="center">Personal Details</h4>
              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label required">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name" maxlength="50"  onkeypress="return isAlpha(event)">
                </div>
              </div>
              <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label required">DOB</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="dob" placeholder="DOB"  maxlength="10" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="blogurl" class="col-sm-2 col-form-label required">Gender</label>
                <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked="true">
                    <label class="form-check-label" for="language">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                    <label class="form-check-label" for="language">Female</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="contactno" class="col-sm-2 col-form-label required">Contact No</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Contact No"  maxlength="20" onkeypress="return isNumber(event)">
                </div>
              </div>
              <div class="form-group row">
                <label for="Email" class="col-sm-2 col-form-label required">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email"  maxlength="60">
                </div>
              </div>
              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label required">Marital Status</label>
                <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="single" name="status" value="single" checked="true">
                    <label class="form-check-label" for="language">Single</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="married" name="status" value="married" text="Married">
                    <label class="form-check-label" for="language">Married</label>
                  </div>
                </div>
              </div>
              <div id='weddingannivrow' class="form-group row wed-status">
                <label for="wedding_anniversary" class="col-sm-2 col-form-label">Wedding Anniversary</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="wedding_anniversary" name="wedding_anniversary" placeholder="Wedding Anniversary"  maxlength="10" readonly>
                </div>
              </div>
              <h4 class="center">Social Media Link</h4>
              <div class="form-group row">
                <label for="facebookurl" class="col-sm-2 col-form-label">Facebook Url</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="facebookurl" id="facebookurl" placeholder="Facebook URL"  maxlength="300">
                </div>
              </div>
              <div class="form-group row">
                <label for="twitterurl" class="col-sm-2 col-form-label">Twitter URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="twitterurl" name="twitterurl" placeholder="Twitter URL" maxlength="300">
                </div>
              </div>
              <div class="form-group row">
                <label for="linkedinurl" class="col-sm-2 col-form-label">LinkedIn URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="linkedinurl" id="linkedinurl" placeholder="LinkedIn URL" maxlength="300">
                </div>
              </div>
              <div class="form-group row">
                <label for="websiteurl" class="col-sm-2 col-form-label">Website URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="websiteurl" id="websiteurl" placeholder="Website URL" maxlength="300">
                </div>
              </div>
              <div class="form-group row">
                <label for="blogurl" class="col-sm-2 col-form-label">Blog URL</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="blogurl" id="blogurl" placeholder="Blog URL" maxlength="300">
                </div>
              </div>
              <h4 class="center">Online Contest</h4>
              <div class="form-group row">
                <label for="blogurl" class="col-sm-2 col-form-label required">Language</label>
                <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="english" name="language" value="english" checked="true">
                    <label class="form-check-label" for="language">English</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tamil" name="language" value="tamil">
                    <label class="form-check-label" for="language">Tamil</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="hindi" name="language" value="hindi">
                    <label class="form-check-label" for="language">Hindi</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject / Title Name"  maxlength="300">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-12">
                  <textarea class="form-control" name="article" rows="20" id="article"  maxlength="2000">
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" onclick="return validate()">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>


    </div>
  </div>
  <!-- Content Area End -->
  <!-- Page Wrapper End -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
  <script src="js/home.js"></script>
</body>
</html>