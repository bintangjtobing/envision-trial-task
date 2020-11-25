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
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div id="smartwizard" class="sw-main sw-theme-default">
                                <ul class="forms-wizard nav nav-tabs step-anchor">
                                    <li class="nav-item active">
                                        <a href="#step-1" class="nav-link">
                                            <em>1</em><span>Create file name</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-2" class="nav-link">
                                            <em>2</em><span>Chemical Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-3" class="nav-link">
                                            <em>3</em><span>Human Impact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-4" class="nav-link">
                                            <em>4</em><span>Ecological Impact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-5" class="nav-link">
                                            <em>5</em><span>Groundwater Impact</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-6" class="nav-link">
                                            <em>6</em><span>Summary Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-7" class="nav-link">
                                            <em>7</em><span>Scores</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#step-8" class="nav-link">
                                            <em>8</em><span>Finish!</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="form-wizard-content sw-container tab-content"
                                    style="min-height: 310.417px; margin-top: 1rem;">
                                    <div id="step-1" class="tab-pane step-content" style="display: block;">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleEmail55">Filename</label>
                                                    <input name="filename" id="exampleEmail55"
                                                        placeholder="Filename here" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword22">Description</label>
                                                    <textarea class="form-control" name="desc" cols="30" rows="10"
                                                        placeholder="Description here..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-2" class="tab-pane step-content">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="">Chemical</label>
                                                    <select name="chemicaldata" id=""
                                                        class="form-control custom-select">
                                                        <option>Lead (Pb),</option>
                                                        <option>Arsenic (As),</option>
                                                        <option>Mercury (Hg),</option>
                                                        <option>Zinc (Zn),</option>
                                                        <option>Copper (Cu),</option>
                                                        <option>Nickle (Ni),</option>
                                                        <option>Iron (Fe),</option>
                                                        <option>Manganese (Mn),</option>
                                                        <option>Chromium (Cr),</option>
                                                        <option>Vanadium (V),</option>
                                                        <option>Titanium (Ti),</option>
                                                        <option>Calcium (Ca),</option>
                                                        <option>Potassium (K),</option>
                                                        <option>Sulfur (S),</option>
                                                        <option>Barium (Ba),</option>
                                                        <option>Caesium (Cs),</option>
                                                        <option>Tellurium (Te),</option>
                                                        <option>Antimony (Sb),</option>
                                                        <option>Tin (Sn),</option>
                                                        <option>Cadmium (Cd),</option>
                                                        <option>Silver (Ag)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="">Con. in Soil</label>
                                                    <input type="text" name="CiS" class="form-control"
                                                        placeholder="mg/Kg">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="">Con. in Groundwater</label>
                                                    <input type="text" name="CiG" class="form-control"
                                                        placeholder="mg/L">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="">Con. in Surface Water</label>
                                                    <input type="text" name="CiSW" class="form-control"
                                                        placeholder="mg/L">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <a href="" class="btn btn-primary">Add to list</a>
                                        </div>
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
                                        </div>
                                    </div>
                                    <div id="step-3" class="tab-pane step-content">
                                        <div class="form-row">
                                            <div class="col-md-8">
                                                <div class="position-relative form-group">
                                                    <label for="">Weight on Human Risk (w)</label>
                                                    <input type="text" name="WoHR" placeholder="1.0"
                                                        class="form-control">
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
                                                                class="form-check-label"><input name="AoS" type="radio"
                                                                    class="form-check-input"> Small area (< 50m<sup>
                                                                    2</sup>) with dense groundcover</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input name="AoS" type="radio"
                                                                    class="form-check-input"> Small area (< 50m<sup>
                                                                    2</sup>) with no groundcover</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input name="AoS" type="radio"
                                                                    class="form-check-input"> Large area (&ge; 50m<sup>
                                                                    2</sup>) with dense groundcover</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input name="AoS" type="radio"
                                                                    class="form-check-input"> Large area (&ge; 50m<sup>
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
                                                                class="form-check-label"><input name="GEP" type="radio"
                                                                    class="form-check-input"> Yes</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input name="GEP" type="radio"
                                                                    class="form-check-input"> No</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="">Human Groundwater Consumption?</label>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="">Under 6 years old</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="2.0 L/day" name="HGC" id=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <label for="">Over 6 years old</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="3.0 L/day" name="HGC" id=""
                                                                class="form-control">
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
                                                                class="form-check-label"><input name="GEP" type="radio"
                                                                    class="form-check-input"> Yes</label>
                                                        </div>
                                                        <div class="position-relative form-check"><label
                                                                class="form-check-label"><input name="GEP" type="radio"
                                                                    class="form-check-input"> No</label>
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
                                                            <input type="text" placeholder="2.0 L/day" name="HGC" id=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-4">
                                                            <label for="">Over 6 years old</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="3.0 L/day" name="HGC" id=""
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-4" class="tab-pane step-content">
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
                                                    <label for="" style="color: #fff">asdasd</label>
                                                    <input type="text" name="WoAR" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5">
                                                <div class="position-relative form-group">
                                                    <label for="">Erosion</label>
                                                    <select name="Erosion" id="" class="form-control custom-select">
                                                        <option value="Observation">Observation</option>
                                                        <option value="RUSLE Model">RUSLE Model</option>
                                                        <option value="Not Both">Not Both</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="position-relative form-group">
                                                    <label for="" style="color: #fff;">adsqwe</label>
                                                    <h3>OR</h3>
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
                                                    <input type="text" name="RGRae" id="" class="form-control">
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
                                                    <input type="text" name="RGRte" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="step-8" class="tab-pane step-content">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Finished!</div>
                                            <div class="results-title">You arrived at the last form
                                                wizard step!</div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button
                                                    class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="clearfix">
                                <button type="button" id="reset-btn"
                                    class="btn-shadow float-left btn btn-link">Reset</button>
                                <button type="button" id="next-btn"
                                    class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                                <button type="button" id="prev-btn"
                                    class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
