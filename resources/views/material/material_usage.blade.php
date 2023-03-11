@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Material Usage</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Builders</a
                            >
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);"
                            >Material</a
                            >
                        </li>
                        <li class="breadcrumb-item active">
                            Material Usage
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
                                Add Material Usage
                            </h4>

                            <form class="" action="#">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="project">Select Project</label>
                                        <select id="project" name="project" class="form-control">
                                            <option selected>Choose Project</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="material">Select Material</label>
                                        <select id="material" name="material" class="form-control">
                                            <option selected>Choose Material</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="quantity">Quantity</label>
                                        <input
                                            id="quantity"
                                            type="text"
                                            name="quantity"
                                            class="form-control"
                                            required
                                            placeholder="Quantity"
                                        />
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="udate">Usage Date</label>
                                        <input class="form-control" type="date" value="2011-08-19" name="udate" id="udate">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="p_price">Price per unit</label>
                                        <input
                                            id="p_price"
                                            type="number"
                                            name="p_price"
                                            class="form-control"
                                            required
                                            placeholder="price per unit auto filled"
                                        />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="tprice">Total price</label>
                                        <input
                                            id="tprice"
                                            type="number"
                                            class="form-control"
                                            required
                                            placeholder="Total Price auto filled"
                                            name="tprice"
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
