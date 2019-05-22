
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
                                                    <h3 class="content-header-title">รายชื่อผู้ขอรับบําเหน็จประจําปี</h3>
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class="breadcrumb-item"><a
                                                                                        href="../home/index.php">ระบบบำเหน็จประจำปี</a></li>
                                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                                บันทึกประวัติการได้รับบำเหน็จประจำปี</li>
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
        <h6 style="background-color:#0f1733;color:white;line-height:40px;padding-left:10px;">ค้นหารายชื่อผู้ได้รับบำเหน็จประจำปี</h6></a></div>
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
                            <select class="form-control" id="exampleFormControlSelect1" style="width:100px;">
                                <option>เมษายน</option>
                                <option>ตุลาคม</option>
                            </select>
                    </div>

                    <div class="form-group col-md-3">
                            <label for="formGroupExampleInput">สังกัด:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>กพ.ทอ.</option>
                                <option>กพ.ทอ.</option>
                            </select>
                            </div>

                    <div class="form-group col-md-3">
                            <label for="formGroupExampleInput2">กลุ่มข้าราชการ:</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>ร.ต.-ร.อ</option>
                                <option>ร.ต.-ร.อ</option>
                            </select>
                    </div>
        </div>

        <div class="form-row px-2">
  
                    <div class="form-group col-md-6">
                            <label for="formGroupExampleInput2">เลขประจำตัว:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" style="width:150px;" placeholder="365330061000">
                    </div>

                    <div class="form-group col-md-6">
                            <label for="formGroupExampleInput2">ชื่่อ-นามสกุล:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
        </div>

        <hr>

        <div class="form-row px-2">
                <div class="col-6">
                        <h6 class="py-1">สถานะการณ์การทำงาน:</h6>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios0" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            บันทึกแบบร่าง
                        </label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios0" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            บันทึกคำสั่ง
                        </label>
                        </div>

                        <h6 class="py-1">สถานะบันทึกเลขที่ร่าง:</h6>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            ปกติ
                        </label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            เยี่ยวยา
                        </label>
                        </div>

                        <h6 class="py-1">เป็นลักษณะแบบ:</h6>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                           ยังไม่เต็มขั้น
                        </label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            เต็มขั้น
                        </label>
                        </div>

                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            ใกล้เต็มขั้น
                        </label>
                        </div>

                        <div class="form-group py-1">
                            <h6>บำเหน็จ:</h6>
                            <select class="form-control" id="exampleFormControlSelect1" style="width: 200px;" >
                                <option>ไม่ระบุ</option>
                                <option>0.5</option>
                            </select>
                         </div>   

                </div>       
 
 <hr>

        <div class="col-6">
                <h6 class="py-1">สถานะของเลขร่าง:</h6>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    ทั้งหมด
                </label>
                </div>
        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        บันทึกเลขร่าง
                                    </label>
                                </div>
                            </div>
                            <div class="col-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput">บันทึกเลขร่าง:</label>
                                    <select class="form-control" id="exampleFormControlSelect1" >
                                        <option>เลือก</option>
                                        <option></option>
                                    </select>
                                </div>  
                            </div>
                        </div>
               
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    ยังไมได้บันทึกเลขร่าง
                </label>
                </div>

        </div>       

</div>

<hr>

<div class="form-row px-2">
  
  <div class="form-group col-md-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">เกษียณอายุ</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Early</label>
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

        
       <h6 class="mb-2 mt-2">รายชื่อผู้ได้รับบําเหน็จประจําปี จํานวน 20 คน</h6>

        <!-- <div class="bg-info">
            <a href="#" class="btn btn-social btn-min-width mb-1 round"style="background-color:#0f1733; color:white;">
            <span class="la la-plus-circle"style="color:white; font-weight: bold;font-size: 18px"> </span> เพิ่ม</a> 
            <a href="#" class="btn btn-social btn-min-width mb-1 round"style="background-color:#0f1733; color:white;">
            <span class="la la-trash-o"style="color:white; font-weight: bold;font-size: 18px"></span> ลบ</a> 

        </div> -->
</div>


    <div class="col-12">  
    <div class="table-responsive">
    <table class="table table-striped table-borderless table-hover">
        <thead>
            <tr class="justify-content-center"style="background-color:#0f1733; color:whitesmoke;">
                                                      
                                                      <th><input type="checkbox" class="checkAll"
                                                              onclick="toggle(this);" /></th>
                                                      <th></th>
                                                      <th>ลำดับที่</th>
                                                      <th>ปีงบประมาณ/เลขร่าง</th>
                                                      <th>ยศ</th>
                                                      <th>ชื่อ-นามสกุล</th>
                                                      <th>ตำแหน่ง</th>
                                                      <th>สังกัด</th>
                                                      <th>สถานะข้าราชการ</th>
                                                      <th>สังกัดที่มา/ที่ไป</th>
                                                      <th>บำเหน็จ</th>
                                                      <th>ขั้นเงินเดือนปัจจุบัน</th>
                                                      <th>ขั้นเงินเดือนใหม่</th>
                                                      <th>คำสั่ง</th>
                                                      

                                                      <!-- <th>สถานะ</th> -->
                                                  </tr>
                                              </thead>
                                              <tbody align="center">
                                                <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="../Rewardsystem/register_reward.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="./delete.php"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td class="bd-callout bd-callout-warning" >1</td>
                                                      <td>2561/111111</td>
                                                      <td>ว่าที่ ร.ต.หญิง</td>
                                                      <td>อินทัช อินทร์ทองน้อย </td>
                                                      <td>นซบ. มว.อท.ผสอ.กทน.บน.56</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                  </tr>

                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="./detail.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="./delete.php"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td class="bd-callout bd-callout-warning" >1</td>
                                                      <td>2561/111111</td>
                                                      <td>ว่าที่ ร.ต.หญิง</td>
                                                      <td>อินทัช อินทร์ทองน้อย </td>
                                                      <td>นซบ. มว.อท.ผสอ.กทน.บน.56</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                  </tr>

                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="./detail.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          <a href="./delete.php"><i class="la la-trash-o"
                                                                  style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td class="bd-callout bd-callout-warning" >1</td>
                                                      <td>2561/111111</td>
                                                      <td>ว่าที่ ร.ต.หญิง</td>
                                                      <td>อินทัช อินทร์ทองน้อย </td>
                                                      <td>นซบ. มว.อท.ผสอ.กทน.บน.56</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                      <td>111111</td>
                                                  </tr>

                                              </tbody>
                                             
         </table>
         </div>
    </div>


    <div class="row mt-2"> 
    <div class=" col-12 m-auto">
                    <div class="col-12 d-flex justify-content-center"> 
                        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:green; color:white;">
                            <span class="la la-save"style="color:white; font-weight: bold;font-size: 18px"></span>บันทึกเลขที่ร่างส่ง</a> 
                        <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:green; color:white;">
                            <span class="la la-save"style="color:white; font-weight: bold;font-size: 18px"></span>บันทึกเลขที่ร่างส่งตามเงื่อนไขค้นหา</a> 
                
                    </div>
                   
    </div>

 
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