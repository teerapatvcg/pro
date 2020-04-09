<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูลส่วนตัว</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- DataTables -->
    <?php echo link_tag('assert/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?> 
    
    <?php echo link_tag('assert/plugins/fontawesome-free/css/all.min.css');?>
    <?php echo link_tag('assert/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>
    <?php echo link_tag('assert/dist/css/adminlte.min.css');?>
    <?php echo link_tag('assert/dist/css/jquery.datetimepicker.min.css');?>
    
</head>

<body style="font-family: 'Kanit', sans-serif;" class="hold-transition sidebar-mini layout-fixed">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-green navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <!--<li class="nav-item">
            <a href="#" class="nav-link">Home</a>
          </li>-->
          </ul>
        </nav>
    
        <!-- Main Sidebar Container -->
        <nav class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Logo -->
          <a href="index.html" class="brand-link">
            <img src="https://reg3.src.ku.ac.th/image_regis/KUSRC.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">LM | Admin</span>
          </a>
    
          <!-- Sidebar -->
          <div class="sidebar">
            <div class="user-panel mt-4 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo base_url('assert/dist/img/admin.jpg');?>" class="img-circle elevation-3" alt="User Image">
              </div>
              <div class="info">
                <p style="color: white;font-size: 12.5px;">ยินดีต้อนรับ (:</p>
                <a href="#" class="d-block">admin name</a>
              </div>
            </div>
    
            <!-- Sidebar Menu -->
            <nav class="mt-3">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
    
                <li class="nav-header">MAIN MENU</li>
                <li class="nav-item">
                  <a href="index.html" class="nav-link">
                    <i class="nav-icon fa ion-android-home"></i>
                    <p>
                      หน้าแรก
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="history.html" class="nav-link">
                    <i class="nav-icon fa ion-clipboard"></i>
                    <p>
                      รายการคำร้อง
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="add.html" class="nav-link active">
                    <i class="nav-icon fa ion-android-add"></i>
                    <p>
                      เพิ่มข้อมูลบุลคากร
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="edit_table.html" class="nav-link">
                    <i class="nav-icon fa ion-android-create"></i>
                    <p>
                      แก้ไขข้อมูลบุลคากร
                    </p>
                  </a>
                </li>
                
                
                <li class="nav-item">
                  <a href="calendar_edit.html" class="nav-link">
                    <i class="nav-icon fa ion-android-calendar"></i>
                    <p>
                      จัดการปฎิทิน
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="dev_acction.html" class="nav-link">
                    <i class="nav-icon fa ion-android-calendar"></i>
                    <p>
                      ใช้สิทธิ์อนุญาตคำร้องแทน
                    </p>
                  </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item" style="background-color: lightgray; margin-left: 2px; margin-right: 2px;">
                  <a href="../login.html" class="nav-link" style="color: black">
                    <i class="nav-icon fa fa-power-off"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- End Main Sidebar Container -->
        </nav>
      </div><!-- /.wrapper -->

      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
                <h1 class="m-0 text-dark"></h1>
          </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->
    <header class="container-fluid p-2">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">เพิ่มข้อมูลส่วนตัว</h1>
            </div>
        </div>
    </header>
    <article class="container ">
        <div class="row">
            <div class="col-4 offset-1">
                <form action="<?php echo site_url('add/adding');?>" onSubmit="JavaScript:return checkk();" method="post" style="padding-left: 20px;padding-top: 20px;" name="frm1">
                    <div class="form-group ">
                        <label >ชื่อ</label>
                        <input type="text" pattern="[ก-๏\s]+"  class="form-control" name="first_name" id="first_name" required >
                    </div>

                    <div class="form-group">
                        <label >นามสกุล</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                    </div>

                    <div class="form-group">
                        <label >บัตรประชาชน</label>
                        <input type="tel" class="form-control" pattern="[0-9]{13}" name="card_id" id="card_id" maxlength="13" minlength="13" required>
                    </div>

                    <div class="form-group">
                        <label >วันที่เริ่มทำงาน</label>
                        <input type="text" class="form-control" name="start_work" id="start_work" onclick="datee()"
                        readonly placeholder="YY/MM/DD" required>
                    </div>

                    <div class="form-group">
                        <label >เบอร์</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>          
                            </div>
                            <input type="tel" maxlength="10" minlength="10" class="form-control" pattern="[0-9]{10}" name="phone" id="phone" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label >Email</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="ku_mail" id="ku_mail" required>
                        </div>
                    </div>
                
            </div>
            <div class="col-4 offset-2" style="padding-left: 40px;padding-top: 20px;">
                    <div class="form-group">
                
                    <div class="form-group">
                            <label >วันลาสะสม</label>
                            <input type="number" step=0.1 min=0 max=30 class="form-control" name="remain_leave" id="remain_leave" required>
                        </div>
 
                        <label >ตำแหน่ง</label>
                        <select type="text" class="form-control" name="rank" id="rank" required onchange="check_dean()">
                            <option value="0">บุคลากร</option>
                            <option value="1">หัวหน้าภาค</option>
                            <option value="2">รองคณบดี</option>
                            <option value="3">คณบดี</option>
                            <option value="4">HR</option>
                            <option value="5">ADMIN</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label >คณะ</label>
                        <input type="text" class="form-control" value="วิศวกรรมศาสตร์ศรีราชา" id="major" name="major" disabled="">
                    </div>


                    <div class="form-group">
                        <label >ภาควิชา</label>
                        <select type="text" class="form-control" name="faculty" id="faculty" required>
                            <option value=""></option>
                            <option value="T12">วิศวกรรมคอมพิวเตอร์และสารสนเทศศาสตร์</option>
                            <option value="T05">วิศวกรรมโยธา</option>
                            <option value="T13">วิศวกรรมเครื่องกล</option>
                            <option value="T17">วิศวกรรมอุตสาหการ</option>
                            <option value="T14">วิศวกรรมไฟฟ้า</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label >รหัสบุคลากร</label>
                        <input type="tel" class="form-control" pattern="[a-zA-Z0-9]{5}" maxlength="5" minlength="5" name="ku_id" id="ku_id" required>
                    </div>

                    <div class="col-4 offset-2 pt-4 pr-3">
                        <button type="submit" class="btn btn-success" style="width:200px ">บันทึกข้อมูล</button>
                        <!-- <button type="submit" class="btn btn-success" style="width:200px ">บันทึกข้อมูล</button> -->
                        
                    </div>
                    
              </form>
              
            </div>

                
        </div>
        

    </article>
    <article class="container ">
        <div class="row">
        <div class="col-4 offset-7">
                <form action="<?php echo site_url('uploadfile');?>" method="post" style="padding-left: 20px;padding-top: 20px;" enctype="multipart/form-data">
                    <div class="col-7 offset-1">
                        <div class="form-group" >
                            <label>อัพไฟล์_Excel</label>
                            <input type="file" class="form-control-file" name="fileup" id="fileup" required>
                        </div>
                        </div>
                        <div class="col-4 offset-3 pr-1">
                             <button type="submit" class="btn btn-success" style="width:200px ">Import</button>
                        </div>
                    </div>
                </form>
                </div>
                </div>
        </article>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo base_url('assert/plugins/jquery/jquery.js');?>"  ></script>
<script type="text/javascript" src="<?php echo base_url('assert/plugins/bootstrap/js/bootstrap.bundle.js');?>"  ></script>
<script type="text/javascript" src="<?php echo base_url('assert/dist/js/adminlte.min.js');?>"  ></script>
<script type="text/javascript" src="<?php echo base_url('assert/plugins/datatables/jquery.dataTables.js');?>"  ></script>
<script type="text/javascript" src="<?php echo base_url('assert/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"  ></script>

<script>
function submitForm1(frm1){
  frm1.action = "<?php echo site_url('add/adding');?>";
    var a,b,c,d,e,f,g,h,i,j;
    a = document.getElementById("last_name").value;
    b = document.getElementById("card_id").value;
    c = document.getElementById("start_work").value;
    d = document.getElementById("phone").value;
    e = document.getElementById("ku_mail").value;
    f = document.getElementById("remain_leave").value;
    g = document.getElementById("first_name").value;
    h = document.getElementById("ku_id").value;
    i = document.getElementById("faculty").value;
    j= document.getElementById("phone").length;
    k=c.length;
    // if(document.getElementById("start_work").length!=10)
    // {
    //   alert("กรุณาใส่วันที่");
    //   return false;
    // }
    if(document.getElementById('faculty').disabled == true && a!=""&& b!=""&& j=="10" && e!=""&& f!=""&& g!=""&& h!="" && k!="10"){
      document.getElementById('faculty').disabled = false;
      document.getElementById('faculty').required = false;
      
      frm1.submit();
    }
    else if(document.getElementById('faculty').disabled == false && a!=""&& b!=""&& j=="10"&& e!=""&& f!=""&& g!=""&& h!=""&& i!="" && k=="10"){
      frm1.submit();
    }
}
function checkk()
{
  tt=calculat();
  var aa,bb;
  aa=document.getElementById("start_work").value;
  da=document.getElementById("remain_leave").value;
  bb=aa.length;
  if(bb!="10")
  {
    alert("กรุณาใส่วันที่");
    return false;
  }
  tt=calculat();
  pp=0;
  if(tt<=365)
  {
    q=10;
    pp=1;
  }
  if(tt>365&&tt<=3650)
  {
    q=20;
    pp=2;
  }
  if(tt>3650)
  {
    q=30;
    pp=3;
  }
  if(pp==1)
  {
    if(da>q)
    {
      alert("กรุณาใส่วันลาสะสมให้ถูกต้อง ห้ามเกิน 10 วัน");
      return false;
    }
  }
  else if(pp==2)
  {
    if(da>q)
    {
      alert("กรุณาใส่วันลาสะสมให้ถูกต้อง ห้ามเกิน 20 วัน");
      return false;
    }
  }
  else if(pp==3)
  {
    if(da>q)
    {
      alert("กรุณาใส่วันลาสะสมให้ถูกต้อง ห้ามเกิน 30 วัน");
      return false;
    }
  }
  document.getElementById('faculty').disabled = false;
  document.getElementById('faculty').required = false;
  document.frm1.submit();
}
function check_dean(){
    if(document.getElementById('rank').value=="0"){
      document.getElementById('faculty').disabled = false;
    }
    else if(document.getElementById('rank').value=="1"){
      document.getElementById('faculty').disabled = false;
    }
    else if(document.getElementById('rank').value=="2"){
      document.getElementById('faculty').value="";
      document.getElementById('faculty').disabled = true;
    }
    else if(document.getElementById('rank').value=="3"){
      document.getElementById('faculty').value="";
      document.getElementById('faculty').disabled = true;
    }
    else if(document.getElementById('rank').value=="4"){
      document.getElementById('faculty').value="";
      document.getElementById('faculty').disabled = true;
    }
    else if(document.getElementById('rank').value=="5"){
      document.getElementById('faculty').value="";
      document.getElementById('faculty').disabled = true;
    }
    else if(document.getElementById('rank').value=="99"){
      document.getElementById('faculty').value="";
      document.getElementById('faculty').disabled = true;
    }
}
</script>
<script language="javascript" type="text/javascript">
    function calculat() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = yyyy + '/' +  mm + '/' + dd ;
        var tee = document.getElementById("start_work").value;
        //tee = tee.split("/");
        var date1 = tee;
        var date2 = today;
        //alert(date1);
        date1 = date1.split("/");
        date2 = date2.split("/");
        
        if(isNaN(date1)&& isNaN(date2)){
          sDate = new Date(date1[0], date1[1] - 1, date1[2] - 1);
          eDate = new Date(date2[0], date2[1] - 1, date2[2]);
          var daysDiff = Math.round((eDate - sDate) / 86400000);
          return daysDiff;
        }
        
        
    }
</script>
<script src="<?php echo base_url() ?>assert/dist/js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
    function datee() {
        var optsDate = {
            format: 'Y/m/d', // รูปแบบวันที่ 
            formatDate: 'Y/m/d',
            timepicker: false,
            closeOnDateSelect: true,
        }
        var setDateFunc = function(ct, obj) {
            var minDateSet = $("#start_work").val();
            var maxDateSet = $("#datepicker2").val();

            if ($(obj).attr("id") == "start_work") { //กดเริ่ม
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : true
                })
            }
        }
        $("#start_work").datetimepicker($.extend(optsDate, {
            onShow: setDateFunc,
            onSelectDate: setDateFunc,
        }));
    }
</script>
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": false,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": false,
        "autoWidth": false,
      });
    });
  </script>
</body>


</html>