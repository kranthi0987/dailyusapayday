<?php
error_reporting(0);
session_start();
include("config.php");
$my_connection = mysql_connect($db_host, $db_user, $db_pass) or die("connection cont be made");
mysql_select_db("dailyusapayday", $my_connection) or die("cant select db");
//not in use

if (isset($_POST['submit'])) {
    $room_types = $_POST['room_types'];
    $room_price = $_POST['room_price'];
    $no_rooms = $_POST['no_rooms'];
    $ac = $_POST['ac'];
    $gyser = $_POST['gyser'];
    $western = $_POST['western'];
    $beds = $_POST['Beds'];
    $location = $_POST['location'];
    if (isset($_POST['submit'])) {
        $query = "INSERT INTO rooms SET room_types ='$room_types',room_price = '$room_price',no_rooms = '$no_rooms',ac = '$ac',gyser = '$gyser', western = '$western',Beds='$beds',location='$location'";
//           echo $query;
        $result1 = mysql_query($query, $my_connection) or die(mysql_error());
        $_SESSION['msg'] = "Your Data inserted Successfully";
        header('location:talakonaroomupdate.php');
    } else {


    }
}
?>
<html lang="en"><head>
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
                <p class="logo"><a href="index.html"><img src="_lptemplates/bestusapayday2/images/logo.png" width="143" height="48" alt="logo"></a></p>
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
                <li><span class="icon"><img src="_lptemplates/bestusapayday2/content/icon2a.png" alt=""></span> Contact<br>
                    &amp; Employment
                </li>
                <li><span class="icon"><img src="_lptemplates/bestusapayday2/content/icon3a.png" alt=""></span> Deposit<br>
                    Information
                </li>
            </ul>
        </div>
    </aside>
    <section class="content-section">
        <div class="container-fluid">
            <!--<script>-->
            <!--var paydayparams = {-->

            <!--logo: "https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png",-->
            <!--form_style_id: "210",-->
            <!--a: "1",-->
            <!--sub: "",-->
            <!--domain: "",-->
            <!--vref: encodeURIComponent("https%3A%2F%2Fwww.bestusapayday.com%2F"),-->
            <!--vkey: "",-->
            <!--vendor_p1: encodeURIComponent(""),-->
            <!--flexible: "1",-->
            <!--iframe_id: "47"-->
            <!--};-->
            <!--document.write('<script src="https://paydayapplyform.com/init.php?flexible='+paydayparams.flexible+'&form_style_id='+paydayparams.form_style_id+'&width='+paydayparams.width+'&domain='+paydayparams.domain+'&a='+paydayparams.a+'&sub='+paydayparams.sub+'&iframe_id='+paydayparams.iframe_id+'&vref='+paydayparams.vref+'&vkey='+paydayparams.vkey+'&vendor_p1='+paydayparams.vendor_p1+'"><\/script>');-->
            <!--</script>-->
            <script src="https://paydayapplyform.com/?flexible=1&amp;form_style_id=210&amp;domain=&amp;aff_id=1&amp;sub=&amp;iframe_id=47&amp;vref=https%253A%252F%252Fwww.bestusapayday.com%252F&amp;vkey=&amp;vendor_p1=&amp;stamp=1505240913"></script>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.min.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.confirm.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/jquery.maskedinput.min.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/validation.js"></script>
            <script src="https://paydayapplyform.com/modules/tools/js-form-us/js/fingerprint.js"></script>
            <link rel="stylesheet" type="text/css" href="https://paydayapplyform.com/modules/tools/js-form-us/css/jquery.confirm.css">
            <div id="pdmOverlay" style="display: none">
                <div class="pdmProcessing" id="pdmProcessing">
                    <div class="pdmProcessing-header"><img src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png" style="">
                    </div>
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
                    <div class="pdmProcessing-header"><img src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png" style="">
                    </div>
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
                    <div class="pdmProcessing-header"><img src="https://www.quickloanusa.com/_lptemplates/quickloanusa/images/logo.png" style="">
                    </div>
                    <div class="pdmProcessingInner">
                        <h3>You are being redirected...</h3>
                        <div style="text-align: center"><img src="https://paydayapplyform.com/modules/tools/js-form-us/images/loader.gif" alt="Loading"></div>
                        <p><a href="" id="clickManuallyUrl2" target="_top">CLICK HERE IF YOU WERE NOT REDIRECTED
                                AUTOMATICALLY..</a></p>
                    </div>
                </div>
                <img class="pdmLoader" src="https://paydayapplyform.com/modules/tools/js-form-us/images/loader.gif">
            </div>


            <div class="pdmCenter">

            </div>
            <script>

                pdm(document).ready(function () {

                    if (typeof paydayparams != "undefined" && paydayparams.hasOwnProperty("logo")) {
                        pdm(".pdmProcessing-header").append(pdm("<img>").attr({
                            src: paydayparams.logo
                        }));
                    }
                    pdm("input, select").blur(function () {
                        pdm.getJSON("https://paydayapplyform.com/js-form-us/validate/?callback=?", {
                            fieldName: pdm(this).attr("id")
                            , fieldValue: pdm(this).val()
                            , "token": "168c9db1"
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
                            , "token": "168c9db1"
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

                            }

                        });
                    });
                });
            </script>


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


</body></html>