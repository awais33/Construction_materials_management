@extends('layouts/main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Project</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Agroxa</a
                            >
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);"
                            >Forms</a
                            >
                        </li>
                        <li class="breadcrumb-item active">
                            Add Project
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
                                Add Project Details
                            </h4>
                            <p class="text-muted m-b-30">
                                Parsley is a javascript form
                                validation library. It helps you
                                provide your users with feedback
                                on their form submission before
                                sending it to your server.
                            </p>
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
                                        <label for="inputState">Contractor</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="sdata">Starting Date</label>
                                        <input class="form-control" type="date" value="2011-08-19" name="sdate" id="sdate">
                                    </div>
                                </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sdata">Completion Date</label>
                                <input class="form-control" type="date" value="2011-08-19" name="cdate" id="cdate">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ebudget">Estimation Budget</label>
                                <input
                                    id="ebudget"
                                    type="text"
                                    name="ebudget"
                                    class="form-control"
                                    required
                                    placeholder="Budget"
                                />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="location">Location</label>
                                <input
                                    id="location"
                                    type="text"
                                    class="form-control"
                                    required
                                    placeholder="Location"
                                    name="location"
                                />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="City">Description</label>
                                <input
                                    id="city"
                                    name="city"
                                    type="text"
                                    class="form-control"
                                    required
                                    placeholder="City"
                                />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ptype">Project Type</label>
                                <input
                                    id="ptype"
                                    name="ptype"
                                    type="text"
                                    class="form-control"
                                    required
                                    placeholder="Select Project type"
                                />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dtype">Design type</label>
                                <input
                                    id="dtype"
                                    name="dtype"
                                    type="text"
                                    class="form-control"
                                    required
                                    placeholder="Design type"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                        <label for="description">Project size in Marhala</label>
                                        <input
                                            id="psize"
                                            name="psize"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Project Size"
                                        />
                                    </div>
                            <div class="form-group col-md-4">
                                        <label for="ptype">Project Type</label>
                                        <input
                                            id="ptype"
                                            name="ptype"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Select Project type"
                                        />
                                    </div>
                            <div class="form-group col-md-4">
                                        <label for="dtype">Design type</label>
                                        <input
                                            id="dtype"
                                            name="dtype"
                                            type="text"
                                            class="form-control"
                                            required
                                            placeholder="Design type"
                                        />
                                    </div>
                        </div>

                        <div class="form-group">
                            <label>Project Description</label>
                            <div>
                                            <textarea
                                                required
                                                class="form-control"
                                                rows="5"
                                            ></textarea>
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
