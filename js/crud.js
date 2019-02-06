function doGet(e){
  
  var op = e.parameter.action;
//  var ss=SpreadsheetApp.openByUrl("https://docs.google.com/spreadsheets/d/1duiJZGrAchzeMIbKzbsa5pM8T2-lkfbJJtZtTE5evTk/edit#gid=0");
  var urlDB = "https://docs.google.com/spreadsheets/d/1mE0ntHVQs3qauks50PngcK_hzxDvh2yhWqiLroO1k5o/edit#gid=0";
  var ss = SpreadsheetApp.openByUrl(urlDB);
  var sheet = ss.getSheetByName("Sheet1");

  
  if(op=="insert")
    return insert_value(e,sheet);
  
  //Make sure you are sending proper parameters 
  if(op=="read")
    return read_value(e,ss);
  
  if(op=="update")
    return update_value(e,sheet);
  
  if(op=="delete")
    return delete_value(e,sheet);
  
    
  
}

//Recieve parameter and pass it to function to handle

function insert_value(request,sheet){
 
 
  var id = request.parameter.id;
  var tn = request.parameter.tn;  
  var country = request.parameter.name;
  var lname = request.parameter.lname;
  var dob = request.parameter.dob;
  var height = request.parameter.height;
  var weight = request.parameter.weight;
  var age = request.parameter.age;
  var job = request.parameter.job;
  var sal = request.parameter.sal;
  var pic = request.parameter.pic;
  var token = request.parameter.token;
  
  var ei = request.parameter.ei;
  var de = request.parameter.de;
  var hsc = request.parameter.hsc;
  var sub_hsc = request.parameter.sub_hsc;
  var gpa = request.parameter.gpa;
  var ssd = request.parameter.ssd;
  var gd = request.parameter.gd;
  
  var u_ei = request.parameter.u_ei;
  var deu = request.parameter.deu;
  var fac_u = request.parameter.fac_u;
  var major_u = request.parameter.major_u;
  var u_gpa = request.parameter.u_gpa;
  var u_ssd = request.parameter.u_ssd;
  var u_gd = request.parameter.u_gd;
  
  var tel = request.parameter.tel;
  var mail = request.parameter.mail;
  var ref = request.parameter.ref;
  var aic = request.parameter.aic;
  var ca = request.parameter.ca;
  
  var sp = request.parameter.sp;
  var spack = request.parameter.spack;
  var tfp = request.parameter.tfp;
  var db = request.parameter.db;
  var os = request.parameter.os;
  
  var fb = request.parameter.fb;
  var line = request.parameter.line;
  var ig = request.parameter.ig;
  var git = request.parameter.git;
  var link = request.parameter.link;

  var cen = request.parameter.cen;
  var job_l = request.parameter.job_l;
  var swd = request.parameter.swd;
  var dop = request.parameter.dop;
  var cs = request.parameter.cs;
  var about = request.parameter.about;
  var exp = request.parameter.exp;
  
  var flag=1;
  var lr= sheet.getLastRow();
  for(var i=1;i<=lr;i++){
    var id1 = sheet.getRange(i, 2).getValue();
    if(id1==id){
      flag=0;
  var result="Id already exist..";
    } }
  //add new row with recieved parameter from client
  if(flag==1){
  var d = new Date();
  var currentTime = d.toLocaleString();
  var rowData = sheet.appendRow([currentTime,id,tn,country,lname,dob,height,weight,age,job,sal,pic,token,ei,de,hsc,sub_hsc,gpa,ssd,gd,u_ei,deu,fac_u,major_u,u_gpa,u_ssd,u_gd,tel,mail,ref,aic,ca,sp,spack,tfp,db,os,fb,line,ig,git,link,cen,job_l,swd,dop,cs,about,exp]);  
  var result="Insertion successful";
  }
     result = JSON.stringify({
    "result": result

  });  
         Logger.log(rowData);
    
  return ContentService
  .createTextOutput(request.parameter.callback + "(" + result + ")")
  .setMimeType(ContentService.MimeType.JAVASCRIPT);   
  }
  
  



function read_value(request,ss){
  
 
  var output  = ContentService.createTextOutput(),
      data    = {};
  //Note : here sheet is sheet name , don't get confuse with other operation 
      var sheet="sheet1";

  data.records = readData_(ss, sheet);
  
  var callback = request.parameters.callback;
  
  if (callback === undefined) {
    output.setContent(JSON.stringify(data));
  } else {
    output.setContent(callback + "(" + JSON.stringify(data) + ")");
  }
  output.setMimeType(ContentService.MimeType.JAVASCRIPT);
  
  return output;
}


function readData_(ss, sheetname, properties) {

  if (typeof properties == "undefined") {
    properties = getHeaderRow_(ss, sheetname);
    properties = properties.map(function(p) { return p.replace(/\s+/g, '_'); });
  }
  
  var rows = getDataRows_(ss, sheetname),
      data = [];

  for (var r = 0, l = rows.length; r < l; r++) {
    var row     = rows[r],
        record  = {};

    for (var p in properties) {
      record[properties[p]] = row[p];
    }
    
    data.push(record);

  }
  return data;
}



function getDataRows_(ss, sheetname) {
  var sh = ss.getSheetByName(sheetname);

  return sh.getRange(2, 1, sh.getLastRow() - 1, sh.getLastColumn()).getValues();
}


function getHeaderRow_(ss, sheetname) {
  var sh = ss.getSheetByName(sheetname);

  return sh.getRange(1, 1, 1, sh.getLastColumn()).getValues()[0];  
} 
  

//update function

function update_value(request,sheet){

var output  = ContentService.createTextOutput();
   var id = request.parameter.id;
  var flag=0;
  
  var tn = request.parameter.tn;  
  var country = request.parameter.name;
  var lname = request.parameter.lname;
  var dob = request.parameter.dob;
  var height = request.parameter.height;
  var weight = request.parameter.weight;
  var age = request.parameter.age;
  var job = request.parameter.job;
  var sal = request.parameter.sal;
  var pic = request.parameter.pic;
  var token = request.parameter.token;
  
  var ei = request.parameter.ei;
  var de = request.parameter.de;
  var hsc = request.parameter.hsc;
  var sub_hsc = request.parameter.sub_hsc;
  var gpa = request.parameter.gpa;
  var ssd = request.parameter.ssd;
  var gd = request.parameter.gd;
  
  var u_ei = request.parameter.u_ei;
  var deu = request.parameter.deu;
  var fac_u = request.parameter.fac_u;
  var major_u = request.parameter.major_u;
  var u_gpa = request.parameter.u_gpa;
  var u_ssd = request.parameter.u_ssd;
  var u_gd = request.parameter.u_gd;
  
  var tel = request.parameter.tel;
  var mail = request.parameter.mail;
  var ref = request.parameter.ref;
  var aic = request.parameter.aic;
  var ca = request.parameter.ca;
  
  var sp = request.parameter.sp;
  var spack = request.parameter.spack;
  var tfp = request.parameter.tfp;
  var db = request.parameter.db;
  var os = request.parameter.os;
  
  var fb = request.parameter.fb;
  var line = request.parameter.line;
  var ig = request.parameter.ig;
  var git = request.parameter.git;
  var link = request.parameter.link;

  var cen = request.parameter.cen;
  var job_l = request.parameter.job_l;
  var swd = request.parameter.swd;
  var dop = request.parameter.dop;
  var cs = request.parameter.cs;
  var about = request.parameter.about;
  var exp = request.parameter.exp;
  var lr= sheet.getLastRow();
  for(var i=1;i<=lr;i++){
    var rid = sheet.getRange(i, 2).getValue();
    if(rid==id){
        sheet.getRange(i,3).setValue(tn);
      sheet.getRange(i,4).setValue(country);
      sheet.getRange(i,5).setValue(lname);
      sheet.getRange(i,6).setValue(dob);
      sheet.getRange(i,7).setValue(height);
      sheet.getRange(i,8).setValue(weight);
      sheet.getRange(i,9).setValue(age);
      sheet.getRange(i,10).setValue(job);
      sheet.getRange(i,11).setValue(sal);
      sheet.getRange(i,12).setValue(pic);
      sheet.getRange(i,13).setValue(token);
      sheet.getRange(i,14).setValue(ei);
      sheet.getRange(i,15).setValue(de);
      sheet.getRange(i,16).setValue(hsc);
      sheet.getRange(i,17).setValue(sub_hsc);
      sheet.getRange(i,18).setValue(gpa);
      sheet.getRange(i,19).setValue(ssd);
      sheet.getRange(i,20).setValue(gd);
      sheet.getRange(i,21).setValue(u_ei);
      sheet.getRange(i,22).setValue(deu);
      sheet.getRange(i,23).setValue(fac_u);
      sheet.getRange(i,24).setValue(major_u);
      sheet.getRange(i,25).setValue(u_gpa);
      sheet.getRange(i,26).setValue(u_ssd);
      sheet.getRange(i,27).setValue(u_gd);
      sheet.getRange(i,28).setValue(tel);
      sheet.getRange(i,29).setValue(mail);
      sheet.getRange(i,30).setValue(ref);
      sheet.getRange(i,31).setValue(aic);
      sheet.getRange(i,32).setValue(ca);
      sheet.getRange(i,33).setValue(sp);
      sheet.getRange(i,34).setValue(spack);
      sheet.getRange(i,35).setValue(tfp);
      sheet.getRange(i,36).setValue(db);
      sheet.getRange(i,37).setValue(os);
      sheet.getRange(i,38).setValue(fb);
      sheet.getRange(i,39).setValue(line);
      sheet.getRange(i,40).setValue(ig);
      sheet.getRange(i,41).setValue(git);
      sheet.getRange(i,42).setValue(link);
      sheet.getRange(i,43).setValue(cen);
      sheet.getRange(i,44).setValue(job_l);
      sheet.getRange(i,45).setValue(swd);
      sheet.getRange(i,46).setValue(dop);
      sheet.getRange(i,47).setValue(cs);
      sheet.getRange(i,48).setValue(about);
      sheet.getRange(i,49).setValue(exp);
      var result="value updated successfully";
      flag=1;
    }
}
  if(flag==0)
    var result="id not found";
  
   result = JSON.stringify({
    "result": result
  });  
    
  return ContentService
  .createTextOutput(request.parameter.callback + "(" + result + ")")
  .setMimeType(ContentService.MimeType.JAVASCRIPT);   
  
  
}

function delete_value(request,sheet){
  var output  = ContentService.createTextOutput();
  var id = request.parameter.id;
  var tn = request.parameter.tn;  
  var country = request.parameter.name;
  var lname = request.parameter.lname;
  var dob = request.parameter.dob;
  var height = request.parameter.height;
  var weight = request.parameter.weight;
  var age = request.parameter.age;
  var job = request.parameter.job;
  var sal = request.parameter.sal;
  var pic = request.parameter.pic;
  var token = request.parameter.token;
  
  var ei = request.parameter.ei;
  var de = request.parameter.de;
  var hsc = request.parameter.hsc;
  var sub_hsc = request.parameter.sub_hsc;
  var gpa = request.parameter.gpa;
  var ssd = request.parameter.ssd;
  var gd = request.parameter.gd;
  
  var u_ei = request.parameter.u_ei;
  var deu = request.parameter.deu;
  var fac_u = request.parameter.fac_u;
  var major_u = request.parameter.major_u;
  var u_gpa = request.parameter.u_gpa;
  var u_ssd = request.parameter.u_ssd;
  var u_gd = request.parameter.u_gd;
  
  var tel = request.parameter.tel;
  var mail = request.parameter.mail;
  var ref = request.parameter.ref;
  var aic = request.parameter.aic;
  var ca = request.parameter.ca;
  
  var sp = request.parameter.sp;
  var spack = request.parameter.spack;
  var tfp = request.parameter.tfp;
  var db = request.parameter.db;
  var os = request.parameter.os;
  
  var fb = request.parameter.fb;
  var line = request.parameter.line;
  var ig = request.parameter.ig;
  var git = request.parameter.git;
  var link = request.parameter.link;

  var cen = request.parameter.cen;
  var job_l = request.parameter.job_l;
  var swd = request.parameter.swd;
  var dop = request.parameter.dop;
  var cs = request.parameter.cs;
  var about = request.parameter.about;
  var exp = request.parameter.exp;
  
  var flag=0;

  
  
  var lr= sheet.getLastRow();
  for(var i=1;i<=lr;i++){
    var rid = sheet.getRange(i, 2).getValue();
    if(rid==id){
      sheet.deleteRow(i);
      var result="value deleted successfully";
      flag=1;
    }
    
  }

  if(flag==0)
    var result="id not found";
  
  
 
   result = JSON.stringify({
    "result": result
  });  
    
  return ContentService
  .createTextOutput(request.parameter.callback + "(" + result + ")")
  .setMimeType(ContentService.MimeType.JAVASCRIPT);   
  
}