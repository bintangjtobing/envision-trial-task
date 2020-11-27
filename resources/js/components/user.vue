<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>User Managements
                        <div class="page-title-subheading">
                            Control and manage your users. Be careful on credential status and users.
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
                            User Management
                        </div>
                    </div>
                    <div class="card-body">
                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(member, key) in members" :key="key">
                                    <td>{{key+1}}</td>
                                    <td>{{member.name}}</td>
                                    <td>{{member.email}}</td>
                                    <td>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-primary"><i
                                                class="pe-7s-look btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-success"><i
                                                class="pe-7s-pen btn-icon-wrapper"> </i></button>
                                        <button class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                    </td>
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
                members: []
            };
        },
        mounted() {
            this.loadUser();
        },
        methods: {
            loadUser() {
                axios.get("api/users")
                    .then(response => {
                        this.members = response.data;
                    })
            }
        }
    }

</script>
