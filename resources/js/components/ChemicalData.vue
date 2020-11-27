<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="AddChemical" tabindex="-1" role="dialog" aria-labelledby="AddChemical"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Chemical</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="AddChemical">
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Chemical Name</label>
                                        <input type="text" required v-model="chemical.name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Chemical Formula</label>
                                        <input type="text" required v-model="chemical.formula" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Oral Slope Factor (r)</label>
                                        <input type="number" required step="0.00001" v-model="chemical.oralR"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Oral Reference Dose (RfD)</label>
                                        <input type="number" required step="0.00001" v-model="chemical.oralS"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    Previous Results
                                </div>
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#AddChemical" class="btn btn-primary">Add
                                        Chemical List
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Chemical Name</th>
                                    <th>Chemical Formula</th>
                                    <th>Oral Slope Factor (r)</th>
                                    <th>Oral Reference Dose (RfD)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(chemical, key) in chemicals" :key="key">
                                    <td>{{key+1}}</td>
                                    <td>{{chemical.chemical_name}}</td>
                                    <td>{{chemical.formula}}</td>
                                    <td>{{chemical.oralS}}</td>
                                    <td>{{chemical.oralR}}</td>
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
                                    <th>Chemical Name</th>
                                    <th>Chemical Formula</th>
                                    <th>Oral Slope Factor (r)</th>
                                    <th>Oral Reference Dose (RfD)</th>
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
<script>
    import Axios from 'axios'
    export default {
        data() {
            return {
                chemical: {},
                chemicals: [],
                alert: {
                    visibility: false,
                    message: '',
                    type: '',
                }
            }
        },
        beforeMount() {
            this.getChemicals()
        },
        methods: {
            async getChemicals() {
                try {
                    let r = await axios.get('api/chemicals')
                    this.chemicals = r.data
                } catch (e) {

                }
            },
            async AddChemical() {
                try {
                    let r = await Axios.post('api/add-chemical-list', this.chemical)
                    this.chemicals.push(r.data)
                    this.chemical = {}
                    this.alert = {
                        visibility: true,
                        message: 'Chemical has been success',
                        type: 'success'
                    }

                } catch (error) {
                    this.alert = {
                        visibility: true,
                        message: 'Chemical has been fail',
                        type: 'error'
                    }
                }
            }
        },
    }

</script>
