@extends('project::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>No</th>
                                            <th>No. Project</th>
                                            <th>Pemegang Project</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal Project</th>
                                            <th>Biaya</th>
                                            <th>Pendapatan</th>
                                            <th>Laba</th>
                                            <th>Presentase</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name"
                                            id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post"
                                            placeholder="Web Developer" aria-label="Web Developer" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                            placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                        <small class="form-text"> You can use letters, numbers & periods </small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date"
                                            placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary"
                                            placeholder="$12000" aria-label="$12000" />
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->

                {{-- <!-- Company Table Card -->
                <div class="col-lg-12 col-12">
                    <div class="card card-company-table">
                        <div class="card-body p-0">
                            <div class="card-body">
                                <h2 class="fw-bolder mb-75">Data Project Di Proses</h2>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-1">
                                    <button type="button" class="btn btn-outline-primary">Export</button>
                                </div>

                                <!-- Todo search starts -->
                                <div class="app-fixed-search d-flex align-items-center mx-0">
                                    <div class="sidebar-toggle d-block d-lg-none ms-1">
                                        <i data-feather="menu" class="font-medium-5"></i>
                                    </div>

                                    <div class="col-lg-1 d-flex align-items-center m-1">
                                        <label>Show</label>
                                        <select class="form-select" name="" id="">
                                            <option value="10">10</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>

                                    <div class="d-flex align-content-center justify-content-end">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i data-feather="search"
                                                    class="text-muted"></i></span>
                                            <input type="text" class="form-control" id="todo-search"
                                                placeholder="Search task" aria-label="Search..."
                                                aria-describedby="todo-search" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Todo search ends -->
                            </div>


                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Project</th>
                                        <th>Pemegang Project</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Project</th>
                                        <th>Biaya</th>
                                        <th>Pendapatan</th>
                                        <th>Laba</th>
                                        <th>Presentase</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>1</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 1</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-primary me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="monitor" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Technology</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">23.4k</span>
                                                <span class="font-small-2 text-muted">in 24 hours</span>
                                            </div>
                                        </td>
                                        <td>$891.2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">68%</span>
                                                <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>2</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 2</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-success me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="coffee" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Grocery</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">78k</span>
                                                <span class="font-small-2 text-muted">in 2 days</span>
                                            </div>
                                        </td>
                                        <td>$668.51</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">97%</span>
                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>3</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 3</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-warning me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="watch" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Fashion</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">162</span>
                                                <span class="font-small-2 text-muted">in 5 days</span>
                                            </div>
                                        </td>
                                        <td>$522.29</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">62%</span>
                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>4</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 4</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-primary me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="monitor" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Technology</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">214</span>
                                                <span class="font-small-2 text-muted">in 24 hours</span>
                                            </div>
                                        </td>
                                        <td>$291.01</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">88%</span>
                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>5</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 5</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-success me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="coffee" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Grocery</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">208</span>
                                                <span class="font-small-2 text-muted">in 1 week</span>
                                            </div>
                                        </td>
                                        <td>$783.93</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">16%</span>
                                                <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>6</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-warning me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="watch" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Fashion</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">990</span>
                                                <span class="font-small-2 text-muted">in 1 month</span>
                                            </div>
                                        </td>
                                        <td>$780.05</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">78%</span>
                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5>7</h5>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="fw-bolder">Nama 7</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar bg-light-warning me-1">
                                                    <div class="avatar-content">
                                                        <i data-feather="watch" class="font-medium-3"></i>
                                                    </div>
                                                </div>
                                                <span>Fashion</span>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder mb-25">12.9k</span>
                                                <span class="font-small-2 text-muted">in 12 hours</span>
                                            </div>
                                        </td>
                                        <td>$531.49</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="fw-bolder me-1">42%</span>
                                                <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-1 ">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/ Company Table Card --> --}}


                <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
