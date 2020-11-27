<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drop icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Chemical Data Lists
                        <div class="page-title-subheading">
                            See chemical list data.
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
                                    Chemical Data Profile
                                </div>
                                <div class="col-md-6 text-right">
                                    <router-link to="/new/chemical-data-lists" class="btn btn-primary">Add
                                        Chemical List
                                    </router-link>
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
                                <tr v-for="(chemical,key) in chemicals" :key="key">
                                    <td>{{key+1}}</td>
                                    <td>{{chemical.chemical_name}}</td>
                                    <td>{{chemical.formula}}</td>
                                    <td>{{chemical.oralR}}</td>
                                    <td>{{chemical.oralS}}</td>
                                    <td>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-primary"><i
                                                class="pe-7s-look btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-success"><i
                                                class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                chemicals: []
            }
        },
        mounted() {
            this.getChemicals()
        },
        methods: {
            // async getChemicals() {
            //     try {
            //         let r = await axios.get('api/chemicals')
            //         this.chemicals = r.data
            //     } catch (e) {

            //     }
            // },
            getChemicals() {
                axios.get("api/chemicals")
                    .then(response => {
                        this.chemicals = response.data;
                        console.log(this);
                    })
            }
        },
    }

</script>
