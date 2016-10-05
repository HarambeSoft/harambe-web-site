<?php require_once("config.php"); ?>
<?php include("header.php"); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Contact</h1>
            <ol class="breadcrumb">
                <li><a href="?page=index">Home</a>
                </li>
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1532.289553159518!2d30.53148692612151!3d39.81643199483466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3fd651b06c63%3A0x588a36c4fd0d8dd1!2zQW5hZG9sdSDDnG52LjIgRXlsw7xsIEthbXDDvHPDvA!5e0!3m2!1sen!2sus!4v1475701742999"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                İki Eylül kampüsü<br>Eskişehir/Türkiye<br>
            </p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Phone">P</abbr>: 123-456-789</p>
            <p><i class="fa fa-envelope-o"></i> 
                <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">contact@harambesoftware.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i> 
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="https://github.com/HarambeSoft"><i class="fa fa-github-square fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->


<?php include("footer.php"); ?>