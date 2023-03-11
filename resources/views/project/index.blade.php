@extends('layouts/main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box"><h4 class="page-title">Data Table</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Data Table</li>
                </ol>
                <div class="state-information d-none d-sm-block">
                    <div class="state-graph">
                        <div id="header-chart-1"></div>
                        <div class="info">Balance $ 2,317</div>
                    </div>
                    <div class="state-graph">
                        <div id="header-chart-2"></div>
                        <div class="info">Item Sold 1230</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end row -->
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    <div class="card-body"><h4 class="mt-0 header-title">Project List</h4>
                        <p class="text-muted m-b-30">DataTables has most features enabled by default, so all
                            you need to do to use it with your own tables is to call the construction
                            function: <code>$().DataTable();</code>.</p>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contractor</th>
                                <th>Starting Date</th>
                                <th>Completion Date</th>
                                <th>Budget</th>
                                <th>Location</th>
                                <th>City</th>
                                <th>Design</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col --></div><!-- end row -->
        <!-- end row --></div><!-- end page content--></div>
@endsection
