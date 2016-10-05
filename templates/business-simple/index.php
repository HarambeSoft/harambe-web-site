<?php require_once("config.php"); ?>
<?php include("header.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://9to5google.files.wordpress.com/2015/07/maps-send-to-device.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Welcome to Harambe Software</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.pbs.org/wnet/nature/files/2016/06/harambe-22-1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>RIP Harambe</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Harambe Software');"></div>
                <div class="carousel-caption">
                    <h2>We make apps for living</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div id="about" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Harambe Software
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Our Goal</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our goal is to develop lightweight and useful mobile applications. We are working in collaboration with a team of nine engineers. For now we are developing for Android devices. </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Our Projects</h4>
                    </div>
                    <div class="panel-body">
                        <p>We are making a project for our Software Engineering class which is currently under development. We improve by sharing ideas and working together.  <a href="https://github.com/HarambeSoft/">Feel free to inspect our work.</a> </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> FLOSS</h4>
                    </div>
                    <div class="panel-body">
                        <p>We respect your freedom. As a result, we are making our applications free (as in freedom). We offer the best solutions for the community. Harambe Software is a company that you can trust. </p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div id="people" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Meet the Team</h1>
            </div>
            <?php
                require_once("person.php");
                foreach (People::get_people() as $person) {
                    include("person_view.php");
                }
            ?>   
        </div>
        <!-- /.row -->

        <hr>
        <!-- Call to Action Section -->
        <div id="contact" class="well">
            <div class="row">
                <div class="col-md-8">
                    <p> 
                        <a href="https://github.com/HarambeSoft/">GitHub</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Go Top</a>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>
