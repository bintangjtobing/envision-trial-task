<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drop icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Add Chemical Data Lists
                        <div class="page-title-subheading">
                            Add new chemical list data.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 my-3">
                <form @submit.prevent="AddChemical">
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
                                <input type="number" required step="0.0001" v-model="chemical.oralS"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                chemical: {},
            }
        },
        methods: {
            async AddChemical() {
                try {
                    let r = await axios.post('api/add-chemical-list', this.chemical)
                    this.$router.push('/chemical-data-lists');
                } catch (e) {

                }
            }
        },
    }

</script>
