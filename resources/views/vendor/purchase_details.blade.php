@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Vendor</h4>
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
                            Add Vendor
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
                                        <label for="mname">Material Name</label>
                                        <input
                                            id="mname"
                                            name="mname"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Name"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="vendor">Vendor</label>
                                        <select id="vendor" name="vendor" class="form-control">
                                            <option selected>Select Vendor</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="pdate">Purchase date</label>
                                        <input class="form-control" type="date" value="2011-08-19" name="pdate" id="pdate">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="pquantity">Purchase Quantity</label>
                                        <input
                                            id="pquantity"
                                            type="number"
                                            name="pquantity"
                                            class="form-control"
                                            required
                                            placeholder="Purchase Quantity"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pprice">Purchase Price per unit</label>
                                        <input
                                            id="pprice"
                                            name="pprice"
                                            type="number"
                                            class="form-control"
                                            required
                                            placeholder="Location"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tprice">Total price</label>
                                        <input
                                            id="tprice"
                                            name="tprice"
                                            type="number"
                                            class="form-control"
                                            required
                                            placeholder="Total price auto filled"
                                        />
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label for="unit">Unit type</label>
                                        <select id="unit" name="unit" class="form-control">
                                            <option selected>Select unit</option>
                                            <option>...</option>
                                        </select>
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
