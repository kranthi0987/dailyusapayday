pdm(document).ready(function() {
    function check(id) {

        var classList = pdm("#" + id).attr("class").split(" ");
        if(!isValid(pdm("#" + id).val(), classList)) {
            pdm("#" + id).removeClass("pdmValid");
            if(!pdm("#" + id).hasClass("pdmError"))
                pdm("#" + id).addClass("pdmError");
        } else {
            pdm("#" + id).removeClass("pdmError");
            if(!pdm("#" + id).hasClass("pdmValid"))
                pdm("#" + id).addClass("pdmValid");
        }
    }

    function multiCheck(ids) {
        for(var i = 0; i < ids.length; i++) {
            check(ids[i]);
        }
    }

    function isBiggerDate(date1container, date2container) {
        var date1 = pdm("#" + date1container).val();
        var date2 = pdm("#" + date2container).val();

        if(date1.match("^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}$") && date2.match("^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}$")) {
            var inputDate1 = date1.split("/");
            inputDate1 = new Date(inputDate1[2], inputDate1[0] - 1, inputDate1[1], 0, 0, 0, 0);
            var inputTime1 = inputDate1.getTime();
            var inputDate2 = date2.split("/");
            inputDate2 = new Date(inputDate2[2], inputDate2[0] - 1, inputDate2[1], 0, 0, 0, 0);
            var inputTime2 = inputDate2.getTime();
            if(inputTime2 - inputTime1 <= 0) {
                if(!pdm("#" + date2container).hasClass("pdmError")) {
                    pdm("#" + date2container).addClass("pdmError");
                    pdm("#pay_date2_day, #pay_date2_month, #pay_date2_year").removeClass("pdmValid");
                    if(!pdm("#pay_date2_day").hasClass("pdmError"))
                        pdm("#pay_date2_day").addClass("pdmError");
                    if(!pdm("#pay_date2_month").hasClass("pdmError"))
                        pdm("#pay_date2_month").addClass("pdmError");
                    if(!pdm("#pay_date2_year").hasClass("pdmError"))
                        pdm("#pay_date2_year").addClass("pdmError");
                }
                return false;
            } else {
                multiCheck(['pay_date2_day', 'pay_date2_month', 'pay_date2_year', date2container]);
                if(pdm("#next_two_pay_dates2").hasClass("pdmError")) {
                    pdm("#pay_date2_day, #pay_date2_month, #pay_date2_year").removeClass("pdmValid");
                    if(!pdm("#pay_date2_day").hasClass("pdmError"))
                        pdm("#pay_date2_day").addClass("pdmError");
                    if(!pdm("#pay_date2_month").hasClass("pdmError"))
                        pdm("#pay_date2_month").addClass("pdmError");
                    if(!pdm("#pay_date2_year").hasClass("pdmError"))
                        pdm("#pay_date2_year").addClass("pdmError");
                }
            }
        }
        //for incorrect values there is different validation for date
        return true;
    }

    function togglePrevAddress() {
        if(pdm("#address_length_year").val() != "" && pdm("#address_length_months").val() != "") {
            var container = pdm("#pdmPrevAddress");
            if((parseInt(pdm("#address_length_year").val()) == 2 && parseInt(pdm("#address_length_months").val()) == 0) || parseInt(pdm("#address_length_year").val()) < 2) {
                console.log("show");
                if(container.length > 0) {
                    container.show();
                    container.find(":input").each(function() {
                        pdm(this).removeAttr("disabled");
                        var n = pdm(this).attr("name");
                        var pos = n.indexOf("__Tdisabled");
                        if(pos != -1) {
                            var nn = n.substr(0, n.indexOf("__Tdisabled"));
                            pdm(this).attr("name", nn);
                        }

                        var n = pdm(this).attr("id");
                        var pos = n.indexOf("__Tdisabled");
                        if(pos != -1) {
                            var nn = n.substr(0, n.indexOf("__Tdisabled"));
                            pdm(this).attr("id", nn);
                        }
                    });
                }
            } else {
                if(container.length > 0) {
                    console.log("hide");
                    container.hide();
                    container.find(":input").each(function() {
                        pdm(this).attr("disabled", "disabled").removeClass("pdmError");
                        var n = pdm(this).attr("name");
                        var pos = n.indexOf("__Tdisabled");
                        if(pos == -1) {
                            pdm(this).attr("name", pdm(this).attr("name") + "__Tdisabled");
                        }

                        var n = pdm(this).attr("id");
                        var pos = n.indexOf("__Tdisabled");
                        if(pos == -1) {
                            pdm(this).attr("id", pdm(this).attr("id") + "__Tdisabled");
                        }
                    });
                }
            }
        }
    }

    function checkWorkphone() {
        if(pdm('#workphone1').val() == '' || pdm('#workphone2').val() == '' || pdm('#workphone3').val() == '')
            return;

        if(pdm('#workphone1').val() == pdm('#primaryphone1').val() &&
            pdm('#workphone2').val() == pdm('#primaryphone2').val() &&
            pdm('#workphone3').val() == pdm('#primaryphone3').val()) {

            pdm("#workphone1, #workphone2, #workphone3").removeClass("pdmValid");

            if(!pdm("#workphone1").hasClass("pdmError"))
                pdm("#workphone1").addClass("pdmError");
            if(!pdm("#workphone2").hasClass("pdmError"))
                pdm("#workphone2").addClass("pdmError");
            if(!pdm("#workphone3").hasClass("pdmError"))
                pdm("#workphone3").addClass("pdmError")

        } else {
            multiCheck(["workphone1", "workphone2", "workphone3"]);
        }
    }

    function checkWorkphone2() {
        if(pdm('#employer_workphone1').val() == '' || pdm('#employer_workphone2').val() == '' || pdm('#employer_workphone3').val() == '')
            return;

        if(pdm('#workphone1').val() == pdm('#employer_workphone1').val() &&
            pdm('#workphone2').val() == pdm('#employer_workphone2').val() &&
            pdm('#workphone3').val() == pdm('#employer_workphone3').val()) {

            pdm("#employer_workphone1, #employer_workphone2, #employer_workphone3").removeClass("pdmValid");

            if(!pdm("#employer_workphone1").hasClass("pdmError"))
                pdm("#employer_workphone1").addClass("pdmError");
            if(!pdm("#employer_workphone2").hasClass("pdmError"))
                pdm("#employer_workphone2").addClass("pdmError");
            if(!pdm("#employer_workphone3").hasClass("pdmError"))
                pdm("#employer_workphone3").addClass("pdmError")

        } else {
            multiCheck(["employer_workphone1", "employer_workphone2", "employer_workphone3"]);
        }
    }

    pdm("#birth_date_day,  #birth_date_month, #birth_date_year").change(function() {
        pdm("#date_of_birth").val(pdm("#birth_date_month").val() + "/" + pdm("#birth_date_day").val() + "/" + pdm("#birth_date_year").val());
    });
    pdm("#month_hired,  #year_hired").change(function() {
        pdm("#month_year_hired").val(pdm("#month_hired").val() + "/1/" + pdm("#year_hired").val());
    });
    pdm("#pay_date1_day,  #pay_date1_month, #pay_date1_year").change(function() {
        pdm("#next_two_pay_dates").val(pdm("#pay_date1_month").val() + "/" + pdm("#pay_date1_day").val() + "/" + pdm("#pay_date1_year").val());
    });
    pdm("#pay_date2_day,  #pay_date2_month, #pay_date2_year").change(function() {
        pdm("#next_two_pay_dates2").val(pdm("#pay_date2_month").val() + "/" + pdm("#pay_date2_day").val() + "/" + pdm("#pay_date2_year").val());
    });

    pdm("input, select").blur(function() {
        check(pdm(this).attr("id"));
        /* birth_from_date */
        if(pdm(this).attr("id") == "birth_date_day" || pdm(this).attr("id") == "birth_date_month" || pdm(this).attr("id") == "birth_date_year") {
            multiCheck(["birth_date_day","birth_date_month","birth_date_year","date_of_birth"]);
            if(pdm("#date_of_birth").hasClass("pdmError")) {
                pdm("#birth_date_day, #birth_date_month, #birth_date_year").removeClass("pdmValid");
                if(!pdm("#birth_date_day").hasClass("pdmError"))
                    pdm("#birth_date_day").addClass("pdmError");
                if(!pdm("#birth_date_month").hasClass("pdmError"))
                    pdm("#birth_date_month").addClass("pdmError");
                if(!pdm("#birth_date_year").hasClass("pdmError"))
                    pdm("#birth_date_year").addClass("pdmError");
            }
        }
        /* month_year_hired */
        if(pdm(this).attr("id") == "year_hired" || pdm(this).attr("id") == "month_hired") {
            multiCheck(["year_hired","month_hired","month_year_hired"]);
            if(pdm("#month_year_hired").hasClass("pdmError")) {
                pdm("#month_hired, #year_hired").removeClass("pdmValid");
                if(!pdm("#month_hired").hasClass("pdmError"))
                    pdm("#month_hired").addClass("pdmError");
                if(!pdm("#year_hired").hasClass("pdmError"))
                    pdm("#year_hired").addClass("pdmError");
            }
        }
        /* next_two_pay_dates */
        if(pdm(this).attr("id") == "pay_date1_day" || pdm(this).attr("id") == "pay_date1_month" || pdm(this).attr("id") == "pay_date1_year") {
            multiCheck(["pay_date1_day","pay_date1_month","pay_date1_year","next_two_pay_dates"]);
            isBiggerDate("next_two_pay_dates", "next_two_pay_dates2");
            if(pdm("#next_two_pay_dates").hasClass("pdmError")) {
                pdm("#pay_date1_day, #pay_date1_month, #pay_date1_year").removeClass("pdmValid");
                if(!pdm("#pay_date1_day").hasClass("pdmError"))
                    pdm("#pay_date1_day").addClass("pdmError");
                if(!pdm("#pay_date1_month").hasClass("pdmError"))
                    pdm("#pay_date1_month").addClass("pdmError");
                if(!pdm("#pay_date1_year").hasClass("pdmError"))
                    pdm("#pay_date1_year").addClass("pdmError");
            }
        }
        /* next_two_pay_dates2 */
        if(pdm(this).attr("id") == "pay_date2_day" || pdm(this).attr("id") == "pay_date2_month" || pdm(this).attr("id") == "pay_date2_year") {
            multiCheck(["pay_date2_day","pay_date2_month","pay_date2_year","next_two_pay_dates2"]);
            isBiggerDate("next_two_pay_dates", "next_two_pay_dates2");
            if(pdm("#next_two_pay_dates2").hasClass("pdmError")) {
                pdm("#pay_date2_day, #pay_date2_month, #pay_date2_year").removeClass("pdmValid");
                if(!pdm("#pay_date2_day").hasClass("pdmError"))
                    pdm("#pay_date2_day").addClass("pdmError");
                if(!pdm("#pay_date2_month").hasClass("pdmError"))
                    pdm("#pay_date2_month").addClass("pdmError");
                if(!pdm("#pay_date2_year").hasClass("pdmError"))
                    pdm("#pay_date2_year").addClass("pdmError");
            }
        }
        if(pdm(this).attr("id") == "address_length_year" || pdm(this).attr("id") == "address_length_months") {
            togglePrevAddress();
        }

        /* alternate phone */
        if(pdm(this).attr("id") == "alternatephone1" || pdm(this).attr("id") == "alternatephone2" || pdm(this).attr("id") == "alternatephone3") {
            if(pdm("#alternatephone1").val().length > 0 || pdm("#alternatephone2").val().length > 0 || pdm("#alternatephone3").val().length > 0) {
                if(!pdm("#alternatephone1").hasClass("required"))
                    pdm("#alternatephone1").addClass("required");
                if(!pdm("#alternatephone2").hasClass("required"))
                    pdm("#alternatephone2").addClass("required");
                if(!pdm("#alternatephone3").hasClass("required"))
                    pdm("#alternatephone3").addClass("required")
                multiCheck(["alternatephone1", "alternatephone2", "alternatephone3"]);
            } else {
                pdm("#alternatephone1").removeClass("required");
                pdm("#alternatephone2").removeClass("required");
                pdm("#alternatephone3").removeClass("required");
                multiCheck(["alternatephone1", "alternatephone2", "alternatephone3"]);
            }
        }

        if(pdm(this).attr("id") == "workphone1" || pdm(this).attr("id") == "workphone2" || pdm(this).attr("id") == "workphone3" ||
            pdm(this).attr("id") == "primaryphone1" || pdm(this).attr("id") == "primaryphone2" || pdm(this).attr("id") == "primaryphone3") {
            checkWorkphone();
        }

        if(pdm(this).attr("id") == "workphone1" || pdm(this).attr("id") == "workphone2" || pdm(this).attr("id") == "workphone3" ||
            pdm(this).attr("id") == "employer_workphone1" || pdm(this).attr("id") == "employer_workphone2" || pdm(this).attr("id") == "employer_workphone3") {
            checkWorkphone2();
        }

    });
    pdm("input").keyup(function() {
        check(pdm(this).attr("id"));
        /* alternate phone */
        if(pdm(this).attr("id") == "alternatephone1" || pdm(this).attr("id") == "alternatephone2" || pdm(this).attr("id") == "alternatephone3") {
            if(pdm("#alternatephone1").val().length > 0 || pdm("#alternatephone2").val().length > 0 || pdm("#alternatephone3").val().length > 0) {
                if(!pdm("#alternatephone1").hasClass("required"))
                    pdm("#alternatephone1").addClass("required");
                if(!pdm("#alternatephone2").hasClass("required"))
                    pdm("#alternatephone2").addClass("required");
                if(!pdm("#alternatephone3").hasClass("required"))
                    pdm("#alternatephone3").addClass("required")
                multiCheck(["alternatephone1", "alternatephone2", "alternatephone3"]);
            } else {
                pdm("#alternatephone1").removeClass("required");
                pdm("#alternatephone2").removeClass("required");
                pdm("#alternatephone3").removeClass("required");
                multiCheck(["alternatephone1", "alternatephone2", "alternatephone3"]);
            }
        }
        if(pdm(this).attr("id") == "workphone1" || pdm(this).attr("id") == "workphone2" || pdm(this).attr("id") == "workphone3" ||
            pdm(this).attr("id") == "primaryphone1" || pdm(this).attr("id") == "primaryphone2" || pdm(this).attr("id") == "primaryphone3") {
            checkWorkphone();
        }

        if(pdm(this).attr("id") == "workphone1" || pdm(this).attr("id") == "workphone2" || pdm(this).attr("id") == "workphone3" ||
            pdm(this).attr("id") == "employer_workphone1" || pdm(this).attr("id") == "employer_workphone2" || pdm(this).attr("id") == "employer_workphone3") {
            checkWorkphone2();
        }
    });
    pdm("select").change(function() {
        check(pdm(this).attr("id"));
        /* birth_date */
        if(pdm(this).attr("id") == "birth_date_day" || pdm(this).attr("id") == "birth_date_month" || pdm(this).attr("id") == "birth_date_year") {
            multiCheck(["birth_date_day","birth_date_month","birth_date_year","date_of_birth"]);
            if(pdm("#date_of_birth").hasClass("pdmError")) {
                pdm("#birth_date_day, #birth_date_month, #birth_date_year").removeClass("pdmValid");
                if(!pdm("#birth_date_day").hasClass("pdmError"))
                    pdm("#birth_date_day").addClass("pdmError");
                if(!pdm("#birth_date_month").hasClass("pdmError"))
                    pdm("#birth_date_month").addClass("pdmError");
                if(!pdm("#birth_date_year").hasClass("pdmError"))
                    pdm("#birth_date_year").addClass("pdmError");
            }
        }
        /* month_year_hired */
        if(pdm(this).attr("id") == "year_hired" || pdm(this).attr("id") == "month_hired") {
            multiCheck(["year_hired","month_hired","month_year_hired"]);
            if(pdm("#month_year_hired").hasClass("pdmError")) {
                pdm("#month_hired, #year_hired").removeClass("pdmValid");
                if(!pdm("#month_hired").hasClass("pdmError"))
                    pdm("#month_hired").addClass("pdmError");
                if(!pdm("#year_hired").hasClass("pdmError"))
                    pdm("#year_hired").addClass("pdmError");
            }
        }
        /* next_two_pay_dates */
        if(pdm(this).attr("id") == "pay_date1_day" || pdm(this).attr("id") == "pay_date1_month" || pdm(this).attr("id") == "pay_date1_year") {
            multiCheck(["pay_date1_day","pay_date1_month","pay_date1_year","next_two_pay_dates"]);
            isBiggerDate("next_two_pay_dates", "next_two_pay_dates2");
            if(pdm("#next_two_pay_dates").hasClass("pdmError")) {
                pdm("#pay_date1_day, #pay_date1_month, #pay_date1_year").removeClass("pdmValid");
                if(!pdm("#pay_date1_day").hasClass("pdmError"))
                    pdm("#pay_date1_day").addClass("pdmError");
                if(!pdm("#pay_date1_month").hasClass("pdmError"))
                    pdm("#pay_date1_month").addClass("pdmError");
                if(!pdm("#pay_date1_year").hasClass("pdmError"))
                    pdm("#pay_date1_year").addClass("pdmError");
            }
        }
        /* next_two_pay_dates2 */
        if(pdm(this).attr("id") == "pay_date2_day" || pdm(this).attr("id") == "pay_date2_month" || pdm(this).attr("id") == "pay_date2_year") {
            multiCheck(["pay_date2_day","pay_date2_month","pay_date2_year","next_two_pay_dates2"]);
            isBiggerDate("next_two_pay_dates", "next_two_pay_dates2");
            if(pdm("#next_two_pay_dates2").hasClass("pdmError")) {
                pdm("#pay_date2_day, #pay_date2_month, #pay_date2_year").removeClass("pdmValid");
                if(!pdm("#pay_date2_day").hasClass("pdmError"))
                    pdm("#pay_date2_day").addClass("pdmError");
                if(!pdm("#pay_date2_month").hasClass("pdmError"))
                    pdm("#pay_date2_month").addClass("pdmError");
                if(!pdm("#pay_date2_year").hasClass("pdmError"))
                    pdm("#pay_date2_year").addClass("pdmError");
            }
        }
        if(pdm(this).attr("id") == "address_length_year" || pdm(this).attr("id") == "address_length_months") {
            togglePrevAddress();
        }
    });

    pdm( window ).resize(function() {
        if(!mobilecheck()) {
            if(pdm("#pdmForm").width() < 560) {
                if(!pdm("#pdmForm").hasClass("pdmMobile"))
                    pdm("#pdmForm").addClass("pdmMobile");
            } else {
                pdm("#pdmForm").removeClass("pdmMobile");
            }
        }
    });

    /* init */

    if(mobilecheck()) {
        if(!pdm("#pdmForm").hasClass("pdmMobile"))
            pdm("#pdmForm").addClass("pdmMobile");
    }

    if(pdm("#pdmForm").width() < 560) {
        if(!pdm("#pdmForm").hasClass("pdmMobile"))
            pdm("#pdmForm").addClass("pdmMobile");
    }

    pdm("#pdmForm").find(":input").each(function() {
        if(!pdm(this).is('[disabled=disabled]') && pdm(this).val().length > 0 && pdm(this).is(':visible')) {
            check(pdm(this).attr("id"));
        }
    });

    checkWorkphone();
    checkWorkphone2();

    togglePrevAddress();
    pdm("#date_of_birth").val(pdm("#birth_date_month").val() + "/" + pdm("#birth_date_day").val() + "/" + pdm("#birth_date_year").val());
    pdm("#month_year_hired").val(pdm("#month_hired").val() + "/1/" + pdm("#year_hired").val());
    pdm("#next_two_pay_dates").val(pdm("#pay_date1_month").val() + "/" + pdm("#pay_date1_day").val() + "/" + pdm("#pay_date1_year").val());
    pdm("#next_two_pay_dates2").val(pdm("#pay_date2_month").val() + "/" + pdm("#pay_date2_day").val() + "/" + pdm("#pay_date2_year").val());


});