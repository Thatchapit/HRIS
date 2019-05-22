

<!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <style>
/* ol > li > a {color:#222233;} */
.toggle.ios,
.toggle-on.ios,
.toggle-off.ios {
    border-radius: 20rem;
}

.toggle.ios .toggle-handle {
    border-radius: 20rem;
}


  </style>

  <section>

      <div class="app-content content">
          <div class="content-wrapper">
                                            <div class="content-header row">
                                                <div class="content-header-left col-12 mb-2">
                                                    <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                                                    <h3 class="content-header-title">กการพิมพ์คําสั่งในการให้บําเหน็จประจําปี</h3>
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class="breadcrumb-item"><a
                                                                                        href="../home/index.php">ระบบบำเหน็จประจำปี</a></li>
                                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                                บัญชีคำสั่งบำเหน็จประจำปี</li>
                                                                            </ol>
                                                                        </nav>
                                                </div>
                                            </div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                                                    
<div class="shadow p-0 bg-white rounded">

    <div class="card collapse-icon accordion-icon-rotate active">
        <div id="headingCollapse31" class="card-header">
        <a data-toggle="collapse" href="#collapse31" aria-expanded="true" aria-controls="collapse31" class="card-title lead white" style="color:white;" >
        <h6 style="background-color:#0f1733;color:white;line-height:40px;padding-left:10px;">ค้นหา การพิมพ์คําสั่งในการให้บําเหน็จประจําปี</h6></a></div>
        <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31" class="card-collapse collapse show" aria-expanded="true" >  

<form>

<div class="row">
        <div class="col-10 m-auto"> 
            <div class="form-row px-2 m-auto">

                            <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput">ปีงบประมาณ:</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" style="width:100px;border-color:red" placeholder="2562">
                            </div>
                            <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput2">ระยะเวลา:</label>
                                    <select class="form-control" id="exampleFormControlSelect1" style="width: 100px;">
                                        <option>เมษายน</option>
                                        <option>ตุลาคม</option>
                                    </select>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput">เลขที่คำสั่ง:</label>
                                    <select class="form-control" id="exampleFormControlSelect1" style="border-color:red">
                                        <option></option>
                                        <option></option>
                                    </select>
                            </div>
            </div>  

                         


                <div class="form-row px-2">

                            <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput2">ผู้ตรวจสอบความถูกต้อง:</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option></option>
                                        <option></option>
                                    </select>
                            </div>
                </div>


                <div class="row mt-2"> 
                    <div class="col-12 d-flex justify-content-center"> 
                        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:#0f1733; color:white;">
                            <span class="la la-print"style="color:white; font-weight: bold;font-size: 18px"></span>พิมพ์</a> 
                        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:#0f1733; color:white;">
                            <span class="la la-repeat"style="color:white; font-weight: bold;font-size: 18px"></span>ล้างค่า</a> 
                    </div>
                </div>

        </div>
    </div>
</form>

</div> <!-- id="collapse31"  -->
</div> <!-- close card collapse-icon accordion-icon-rotate active -->
</div> <!-- close shadow -->


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



    
            </div>
        </div>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                         
                                
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>

  <script type="text/javascript">
$(document).ready(function() {
    console.log("ready");
    change_autorefreshdiv();
});

function change_autorefreshdiv() {
    // $('#prefixPage').addClass('active');
}

function toggle(source) {
    var checkboxes = document.querySelectorAll('.checkAll');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
  </script>



  <!-- footer -->
  <?php include '../include/footer.php'; ?>