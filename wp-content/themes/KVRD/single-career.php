<?php get_header() ?>


    <section style="background-image: url('<?php echo get_the_post_thumbnail_url(94,'kv_cover') ?>'); background-size: cover" class="firstSection">
        <div class="myContainer position-relative">
            <div class="mainColorBg position-absolute commonDiv">
                <h1 class="white letter-4">Apply Now</h1>
                <div class="smallHr"></div>
                <p class="white desc letter-4 twoLines f-normal applicationText">
                    <?php echo get_the_content() ?>
                </p>
            </div>
        </div>
    </section>

    <section class="p-ver-40 pb-0">
        <div class="myContainer">
            <p class="mainColor f-lg letter-4">
                APPLICATION FOR
            </p>
            <p class="mainColor f-lg letter-4">
                EMPLOYMENT
            </p>
            <div class="smallHr mainColorBg"></div>
        </div>
        <form action="" class="applicationForm" id="kv_application">
            <input type="hidden" name="action" value="application" />
            <div class="personalInfo">
                <div class="myContainer">
                    <p class="aperturaRegular f-big mainColor">Personal Information</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="NAME" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name = "address"placeholder="ADDRESS" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="city" placeholder="City" class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="state" placeholder="State" class="form-control"/>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="zip" placeholder="ZIP" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="PHONE NUMBER" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="military" placeholder="MILITARY STATUS" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="EMAIL" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position grayBg">
                <div class="myContainer">
                    <p class="aperturaRegular f-big mainColor">Position</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="hidden" name="jobId" value="<?php echo get_the_ID() ?>"
                                <input type="text" value="<?php echo get_the_title() ?>" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="start_date" placeholder="AVAILABLE START DATE" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text"  name="pay" placeholder="DESIRED PAY" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="clearfix mt-4">
                                <span class="mainColor aperturaBold f-12 mb-4 float-left">EMPLOYMENT DESIRED</span>
                                <div class="float-left row justify-content-lg-center col-lg-10">
                                    <label class="aperturaRegular position-relative mainColor f-12 col-6 col-lg-3">
                                        Full Time
                                        <input type="radio" class="radio" name="full" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="aperturaRegular position-relative mainColor f-12 col-6 col-lg-3">
                                        Part Time
                                        <input type="radio" name="part" class="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="aperturaRegular position-relative mainColor f-12 col-10 col-lg-3">
                                        Seasonal / Temporary
                                        <input type="radio" name="temp" class="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="education">
                <div class="myContainer">
                    <p class="aperturaRegular f-big mainColor">Education</p>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="school_name" placeholder="SCHOOL NAME" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="school_location" placeholder="LOCATION" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="sattend" placeholder="YOUR SATTENDED" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="degree" placeholder="DEGREE RECEIVED" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="major" placeholder="MAJOR" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="position grayBg">
                <div class="myContainer">
                    <p class="aperturaRegular f-big mainColor">Employment History</p>
                    <div class="toAppend">
                        <div class="singleEmployee">
                            <span class="f-18 aperturaBold mb-4 d-inline-block mainColor">EMPLOYER <span class="counter">1</span></span>
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="JOB TITLE" class="form-control" name="jobTitle1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="DATES EMPLOYED" class="form-control"
                                               name="datesEmployed1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="WORK PHONE" class="form-control" name="workPhone1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="STARTING PAY RATE" class="form-control"
                                               name="startPayRate1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="ENDING PAY RATE" class="form-control"
                                               name="endPayRate1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="ADDRESS" class="form-control" name="address1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="CITY" class="form-control" name="city1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="STATE" class="form-control" name="state1">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" placeholder="ZIP" class="form-control" name="zip1">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="mainColorBg aperturaRegular white border-0 col-md-4 historyBtn" id="historyBtn">
                        New Employer Experience <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="portfolio">
                <div class="myContainer">
                    <div class="row m-0">
                        <div class="upload-btn-wrapper mainColorBg aperturaRegular white border-0 col-md-4 historyBtn">
                            <button class="mainColorBg aperturaRegular white border-0 col-md-4 historyBtn">
                                Add Portfolio <i class="fas fa-plus"></i>
                            </button>
                            <input type="file" name="protfolio" accept="application/pdf" />
                        </div>

                        <div class="col-md-8 letter-4 p-0">
                            <p class="mainColor">
                                Upload File
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="position grayBg">
                <div class="myContainer text-center">
                    <button type="submit" class="mainColorBg white border-0">Submit</button>
                </div>
            </div>

        </form>
    </section>

<?php get_footer() ?>