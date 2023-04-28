@extends('Dashboard.layout.layout')

@section('content')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 mt-4" >EMPLOYEES RECORDS</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam sit reiciendis nisi. 
            Ad recusandae impedit alias libero unde! Delectus rem officiis ad sapiente tempora. 
            Cupiditate modi numquam accusamus aut harum? </p>
        <div class="d-sm-flex align-items-center
                justify-content-between mb-4">
            <a href="/create" class="d-none d-sm-inline-block btn
                    btn-sm btn-primary shadow-sm"><i class="fas
                        fa-download fa-sm text-white-50"></i>
                Add new employee</a>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">RECORDS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>firstname</th>
                                <th>lastname</th>
                                <th>Email Address</th>
                                <th>Quarter</th>
                                <th>Region</th>
                               
                            </tr>
                        </thead>
                       
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

@stop