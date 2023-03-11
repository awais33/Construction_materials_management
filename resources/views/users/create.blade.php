@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Material</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Builders</a
                            >
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);"
                            >Forms</a
                            >
                        </li>
                        <li class="breadcrumb-item active">
                            Add Material
                        </li>
                    </ol>
                    <div
                        class="state-information d-none d-sm-block"
                    >
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">
                                Balance $ 2,317
                            </div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">
                                Item Sold 1230
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">
                                Add Material Details
                            </h4>
                            <form class="" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="uname">User Name *</label>
                                        <input
                                            id="uname"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="uname"
                                        />
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="role">Role *</label>
                                        <select id="role" name="role" class="form-control">
                                            <option selected>Choose Role</option>
                                            <option>User</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="email">Email *</label>
                                        <input
                                            id="email"
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            required
                                            placeholder="Email"
                                        />
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="password">Password</label>
                                        <input
                                            id="password"
                                            type="password"
                                            class="form-control"
                                            required
                                            placeholder="Location"
                                            name="password"
                                        />
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="phone">Phone No *</label>
                                        <input
                                            id="phone"
                                            type="text"
                                            name="phone"
                                            class="form-control"
                                            required
                                            placeholder="Phone"
                                        />
                                    </div>

                                </div>


                                <div class="form-group">
                                    <div>
                                        <button
                                            type="submit"
                                            class="btn btn-primary waves-effect waves-light"
                                        >
                                            Submit
                                        </button>
                                        <button
                                            type="reset"
                                            class="btn btn-secondary waves-effect m-l-5"
                                        >
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end page content-->
    </div>
    <!-- container-fluid -->

@endsection
