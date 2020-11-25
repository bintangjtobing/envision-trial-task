<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Data previous results
                        <div class="page-title-subheading">
                            See the latest and all data that you inserted in this platform.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            Previous Results
                        </div>
                    </div>
                    <div class="card-body">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Filename</th>
                                    <th>Children</th>
                                    <th>Adult</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-primary"><i
                                                class="pe-7s-look btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-success"><i
                                                class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Filename</th>
                                    <th>Children</th>
                                    <th>Adult</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
