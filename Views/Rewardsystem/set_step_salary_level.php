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
                                                    <h3 class="content-header-title">ระดับและขั้นเงินเดือน</h3>
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class="breadcrumb-item"><a
                                                                                        href="../home/index.php">ระบบบำเหน็จประจำปี</a></li>
                                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                                บันทึกระดับและขั้นเงินเดือน </li>
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
        <h6 style="background-color:#0f1733;color:white;line-height:40px;padding-left:10px;">ค้นหา ระดับและขั้นเงินเดือน</h6></a></div>
        <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31" class="card-collapse collapse show" aria-expanded="true" >  


<form>

<div class="row">
        <div class="col-10 m-auto"> 
            <div class="form-row px-2 m-auto">

            <div class="form-group col-md-3">
                    <label for="formGroupExampleInput"> ประเภทกำลังพล:</label>
                    <select class="form-control" id="exampleFormControlSelect1" >
                        <option>สัญญาบัตร</option>
                        <option>ประทวน</option>
                    </select>                  
            </div>
            <div class="form-group col-md-3">
                    <label for="formGroupExampleInput2">ระดับ:</label>
                    <select class="form-control" id="exampleFormControlSelect1" style="width: 100px;">
                        <option>น.1</option>
                        <option>น.2</option>
                    </select>
            </div>

            <div class="form-group col-md-6">
                    <h6>สถานะการใช้งาน:</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">ใช้งาน</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">ยกเลิก</label>
                     </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">ทั้งหมด</label>
                    </div>
            </div>
</div>


<div class="row mt-2"> 
     <div class="col-12 d-flex justify-content-center"> 
        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:#0f1733; color:white;">
            <span class="la la-search"style="color:white; font-weight: bold;font-size: 18px"></span>ค้นหา</a> 
        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:#0f1733; color:white;">
            <span class="la la-repeat"style="color:white; font-weight: bold;font-size: 18px"></span>ล้างค่า</a> 
        
    </div>
</div>

</div>
</div>
</form>
       

        </div> <!-- close id="collapse31" -->
    </div> <!-- close card collapse-icon accordion-icon-rotate active -->
</div> <!-- close shadow -->


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="row">
    <div class="col-12"> 
        
        <div class="bg-info  clearfix">
            <a href="#" class="btn btn-social btn-min-width mb-1 float-left round"style="background-color:#0f1733; color:white;">
            <span class="la la-plus-circle"style="color:white; font-weight: bold;font-size: 18px"> </span> เพิ่ม</a> 
            <a href="#" class="btn btn-social btn-min-width mb-1 float-left round"style="background-color:#0f1733; color:white;">
            <span class="la la-trash-o"style="color:white; font-weight: bold;font-size: 18px"></span> ลบ</a> 
            <a href="#" class="btn btn-social btn-min-width mb-1 float-right round" role="button" style="background-color:#0f1733; color:white;">
            <span class="la la-excel"style="color:white; font-weight: bold;font-size: 18px"></span>Excel</a> 

        </div>
    </div>

    <div class="col-12">  
    <table class="table table-striped table-borderless table-hover">
        <thead>
            <tr class="justify-content-center"style="background-color:#0f1733; color:whitesmoke;">
                                                      
                                                      <th><input type="checkbox" class="checkAll"
                                                              onclick="toggle(this);" /></th>
                                                      <th></th>
                                                      <th>ลำดับที่</th>
                                                      <th>ประเภทกำลังพล</th>
                                                      <th>ระดับชั้น</th>
                                                      <th>เงินเดือน</th>
                                                      <th>อัตราเงินเดือนต่ำสุด</th>
                                                      <th>อัตราเงินเดือนสูงสุด</th>
                                                      <th>สถานะเงินเดือน</th>
                                                      <th>ระดับเงินเดือนใหม่</th>
                                                      <th>ขั้นเงินเดือนใหม่</th>
                                                      <th>สถานะ</th>
                                                  </tr>
                                              </thead>
                                              <tbody align="center">
                                                <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="../Rewardsystem/set_step_salary_edit_level.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="#"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td>1</td>
                                                      <td>สัญญาบัตร</td>
                                                      <td>1.0 </td>
                                                      <td>30,000</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td>ปกติ</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td align="center">
                                                          <input type="checkbox" checked data-toggle="toggle"
                                                              data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก"
                                                              data-onstyle="success" data-offstyle="danger"
                                                              data-size="sm">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="../Rewardsystem/set_salary_edit_level.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="#"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td>1</td>
                                                      <td>สัญญาบัตร</td>
                                                      <td>1.0 </td>
                                                      <td>30,000</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td>ปกติ</td>
                                                      <td></td>
                                                      <td></td>
                                                      <td align="center">
                                                          <input type="checkbox" checked data-toggle="toggle"
                                                              data-style="ios" data-on="ใช้งาน" data-off="ยกเลิก"
                                                              data-onstyle="success" data-offstyle="danger"
                                                              data-size="sm">
                                                      </td>
                                                  </tr>
                                                  
                                                 
                                              </tbody>
                                             
         </table>
    </div>
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