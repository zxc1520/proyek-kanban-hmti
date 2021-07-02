<div class="row">
    <div class="col-md-4">
        <div class="card card-border-primary">
            <div class="card-header">
                <div class="card-actions float-right">
                    <!-- <div class="dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> -->
                </div>
                <h5 class="card-title">Todo</h5>
            </div>
            <div class="card-body p-3">

                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked="">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Fasilitas</h4>
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked="">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Toleransi Waktu</h4>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Bantuan</h4>
                        <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Kuota</h4>
                        <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Pengajaran</h4>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
                    Add New
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Todo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <input type="text" id="detail" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-border-warning">
            <div class="card-header">
                <div class="card-actions float-right">
                    <!-- <div class="dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> -->
                </div>
                <h5 class="card-title">In Progress</h5>
            </div>
            <div class="card-body">

                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Pengumpulan tugas</h4>
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>LMS Sering Error</h4>
                        <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Kendala Jaringan</h4>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Terlambat</h4>
                        <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>

                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
                    Add New
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">On Process</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <input type="text" id="detail" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="col-12 col-lg-6 col-xl-3">
        <div class="card card-border-danger">
            <div class="card-header">
                <div class="card-actions float-right">
                    <div class="dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h5 class="card-title">Verifikasi</h5>
                <h6 class="card-subtitle text-muted">Nam pretium turpis et arcu. Duis arcu tortor.</h6>
            </div>
            <div class="card-body">

                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                        <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div>
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                        <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div>
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                        <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div>
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>

                <a href="#" class="btn btn-primary btn-block">Add new</a>

            </div> 
        </div>
    </div>  -->

    <div class="col-md-4">
        <div class="card card-border-success">
            <div class="card-header">
                <div class="card-actions float-right">
                    <!-- <div class="dropdown show">
                        <a href="#" data-toggle="dropdown" data-display="static">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal align-middle">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="19" cy="12" r="1"></circle>
                                <circle cx="5" cy="12" r="1"></circle>
                            </svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div> -->
                </div>
                <h5 class="card-title">Done</h5>
               
            </div>
            <div class="card-body">

                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Jarang Masuk Kelas</h4>
                        <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>LMS Lemot</h4>
                        <p>In hac habitasse platea dictumst. Curabitur at lacus ac velit ornare lobortis. Curabitur a felis tristique.</p>
                        <!-- <div class="float-right mt-n1">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="32" height="32" class="rounded-circle" alt="Avatar">
                        </div> -->
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Bantuan Linkaja</h4>
                        <p>Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis.</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <hr class="my-4">
                <div class="card mb-3 bg-light">
                    <div class="card-body p-3">
                        <div class="float-right mr-n2">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-label"></span>
                            </label>
                        </div>
                        <h4>Pengumpulan Tugas Kuliah</h4>
                        <p>Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada.</p>
                        <a class="btn btn-outline-primary btn-sm" href="#">View</a>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
                    Add New
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Done</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Detail</label>
                                    <input type="text" id="detail" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- End of modal -->
            </div>
        </div>
    </div>
    <div class="col-lg-18">
    
    </div>
</div>