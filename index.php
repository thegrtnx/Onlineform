<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="House Renting">
    <meta name="author" content="House Renting">
    <meta name="keywords" content="Renting House">

    <!-- Title Page-->
    <title>Rental Form</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                     <h2 class="title" align="center">RENTAL APPLICATION</h2>
                    <h4 class="title">Landlord:</h4>


                   <!--  TAKE NOTE -->

                    <!-- Put in the correct php snippet to echo the admin preferred address. This one is just to be displayed. The one going to the db is enclosed in the form tag below. -->

                    <h4 rows="4"  style="font-family: inherit; max-width: 45%" disabled><?php echo 'I am the best and will always be the best' ; ?></h4>
                    <br/><br/>

                    <h5 class="title" align="center">This Application is made to rent:</h5>
                    <h4 rows="4" style="font-family: inherit; max-width: 45%" disabled><?php echo 'I am the best and will always be the best' ; ?></h4>
                    <br/><br/>

                   <h4>for a term of <input type="text" name="last_name"></h4>
                <h6 class="title" align="center">kindly provide your information</h6>

                    <!-- form tag begin -->
                    <form method="POST" action="submit.php">

                        <!-- Note here too -->
                        <!-- Also correct the php snippent here. This is the part to go into db. -->

                        <input type="text" value="<?php echo 'I am the best and will always be the best' ; ?>" name="renter_add" hidden>
                        <input type="text" value="<?php echo 'I am the best' ; ?>" name="rentee_add" hidden>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <label class="label">Desired date of occupancy:</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="occ_date">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <label class="label">Desired Length of occupancy:</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4" type="text" name="occ_length">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><NAV>Number of Bedrooms</NAV></label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                <select name="bed_num">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>1 Bedroom</option>
                                    <option>2 Bedrooms</option>
                                    <option>3 Bedrooms</option>
                                    <option>4 Bedrooms</option>
                                    <option>5 Bedrooms</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Reason for moving:</label>
                                    <input class="input--style-4" type="text" name="reason_move">
                                </div>
                            </div>
                        </div><br/><br/>
                        <h4 align="center"> The rent shall be $700.00 per month, payable in advance.</h4><br/><br/>
                        <h5> The following deposits are required:</h5>
                        <br/>
                        <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <p>Security deposit ($):</p>
                                <input class="input--style-4" type="number" name="secure_depo" value="<?php echo '10' ; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <p>Pet deposit ($):</p>
                                <input class="input--style-4" type="number" name="pet-depo" value="<?php echo '10'; ?>" disabled >
                            </div>
                        </div>
                        </div>
                       <br/><br/>

                    <h5>The deposit will be returned to the Applicant if the Premises are not rented to the Applicant. </h5><br/><br/>
                    <h5>The total amount of $______ shall be due upon signature of the lease.</h5><br/><br/>
                    <h5>An application deposit of $50.00 is due with this application.</h5><br/><br/>
                    <h5>The Applicant understands and agrees that if this Application is accepted and the Applicant fails to execute a lease before the beginning date specified above , or to pa the required deposits and the first month's rent, the application deposit will be forfeited as liquidated damages</h5><br/><br/>
                    <h5>It is also understood that if the Appication is not accepted, or if the Premises are not ready for occupancy by the Applicant on the beginning date specified above, the deposit shall be returned to the Applicant, upon the Applicant request.</h5><br/><br/>
        
                    <h5>The Applicants understands that the Landlord may perform a credit check to verify the Application's credit references and credit history in connection with the processing of this Rental Application.</h5><br/><br/><br/>

                     <h2 class="title" align="center">APPLICANT INFORMATION</h2>

                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name of Applicant:</label>
                                    <input class="input--style-4" type="text" name="full_name" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Number of Adults and Children:</label>
                                    <input class="input--style-4" type="text" name="occ_num">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                 <div class="input-group">
                                    <label class="label">Water bed:</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="yes"  name="bed">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="no" name="bed">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Smokers:</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="yes" name="smoke">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="no" name="smoke">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        
                         <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pets:</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="yes" name="pet">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="no" name="pet">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                              <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label"><h4>PRESENT ADDRESS:</h4></label>
                                    <input class="input--style-4" type="text" name="add_now" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">How long at present address:</label>
                                    <input class="input--style-4" type="text" name="add_length">
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Home Phone No:</label>
                                    <input class="input--style-4" type="number" name="phone" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Current rent payment:</label>
                                    <input class="input--style-4" type="number" name="cur_rent">
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label"><h4>PRIOR ADDRESS:</h4></label>
                                    <input class="input--style-4" type="text" name="prior_add" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">How long at prior address:</label>
                                    <input class="input--style-4" type="text" name="prior_length">
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Landlord's Name:</label>
                                    <input class="input--style-4" type="text" name="landlord_name" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone No:</label>
                                    <input class="input--style-4" type="number" name="landlord_phone">
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Rent payment($):</label>
                                    <input class="input--style-4" type="number" name="rent_pay" >
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Reason for moving:</label>
                                    <input class="input--style-4" style="font-family: inherit;" type="text" name="reason"></textarea> 
                                </div>
                            </div>
                        </div><br><br><br>
                          
                          <div class="row row-space">
                                 
                                <div class="input-group">
                                    <h4>SOURCE OF INCOME</h4>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                <select name="income_source">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Wages</option>
                                    <option>Salary</option>
                                    <option>Commision</option>
                                    <option>Tips</option>
                                    <option>Gov't assistance</option>
                                    <option>Child support/Alimony</option>
                                    <option>other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Amount ($):</label>
                                    <input class="input--style-4" type="number" name="price">
                                </div>
                            </div>
                        </div>
                       
                        <br><br><br>
                        <h4>CURRENT EMPLOYER</h4><br/><br/>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Employer:</label>
                                    <input class="input--style-4" type="employer" name="employer_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Position Held:</label>
                                    <input class="input--style-4" type="text" name="position">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">How long:</label>
                                    <input class="input--style-4" type="text" name="employ_length">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Supervisor:</label>
                                    <input class="input--style-4" type="text" name="supervisor">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Business Phone:</label>
                                    <input class="input--style-4" type="number" name="biz_phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Annual Income($):</label>
                                    <input class="input--style-4" type="number" name="income">
                                </div>
                            </div>
                        </div><br><br><br>


                        <h4>PRIOR EMPLOYER</h4><br/><br/>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Employer:</label>
                                    <input class="input--style-4" type="employer" name="p_employer_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Position Held:</label>
                                    <input class="input--style-4" type="text" name="p_position">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">How long:</label>
                                    <input class="input--style-4" type="text" name="p_employ_length">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Supervisor:</label>
                                    <input class="input--style-4" type="text" name="p_supervisor">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Business Phone:</label>
                                    <input class="input--style-4" type="text" name="p_biz_phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Annual Income($):</label>
                                    <input class="input--style-4" type="number" name="p_income">
                                </div>
                            </div>
                        </div><br><br><br>


                        <h4>NEAREST RELATIVE NOT LIVING WITH YOU:</h4><BR/><BR/>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="relate_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address:</label>
                                    <input class="input--style-4" type="text" name="relate_add">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Home Phone No:</label>
                                    <input class="input--style-4" type="number" name="relate_phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Relationship:</label>
                                    <input class="input--style-4" type="text" name="relate_relation">
                                </div>
                            </div>
                        </div><br><br><br>


                        <h4>PERSONAL REFERENCES</h4><br/><br/>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="per_name_1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address:</label>
                                    <input class="input--style-4" type="text" name="per_add_1">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Phone No:</label>
                                    <input class="input--style-4" type="number" name="per_phone_1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Relationship:</label>
                                    <input class="input--style-4" type="text" name="per_relation_1">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="per_name_2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Address:</label>
                                    <input class="input--style-4" type="text" name="per_add_2">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Phone No:</label>
                                    <input class="input--style-4" type="number" name="per_phone_2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Relationship:</label>
                                    <input class="input--style-4" type="text" name="per_relation_2">
                                </div>
                            </div>
                        </div><br><br><br>



                        
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Have you ever been evicted from any rental premises?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="Yes" name="evict">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="No" name="evict">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">If yes, Please Explain:</label>
                                    <input class="input--style-4" type="text" name="evict_ex">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Have you ever willfully and intentionally refused to pay rent when due?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="Yes" name="refused">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="No" name="refused">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">If yes, Please Explain:</label>
                                    <input class="input--style-4" type="text" name="refused_ex">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Are there any circumstances which may interrupt your income or ability to pay rent?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" name="interrupt">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" name="interrupt">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">If yes, Please Explain:</label>
                                    <input class="input--style-4" type="text" name="interrupt_ex">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Have you ever been convicted of a felony?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">YES
                                            <input type="radio" value="Yes" name="convicted">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">NO
                                            <input type="radio" value="No" name="convicted">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">If yes, Please Explain:</label>
                                    <input class="input--style-4" type="text" name="convicted_ex">
                                </div>
                            </div>
                        </div><br><br><br>



                        <h4>PETS:</h4><br/><br/>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="pet_name_1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Type/Breed:</label>
                                    <input class="input--style-4" type="text" name="pet_type_1">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Size:</label>
                                    <input class="input--style-4" type="text" name="pet_size_1">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pets livelihood</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Indoor
                                            <input type="radio" value="Indoor" name="indoor_1">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Outdoor
                                            <input type="radio" value="Outdoor" name="indoor_1">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="pet_name_2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Type/Breed:</label>
                                    <input class="input--style-4" type="text" name="pet_type_2">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Size:</label>
                                    <input class="input--style-4" type="text" name="pet_size_2">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pets livelihood</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Indoor
                                            <input type="radio" value="Indoor" name="indoor_2">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Outdoor
                                            <input type="radio" value="No" name="indoor_2">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Name:</label>
                                    <input class="input--style-4" type="text" name="pet_name_3">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Type/Breed:</label>
                                    <input class="input--style-4" type="text" name="pet_type_3">
                                </div>
                            </div>
                        </div>
                            <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Size:</label>
                                    <input class="input--style-4" type="text" name="pet_size_3">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Pets livelihood</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Indoor
                                            <input type="radio" value="Indoor" name="indoor_3">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Outdoor
                                            <input type="radio" value="Outdoor" name="indoor_3">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5>I represent that the information provided in this Application is true and correct to the best of my Knowledge. David Westleyis authorized to verify the references and employment information given in this Application and to request a credit check. I acknowlwdge receipt of a copy of this application.</h5><br/><br/><br/><br/><br/><br/>
                        Applicant's Signature________________<br/><br/><br/><br/> 
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Date:</label>
                                <div class="input-group-icon ">
                                    <input class="input--style-4 js-datepicker" type="text" name="app_date">
                                </div>
                            </div>
                        </div><br/><br/><br/><br/>

                        <p>IT IS AGAINST THE LAW TO DISCRIMINATE AGAINST PROSPECTIVE TENANTS ON THE BASIS OF RAC,RELIGION, NATIONAL ORIGIN, AGE, DISABILITY OR FAMILY STATUS. LOCAL OR STATE LAWS MAY INCLUDE ADDITIONAL CLASSES WHICH ARE PROTECTED FROM DISCRIMINATION IN HOUSES.</p><br/><br/>
                        <h5>The information provided by the prospective tenant(s) may be used by David Westley will disclosed to the Applicant in writing the nature and scope of any investigation David Westley has requested, and will, if the Applicant is refused, state in writing the reason for said refusal.</h5><br/><br/><br/><br/>
                        
                         <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"></label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Accepted
                                            <input type="radio" name="deal">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Refused
                                            <input type="radio" name="deal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">By:</label>
                                    <input class="input--style-4" type="text" name="deal_name">
                                </div>
                            </div>
                        </div><br><br><br>



                     <h5 align="center">TENANT SUPPLIED INFORMATION</h5><br/><br/><br/>
                        <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Prospective Tenant's Name:</label>
                                    <input class="input--style-4" type="text" name="tenant_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Position:</label>
                                    <input class="input--style-4" type="text" name="tenant_pos">
                                </div>
                            </div>
                        </div>
                           <div class="row row-space">
                            <div class="col-2">
                               <div class="input-group">
                                    <label class="label">Wage/Salary($):</label>
                                    <input class="input--style-4" type="number" name="tenant_wage">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Per:</label>
                                    <input class="input--style-4" type="text" name="tenant_per">
                                </div>
                            </div>
                              <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Length of time with the above employer:</label>
                                    <input class="input--style-4" type="text" name="tenant_dur">
                                </div>
                            </div>
                        </div><br/><br/><br/>
                        <h5> I have completed the above information in connection with a rental application. The addressee of this letter is authorized to verify this information and supply the above name landlord with the information requested in the following items. Your response is solely a matter of courtesy for which no responsibility is attached to your institution or any of your officers.</h5><br/><br/><br/>
                       <h4> Prospective Tenant's Signature:</h4><br/><br/>_____________________<br/><br/><br/><br/><br/>

                        <h5  align="center">PLEASE RETURN THIS FORM TO THE LANDLORD</h5>


                      
                    
                        <div class="p-t-15" style="margin-bottom: 20px; margin-top: 20px">
                            <button style="float: right;" class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->