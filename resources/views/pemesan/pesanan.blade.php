@include('pemesan.layouts.head')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('pemesan.layouts.sidebar')
        <div class="layout-page">
            @include('pemesan.layouts.navbar')
            <div class="content-wrapper">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- jquery validation -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Pemesanan Tiket <small>Bus Primajasa</small></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form id="quickForm">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" id="" placeholder="Nama lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Telepon</label>
                                                <input type="number" name="telepon" class="form-control" id="" placeholder="Telepon">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Stasiun Awal</label>
                                                <input type="text" name="titik_jemput" class="form-control" id="" placeholder="Stasiun Awal">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tujuan</label>
                                                <input type="text" name="tujuan" class="form-control" id="" placeholder="Tujuan">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Berangkat</label>
                                                <input type="date" name="tanggal" class="form-control" id="">
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->
                            <div class="col-md-6">

                            </div>
                            <!--/.col (right) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            </div>
            @include('pemesan.layouts.foot')
        </div>
    </div>
</div>