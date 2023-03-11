@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Contractor</h4>
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
                            Add Contractor
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
                                Add Vendor Details
                            </h4>

                            <form class="" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="name">Name</label>
                                        <input
                                            id="name"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Name"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="c_no">CA-No</label>
                                        <select id="c_no" name="c_no" class="form-control">
                                            <option selected>Choose CA-NO</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pnumber">Phone Number</label>
                                        <input
                                            id="pnumber"
                                            type="text"
                                            name="pnumber"
                                            class="form-control"
                                            required
                                            placeholder="Phone Number"
                                        />
                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="allote">Years of Allote</label>
                                        <input
                                            id="allote"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Location"
                                            name="allote"
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
