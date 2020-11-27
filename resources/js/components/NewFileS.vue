<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>New File
                        <div class="page-title-subheading">
                            Create your chemical new data.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row sticky-top" style="top: 55px !important;">
                <div class="col-lg-12 col-md-12">
                    <div class="main-card my-3 card">
                        <div class="card-body sticky-top">
                            <div class="progress-bar-animated-alt progress sticky-active-class">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="myBar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form @submit.prevent="addNewFile" method="POST">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Create File Name</h5>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Filename</label>
                                            <input required id="exampleEmail55" placeholder="Filename here"
                                                v-model="file.name" type="text" class="form-control"
                                                :class="fileErrors.name ? 'border-danger':''">
                                            <span class="text-danger"
                                                v-if="fileErrors.name">{{fileErrors.name.join(',') || ''}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword22">Description</label>
                                            <textarea class="form-control" v-model="file.desc" cols="30" rows="10"
                                                placeholder="Description here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Chemical Profile</h5>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <label for="">Chemical</label>
                                            <select v-model="file.chemicalid" required id=""
                                                class="form-control custom-select">
                                                <option></option>
                                                <option v-for="(chemical, key) in chemicals" :key="key"
                                                    :value="chemical.id">{{chemical.chemical_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <form @submit.prevent="addChemicalData">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="">Con. in Soil</label>
                                                <input required type="number" step="1" v-model="file.CiS"
                                                    class="form-control" placeholder="mg/Kg">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="">Con. in Groundwater</label>
                                                <input required type="number" step="0.01" v-model="file.CiG"
                                                    class="form-control" placeholder="mg/L">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="">Con. in Surface Water</label>
                                                <input required type="number" step="0.01" v-model="file.CiSW"
                                                    class="form-control" placeholder="mg/L">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit" class="btn btn-primary">Add to list</button>
                                    </div>
                                </form>
                                <hr>
                                <div class="form-row">
                                    <table class="table">
                                        <thead>
                                            <tr style="background-color:#3ac47d; color:#fff;">
                                                <th>#</th>
                                                <th>Chemical</th>
                                                <th>con. in soil (mg/Kg)</th>
                                                <th>Ground Water (mg/L)</th>
                                                <th>con. in surface (mg/L)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(chemical, key) in chemicaldatas" :key="key">
                                                <th scope="row">{{key+1}}</th>
                                                <th>{{chemical.chemical ? chemical.chemical.chemical_name : ''}}</th>
                                                <th>{{chemical.CiS}}</th>
                                                <th>{{chemical.CiG}}</th>
                                                <th>{{chemical.CiSW}}</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Human Impact</h5>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="">Weight on Human Risk (w)</label>
                                            <input required type="number" step="0.5" v-model="humanimpacts.wohr"
                                                placeholder="1.0" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="">Area of Soil (Shallow (0-0.2 m) contamination
                                                over)</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.aos"
                                                            type="radio" value="0" class="form-check-input"> Small
                                                        area
                                                        (&lt;
                                                        50m<sup>
                                                            2</sup>) with dense groundcover</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.aos"
                                                            type="radio" value="1" class="form-check-input"> Small
                                                        area
                                                        (&lt;
                                                        50m<sup>
                                                            2</sup>) with no groundcover</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.aos"
                                                            type="radio" value="2" class="form-check-input"> Large
                                                        area
                                                        (&ge;
                                                        50m<sup>
                                                            2</sup>) with dense groundcover</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.aos"
                                                            type="radio" value="3" class="form-check-input"> Large
                                                        area
                                                        (&ge;
                                                        50m<sup>
                                                            2</sup>) with no groundcover</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="">Groundwater Exposure Pathway</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.gep"
                                                            :value="1" type="radio" class="form-check-input">
                                                        Yes</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.gep"
                                                            :value="0" type="radio" class="form-check-input">
                                                        No</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group" id="GEPChoose">
                                            <label for="">Human Groundwater Consumption?</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Under 6 years old</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" step="0.5" placeholder="2.0 L/day"
                                                        v-model="humanimpacts.hgc" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    <label for="">Over 6 years old</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" step="0.1" placeholder="3.0 L/day"
                                                        v-model="humanimpacts.hgc" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="">Surface Water Exposure Pathway</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.swep"
                                                            :value="1" type="radio" class="form-check-input">
                                                        Yes</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input v-model="humanimpacts.swep"
                                                            :value="0" type="radio" class="form-check-input"> No</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="">Human Surface Water Consumption?</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Under 6 years old</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input required type="number" step="0.5" placeholder="2.0 L/day"
                                                        v-model="humanimpacts.hswc" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4">
                                                    <label for="">Over 6 years old</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input required type="number" step="0.5" placeholder="3.0 L/day"
                                                        v-model="humanimpacts.hswc" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Ecological Impact</h5>
                                <div class="form row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="">Weight on Aquatic Risk (Downstream Impact)</label>
                                            <div class="pl-3 pr-3 pb-5">
                                                <div id="pips-steps"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="" style="color: #fff">WoAR</label>
                                            <input required type="text" v-model="ecologicalimpacts.woar" id=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-5">
                                        <div class="position-relative form-group">
                                            <label for="">Erosion</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input
                                                            v-model="ecologicalimpacts.erosion" value="observation"
                                                            type="radio" class="form-check-input">
                                                        Observation</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input
                                                            v-model="ecologicalimpacts.erosion" value="ruslemodel"
                                                            type="radio" class="form-check-input"> RUSLE
                                                        Model</label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input
                                                            v-model="ecologicalimpacts.erosion" value="not both"
                                                            type="radio" class="form-check-input"> Not
                                                        Both</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="">Relative Growth Rate(Aquatic environment)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <input required type="text" v-model="ecologicalimpacts.rgrae" id=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="">Relative Growth Rate (Terrestrial environment)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <input required type="text" v-model="ecologicalimpacts.rgrte" id=""
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Groundwater Impact</h5>
                                <div class="form row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <h3>G1: Levels of Contaminants</h3>
                                            <label for="">Groundwater concenntrations are higher the human
                                                health and ecological investigation or assessment
                                                levels?</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input required
                                                                    v-model="groundwaterimpacts.loc" type="radio"
                                                                    :value="1" class="form-check-input">
                                                                Yes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input required
                                                                    v-model="groundwaterimpacts.loc" type="radio"
                                                                    :value="0" class="form-check-input">
                                                                No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <h3>G2: Synthetic Precipitation leaching procedure (SPLP) values
                                            </h3>
                                            <label for="">SPLP concentrations are higher the human health and
                                                ecological invetigation or assesment levels?</label>
                                            <fieldset class="position-relative form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input required
                                                                    v-model="groundwaterimpacts.splp" type="radio"
                                                                    :value="1" class="form-check-input">
                                                                Yes</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input required
                                                                    v-model="groundwaterimpacts.splp" type="radio"
                                                                    :value="0" class="form-check-input">
                                                                No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-10">
                                        <div class="position-relative form-group">
                                            <h3>G3: Depth to the Groundwater
                                            </h3>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.dttg" type="radio" value="1"
                                                            class="form-check-input">
                                                        Groundwater table in unconfined aquiler below ground
                                                        surface &lt; 5m bgs. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.dttg" type="radio" value="2"
                                                            class="form-check-input">
                                                        Groundwater table in unconfined aquiler below ground
                                                        surface &gt; 5m bgs and &lt; 10m bgs. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.dttg" type="radio" value="3"
                                                            class="form-check-input">
                                                        Groundwater table in unconfined aquiler below ground
                                                        surface &gt; 10m bgs. </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-10">
                                        <div class="position-relative form-group">
                                            <h3>G4: Off-site impact and liability issues
                                            </h3>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.oial" type="radio" value="1"
                                                            class="form-check-input">
                                                        Groundwater flow direction towards sensitive receptor
                                                        and velocity &lt; 5m per year. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.oial" type="radio" value="2"
                                                            class="form-check-input">
                                                        Groundwater flow direction towards sensitive receptor
                                                        and velocity &gt; 5m/yr and &lt; 20 m/yr. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.oial" type="radio" value="3"
                                                            class="form-check-input">
                                                        Groundwater flow direction towards sensitive receptor
                                                        and velocity &gt; 20 m/yr and &lt; 30 m/yr. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.oial" type="radio" value="4"
                                                            class="form-check-input">
                                                        Groundwater flow direction towards sensitive receptor
                                                        and velocity &gt; 30m per year. </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-10">
                                        <div class="position-relative form-group">
                                            <h3>G5: Nearest drinking groundwater bore hole
                                            </h3>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.ndgb" type="radio" value="1"
                                                            class="form-check-input">
                                                        Nearest dringking groundwater bore hole / residence &le;
                                                        5000 m. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.ndgb" type="radio" value="2"
                                                            class="form-check-input">
                                                        Nearest dringking groundwater bore hole / residence &le;
                                                        2000 m. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.ndgb" type="radio" value="3"
                                                            class="form-check-input">
                                                        Nearest dringking groundwater bore hole / residence &le;
                                                        1000 m. </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.ndgb" type="radio" value="4"
                                                            class="form-check-input">
                                                        Nearest dringking groundwater bore hole / residence &le;
                                                        500 m. </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="form row">
                                    <div class="col-md-10">
                                        <div class="position-relative form-group">
                                            <h3>G6: Applicability of Intitution control
                                            </h3>
                                            <fieldset class="position-relative form-group">
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.aoic" type="radio" value="1"
                                                            class="form-check-input">
                                                        Stringent institutional control could be applied.
                                                    </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.aoic" type="radio" value="2"
                                                            class="form-check-input">
                                                        Institutional control could be applied and difficult to
                                                        follow up.
                                                    </label>
                                                </div>
                                                <div class="position-relative form-check"><label
                                                        class="form-check-label"><input required
                                                            v-model="groundwaterimpacts.aoic" type="radio" value="3"
                                                            class="form-check-input">
                                                        No Institutional control could be applied.
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider"></div>

                                <div class="clearfix">
                                    <button type="button" id="reset-btn"
                                        class="btn-shadow float-left btn btn-link">Reset</button>
                                    <button type="button" id="next-btn"
                                        class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                </div>
                            </div>

                        </div>
                        <!-- <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Summary Page</h5>
                                <div class="form row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <p>1.&ensp;File name:
                                                <span>Testing Name</span> <br><br>
                                                2.&ensp;Description: <span>Lorem ipsum, dolor sit amet
                                                    consectetur adipisicing elit. Amet quidem modi, quas
                                                    reiciendis nobis itaque possimus suscipit nostrum numquam
                                                    sint, non necessitatibus ex natus et officiis magni
                                                    distinctio ad nam.</span> <br><br>
                                                3.&ensp;Chemical profile: <br>
                                                <table class="table">
                                                    <thead>
                                                        <tr style="background-color:#3ac47d; color:#fff;">
                                                            <th>#</th>
                                                            <th>Chemical</th>
                                                            <th>con. in soil (mg/Kg)</th>
                                                            <th>Ground Water (mg/L)</th>
                                                            <th>con. in surface (mg/L)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <th>Cadmium</th>
                                                            <th>10</th>
                                                            <th>0.2</th>
                                                            <th>0.1</th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <th>Arsenic</th>
                                                            <th>1</th>
                                                            <th>0</th>
                                                            <th>0.1</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br><br>
                                                4.&ensp;Weight on Human Risk (w): <span>10</span><br><br>
                                                5.&ensp;F1: Area of Soil (Shallow (0-0.2 m) contamination over):
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Scores</h5>
                                <div class="form row">
                                    <div class="col-md-12">
                                        <div class="position-relative form-group">
                                            <h3>Scores</h3>
                                            <table class="table">
                                                <thead>
                                                    <tr style="background-color:#3ac47d; color:#fff;">
                                                        <th>Filename</th>
                                                        <th>Children</th>
                                                        <th>Adult</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>[Filename]</th>
                                                        <th>xx.x</th>
                                                        <th>xx.x</th>
                                                        <th>
                                                            <button
                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-success"><i
                                                                    class="pe-7s-pen btn-icon-wrapper">
                                                                </i></button>
                                                            <button
                                                                class="mb-2 mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                                                    class="pe-7s-trash btn-icon-wrapper">
                                                                </i></button></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'
    export default {
        data() {
            return {
                file: {},
                fileErrors: {},
                chemicals: [],
                chemicaldatas: [],
                humanimpacts: {},
                ecologicalimpacts: {},
                groundwaterimpacts: {},
            }
        },
        watch: {
            'file.name': async function (file, oldFile) {
                try {
                    let r = await axios.get(`/check-file`, {
                        params: {
                            name: file
                        }
                    })
                    this.fileErrors = {}
                } catch (e) {
                    this.fileErrors = e.response.data.errors
                }
            }
        },
        beforeMount() {
            this.getChemicals()
            this.getChemicalDatas()
        },
        methods: {
            async getChemicals() {
                try {
                    let r = await axios.get('/chemicals')
                    this.chemicals = r.data
                } catch (e) {

                }
            },
            async getChemicalDatas() {
                try {
                    let r = await axios.get('/chemicaldatas')
                    this.chemicaldatas = r.data
                } catch (error) {

                }
            },
            async addChemicalData() {
                try {
                    let r = await axios.post('/chemicaldatas', this.file)
                    this.file = {}
                    this.chemicaldatas.push(r.data)
                } catch (e) {

                }
            }
        },
        mounted() {
            // When the user scrolls the page, execute myFunction
            window.onscroll = function () {
                myFunction()
            };

            function myFunction() {
                var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("myBar").style.width = scrolled + "%";
            }
        }
    }

</script>
