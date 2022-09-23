@extends('pengajuan::layouts.main')

@section('content')
    {{-- {{-- <!-- BEGIN: Content--> --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h2 class="content-header-title float-start mb-0">Data Pegawai</h2>
                                    <div class="breadcrumb-wrapper">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">User</a>
                                            </li>
                                            <li class="breadcrumb-item active">Data Pegawai</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>



                            <section id="basic-datatable">
                                <div class="row">
                                    <div class="col-12 mt-1">
                                        <div class="card">
                                            <div class="card-body "><button type="button" class="btn btn-primary"
                                                    data-bs-toggle="modal" data-bs-target="#editUser"><i
                                                        data-feather="plus"></i>
                                                    Tambah Pegawai
                                                </button>
                                            </div>
                                            <table class="datatables-basic table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>No</th>
                                                        <th>Nama Pegawai</th>
                                                        <th>Jabatan</th>
                                                        <th>Divisi</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>No HP</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td></td>
                                                        <td>1</td>
                                                        <td>Rizal</td>
                                                        <td>Staff Keuangan</td>
                                                        <td>Operasional</td>
                                                        <td>Rizalll</td>
                                                        <td>rizall@gmail.com</td>
                                                        <td>088888</td>
                                                        <td>
                                                            <a class="btn btn-icon btn-success "><span
                                                                    data-feather="check-square"></span></a>
                                                            <a class="btn btn-icon btn-danger"><span
                                                                    data-feather="x-square"></span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>

            <!-- END: Content-->

            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                    <div class="modal-content">
                        <div class="modal-header bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body pb-5 px-sm-5 pt-50">
                            <div class="text-center mb-2">
                                <h1 class="mb-1">Tambah Pegawai</h1>
                            </div>

                            <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12">
                                    <label class="form-label" for="nama_pegawai">Nama Pegawai</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="user"></i></span>

                                        <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control"
                                            placeholder="Masukkan nama anda" data-msg="Please enter your first name" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="pilih_jabatan">Jabatan</label>
                                    <select id="pilih_jabatan" name="pilih_jabatan" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Pilih Jabatan</option>
                                        <option value="Staff Travel">Staff Travel</option>
                                        <option value="Staff SDM dan Umum">Staff SDM dan Umum</option>
                                        <option value="Staff Keuangan">Staff Keuangan</option>
                                        <option value="Manager Travel">Manager Travel</option>
                                        <option value="Manager SDM dan Umum">Manager SDM dan Umum</option>
                                        <option value="Manager Keuangan">Manager Keuangan</option>
                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                        <option value="Direktur SDM dan Umum">Direktur SDM dan Umum</option>
                                        <option value="Direktur Keuangan ">Direktur Keuangan</option>
                                        <option value="Direktur Utama">Direktur Utama</option>
                                        <option value="Pengawas">Pengawas</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="pilih_divisi">Divisi</label>
                                    <select id="pilih_divisi" name="pilih_divisi" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Pilih Divisi</option>
                                        <option value="Divisi Operasional">Divisi Operasional</option>
                                        <option value="Divisi Keuangan">Divisi Keuangan</option>
                                        <option value="Divisi SDM dan Umum">Divisi SDM dan Umum</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Direksi">Direksi</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Email">Email</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="mail"></i></span>

                                        <input type="text" id="Email" name="Email"
                                            class="form-control modal-edit-tax-id" placeholder="abcd@gmail.com" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="no_telepon">No Telepon</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="smartphone"></i></span>

                                        <input type="text" id="no_telepon" name="no_telepon"
                                            class="form-control phone-number-mask" placeholder="+62" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Username">Username</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="user"></i></span>
                                        <input type="text" id="Username" name="Username"
                                            class="form-control modal-edit-tax-id" placeholder="Masukkan username" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="Password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i data-feather="lock"></i></span>
                                        <input type="text" id="Password" name="Password"
                                            class="form-control modal-edit-tax-id" placeholder="Masukkan password" />
                                    </div>

                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Simpan</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Batal
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->
        @endsection
