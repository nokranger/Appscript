<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/edit.css">
  <link href="css/multiple-select.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
  <link rel="stylesheet" href="css/bootstrap-tagsinput.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/github.css"> -->
  <link rel="stylesheet" href="assets/app.css">
  <style>
    body {
  background-color: #673AB7;
}
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>

    // var script_url = "https://script.google.com/macros/s/AKfycbzJYs_28XWTrzLZ2bVLlAdWdAel9ybR9LnISOi0AFUppfh4l6a8/exec";
    // var script_url ="https://script.google.com/macros/s/AKfycbwSjqEJVsHBXWeasMPL94IPbbU0W-AStG4iN7m6rteUwgzd19c/exec";
    var script_url = "https://script.google.com/macros/s/AKfycbytiV42RbmsesNrHEFS8VGONExFfKZbmva6FH-UdnX7sdzE3g6-/exec";
    // var urljson = "https://script.googleusercontent.com/macros/echo?user_content_key=MM3e1D0APl1h3NBDmwtGWvyYkIvqr2vBEM2Kj56_h08nKCKO8Lnnfas0guS5_nnFUlswMbPOVtF0GDCPmOhf8Tsodpt69HxJm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnIW7h2wDpYxUydCzfHveGaVZ2bug2r9Dj_xhxf0mbOST_4iE_GS4YTRsWWZ0DgnP9Kln04wCMZad&lib=MVDbopYd8tbNMsyufcdaoDM4C9y1VNee5";

    // var deJson = JSON.parse(urljson);
    // console.log(script_url);
    // console.log(deJson);
    // var data44 = [];
    // $.getJSON(urljson, function (data) {
    //   // console.log(data.user[1].time_stamp);

    //   var dataJSON2 = [{}];
    //   let data442 = [];
    //   for (var i = 0; i < data.user.length; i++) {
    //     data44[i] = [];
    //     data44[i].time_stamp = JSON.stringify(data.user[i].time_stamp);
    //     data44[i].ID = JSON.stringify(data.user[i].ID);
    //     data44[i].Title_Name = JSON.stringify(data.user[i].Title_Name);
    //     data44[i].First_Name = JSON.stringify(data.user[i].First_Name);
    //     data44[i].Date_of_birth = JSON.stringify(data.user[i].Date_of_birth);
    //     data44[i].Telephone_Number = JSON.stringify(data.user[i].Telephone_Number);
    //     data44[i].Facebook = JSON.stringify(data.user[i].Facebook);
    //     data44[i].Line = JSON.stringify(data.user[i].Line);
    //     data44[i].Instagram = JSON.stringify(data.user[i].Instagram);
    //     data44[i].Address_in_ID_Card = JSON.stringify(data.user[i].Address_in_ID_Card);
    //     data44[i].Current_Address = JSON.stringify(data.user[i].Current_Address);
    //     data44[i].Educational_institution = JSON.stringify(data.user[i].Educational_institution);
    //     data44[i].GPAX = JSON.stringify(data.user[i].GPAX);
    //     data44[i].Skill_programming = JSON.stringify(data.user[i].Skill_programming);
    //     data44[i].Tool_for_development = JSON.stringify(data.user[i].Tool_for_development);
    //     data44[i].Software_Package = JSON.stringify(data.user[i].Software_Package);
    //     data44[i].Email_Address = JSON.stringify(data.user[i].Email_Address);
    //     console.log(i)
    //     console.log(data44[i]);
    //     // data442[i].push(data44);

    //   }
    //   console.log('data44')
    //   console.log(i)
    //   console.log(data44)
    //   something();
    // });
    // // something();
    // function something() {
    //   console.log(typeof (data44[15].Skill_programming))
    //   console.log(data44[17].Skill_programming);
    //   var sl = data44[17].Skill_programming
    //   var spl = sl.split(",");
    //   console.log(typeof (spl))
    //   console.log(spl)
    //   data44[17].Skill_programming = spl
    //   console.log((data44[17].Skill_programming[0]))
    //   console.log((data44[17].Skill_programming[1]))
    //   console.log(data44[17]);
    // }
    // console.log(typeof(data3));
    // console.log((data3));
    // console.log((data3.responseJSON));

    // Make an AJAX call to Google Script
    function insert_value() {
      $("#re").css("visibility", "hidden");
      document.getElementById("loader").style.visibility = "visible";
      $('#mySpinner').addClass('spinner');

      var id1 = $("#id").val();
      var tn = $("#tn").val();
      var name = $("#name").val();
      var lname = $("#lname").val();
      var dob = $("#dob").val();
      var tel = $("#tel").val();
      var fb = $("#fb").val();
      var line = $("#line").val();
      var ig = $("#ig").val();
      var aic = $("#aic").val();
      var ca = $("#ca").val();
      var ei = $("#ei").val();
      var gpa = $("#gpa").val();
      var sp = $("#sp").val();
      var tfp = $("#tfp").val();
      var spack = $("#spack").val();
      var mail = $("#mail").val();

      // var sum = $("#id").val(); + $("#name").val(); + $("#lname").val();
      console.log($("#id").val());
      console.log($("#name").val());
      console.log($("#lname").val());
      // console.log(data44[1].time_stamp);


      // var url = script_url + "?callback=ctrlq&name=" + name + "&id=" + id1 + "&lname=" + lname +"&action=insert";
      // var url = script_url + "?callback=ctrlq&name=" + name + "&id=" + id1 + "&action=insert";
      var url = script_url + "?callback=ctrlq&name=" + name + "&id=" + id1 + "&lname=" + lname + "&tn=" + tn + "&dob=" + dob + "&tel=" + tel + "&fb=" + fb + "&line=" + line + "&ig=" + ig + "&aic=" + aic + "&ca=" + ca + "&ei=" + ei + "&gpa=" + gpa + "&sp=" + sp + "&tfp=" + tfp + "&spack=" + spack + "&mail=" + mail + "&action=insert";
      console.log(url);



      var request = jQuery.ajax({
        crossDomain: true,
        url: url,
        method: "GET",
        dataType: "jsonp"
      });
    }

    function update_value() {
      $("#re").css("visibility", "hidden");
      document.getElementById("loader").style.visibility = "visible";
      var id1 = $("#id").val();
      var tn = $("#tn").val();
      var name = $("#name").val();
      var lname = $("#lname").val();
      var dob = $("#dob").val();
      var tel = $("#tel").val();
      var fb = $("#fb").val();
      var line = $("#line").val();
      var ig = $("#ig").val();
      var aic = $("#aic").val();
      var ca = $("#ca").val();
      var ei = $("#ei").val();
      var gpa = $("#gpa").val();
      var sp = $("#sp").val();
      var tfp = $("#tfp").val();
      var spack = $("#spack").val();
      var mail = $("#mail").val();
      var url = script_url + "?callback=ctrlq&name=" + name + "&id=" + id1 + "&lname=" + lname + "&tn=" + tn + "&dob=" + dob + "&tel=" + tel + "&fb=" + fb + "&line=" + line + "&ig=" + ig + "&aic=" + aic + "&ca=" + ca + "&ei=" + ei + "&gpa=" + gpa + "&sp=" + sp + "&tfp=" + tfp + "&spack=" + spack + "&mail=" + mail + "&action=update";
      var request = jQuery.ajax({
        crossDomain: true,
        url: url,
        method: "GET",
        dataType: "jsonp"
      });
      console.log($("#id").val());
      console.log($("#name").val());
      console.log($("#lname").val());


    }
    function delete_value() {
      $("#re").css("visibility", "hidden");
      document.getElementById("loader").style.visibility = "visible";
      $('#mySpinner').addClass('spinner');
      var id1 = $("#id").val();
      var tn = $("#tn").val();
      var name = $("#name").val();
      var lname = $("#lname").val();
      var dob = $("#dob").val();
      var tel = $("#tel").val();
      var fb = $("#fb").val();
      var line = $("#line").val();
      var ig = $("#ig").val();
      var aic = $("#aic").val();
      var ca = $("#ca").val();
      var ei = $("#ei").val();
      var gpa = $("#gpa").val();
      var sp = $("#sp").val();
      var tfp = $("#tfp").val();
      var spack = $("#spack").val();
      var mail = $("#mail").val();
      var url = script_url + "?callback=ctrlq&name=" + name + "&id=" + id1 + "&lname=" + lname + "&tn=" + tn + "&dob=" + dob + "&tel=" + tel + "&fb=" + fb + "&line=" + line + "&ig=" + ig + "&aic=" + aic + "&ca=" + ca + "&ei=" + ei + "&gpa=" + gpa + "&sp=" + sp + "&tfp=" + tfp + "&spack=" + spack + "&mail=" + mail + "&action=delete";
      var sss = "https://docs.google.com/spreadsheets/d/1duiJZGrAchzeMIbKzbsa5pM8T2-lkfbJJtZtTE5evTk/edit?usp=sharing";
      var request = jQuery.ajax({
        crossDomain: true,
        url: url,
        method: "GET",
        dataType: "jsonp"
      });

    }
    // print the returned data
    function ctrlq(e) {
      $("#re").html(e.result);
      $("#re").css("visibility", "visible");
      read_value();

    }
    function read_value() {

      $("#re").css("visibility", "hidden");

      document.getElementById("loader").style.visibility = "visible";
      var url = script_url + "?action=read";

      $.getJSON(url, function (json) {

        // Set the variables from the results array
        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");
        var header = table.createTHead();
        var row = header.insertRow(0);
        // for(var k =0;k<16;k++){

        // }
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        var cell7 = row.insertCell(6);
        var cell8 = row.insertCell(7);
        var cell9 = row.insertCell(8);
        var cell10 = row.insertCell(9);
        var cell11 = row.insertCell(10);
        var cell12 = row.insertCell(11);
        var cell13 = row.insertCell(12);
        var cell14 = row.insertCell(13);
        var cell15 = row.insertCell(14);
        var cell16 = row.insertCell(15);
        var cell17 = row.insertCell(16);

        cell1.innerHTML = "<b>ID</b>";
        cell2.innerHTML = "<b>Title_Name</b>";
        cell3.innerHTML = "<b>First_Name</b>";
        cell4.innerHTML = "<b>Last_Name</b>";
        cell5.innerHTML = "<b>Date_of_birth</b>";
        cell6.innerHTML = "<b>Telephone_Number</b>";
        cell7.innerHTML = "<b>Facebook</b>";
        cell8.innerHTML = "<b>Line</b>";
        cell9.innerHTML = "<b>Instagram</b>";
        cell10.innerHTML = "<b>Address_in_ID_Card</b>";
        cell11.innerHTML = "<b>Current_Address</b>";
        cell12.innerHTML = "<b>Educational_institution</b>";
        cell13.innerHTML = "<b>GPAX</b>";
        cell14.innerHTML = "<b>Skill_programming</b>";
        cell15.innerHTML = "<b>Tool_for_development</b>";
        cell16.innerHTML = "<b>Software_Package</b>";
        cell17.innerHTML = "<b>Email_Address</b>";

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < json.records.length; i++) {

          tr = table.insertRow(-1);
          var tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].ID;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Title_Name;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].First_Name;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Last_Name;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Date_of_birth;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Telephone_Number;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Facebook;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Line;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Instagram;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Address_in_ID_Card;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Current_Address;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Educational_institution;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].GPAX;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Skill_programming;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Tool_for_development;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Software_Package;
          tabCell = tr.insertCell(-1);
          tabCell.innerHTML = json.records[i].Email_Address;



          // console.log(json.records[i].LNAME);

        }
        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        var divContainer = document.getElementById("showData");
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
        document.getElementById("loader").style.visibility = "hidden";
        $("#re").css("visibility", "visible");
      });
    }

  </script>

</head>

<body>
  <!-- style="bgcolor:#673AB7" -->
  <?php require 'PHPMailer/class.phpmailer.php'; ?>
  <div align="center">
    <h1><i><strong style="color:white">Application form for register</strong></i></h1>
    <p style="color:white">This is simple application<p>

        <div class="container-bg" align="left">
          <form action="javascript:insert_value()" method="POST">
            <label>ID :</label>
            <input type="text" name="id" id="id" required disabled><br>
            <label>Title Name : </label>
            <select name="tn" id="tn" required>
              <option value="Mr.">Mr.</option>
              <option value="Ms.">Ms.</option>
              <option value="Mrs.">Mrs.</option>
            </select><br>
            <label>First Name : </label>
            <input type="text" name="name" id="name" placeholder="Enter your first name" required><br>
            <label>Last Name : </label>
            <input type="text" name="lname" id="lname" placeholder="Enter your last name" required><br>
            <label>Date of birth : </label>
            <input type="date" name="dob" id="dob" max="2100-12-31"><br>
            <label>Telephone Number : </label>
            <input type="tel" name="tel" id="tel" placeholder="0213456789" maxlength="10" required><br>
            <label>Facebook : </label>
            <input type="text" name="fb" id="fb" placeholder="Enter your facebook id"><br>
            <label>Line : </label>
            <input type="text" name="line" id="line" placeholder="Enter your id line"><br>
            <label>Instagram : </label>
            <input type="text" name="ig" id="ig" placeholder="Enter your Instagram"><br>
            <label>Email Address : </label>
            <input type="email" name="mail" id="mail" placeholder="Enter E-mail  address" required><br>
            <label>Address in ID Card : </label>
            <input type="text" name="aic" id="aic" placeholder="Enter your address"><br>
            <label>Current Address : </label>
            <input type="text" name="ca" id="ca" placeholder="Enter your address" required><br>
            <label>Educational institution : </label>
            <input type="text" name="ei" id="ei" placeholder="Enter your first educational"><br>
            <label>GPAX : </label>
            <input type="text" name="gpa" id="gpa" placeholder="Enter GPA"><br>

            <div class="example example_typeahead">
              <div class="bs-example">
                <label>Skill programming : </label>
                <input style="padding: 14px 15px;" type="text" name="sp" id="sp" placeholder="Programming language"><br>
              </div>
            </div>
            <label>Tool for development : </label>
            <input type="text" name="tfp" id="tfp" placeholder="Vscode Etc." required><br>
            <label>Software Package : </label>
            <input type="text" name="spack" id="spack" placeholder="ORACLE Etc." required>

            <div style="margin-left:10px" class="container-fluid" align="left">

              <!-- <p id="re"></p> -->
              <input type="submit" id="b1" value="Insert"></input>
              <div id="loader"></div>
              <!-- <input type="button" id="b2" onclick="read_value()" value="Read"></input>
              <input type="submit" id="b3" onclick="update_value()" value="Update"></input>
              <input type="button" id="b4" onclick="delete_value()" value="Delete"></input> -->
            </div>
        </div>
        </form>
        <!-- <a href="https://docs.google.com/spreadsheets/d/1duiJZGrAchzeMIbKzbsa5pM8T2-lkfbJJtZtTE5evTk/edit?usp=sharing"
          target="_blank">Click here to open Spread Sheet </a> -->

        <!-- this for show data in ss after insert or click read -->
        <div style="overflow: scroll" id="showData"></div>
  </div>
  <!-- <script src="js/multiple-select.js"></script>
  <script>
      $('select').multipleSelect();
  </script> -->
</body>
<div align="center">
  <p style="color:white">Enterprise Computing Services Co., Ltd.</p>
</div>
<div align="center">
  <label style="color:white">Current Update<label id="Currdate"></label></label>
</div>
<script>
  var d = new Date("December 12 2018");
  document.getElementById("Currdate").innerHTML = d;
</script>
<script>
  function getRandomID(min, max) {

    return Math.floor(Math.random() * (max - min + 1) + min);
  }
  function new_id() {
    var rndnum = getRandomID(1, 99999);
    var id = ('0000' + rndnum).slice(-5);
    id = 'UID' + id;
    document.getElementById("id").value = id;
    return id;
  }
  console.log(new_id());
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
<script src="js/bootstrap-tagsinput.min.js"></script>
<script src="js/bootstrap-tagsinput-angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/rainbow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/generic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/html.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/javascript.js"></script>
<script src="assets/app.js"></script>
<script src="assets/app_bs3.js"></script>
</html>