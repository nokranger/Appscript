
  dataget_db = [];
  fetch('json/db.json')
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      dataget_db = myJson.database
      dataget_db.sort(function (a, b) {
        var sort_db = a.name < b.name ? -1 : 1;
        return sort_db
      });
      dynamicdropdown_db()
    });


  dataget_job = [];
  fetch('json/position.json')
    .then(function (response) {
      return response.json();
    })
    .then(function (myJson) {
      dataget_job = myJson.job
      dataget_job.sort(function (a, b) {
        var sort_job = a.name < b.name ? -1 : 1;
        return sort_job
      });
      dynamicdropdown_job()
      dynamicdropdown_job_l()
    });


  function dynamicdropdown_db(listindexs) {
    var html = '';

    html = html + '<select id="db" name="db" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;">';
    html = html + '<option value="0">Select </option>';
    for (var i = 0; i < dataget_db.length; i++) {
      html = html + '<option value="' + dataget_db[i].name + '">' + dataget_db[i].name + '</option>'
    }
    html = html + '</select>';
    $('#mySelect_db').html(html)
  }


  dataget_os = { "os": [{ "id": "1", "name": "Windows" }, { "id": "2", "name": "MacOS" }, { "id": "3", "name": "LinuxOS" }] }
  dataget_os.os.sort(function (a, b) {
    var sort_os = a.name < b.name ? -1 : 1;
    return sort_os
  });
  var html = '';
  html = html + '<select id="os" name="op" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;">';
  html = html + '<option value="0">Select </option>';
  for (var i = 0; i < dataget_os.os.length; i++) {
    html = html + '<option value="' + dataget_os.os[i].name + '">' + dataget_os.os[i].name + '</option>'
  }
  html = html + '</select>';
  $('#mySelect_os').html(html)



  function dynamicdropdown_job(listindexs) {
    var html = '';
    html = html + '<select id="job" name="job" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;"required>';
    html = html + '<option value="0">Select </option>';
    for (var i = 0; i < dataget_job.length; i++) {
      html = html + '<option value="' + dataget_job[i].name + '">' + dataget_job[i].name + '</option>'
    }
    html = html + '</select>';
    $('#mySelect_job').html(html)
  }


  function dynamicdropdown_job_l(listindexs) {
    var html = '';
    html = html + '<select id="job_l" name="job_lawa" style="margin: 8px 0;margin-left: 1px;font-family: ' + 'Kanit' + ', sans-serif;"required>';
    html = html + '<option value="0">Select </option>';
    for (var i = 0; i < dataget_job.length; i++) {
      html = html + '<option value="' + dataget_job[i].name + '">' + dataget_job[i].name + '</option>'
    }
    html = html + '</select>';
    $('#mySelect_job_l').html(html)
  }
