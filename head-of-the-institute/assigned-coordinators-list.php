<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Assigned Co-ordinators List
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="#">Assign Coordinators</a></li>
            <li class="active">Assigned Students to Co-ordinators</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SI.No</th>
                                        <th>Student Name</th>
                                        <th>Registration ID</th>
                                        <th>MCIID</th>
                                        <th>Coordinator Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs mb-5"><i class="fa fa-edit mr-5"></i>Edit</a>
                                            <a href="#" class="btn btn-danger btn-xs mb-5"><i class="fa fa-trash mr-5"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs mb-5"><i class="fa fa-edit mr-5"></i>Edit</a>
                                            <a href="#" class="btn btn-danger btn-xs mb-5"><i class="fa fa-trash mr-5"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>xxxxxxx</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs mb-5"><i class="fa fa-edit mr-5"></i>Edit</a>
                                            <a href="#" class="btn btn-danger btn-xs mb-5"><i class="fa fa-trash mr-5"></i>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php'); ?>