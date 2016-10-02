<?php require_once("config.php"); ?>
<?php include("header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div id="about" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Modern Business
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Our Goal</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our goal is to develop lightweight and useful mobile applications. We are working in colloboration with our team of nine engineers. For now we are developing for Android devices. </p>
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
                        <p>We are making a project for Software Engineering lecture at Anadolu University. We are sharing ideas about project and making plans. </p>
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
                        <p>We respect your freedom. As a result of this we are making our applications free (as in freedom). We offer best solutions for the community. Harambe Software is a company that you can trust. </p>
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

<?php include("footer.php"); ?>
