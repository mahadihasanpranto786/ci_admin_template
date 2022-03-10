$(document).ready(function() {
    var maxField = 1000; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper

    var fieldHTML = '<div class="form-inline mt-2"><input type="text" name="phone[]" style="width:92%;" class="form-control" id="phone" placeholder="Phone Number"><button type="button" class="btn btn-xs btn-danger form-control text-white remove_button"><i class="fa fa-trash pl-2" aria-hidden="true"></i></button></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $('.addphoneField').click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $('.appendPhone').append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $('.appendPhone').on('click', '.remove_button', function(e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});


// ========== its for row add ECG dynamically =============
function addEcgField(t) {
    var count = 2;
    var limits = 3;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "ecg_date_" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='ecg_date[]' id='" + a + "'></td>\n\
                      <input type='hidden' class='form-control' name='ecg_id_count[]' value='ab_" + count + "' id='ecg_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='ecg_findings[]' id='ecg_findings" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='ecg_rhythmc[]' id='ecg_rhythmc'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='ecg_qrs[]' id='ecg_qrs'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='ecg_rbbb[]' id='ecg_rbbb'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='ecg_heart_block[]' id='ecg_heart_block'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='ecg_qt[]' id='ecg_qt'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='ecg_ex_beats[]' id='ecg_ex_beats'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for ECG row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add Echo dynamically =============
function addEchoField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "echo_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='echo_date[]' id='" + a + "'></td>\n\
                     <input type='hidden' class='form-control' name='echo_id_count[]' value='ab_" + count + "' id='echo_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='echo_lvidd[]' id='echo_lvidd" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='echo_ef[]' id='echo_ef'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='echo_rvsp[]' id='echo_rvsp'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='echo_rwma[]' id='echo_rwma'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='echo_d_by_d[]' id='echo_d_by_d'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='echo_mr_none[]' id='echo_mr_none'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='echo_la[]' id='echo_la'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add Chest X Ray dynamically =============
function addChestXrayField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "xray_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='xray_date[]' id='" + a + "'></td>\n\
                      <input type='hidden' class='form-control' name='xray_id_count[]' value='ab_" + count + "' id='xray_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='xray_findings[]' id='xray_findings" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='xray_pulmonary_edema[]' id='xray_pulmonary_edema'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='xray_pvh[]' id='xray_pvh'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='xray_pleural_effusion[]' id='xray_pleural_effusion'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='xray_ct_ration[]' id='xray_ct_ration'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add six minute walk test item dynamically =============
function aaddSixMinuteWalkItemField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "sixmwt_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='sixmwt_date[]' id='" + a + "'></td>\n\
                      <input type='hidden' class='form-control' name='sixmwt_id_count[]' value='ab_" + count + "' id='sixmwt_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='sixmwt_performance[]' id='sixmwt_performance" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='sixmwt_speed[]' id='sixmwt_speed'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='sixmwt_distance[]' id='sixmwt_distance'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add Holter Or Event Recorder dynamically =============
function addHolterField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "holter_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='holter_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='holter_id_count[]' value='ab_" + count + "' id='holter_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='holter_vpc[]' id='holter_vpc" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='holter_atrial_arrhythmia[]' id='holter_atrial_arrhythmia'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='min_hr[]' id='min_hr'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='max_hr[]' id='max_hr'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='average_hr[]' id='average_hr'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='pulse[]' id='pulse'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='holter_other[]' id='holter_other'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for Holter Or Event Recorder row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add stress test dynamically =============
function addStressField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "stress_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='stress_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='stress_id_count[]' value='ab_" + count + "' id='stress_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='stress_involved_regions[]' id='stress_involved_regions" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='stress_involved_coronary[]' id='stress_involved_coronary'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='stress_viable[]' id='stress_viable'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='stress_non_viable[]' id='stress_non_viable'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='stress_ischemia[]' id='stress_ischemia'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='stress_arrhythmias[]' id='stress_arrhythmias'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='stress_thr_achieved[]' id='stress_thr_achieved'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}



// ========== its for row add Mpi dynamically =============
function addMpiField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "mpi_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='mpi_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='mpi_id_count[]' value='ab_" + count + "' id='mpi_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='mpi_lvef[]' id='mpi_lvef" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='mpi_territory[]' id='mpi_territory'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='mpi_percentage[]' id='mpi_percentage'" + count + "'></td> \n\
                      <td><input type='text' class='form-control' name='mpi_scar[]' id='mpi_scar'" + count + "'></td> \n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========

function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}



// ========== its for row add Creatinine dynamically =============
function addCreatinineField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "screation_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='screation_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='screation_id_count[]' value='ab_" + count + "' id='screation_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='screation_value[]' id='screation_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========

function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add s. electrolyts dynamically =============
function addElectrolytesField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "s_electrolytes_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='s_electrolytes_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='s_electrolytes_id_count[]' value='ab_" + count + "' id='s_electrolytes_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='s_electrolytes_sodium[]' id='s_electrolytes_sodium" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='s_electrolytes_potassium[]' id='s_electrolytes_potassium" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========

function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add lipid dynamically =============
function addLipidField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "lipid_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='lipid_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='lipid_id_count[]' value='ab_" + count + "' id='lipid_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='lipid_tc[]' id='lipid_tc" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='lipid_ldl[]' id='lipid_ldl" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='lipid_hdl[]' id='lipid_hdl" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='lipid_tg[]' id='lipid_tg" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add cbc dynamically =============
function addCbcField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "cbc_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='cbc_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='cbc_id_count[]' value='ab_" + count + "' id='cbc_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='cbc_hb[]' id='cbc_hb" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='cbc_platelet[]' id='cbc_platelet" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='cbc_tc[]' id='cbc_tc" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='cbc_dc[]' id='cbc_dc" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========

function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}
// ========== its for row add gluose dynamically =============
function addGlucoseField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "glucose_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='glucose_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='glucose_id_count[]' value='ab_" + count + "' id='glucose_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='glucose_fbs[]' id='glucose_fbs" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='glucose_rbs[]' id='glucose_rbs" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='glucose_2hab[]' id='glucose_2hab" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='glucose_hba1c[]' id='glucose_hba1c" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}



// Step 5 other Report 
// ========== its for row add vitamin dynamically =============
function addVitaminField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "vitamind3_date_add" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='vitamind3_date_add[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='vitamind3_id_count[]' value='ab_" + count + "' id='vitamind3_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='vitamind3_value_add[]' id='vitamind3_value_add" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}


// ========== its for row add Uric Acid dynamically =============
function addUricAcidField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "uric_acid_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='uric_acid_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='uric_acid_id_count[]' value='ab_" + count + "' id='uric_acid_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='uric_acid_value[]' id='uric_acid_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add Inr dynamically =============
function addInrField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "inr_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='inr_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='inr_id_count[]' value='ab_" + count + "' id='inr_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='inr_value[]' id='inr_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add TSH dynamically =============
function addTshField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "tsh_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='tsh_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='tsh_id_count[]' value='ab_" + count + "' id='tsh_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='tsh_value[]' id='tsh_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add T3 dynamically =============
function addT3Field(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "t3_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='t3_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='t3_id_count[]' value='ab_" + count + "' id='t3_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='t3_value[]' id='t3_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add T4 dynamically =============
function addT4Field(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "t4_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='t4_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='t4_id_count[]' value='ab_" + count + "' id='t4_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='t4_value[]' id='t4_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add Calcium dynamically =============
function addCalciumField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "calcium_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='calcium_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='calcium_id_count[]' value='ab_" + count + "' id='calcium_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='calcium_value[]' id='calcium_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add Magnesiam dynamically =============
function addMagnesiumField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "magnesium_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='magnesium_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='magnesium_id_count[]' value='ab_" + count + "' id='magnesium_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='magnesium_value[]' id='magnesium_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add Bnp dynamically =============
function addBnpField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "nt_pro_bnp_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='nt_pro_bnp_date[]' id='" + a + "'></td>\n\
      <input type='hidden' class='form-control' name='nt_pro_bnp_id_count[]' value='ab_" + count + "' id='nt_pro_bnp_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='nt_pro_bnp_value[]' id='nt_pro_bnp_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

// ========== its for row add other dynamically =============
function addOtherField(t) {
    var count = 2;
    var limits = 500;
    if (count == limits) {
        alert("You have reached the limit of adding" + count + "inputs");
    } else {
        //======== alert(count);return false==============
        var a = "other_test_date" + count,
            e = document.createElement("tr");
        e.innerHTML = "<td><input type='date' class='form-control' name='other_test_date[]' id='" + a + "'></td>\n\
                      <input type='hidden' class='form-control' name='other_id_count[]' value='ab_" + count + "' id='other_id_count_" + count + "'>\n\
                      <td><input type='text' class='form-control' name='other_test_name[]' id='other_test_name" + count + "'></td>\n\
                      <td><input type='text' class='form-control' name='other_test_value[]' id='other_test_value" + count + "'></td>\n\
                      <td><button style='text-align: right;' class='btn btn-danger btn-xs' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-trash pl-2 py-2' aria-hidden='true'></i></button></td>\n\
                      ",
            document.getElementById(t).appendChild(e), document.getElementById(a).focus(), count++;
    }
}
// ============= its for row delete dynamically =========
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
    if (1 == a) {
        alert("There only one row you can't delete it.");
    } else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e);
    }
}

//===============================