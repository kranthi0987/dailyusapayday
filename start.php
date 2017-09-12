<?php
error_reporting(0);
include("usage/config.php");
$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
mysql_select_db("dailyusapayday", $my_connection) or die("cant select db");
//not in use

if (isset($_POST['submit'])) {
    $amount = $_POST['amount'];
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $street = $_POST['street_address'];
    $apart = $_POST['apartment'];
    $lengthat = $_POST['length_at_address'];
    $rentown = $_POST['rentorown'];
    $gender = $_POST['gender'];
    $driving = $_POST['driver_license'];
    $issuing = $_POST['issuing_state'];
    $primary1 = $_POST['primaryphone1'];
    $primary2 = $_POST['primaryphone2'];
    $primary3 = $_POST['primaryphone3'];
    $workphone1 = $_POST['workphone1'];
    $workphone2 = $_POST['workphone2'];
    $workphone3 = $_POST['workphone3'];
    $birthmonth = $_POST['birth_date_month`'];
    $birthday = $_POST['birth_date_day'];
    $birthyear = $_POST['birth_date_year'];
    $ssn1 = $_POST['ssn1'];
    $ssn2 = $_POST['ssn2'];
    $ssn3 = $_POST['ssn3'];
    $bestcontacttime = $_POST['best_contact_time'];
    $bankaccountype = $_POST['bank_account_type'];
    $bankname = $_POST['bank_name'];
    $monthsatbank = $_POST['months_at_bank'];
    $bankphone1 = $_POST['bank_phone1'];
    $bankphone2 = $_POST['bank_phone2'];
    $bankphone3 = $_POST['bank_phone3'];
    $abarouting = $_POST['abarouting'];
    $bankaccountnumber = $_POST['bank_account_number'];
    $employmenttype = $_POST['employment_type'];
    $empname = $_POST['employer_name'];
    $empjobtitle = $_POST['employer_job_title'];
    $empzip = $_POST['employer_zip'];
    $empstate = $_POST['employer_state'];
    $empcity = $_POST['employer_city'];
    $empworkphone1 = $_POST['employer_workphone1'];
    $empworkphone2 = $_POST['employer_workphone2'];
    $empworkphone3 = $_POST['employer_workphone3'];
    $monthhired = $_POST['month_hired'];
    $yearhired = $_POST['year_hired'];
    $employermonthlyincome = $_POST['employer_monthly_income'];
    $payfrequency = $_POST['pay_frequency'];
    $pd1m = $_POST['pay_date1_month'];
    $pd1d = $_POST['pay_date1_day'];
    $pd1y = $_POST['pay_date1_year'];
    $pd2m = $_POST['pay_date2_month'];
    $pd2d = $_POST['pay_date2_day'];
    $pd2y = $_POST['pay_date2_year'];
    $directdeposti = $_POST['direct_deposit'];
    $usmilitary = $_POST['us_military_dependent'];

    if (isset($_POST['submit'])) {
        $query = "INSERT INTO `data` (`id`, `amount`, `First Name`, `Last Name`, `Email`, `zip`, `State`, `City`, `Street Address`, `Apartment`, `Months at Address`, `Home type`, `Gender`, `Drivers License Number`, `ID State`, `Primary Phone`, `Primary phone2`, `Primary phone3`, `Cell phone`, `Cell phone2`, `Cell phone3`, `birth_date_month`, `birth_date_day`, `birth_date_year`, `SSN`, `Ssn2`, `Ssn3`, `Best contact time`, `Type of Account`, `Bank Name`, `Months with Bank Account`, `Bank Phone`, `Bank phone2`, `Bank phone3`, `ABA/Routing Number`, `Account Number`, `Income Type`, `Employer`, `Job Title`, `Employer ZIP`, `Employer State`, `Employer City`, `Employer Phone`, `Employer phone2`, `Employer phone3`, `month_hired`, `year_hired`, `Monthly Income`, `How Often are you Paid`, `pay_date1_month`, `pay_date1_day`, `pay_date1_year`, `pay_date2_month`, `pay_date2_day`, `pay_date2_year`, `Do you have direct deposit?`, `Are you active military? (or dependent)`) VALUES (NULL, '$amount', '$first', '$last', '$mail', '$zip', '$state', '$city', '$street', '$apart', '$lengthat', '$rentown', '$gender', '$driving', '$issuing', '$primary1', '$primary2', '$primary3', '$workphone1', '$workphone2', '$workphone3', '$birthmonth', '$birthday', '$birthyear', '$ssn1', '$ssn2', '$ssn3', '$bestcontacttime', '$bankaccountype', '$bankname', '$monthsatbank', '$bankphone1', '$bankphone2', '$bankphone3', '$abarouting', '$bankaccountnumber', '$employmenttype', '$empname', '$empjobtitle', '$empzip', '$empstate', '$empcity', '$empworkphone1', '$empworkphone2', '$empworkphone3', '$monthhired', '$yearhired', '$employermonthlyincome', '$payfrequency', '$pd1m', '$pd1d', '$pd1y', '$pd2m', '$pd2d', '$pd2y', '$direct', '$usmilitary')";
//           echo $query;
        $result1 = mysql_query($query, $my_connection) or die(mysql_error());
        $_SESSION['msg'] = "Your Data inserted Successfully";
        echo "success";
        header('location:talakonaroomupdate.php');
    } else {
        echo "failed";


    }
}
?>
<html lang="en">
<head>
    <title>Start - Best Usa Payday Loans Online. Simple and fast application.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="_lptemplates/bestusapayday2/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,600,700|Teko:400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="_lptemplates/bestusapayday2/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="data/themes/bestusapayday2/1328/style.css">
    <script src="_lptemplates/bestusapayday2/js/jquery.js" type="text/javascript"></script>
    <script src="_lptemplates/bestusapayday2/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="_lptemplates/bestusapayday2/js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
    <script src="_lptemplates/bestusapayday2/js/scripts.js" type="text/javascript"></script>

</head>
<body style="">


<div class="all">
    <div class="sub-bg">
        <header>
            <div class="container-fluid">
                <p class="logo"><a href="index.html"><img src="_lptemplates/bestusapayday2/images/logo.png" width="143"
                                                          height="48" alt="logo"></a></p>
                <p class="ssl"><img src="_lptemplates/bestusapayday2/images/ssl.png" alt=""></p>
            </div>
        </header>
        <div class="page-title">
            <div class="container-fluid">
                <h1 class="small">Fill Out This Form to Get Matched with a Lender</h1>
            </div>
        </div>
    </div>
    <aside class="form-steps">
        <div class="container-fluid">
            <ul>
                <li><span class="icon"><img src="_lptemplates/bestusapayday2/content/icon1a.png" alt=""></span>
                    Personal<br> Information
                </li>
                <li><span class="icon"><img src="_lptemplates/bestusapayday2/content/icon2a.png" alt=""></span>
                    Contact<br>
                    &amp; Employment
                </li>
                <li><span class="icon"><img src="_lptemplates/bestusapayday2/content/icon3a.png" alt=""></span>
                    Deposit<br>
                    Information
                </li>
            </ul>
        </div>
    </aside>
    <section class="content-section">
        <div class="container-fluid">
            <!--            <script>-->
            <!--            var paydayparams = {-->
            <!---->
            <!--            logo: "https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png",-->
            <!--            form_style_id: "210",-->
            <!--            a: "1",-->
            <!--            sub: "",-->
            <!--            domain: "",-->
            <!--            vref: encodeURIComponent("https%3A%2F%2Fwww.bestusapayday.com%2F"),-->
            <!--            vkey: "",-->
            <!--            vendor_p1: encodeURIComponent(""),-->
            <!--            flexible: "1",-->
            <!--            iframe_id: "47"-->
            <!--            };-->
            <!--            document.write('<script src="https://paydayapplyform.com/init.php?flexible='+paydayparams.flexible+'&form_style_id='+paydayparams.form_style_id+'&width='+paydayparams.width+'&domain='+paydayparams.domain+'&a='+paydayparams.a+'&sub='+paydayparams.sub+'&iframe_id='+paydayparams.iframe_id+'&vref='+paydayparams.vref+'&vkey='+paydayparams.vkey+'&vendor_p1='+paydayparams.vendor_p1+'"><\/script>');-->
            <!--            </script>-->
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.min.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.confirm.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.maskedinput.min.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/validation.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/fingerprint.js"></script>
            <link rel="stylesheet" type="text/css" href="https://paydayapplyform.com/modules/tools/js-form-us/css/jquery.confirm.css">
            <link rel="stylesheet" type="text/css"
                  href="https://paydayapplyform.com/js-form-us/style/styles/%7B%22style_header_color%22%3A%222b558f%22%2C%22style_header_rounded_corners%22%3A%221%22%2C%22style_header_font_name%22%3A%22arial%2C+sans-serif%22%2C%22style_header_font_size%22%3A%2216%22%2C%22style_header_font_color%22%3A%22ffffff%22%2C%22style_header_italic%22%3A%220%22%2C%22style_header_bold%22%3A%221%22%2C%22style_headerbg_color%22%3A%22f67723%22%2C%22style_step_font_name%22%3A%22arial%2C+sans-serif%22%2C%22style_step_font_size%22%3A%2216%22%2C%22style_step_font_color%22%3A%22ffffff%22%2C%22style_step_italic%22%3A%220%22%2C%22style_step_bold%22%3A%221%22%2C%22style_button_color%22%3A%22f67723%22%2C%22style_button_font_name%22%3A%22arial%2C+sans-serif%22%2C%22style_button_font_color%22%3A%22ffffff%22%2C%22style_button_font_size%22%3A%2216%22%2C%22style_button_italic%22%3A%220%22%2C%22style_button_bold%22%3A%221%22%2C%22style_rounded_corners%22%3A%221%22%2C%22style_field_font_name%22%3A%22arial%2C+sans-serif%22%2C%22label_font_color%22%3A%22505050%22%2C%22style_loader_color%22%3A%22f67723%22%2C%22style_loader_font_family%22%3A%22arial%2C+sans-serif%22%7D/style.css">
            <div id="pdmOverlay" style="display: none">
                <div class="pdmProcessing" id="pdmProcessing">
                    <div class="pdmProcessing-header"><img
                                src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png"></div>
                    <div class="pdmProcessingInner">
                        <h3>We are processing Your application</h3>
                        <h4>Please, do not close this window</h4>
                        <div class="pdmLoader-bar">
                            <div class="pdmLoader-progressLine">
                                <div class="pdmLoader-circle"></div>
                                <div class="pdmLoader-percentage"><b>0</b>%</div>
                            </div>
                        </div>
                        <p class="pdmAttention">Please, be patient while the process of connecting you to a licensed
                            lender completes. You are under no obligation at any stage until you submit your
                            e-signature. If interrupted, the process is likely to fall even upon a new loan application
                            is submitted. </p>
                    </div>
                </div>
                <div class="pdmProcessing" id="pdmRedirect">
                    <div class="pdmProcessing-header"><img
                                src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png"></div>
                    <div class="pdmProcessingInner">
                        <h3>Your Loan has been approved...</h3>
                        <p>Redirecting to Lender...</p>
                        <p>Thank you for your patience.</p>
                        <div style="text-align: center"><img src="https://paydayapplyform.com/modules/tools/js-form-us/images/loader.gif" alt="Loading"></div>
                        <p><a href="" id="clickManuallyUrl" target="_top">CLICK HERE IF YOU WERE NOT REDIRECTED
                                AUTOMATICALLY..</a></p>
                    </div>
                </div>
                <div class="pdmProcessing" id="pdmRedirect2">
                    <div class="pdmProcessing-header"><img
                                src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png"></div>
                    <div class="pdmProcessingInner">
                        <h3>You are being redirected...</h3>
                        <div style="text-align: center"><img src="https://paydayapplyform.com/modules/tools/js-form-us/images/loader.gif" alt="Loading"></div>
                        <p><a href="" id="clickManuallyUrl2" target="_top">CLICK HERE IF YOU WERE NOT REDIRECTED
                                AUTOMATICALLY..</a></p>
                    </div>
                </div>
                <img class="pdmLoader" src="https://paydayapplyform.com/modules/tools/js-form-us/images/loader.gif">
            </div>
            <form method="post">
                <div id="pdmForm">
                    <h1><span>1.</span> Contact Info</h1>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="amount">Loan Amount *</label>
                            <select name="amount" id="amount" class="required pdmValid">
                                <option value="">Select…</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                                <option value="600" selected="selected">600</option>
                                <option value="700">700</option>
                                <option value="800">800</option>
                                <option value="900">900</option>
                                <option value="1000">1000</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmClear"></div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="first_name">First Name *</label>
                            <input type="text" name="first_name" id="first_name" class="required min-2 max-128 alpha"
                                   value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify your first name
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="last_name">Last Name *</label>
                            <input type="text" name="last_name" id="last_name" class="required min-2 max-128 alpha"
                                   value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify your last name
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="email">Email *</label>
                            <input type="text" name="email" id="email" class="required min-3 max-255 email" value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify you Email</div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="zip">Zip Code *</label>
                            <input type="text" name="zip" id="zip" class="required min-5 max-5 numeric" value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify your zip code
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="state">State *</label>
                            <select name="state" id="state" class="required">
                                <option value="">Select…</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="PR">Puerto Rico</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="city">City *</label>
                            <input type="text" name="city" id="city" class="required min-3 max-128 alpha" value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify your city</div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="street_address">Street Address *</label>
                            <input type="text" name="street_address" id="street_address"
                                   class="required streetaddress min-3 max-128" value="">
                            <div class="pdmMessage"><span></span>This field is required, please specify correct street
                                address
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="apartment">Apartment</label>
                            <input type="text" name="apartment" id="apartment" class="alphanum">
                            <div class="pdmMessage"><span></span>This field must contain only alphanumeric characters
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="length_at_address">Months at Address *</label>
                            <select name="length_at_address" id="length_at_address" class="required">
                                <option value="">Select…</option>
                                <option value="3">3 months or less</option>
                                <option value="6">4 to 6 months</option>
                                <option value="12">7 to 12 months</option>
                                <option value="24">More than 1 year</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="rentorown">Home type *</label>
                            <select name="rentorown" id="rentorown" class="required">
                                <option value="">Select…</option>
                                <option value="Rent">Rent</option>
                                <option value="Own">Own</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="gender">Gender *</label>
                            <select name="gender" id="gender" class="required pdmValid">
                                <option value="">Select…</option>
                                <option value="Male" selected="selected">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="driver_license">Driver’s License Number *</label>
                            <input type="text" name="driver_license" id="driver_license" class="required alphanum">
                            <div class="pdmMessage"><span></span>This field is required, please specify your driver's
                                license number
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="issuing_state">ID State *</label>
                            <select name="issuing_state" id="issuing_state" class="required">
                                <option value="">Select…</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="PR">Puerto Rico</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="primaryphone1">Primary Phone *</label>
                            <input type="text" name="primaryphone1" id="primaryphone1"
                                   class="required numeric min-3 max-3 phone1">
                            <div class="pdmMessage"><span></span>Please specify first 3 digits of phone number</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="primaryphone2"> </label>
                            <input type="text" name="primaryphone2" id="primaryphone2"
                                   class="required numeric min-3 max-3 phone2">
                            <div class="pdmMessage"><span></span>Please specify middle 3 digits of phone number</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTinyFW">
                        <div class="pdmInner">
                            <label for="primaryphone3"> </label>
                            <input type="text" name="primaryphone3" id="primaryphone3"
                                   class="required numeric min-4 max-4">
                            <div class="pdmMessage"><span></span>Please specify last 4 digits of phone number</div>
                        </div>
                    </div>
                    <div class="mClear"></div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="workphone1">Cell phone *</label>
                            <input type="text" name="workphone1" id="workphone1"
                                   class="required numeric min-3 max-3 phone1">
                            <div class="pdmMessage"><span></span>Please specify first 3 digits of phone number, this
                                phone number must be different than primary phone
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="workphone2"> </label>
                            <input type="text" name="workphone2" id="workphone2"
                                   class="required numeric min-3 max-3 phone2">
                            <div class="pdmMessage"><span></span>Please specify middle 3 digits of phone number, this
                                phone number must be different than primary phone
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTinyFW">
                        <div class="pdmInner">
                            <label for="workphone3"> </label>
                            <input type="text" name="workphone3" id="workphone3" class="required numeric min-4 max-4">
                            <div class="pdmMessage"><span></span>Please specify last 4 digits of phone number, this
                                phone number must be different than primary phone
                            </div>
                        </div>
                    </div>
                    <div class="mClear"></div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="birth_date_month">Date of Birth *</label>
                            <select name="birth_date_month" id="birth_date_month" class="required numeric">
                                <option value="">Month…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="pdmMessage"><span></span>Please specify date of birth, you must have more than
                                18 years to proceed
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="birth_date_day"> </label>
                            <select name="birth_date_day" id="birth_date_day" class="required numeric">
                                <option value="">Day…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <div class="pdmMessage"><span></span>Please specify date of birth, you must have more than
                                18 years to proceed
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTiny">
                        <div class="pdmInner">
                            <label for="birth_date_year"> </label>
                            <select name="birth_date_year" id="birth_date_year" class="required numeric">
                                <option value="">Year…</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                            </select>
                            <div class="pdmMessage"><span></span>Please specify date of birth, you must have more than
                                18 years to proceed
                            </div>
                            <input type="hidden" name="date_of_birth" id="date_of_birth" class="birthdate" value="//">
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="ssn1">SSN *</label>
                            <input type="text" name="ssn1" id="ssn1" class="required numeric min-3 max-3">
                            <div class="pdmMessage"><span></span>Please specify first 3 digits of your SSN</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="ssn2"> </label>
                            <input type="text" name="ssn2" id="ssn2" class="required numeric min-2 max-2">
                            <div class="pdmMessage"><span></span>Please specify middle 2 digits of your SSN</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTinyFW">
                        <div class="pdmInner">
                            <label for="ssn3"> </label>
                            <input type="text" name="ssn3" id="ssn3" class="required numeric min-4 max-4">
                            <div class="pdmMessage"><span></span>Please specify last 4 digits of your SSN</div>
                        </div>
                    </div>
                    <div class="mClear"></div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="best_contact_time">Best contact time *</label>
                            <select name="best_contact_time" id="best_contact_time" class="required">
                                <option value="">Select…</option>
                                <option value="anytime">Anytime</option>
                                <option value="morning">Morning</option>
                                <option value="afternoon">Afternoon</option>
                                <option value="evening">Evening</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmSpacer"></div>
                    <h1><span>2.</span> Financial Info</h1>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="bank_account_type">Type of Account *</label>
                            <select name="bank_account_type" id="bank_account_type" class="required">
                                <option value="">Select…</option>
                                <option value="checking">Checking</option>
                                <option value="saving">Saving</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="bank_name">Bank Name *</label>
                            <input type="text" name="bank_name" id="bank_name" class="required min-3 max-50">
                            <div class="pdmMessage"><span></span>This field is required, please specify your bank name
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="months_at_bank">Months with Bank Account *</label>
                            <select name="months_at_bank" id="months_at_bank" class="required">
                                <option value="">Select…</option>
                                <option value="1">1 Month</option>
                                <option value="2">2 Months</option>
                                <option value="5">3-6 Months</option>
                                <option value="9">7-12 Months</option>
                                <option value="18">More than 1 year</option>
                                <option value="30">More than 2 years</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="bank_phone1">Bank Phone *</label>
                            <input type="text" name="bank_phone1" id="bank_phone1" class="required numeric min-3 max-3">
                            <div class="pdmMessage"><span></span>Please specify first 3 digits of phone number</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="bank_phone2"> </label>
                            <input type="text" name="bank_phone2" id="bank_phone2"
                                   class="required numeric min-3 max-3 phone2">
                            <div class="pdmMessage"><span></span>Please specify middle 3 digits of phone number</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTinyFW">
                        <div class="pdmInner">
                            <label for="bank_phone3"> </label>
                            <input type="text" name="bank_phone3" id="bank_phone3" class="required numeric min-4 max-4">
                            <div class="pdmMessage"><span></span>Please specify last 4 digits of phone number</div>
                        </div>
                    </div>
                    <div class="mClear"></div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="abarouting">ABA/Routing Number *</label>
                            <input type="text" name="abarouting" id="abarouting" class="required numeric aba">
                            <div class="pdmMessage"><span></span>This field is required, please specify your ABA/Routing
                                Number
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="bank_account_number">Account Number *</label>
                            <input type="text" name="bank_account_number" id="bank_account_number"
                                   class="required numeric account">
                            <div class="pdmMessage"><span></span>This field is required, please specify your account
                                number
                            </div>
                        </div>
                    </div>
                    <div class="pdmClear"></div>
                    <div class="pdmSpacer"></div>
                    <h1><span>3.</span> Employment Info</h1>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employment_type">Income Type *</label>
                            <select name="employment_type" id="employment_type" class="required">
                                <option value="">Select…</option>
                                <option value="employed">Employed</option>
                                <option value="self_employed">Self employed</option>
                                <option value="pension">Pension</option>
                                <option value="disability">Disability</option>
                                <option value="social_security">Social security</option>
                                <option value="unemployed">Unemployed</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_name">Employer *</label>
                            <input type="text" name="employer_name" id="employer_name" class="required min-2 max-50">
                            <div class="pdmMessage"><span></span>This field is required, please specify your employer
                                name
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_job_title">Job Title *</label>
                            <input type="text" name="employer_job_title" id="employer_job_title"
                                   class="required min-2 max-50 alpha">
                            <div class="pdmMessage"><span></span>This field is required</div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_zip">Employer ZIP *</label>
                            <input type="text" name="employer_zip" id="employer_zip"
                                   class="required min-5 max-5 numeric">
                            <div class="pdmMessage"><span></span>This field is required, please specify your zip code
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_state">Employer State *</label>
                            <select name="employer_state" id="employer_state" class="required">
                                <option value="">Select…</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="PR">Puerto Rico</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_city">Employer City *</label>
                            <input type="text" name="employer_city" id="employer_city"
                                   class="required min-3 max-128 alpha">
                            <div class="pdmMessage"><span></span>This field is required, please specify your city</div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="employer_workphone1">Employer Phone *</label>
                            <input type="text" name="employer_workphone1" id="employer_workphone1"
                                   class="required numeric min-3 max-3 phone1">
                            <div class="pdmMessage"><span></span>Employer phone is required, please specify your number
                                in XXX-XXX-XXXX format
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTinyFW">
                        <div class="pdmInner">
                            <label for="employer_workphone2"> </label>
                            <input type="text" name="employer_workphone2" id="employer_workphone2"
                                   class="required numeric min-3 max-3 phone2">
                            <div class="pdmMessage"><span></span>Please specify middle 3 digits of phone number, this
                                phone number must be different than cell phone
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTinyFW">
                        <div class="pdmInner">
                            <label for="employer_workphone3"> </label>
                            <input type="text" name="employer_workphone3" id="employer_workphone3"
                                   class="required numeric min-4 max-4">
                            <div class="pdmMessage"><span></span>Please specify last 4 digits of phone number, this
                                phone number must be different than cell phone
                            </div>
                        </div>
                    </div>
                    <div class="mClear"></div>
                    <div class="pdmInput pdmTiny25">
                        <div class="pdmInner">
                            <label for="month_hired">Date of Hire *</label>
                            <select name="month_hired" id="month_hired" class="required numeric">
                                <option value="">Month…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny25">
                        <div class="pdmInner">
                            <label> </label>
                            <select name="year_hired" id="year_hired" class="required numeric">
                                <option value="">Year…</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                            <input type="hidden" name="month_year_hired" id="month_year_hired" class="pastdate"
                                   value="/1/">
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label for="employer_monthly_income">Monthly Income *</label>
                            <select name="employer_monthly_income" id="employer_monthly_income" class="required">
                                <option value="">Select…</option>
                                <option value="1250">1,126 - 1,375</option>
                                <option value="1500">1,376 - 1,625</option>
                                <option value="1750">1,626 - 1,875</option>
                                <option value="2000">1,876 - 2,125</option>
                                <option value="2250">2,126 - 2,375</option>
                                <option value="2500">2,376 - 2,625</option>
                                <option value="2750">2,626 - 2,875</option>
                                <option value="3000">2,876 - 3,125</option>
                                <option value="3250">3,126 - 3,375</option>
                                <option value="3500">3,376 - 3,625</option>
                                <option value="3750">3,626 - 3,875</option>
                                <option value="4000">3,876 - 4,125</option>
                                <option value="4250">4,126 - 4,375</option>
                                <option value="4500">4,376 - 4,625</option>
                                <option value="4750">4,626 - 4,875</option>
                                <option value="5000">More than 5,000</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label>How Often are you Paid *</label>
                            <select name="pay_frequency" id="pay_frequency" class="required">
                                <option value="">Select…</option>
                                <option value="WEEKLY">WEEKLY</option>
                                <option value="BIWEEKLY">BIWEEKLY</option>
                                <option value="TWICEMONTHLY">TWICEMONTHLY</option>
                                <option value="MONTHLY">MONTHLY</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="pay_date1_month">Pay Date One (mm/dd/yyyy) *</label>
                            <select name="pay_date1_month" id="pay_date1_month" class="required numeric">
                                <option value="">Month…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than current date
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="pay_date1_day"> </label>
                            <select name="pay_date1_day" id="pay_date1_day" class="required numeric">
                                <option value="">Day…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than current date
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTiny">
                        <div class="pdmInner">
                            <label for="pay_date1_year"> </label>
                            <select name="pay_date1_year" id="pay_date1_year" class="required numeric">
                                <option value="">Year…</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than current date
                            </div>
                            <input type="hidden" name="next_two_pay_dates" id="next_two_pay_dates" class="paydate "
                                   value="//">
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="pay_date2_month">Pay Date Two (mm/dd/yyyy) *</label>
                            <select name="pay_date2_month" id="pay_date2_month" class="required numeric">
                                <option value="">Month…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than date in Pay Date One field
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmTiny">
                        <div class="pdmInner">
                            <label for="pay_date2_day"> </label>
                            <select name="pay_date2_day" id="pay_date2_day" class="required numeric">
                                <option value="">Day…</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than date in Pay Date One field
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput pdmFixedTiny">
                        <div class="pdmInner">
                            <label for="pay_date2_year"> </label>
                            <select name="pay_date2_year" id="pay_date2_year" class="required numeric">
                                <option value="">Year…</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required and specified date must be later
                                than date in Pay Date One field
                            </div>
                            <input type="hidden" name="next_two_pay_dates2" id="next_two_pay_dates2" class="paydate "
                                   value="//">
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label>Do you have direct deposit? *</label>
                            <select name="direct_deposit" id="direct_deposit" class="required numeric pdmValid">
                                <option value="">Select…</option>
                                <option value="0">No</option>
                                <option value="1" selected="selected">Yes</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmInput">
                        <div class="pdmInner">
                            <label>Are you active military? (or dependent) *</label>
                            <select name="us_military_dependent" id="us_military_dependent"
                                    class="required numeric pdmValid">
                                <option value="">Select…</option>
                                <option value="0" selected="selected">No</option>
                                <option value="1">Yes</option>
                            </select>
                            <div class="pdmMessage"><span></span>This field is required, make selection from drop-down
                                menu
                            </div>
                        </div>
                    </div>
                    <div class="pdmSpacer"></div>
                </div>
                <div class="pdmCenter">
                    <button href="javascript:void(0)" id="pdmSend" name="submit">Send form</button>
                </div>
            </form>
            <div class="pdmCenter">
                <p class="pdmTerms">By clicking "Send form", I agree to the <a target="_blank"
                                                                               onclick="window.open(this.href,this.target,'width=400,height=430,resizable=yes,scrollbars=yes'); return false;"
                                                                               href="https://paydayapplyform.com/form2/page/n/terms">terms
                        and conditions.</a></p>
            </div>
            <script type="text/javascript">
                var lead = {
                    "lead_id": "a6697dbc"
                    , "date": "2017-09-12 16:00:09"
                    , "iframe_id": "47"
                    , "aff_id": "1"
                    , "sub_id": "2"
                    , "is_mobile": "0"
                    , "product": "1"
                };
            </script>
            <script type="text/javascript">
                /*function sleep(milliseconds) {&nbsp; var start = new Date().getTime();&nbsp; for (var i = 0; i < 1e7; i++) {&nbsp; &nbsp; if ((new Date().getTime() - start) > milliseconds){&nbsp; &nbsp; &nbsp; break;&nbsp; &nbsp; }&nbsp; }}*/
                var payday_lead_callbacks = [];

                function payday_lead_register_callback(callback) {
                    payday_lead_callbacks.push(callback);
                }

                function payday_lead_exec_callbacks(sold, price, dd) {
                    if (sold) {
                        lead.status = "sold";
                    }
                    else {
                        lead.status = "reject";
                    }
                    if (price) {
                        lead.price = price;
                    }
                    else {
                        lead.price = 0;
                    }
                    if (dd) {
                        lead.dd = dd;
                    }
                    else {
                        lead.dd = 0;
                    }
                    ElementInterval = setInterval(function () {
                        for (var i = 0; i < payday_lead_callbacks.length; i++) {
                            payday_lead_callbacks[i](lead);
                        }
                        clearInterval(ElementInterval);
                    }, 0);
                    /*if(payday_lead_callbacks.length > 0) {*/
                    var millis = 3000;
                    var date = new Date();
                    var curDate = null;
                    do {
                        curDate = new Date();
                    } while (curDate - date < millis);
                    /*}*/
                    /*if(payday_lead_callbacks.length > 0) {sleep(4000);}*/
                }
            </script>
            <script type="text/javascript">
                payday_lead_register_callback(function (d) {
                    var ifrm = document.createElement("IFRAME");
                    var src = ("https:" == document.location.protocol ? "https:" : "http:") + "//www.securepaths.com/pixel.cgi?s={lead_id}&p={aff_id}&cmp={iframe_id}&org=chaspaspefr2rutruz5p&rt=action&sl=1&rf=" + encodeURIComponent(document.referrer);
                    src = src.replace("{lead_id}", d.lead_id);
                    src = src.replace("{product_id}", d.product);
                    src = src.replace("{iframe_id}", d.iframe_id);
                    src = src.replace("{aff_id}", d.aff_id);
                    ifrm.setAttribute("src", src);
                    ifrm.style.width = 1 + "px";
                    ifrm.style.height = 1 + "px";
                    ifrm.frameBorder = 0;
                    document.body.appendChild(ifrm);
                });
            </script>
            <script>
                /*payday_lead_exec_callbacks(0);*/
            </script>
            <script>
                var pdm = jQuery.noConflict(true);
                pdm("#us_military_dependent").change(function () {
                    if (pdm("#us_military_dependent").val() == 1) {
                        pdm.confirm({
                            "cssClass": "dependent-confirm"
                            ,
                            "title": "Confirmation"
                            ,
                            "message": "You have selected being employed by US Military or dependent of someone employed by US Military."
                            ,
                            "buttons": {
                                "Yes": {
                                    "class": "blue"
                                    , "action": function () {
                                        pdm("#us_military_dependent").val("1");
                                    }
                                }
                                , "No": {
                                    "class": "gray"
                                    , "action": function () {
                                        pdm("#us_military_dependent").val("0");
                                    }
                                }
                            }
                        });
                    }
                });
                pdm("#direct_deposit").change(function () {
                    if (pdm("#direct_deposit").val() == 0) {
                        pdm.confirm({
                            "cssClass": "dependent-confirm"
                            ,
                            "title": "Confirmation"
                            ,
                            "message": "Your selection indicates that your employer does not use Electronic Deposit for your income. It is correct?"
                            ,
                            "buttons": {
                                "Yes": {
                                    "class": "blue"
                                    , "action": function () {
                                        pdm("#direct_deposit").val("0");
                                    }
                                }
                                , "No": {
                                    "class": "gray"
                                    , "action": function () {
                                        pdm("#direct_deposit").val("1");
                                    }
                                }
                            }
                        });
                    }
                });
                pdm(document).ready(function () {
                    if (typeof paydayparams != "undefined" && paydayparams.hasOwnProperty("background") && paydayparams.background == 1) {
                        pdm("#pdmForm").css({
                            "background-color": "#fff"
                            , "padding": "10px"
                        });
                        pdm("#pdmSend").parent().css({
                            "background-color": "#fff"
                            , "padding": "10px"
                        });
                    }
                    if (typeof Fingerprint === "function") {
                        var fp = new Fingerprint({
                            screen_resolution: true
                        });
                        pdm.getJSON("https://paydayapplyform.com/js-form-us/finger-print/?callback=?", {
                            "token": "a6697dbc"
                            , "fingerprint": fp.get()
                        }, function (data) {
                        });
                    }
                    pdm.getJSON("https://paydayapplyform.com/js-form-us/mark-as-view/?callback=?", {
                        "token": "a6697dbc"
                    }, function (data) {
                    });
                    if (typeof paydayparams != "undefined" && paydayparams.hasOwnProperty("logo")) {
                        pdm(".pdmProcessing-header").append(pdm("<img>").attr({
                            src: paydayparams.logo
                        }));
                    }
                    pdm("input, select").blur(function () {
                        pdm.getJSON("https://paydayapplyform.com/js-form-us/validate/?callback=?", {
                            fieldName: pdm(this).attr("id")
                            , fieldValue: pdm(this).val()
                            , "token": "a6697dbc"
                        }, function (response) {
                            if (response.error) {
                                pdm("#" + response.field).removeClass("pdmValid");
                                if (!pdm("#" + response.field).hasClass("pdmError")) pdm("#" + response.field).addClass("pdmError");
                            }
                        });
                    });
                    pdm("#pdmSend").click(function () {
                        pdm("#pdmOverlay").show();
                        pdm.getJSON("https://paydayapplyform.com/js-form-us/process/?callback=?", {
                            amount: pdm("#amount").val()
                            , first_name: pdm("#first_name").val()
                            , last_name: pdm("#last_name").val()
                            , street_address: pdm("#street_address").val()
                            , apartment: pdm("#apartment").val()
                            , city: pdm("#city").val()
                            , state: pdm("#state").val()
                            , zip: pdm("#zip").val()
                            , length_at_address: pdm("#length_at_address").val()
                            , ssn1: pdm("#ssn1").val()
                            , ssn2: pdm("#ssn2").val()
                            , ssn3: pdm("#ssn3").val()
                            , primaryphone1: pdm("#primaryphone1").val()
                            , primaryphone2: pdm("#primaryphone2").val()
                            , primaryphone3: pdm("#primaryphone3").val()
                            , email: pdm("#email").val()
                            , date_of_birth: pdm("#date_of_birth").val()
                            , driver_license: pdm("#driver_license").val()
                            , issuing_state: pdm("#issuing_state").val()
                            , rentorown: pdm("#rentorown").val()
                            , employer_name: pdm("#employer_name").val()
                            , employment_type: pdm("#employment_type").val()
                            , employer_workphone1: pdm("#employer_workphone1").val()
                            , employer_workphone2: pdm("#employer_workphone2").val()
                            , employer_workphone3: pdm("#employer_workphone3").val()
                            , month_year_hired: pdm("#month_year_hired").val()
                            , us_military_dependent: pdm("#us_military_dependent").val()
                            , pay_frequency: pdm("#pay_frequency").val()
                            , next_two_pay_dates: pdm("#next_two_pay_dates").val()
                            , next_two_pay_dates2: pdm("#next_two_pay_dates2").val()
                            , direct_deposit: pdm("#direct_deposit").val()
                            , bank_account_type: pdm("#bank_account_type").val()
                            , bank_name: pdm("#bank_name").val()
                            , months_at_bank: pdm("#months_at_bank").val()
                            , bank_account_number: pdm("#bank_account_number").val()
                            , abarouting: pdm("#abarouting").val()
                            , gender: pdm("#gender").val()
                            , best_contact_time: pdm("#best_contact_time").val()
                            , bank_phone1: pdm("#bank_phone1").val()
                            , bank_phone2: pdm("#bank_phone2").val()
                            , bank_phone3: pdm("#bank_phone3").val()
                            , employer_job_title: pdm("#employer_job_title").val()
                            , employer_monthly_income: pdm("#employer_monthly_income").val()
                            , employer_zip: pdm("#employer_zip").val()
                            , employer_state: pdm("#employer_state").val()
                            , employer_city: pdm("#employer_city").val()
                            , reference1_name: pdm("#reference1_name").val()
                            , reference1_phone1: pdm("#reference1_phone1").val()
                            , reference1_phone2: pdm("#reference1_phone2").val()
                            , reference1_phone3: pdm("#reference1_phone3").val()
                            , reference1_relationship: pdm("#reference1_relationship").val()
                            , reference2_name: pdm("#reference2_name").val()
                            , reference2_phone1: pdm("#reference2_phone1").val()
                            , reference2_phone2: pdm("#reference2_phone2").val()
                            , reference2_phone3: pdm("#reference2_phone3").val()
                            , reference2_relationship: pdm("#reference2_relationship").val()
                            , workphone1: pdm("#workphone1").val()
                            , workphone2: pdm("#workphone2").val()
                            , workphone3: pdm("#workphone3").val()
                            , "token": "a6697dbc"
                        }, function (data) {
                            if (data.response == "0") {
                                if (data.messages != null) {
                                    for (var propertyName in data.messages) {
                                        if (data.messages.hasOwnProperty(propertyName)) {
                                            pdm("#" + propertyName).removeClass("pdmValid");
                                            if (!pdm("#" + propertyName).hasClass("pdmError")) pdm("#" + propertyName).addClass("pdmError");
                                            if (propertyName == "date_of_birth") {
                                                pdm("#birth_date_day, #birth_date_month, #birth_date_year").removeClass("pdmValid");
                                                if (!pdm("#birth_date_day").hasClass("pdmError")) pdm("#birth_date_day").addClass("pdmError");
                                                if (!pdm("#birth_date_month").hasClass("pdmError")) pdm("#birth_date_month").addClass("pdmError");
                                                if (!pdm("#birth_date_year").hasClass("pdmError")) pdm("#birth_date_year").addClass("pdmError");
                                            }
                                            if (propertyName == "month_year_hired") {
                                                pdm("#month_hired, #year_hired").removeClass("pdmValid");
                                                if (!pdm("#month_hired").hasClass("pdmError")) pdm("#month_hired").addClass("pdmError");
                                                if (!pdm("#year_hired").hasClass("pdmError")) pdm("#year_hired").addClass("pdmError");
                                            }
                                            if (propertyName == "next_two_pay_dates") {
                                                pdm("#pay_date1_day, #pay_date1_month, #pay_date1_year").removeClass("pdmValid");
                                                if (!pdm("#pay_date1_day").hasClass("pdmError")) pdm("#pay_date1_day").addClass("pdmError");
                                                if (!pdm("#pay_date1_month").hasClass("pdmError")) pdm("#pay_date1_month").addClass("pdmError");
                                                if (!pdm("#pay_date1_year").hasClass("pdmError")) pdm("#pay_date1_year").addClass("pdmError");
                                            }
                                            if (propertyName == "next_two_pay_dates2") {
                                                pdm("#pay_date1_day, #pay_date1_month, #pay_date1_year").removeClass("pdmValid");
                                                if (!pdm("#pay_date2_day").hasClass("pdmError")) pdm("#pay_date2_day").addClass("pdmError");
                                                if (!pdm("#pay_date2_month").hasClass("pdmError")) pdm("#pay_date2_month").addClass("pdmError");
                                                if (!pdm("#pay_date2_year").hasClass("pdmError")) pdm("#pay_date2_year").addClass("pdmError");
                                            }
                                        }
                                    }
                                }
                                if (!pdm.isEmptyObject(data.messages)) pdm("html, body").animate({
                                    scrollTop: pdm("#pdmForm .pdmError").first().offset().top - 40
                                }, 500);
                                pdm("#pdmOverlay").hide();
                            }
                            else if (data.response == "1") {
                                pdm(".pdmLoader").hide();
                                setInterval(function () {
                                    var i = pdm("div.pdmLoader-progressLine .pdmLoader-percentage b").text();
                                    if (i >= 100) return;
                                    i++;
                                    pdm("div.pdmLoader-progressLine .pdmLoader-percentage b").text(i).parent().parent().width(i + "%");
                                }, 3000);
                                pdm("#pdmProcessing").show();
                                var postToUrl = "https://paydayapplyform.com/process.php";
                                postToUrl = "https://paydayapplyform.com/leadspinger/pinger-new-form-js/process/";
                                pdm.getJSON("https://paydayapplyform.com/js-form-us/get-redir/?callback=?", {
                                    "token": "a6697dbc"
                                }, function (redirResp) {
                                    if (redirResp.redir) {
                                        pdm.getJSON(postToUrl + "?callback=?", {
                                            form: "a6697dbc"
                                            , redirection: redirResp.redir
                                        }, function (resp) { /*paydayparams.userCallback("status.rejected","price.0");window.top.location.href = "http://coreo.pl/";*/
                                            if (resp.url && resp.approved && resp.approved == "YES") {
                                                pdm("#pdmProcessing").hide();
                                                pdm("#pdmRedirect").show();
                                                pdm("#clickManuallyUrl").attr("href", resp.url);
                                                var price = 0.0;
                                                if (resp.price) {
                                                    price = resp.price;
                                                }
                                                payday_lead_exec_callbacks(1, price);
                                                if (typeof paydayparams !== "undefined" && typeof paydayparams.userCallback === "function") {
                                                    paydayparams.userCallback(resp.status, price);
                                                }
                                                window.top.location.href = resp.url;
                                            }
                                            if (resp.url && resp.approved && resp.approved == "NO") {
                                                pdm("#pdmProcessing").hide();
                                                pdm("#pdmRedirect2").show();
                                                pdm("#clickManuallyUrl2").attr("href", resp.url);
                                                payday_lead_exec_callbacks(0);
                                                if (typeof paydayparams !== "undefined" && typeof paydayparams.userCallback === "function") {
                                                    paydayparams.userCallback(resp.status, 0);
                                                }
                                                window.top.location.href = resp.url;
                                            }
                                        });
                                    }
                                });
                            }
                        });
                    });
                });
            </script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/app.js"></script>

        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <img src="_lptemplates/bestusapayday2/images/logo-bottom.png" alt="" class="bottom-logo">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="testimonials/testimonials.html">Testimonials</a></li>
                        <li><a href="how-it-works/how-it-works.html">How It Works</a></li>
                        <li><a href="faq/faq.html">FAQ</a></li>
                        <li><a href="terms/terms.html">Terms</a></li>
                        <li><a href="https://www.bestusapayday.com/privacy-policy/privacy-policy.html">Privacy
                                policy</a></li>
                        <li><a href="https://www.bestusapayday.com/start/start.html">Start</a></li>
                        <li><a href="http://opt-out-supress.com/">Opt out</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p>© 2017 bestusapayday.com</p>
                </div>
            </div>
        </div>
    </footer>
    <aside class="footer-bottom-text">
        <div class="container-fluid">
            <p>Legal Disclaimer: This website does not constitute an offer or solicitation to lend. bestusapayday.com is
                not a lender and does not make loans or credit decisions. bestusapayday.com provides a matching service
                only and is not acting as a representative, agent, or correspondent for any of the lenders we contract
                with. bestusapayday.com does not charge a service fee. bestusapayday.com does not control and is not
                responsible for the actions or inactions of any lender. bestusapayday.com does not endorse any
                particular lender or loan product. You are under no obligation to use the service, initiate contact, or
                request credit with any of the lenders. This service is not available in all states. The residents of
                Arkansas, New York, Vermont and West Virginia will not be able to use the service of the website.
                Service availability and scope are subject to change without notice.<br>
                Subject to our privacy policy, bestusapayday.com will transfer your information to lenders in our
                program and other service providers and marketing companies with which we do business who may or may not
                offer payday loans up to $1,000 and online personal loans up to $3,000. bestusapayday.com does not
                guarantee that completing an online form will result in your being matched with a lender, being offered
                a loan product with satisfactory rates or terms, or a loan product of the requested sum or desirable
                terms, or receiving any approval from a lender in the first place.</p>
            <p>Credit Check: Participating lenders may verify your social security number, driver license number,
                national id, or any other state or federal identifications and review your information against national
                databases, including but not limited to Equifax, TransUnion, and Experian, to determine your credit
                worthiness, credit standing and/or credit capacity. By submitting your information via our online form
                on this website, you agree to allow any and all participating lenders to verify your information and
                check your credit.<br>
                Not all the lenders in our network can provide up to $1,000 in payday loans and $3,000 in online
                personal loans. The limits and regulations vary from state to state. Cash transfer times and terms may
                vary from lender to lender.</p>
            <p>Consumer Notice: We remind that payday loans and online personal loans for small dollar amounts are not a
                long term financial solution. These credit options imply relatively high interest rates and become a
                very costly solution if used improperly. Consumers that seek funds for longer terms or debt relief
                should consult credit advisor prior to making credit decisions of taking a short term or an online
                personal loan for small dollar amount.</p>
        </div>
    </aside>
</div>
<script src="_lptemplates/bestusapayday2/js/bootstrap.min.js"></script>


</body>
</html>