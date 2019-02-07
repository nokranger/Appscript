
    dataget_de = [];
    fetch('json/degree_education.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_de = myJson.degree_education
            dataget_de.sort(function(a,b){
            var sort_de = a.name < b.name? -1:1;
            return sort_de
            });
            dynamicdropdown_de()
        });

    function dynamicdropdown_de(listindexde) {
        var html = '';
        html = html + '<select id="de" name="de" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;" onchange="javascript: dynamicdropdown_hsc(this.value);">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_de.length; i++) {
            // if (listindexde == dataget_de[i].id) {
                html = html + '<option value="' + dataget_de[i].id + '">' + dataget_de[i].name + '</option>'
            // }
        }
        html = html + '</select>';
        $('#mySelect_1').html(html)
    }

    dataget_hsc = [];
    fetch('json/highschool.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_hsc = myJson.school
            dataget_hsc.sort(function(a,b){
            var sort_hsc = a.name < b.name? -1:1;
            return sort_hsc
            });
            dynamicdropdown_hsc()
        });

    function dynamicdropdown_hsc(listindexhsc) {
        var html = '';
        html = html + '<select id="hsc" name="hsc" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;" onchange="javascript: dynamicdropdown_sub_hsc(this.value);">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_hsc.length; i++) {
            if (listindexhsc == dataget_hsc[i].g_id) {
                html = html + '<option value="' + dataget_hsc[i].id + '">' + dataget_hsc[i].name + '</option>'
            }
        }
        html = html + '</select>';
        $('#mySelect_2').html(html)
    }

    dataget_hsc = [];
    fetch('json/sub_highschool.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_sub_hsc = myJson.sub_high
            dataget_sub_hsc.sort(function(a,b){
            var sort_sub_hsc = a.name < b.name? -1:1;
            return sort_sub_hsc
            });
            dynamicdropdown_sub_hsc()
        });

    function dynamicdropdown_sub_hsc(listindexsub_hsc) {
        var html = '';
        html = html + '<select id="sub_hsc" name="sub_hsc" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_sub_hsc.length; i++) {
            // console.log(dataget_sub_hsc[i].id)
            if (listindexsub_hsc == dataget_sub_hsc[i].v_id) {
                html = html + '<option value="' + dataget_sub_hsc[i].id + '">' + dataget_sub_hsc[i].name + '</option>'
                
            }
        }
        html = html + '</select>';
        $('#mySelect_3').html(html)
    }

    dataget_deu = [];
    fetch('json/degree_university.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_deu = myJson.degree
            dataget_deu.sort(function(a,b){
            var sort_deu = a.name < b.name? -1:1;
            return sort_deu
            });
            dynamicdropdown_deu()
        });

    function dynamicdropdown_deu(listindexdeu) {
        var html = '';
        html = html + '<select id="deu" name="deu" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;" onchange="javascript: dynamicdropdown_fac_u(this.value);">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_deu.length; i++) {
            // console.log(dataget_deu[i].id)
            // if (listindexdeu == dataget_deu[i].v_id) {
                html = html + '<option value="' + dataget_deu[i].id + '">' + dataget_deu[i].name + '</option>'
            // }
        }
        html = html + '</select>';
        $('#mySelect_4').html(html)
    }

    dataget_fac_u = [];
    fetch('json/faculty_university.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_fac_u = myJson.faculty
            dataget_fac_u.sort(function(a,b){
            var sort_fac_u = a.name < b.name? -1:1;
            return sort_fac_u
            });
            dynamicdropdown_fac_u()
        });

    function dynamicdropdown_fac_u(listindexfac_u) {
        var html = '';
        html = html + '<select id="fac_u" name="fac_u" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;" onchange="javascript: dynamicdropdown_major_u(this.value);">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_fac_u.length; i++) {
            // console.log(dataget_fac_u[i].id)
            if (listindexfac_u == dataget_fac_u[i].degree_id) {
                html = html + '<option value="' + dataget_fac_u[i].id + '">' + dataget_fac_u[i].name + '</option>'
                
            }
        }
        html = html + '</select>';
        $('#mySelect_5').html(html)
    }

    dataget_major_u = [];
    fetch('json/major_university.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (myJson) {
            dataget_major_u = myJson.major
            dataget_major_u.sort(function(a,b){
            var sort_major_u = a.name < b.name? -1:1;
            return sort_major_u
            });
            dynamicdropdown_major_u()
        });

    function dynamicdropdown_major_u(listindexmajor_u) {
        var html = '';
        html = html + '<select id="major_u" name="major_u" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;">';
        html = html + '<option value="0">Select </option>';
        for (var i = 0; i < dataget_major_u.length; i++) {
            // console.log(dataget_major_u[i].id)
            if (listindexmajor_u == dataget_major_u[i].faculty_id) {
                html = html + '<option value="' + dataget_major_u[i].id + '">' + dataget_major_u[i].name + '</option>'
                // document.getElementById('aaaa').value = "2222"
            }
        }
        html = html + '</select>';
        
        $('#mySelect_6').html(html)
    }