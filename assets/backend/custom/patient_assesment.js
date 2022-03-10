
    $(document).ready(function() {
        // past medical history edit 
        $(".editPmHistory").click(function(e) {

            $('#editpmhistory').modal('show');
            var data_value = $(this).attr('data-id');
            $('#pmh_value').val(data_value);
        });

        // diagnosis  edit 
        $(".editdiagnosis").click(function(e) {

            $('#editDiagnosis').modal('show');
            var data_value = $(this).attr('data-id');
            $('#diagnosis_value').val(data_value);
        });

        // ecg edit 
        $(".editEcg").click(function(e) {

            $('#editEcg').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#ecgId').val(iid);
            $('#ecg_date').val(date);
            $('#ecg_findings').val(data[1]);
            $('#ecg_rhythmc').val(data[2]);
            $('#ecg_qrs').val(data[3]);
            $('#ecg_rbbb').val(data[4]);
            $('#ecg_heart_block').val(data[5]);
            $('#ecg_qt').val(data[6]);
            $('#ecg_ex_beats').val(data[7]);
        });

        // echo edit 
        $(".editecho").click(function(e) {

            $('#editEcho').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#echo_id').val(iid);
            $('#echo_date').val(date);
            $('#echo_lvidd').val(data[1]);
            $('#echo_ef').val(data[2]);
            $('#echo_rvsp').val(data[3]);
            $('#echo_rwma').val(data[4]);
            $('#echo_d_by_d').val(data[5]);
            $('#echo_mr_none').val(data[6]);
            $('#echo_la').val(data[7]);
        });

        // Chest X-RaY edit 
        $(".editchestxray").click(function(e) {

            $('#editChestXray').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#chest_x_ray_id').val(iid);
            $('#xray_date').val(date);
            $('#xray_findings').val(data[1]);
            $('#xray_pulmonary_edema').val(data[2]);
            $('#xray_pvh').val(data[3]);
            $('#xray_pleural_effusion').val(data[4]);
            $('#xray_ct_ration').val(data[5]);
        });

        // 6 Minute Walk test  edit 
        $(".editsixminute").click(function(e) {

            $('#sixMinute').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#six_minute_id').val(iid);
            $('#sixmwt_date').val(date);
            $('#sixmwt_performance').val(data[1]);
            $('#sixmwt_speed').val(data[2]);
            $('#sixmwt_distance').val(data[3]);
        });

        // Holter/Event Recorder edit 
        $(".editholter").click(function(e) {

            $('#editHolter').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#holter_id').val(iid);
            $('#holter_date').val(date);
            $('#holter_vpc').val(data[1]);
            $('#holter_atrial_arrhythmia').val(data[2]);
            $('#holter_other').val(data[3]);
        });

        // Stress Test edit 
        $(".editstresstest").click(function(e) {

            $('#editStresstest').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#stress_test_id').val(iid);
            $('#stress_date').val(date);
            $('#stress_involved_regions').val(data[1]);
            $('#stress_involved_coronary').val(data[2]);
            $('#stress_viable').val(data[3]);
            $('#stress_non_viable').val(data[4]);
            $('#stress_ischemia').val(data[5]);
            $('#stress_arrhythmias').val(data[6]);
            $('#stress_thr_achieved').val(data[7]);
        });

        // MPI  edit 
        $(".editmpi").click(function(e) {

            $('#editMpi').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#mpi_id').val(iid);
            $('#mpi_date').val(date);
            $('#mpi_lvef').val(data[1]);
            $('#mpi_territory').val(data[2]);
            $('#mpi_percentage').val(data[3]);
            $('#mpi_scar').val(data[4]);
        });

        // Angiogram  edit 
        $(".editangiogram").click(function(e) {

            $('#editAngiogram').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#angiogram_id').val(iid);
            $('#angiogram_date').val(date);
            // $('#ecg_findings').val(data[1]);
        });

        // S.Creatinine  edit 
        $(".editscreatinine").click(function(e) {

            $('#editScreatinine').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#screatinine_id').val(iid);
            $('#screation_date').val(date);
            $('#screation_value').val(data[1]);
        });

        // S.Electrolytes edit 
        $(".editselectrolyts").click(function(e) {

            $('#editElectrolytes').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#s_electrolytes_id').val(iid);
            $('#s_electrolytes_date').val(date);
            $('#s_electrolytes_sodium').val(data[1]);
            $('#s_electrolytes_potassium').val(data[2]);
        });

        // Lipid  edit 
        $(".editlipid").click(function(e) {

            $('#editLipid').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#lipid_id').val(iid);
            $('#lipid_date').val(date);
            $('#lipid_tc').val(data[1]);
            $('#lipid_ldl').val(data[2]);
            $('#lipid_hdl').val(data[3]);
            $('#lipid_tg').val(data[4]);
        });

        // CBC  edit 
        $(".editcbc").click(function(e) {

            $('#editCbc').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#cbc_id').val(iid);
            $('#cbc_date').val(date);
            $('#cbc_hb').val(data[1]);
            $('#cbc_platelet').val(data[2]);
            $('#cbc_tc').val(data[3]);
            $('#cbc_dc').val(data[4]);
        });

        // Glucose  edit 
        $(".editglucose").click(function(e) {

            $('#editGlucose').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#glucose_id').val(iid);
            $('#glucose_date').val(date);
            $('#glucose_fbs').val(data[1]);
            $('#glucose_rbs').val(data[2]);
            $('#glucose_2hab').val(data[3]);
            $('#glucose_hba1c').val(data[4]);
        });

        // Vitamin  edit 
        $(".editvitamin").click(function(e) {

            $('#editVitamin').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#vitamind3_id').val(iid);
            $('#vitamind3_date').val(date);
            $('#vitamind3_value').val(data[1]);
        });

        // Uric Acid edit 
        $(".edituricacid").click(function(e) {

            $('#editUricAcid').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#uric_acid_id').val(iid);
            $('#uric_acid_date').val(date);
            $('#uric_acid_value').val(data[1]);
        });

        // INR  edit 
        $(".editinr").click(function(e) {

            $('#editInr').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#inr_id').val(iid);
            $('#inr_date').val(date);
            $('#inr_value').val(data[1]);
        });

        // TSH  edit 
        $(".edittsh").click(function(e) {

            $('#editThs').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#tsh_id').val(iid);
            $('#tsh_date').val(date);
            $('#tsh_value').val(data[1]);
        });

        // T3  edit 
        $(".editt3").click(function(e) {

            $('#editT3').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#t3_id').val(iid);
            $('#t3_date').val(date);
            $('#t3_value').val(data[1]);
        });

        // T4  edit 
        $(".editt4").click(function(e) {

            $('#editT4').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#t4_id').val(iid);
            $('#t4_date').val(date);
            $('#t4_value').val(data[1]);
        });

        // Calcium  edit 
        $(".editcalcium").click(function(e) {

            $('#editCalcium').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#calcium_id').val(iid);
            $('#calcium_date').val(date);
            $('#calcium_value').val(data[1]);
        });

        // Magnesium  edit 
        $(".editmagnesium").click(function(e) {

            $('#editMagnesium').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#magnesium_id').val(iid);
            $('#magnesium_date').val(date);
            $('#magnesium_value').val(data[1]);
        });

        // NT-Pro BNP  edit 
        $(".editntpro").click(function(e) {

            $('#editNtPro').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#nt_pro_bnp_id').val(iid);
            $('#nt_pro_bnp_date').val(date);
            $('#nt_pro_bnp_value').val(data[1]);
        });

        // Others edit 
        $(".editother").click(function(e) {

            $('#editOther').modal('show');

            $tr = $(this).closest('tr');
            var iid = $(this).attr('id');
            var date = $(this).attr('date');
            var data = $tr.children('td').map(function() {
                return $(this).text();
            }).get();
            $('#other_test_id').val(iid);
            $('#other_test_date').val(date);
            $('#other_test_name').val(data[1]);
            $('#other_test_value').val(data[2]);
        });
    });

    // ecg select all
    var clicked_ecg = false;
    $(".check_all_ecg").on("click", function() {
        $(".delete_checkbox_ecg").prop("checked", !clicked_ecg);
        clicked_ecg = !clicked_ecg;
        this.innerHTML = clicked_ecg ? '*' : '&';
    });

    // echo select all
    var clicked_echo = false;
    $(".check_all_echo").on("click", function() {
        $(".delete_checkbox_echo").prop("checked", !clicked_echo);
        clicked_echo = !clicked_echo;
        this.innerHTML = clicked_echo ? '*' : '&';
    });

    // Chest X-RaY  select all
    var clicked_xray = false;
    $(".check_all_xray").on("click", function() {
        $(".delete_checkbox_x_ray").prop("checked", !clicked_xray);
        clicked_xray = !clicked_xray;
        this.innerHTML = clicked_xray ? '*' : '&';
    });


    // 6 Minute Walk test select all
    var clicked_sixminute = false;
    $(".check_all_sixminute").on("click", function() {
        $(".delete_checkbox_sixminute").prop("checked", !clicked_sixminute);
        clicked_sixminute = !clicked_sixminute;
        this.innerHTML = clicked_sixminute ? '*' : '&';
    });


    // Holter/Event Recorder  select all
    var clicked_holter = false;
    $(".select_holter").on("click", function() {
        $(".check_all_holter").prop("checked", !clicked_holter);
        clicked_holter = !clicked_holter;
        this.innerHTML = clicked_holter ? '*' : '&';
    });


    // Stress Test select all
    var clicked_stressTest = false;
    $(".check_all_stress_test").on("click", function() {
        $(".delete_checkbox_strss_test").prop("checked", !clicked_stressTest);
        clicked_stressTest = !clicked_stressTest;
        this.innerHTML = clicked_stressTest ? '*' : '&';
    });


    // MPI  select all
    var clicked_mpi = false;
    $(".check_all_mpi").on("click", function() {
        $(".delete_checkbox_mpi").prop("checked", !clicked_mpi);
        clicked_mpi = !clicked_mpi;
        this.innerHTML = clicked_mpi ? '*' : '&';
    });


    // Angiogram  select all
    var clicked_angiogram = false;
    $(".check_all_angiogram").on("click", function() {
        $(".delete_checkbox_angiogram").prop("checked", !clicked_angiogram);
        clicked_angiogram = !clicked_angiogram;
        this.innerHTML = clicked_angiogram ? '*' : '&';
    });


    // S.Creatinine select all
    var clicked_screatinine = false;
    $(".check_all_screatinine").on("click", function() {
        $(".delete_checkbox_screatinine").prop("checked", !clicked_screatinine);
        clicked_screatinine = !clicked_screatinine;
        this.innerHTML = clicked_screatinine ? '*' : '&';
    });


    // S.Electrolytes select all
    var clicked_selectrolytes = false;
    $(".check_all_electrolytes").on("click", function() {
        $(".delete_checkbox_electrolytes").prop("checked", !clicked_selectrolytes);
        clicked_selectrolytes = !clicked_selectrolytes;
        this.innerHTML = clicked_selectrolytes ? '*' : '&';
    });


    // Lipid  select all
    var clicked_lipid = false;
    $(".check_all_lipid").on("click", function() {
        $(".delete_checkbox_lipid").prop("checked", !clicked_lipid);
        clicked_lipid = !clicked_lipid;
        this.innerHTML = clicked_lipid ? '*' : '&';
    });


    // CbC  select all
    var clicked_cbc = false;
    $(".check_all_cbc").on("click", function() {
        $(".delete_checkbox_cbc").prop("checked", !clicked_cbc);
        clicked_cbc = !clicked_cbc;
        this.innerHTML = clicked_cbc ? '*' : '&';
    });


    // Glucose  select all
    var clicked_glucose = false;
    $(".check_all_glucose").on("click", function() {
        $(".delete_checkbox_glucose").prop("checked", !clicked_glucose);
        clicked_glucose = !clicked_glucose;
        this.innerHTML = clicked_glucose ? '*' : '&';
    });


    // Vitamin D3 (mg/ml) select all
    var clicked_vitamin = false;
    $(".check_all_vitamin").on("click", function() {
        $(".delete_checkbox_vitamin").prop("checked", !clicked_vitamin);
        clicked_vitamin = !clicked_vitamin;
        this.innerHTML = clicked_vitamin ? '*' : '&';
    });


    // Uric Acid select all
    var clicked_uric_aicd = false;
    $(".check_all_uric_acid").on("click", function() {
        $(".delete_checkbox_uric_acid").prop("checked", !clicked_uric_aicd);
        clicked_uric_aicd = !clicked_uric_aicd;
        this.innerHTML = clicked_uric_aicd ? '*' : '&';
    });


    // INR  select all
    var clicked_inr = false;
    $(".check_all_inr").on("click", function() {
        $(".delete_checkbox_inr").prop("checked", !clicked_inr);
        clicked_inr = !clicked_inr;
        this.innerHTML = clicked_inr ? '*' : '&';
    });


    // TSH  select all
    var clicked_ths = false;
    $(".check_all_ths").on("click", function() {
        $(".delete_checkbox_ths").prop("checked", !clicked_ths);
        clicked_ths = !clicked_ths;
        this.innerHTML = clicked_ths ? '*' : '&';
    });


    // T3  select all
    var clicked_t3 = false;
    $(".check_all_t3").on("click", function() {
        $(".delete_checkbox_t3").prop("checked", !clicked_t3);
        clicked_t3 = !clicked_t3;
        this.innerHTML = clicked_t3 ? '*' : '&';
    });


    // T4 select all
    var clicked_t4 = false;
    $(".check_all_t4").on("click", function() {
        $(".delete_checkbox_t4").prop("checked", !clicked_t4);
        clicked_t4 = !clicked_t4;
        this.innerHTML = clicked_t4 ? '*' : '&';
    });


    // Calcium  select all
    var clicked_calcium = false;
    $(".check_all_calcium").on("click", function() {
        $(".delete_checkbox_calcium").prop("checked", !clicked_calcium);
        clicked_calcium = !clicked_calcium;
        this.innerHTML = clicked_calcium ? '*' : '&';
    });

    // Magnesium  select all
    var clicked_magnesium = false;
    $(".check_all_magnesium").on("click", function() {
        $(".delete_checkbox_magnesium").prop("checked", !clicked_magnesium);
        clicked_magnesium = !clicked_magnesium;
        this.innerHTML = clicked_magnesium ? '*' : '&';
    });

    // NT-Pro BNP select all
    var clicked_nt_pro = false;
    $(".check_all_ntpro").on("click", function() {
        $(".delete_checkbox_ntpro").prop("checked", !clicked_nt_pro);
        clicked_nt_pro = !clicked_nt_pro;
        this.innerHTML = clicked_nt_pro ? '*' : '&';
    });

    // Others  select all
    var clicked_other = false;
    $(".check_allother").on("click", function() {
        $(".delete_checkbox_other").prop("checked", !clicked_other);
        clicked_other = !clicked_other;
        this.innerHTML = clicked_other ? '*' : '&';
    });