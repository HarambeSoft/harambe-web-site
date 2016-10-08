<?php require_once("config.php"); ?>
<?php include("header.php"); ?>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">+1
                <small>plus one</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="?page=index">Home</a></li>
                <li><a href="?page=index">Projects</a></li>
                <li class="active">+1</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Introduction</h3>
                </div>
                <div class="panel-body list-group">
                        <a href="?page=project&detail=title" class="list-group-item">Project Title</a>
                        <a href="?page=project&detail=definition" class="list-group-item">Project Definition</a>
                        <a href="?page=project&detail=scope" class="list-group-item">Project Scope</a>
                        <a href="?page=project&detail=application-areas" class="list-group-item">Application Areas</a>
                        <a href="?page=project&detail=background" class="list-group-item">Background</a>
                </div>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            <?php
            if(isset($_GET['detail'])) {
                $detail = $_GET['detail'];
                include("projects/plus-one/$detail");
            } else {
                include("projects/plus-one/index");
            }
            ?>
        </div>
    </div>
    <!-- /.row -->

<?php include("footer.php"); ?>