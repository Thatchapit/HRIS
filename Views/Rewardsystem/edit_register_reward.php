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
                                                    <h3 class="content-header-title">รายชื่อผู้ได้รับบําเหน็จประจําปี</h3>
                                                                        <nav aria-label="breadcrumb">
                                                                            <ol class="breadcrumb">
                                                                                <li class="breadcrumb-item"><a
                                                                                        href="../home/index.php">ระบบบำเหน็จประจำปี</a></li>
                                                                                <li class="breadcrumb-item active" aria-current="page">
                                                                                บันทึกข้อมูลไปยังหน่วยงานต่างๆ ของ กพ.ทอ.</li>
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
        <h6 style="background-color:#0f1733;color:white;line-height:40px;padding-left:10px;">บันทึก/แก้ไข  ระดับเงินเดือนข้าราชการทหาร</h6></a></div>
        <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31" class="card-collapse collapse show" aria-expanded="true" >  

        <form>
            <div class="row">
                <div class="col-10 m-auto"> 
                    <div class="form-row px-2">
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

                        <div class="form-group col-md-3">
                                <label for="formGroupExampleInput">หมายเลขประจำตัว:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" style="width:200px;border-color:red" placeholder="365330061000">
                                </div>
                            

                        <div class="form-group col-md-3">
                                <label for="formGroupExampleInput2">ยศ:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" style="width:200px;" placeholder="ว่าที่ ร.ต.">
                        </div>
                    </div>

                    <div class="form-row px-2 m-auto">

                        <div class="form-group col-md-9">
                                <label for="formGroupExampleInput">ชื่อ-นามสกุล</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" style="width:400px;border-color:red" placeholder="อินทัช อินทร์ทองน้อย">
                                </div>

                        <div class="form-group col-md-3">
                                <label for="formGroupExampleInput">สังกัด:</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>กพ.ทอ.</option>
                                    <option>กพ.ทอ.</option>
                                </select>
                                </div>

                    </div>

                    <div class="form-row px-2">
                        <div class="form-group col-12">
                                <label for="formGroupExampleInput">ตำแหน่ง:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="นซบ. มว.อท.ผสอ.กทน.บน.56">
                            
                        </div>   
                    </div>

                    <hr>

                    <div class="form-row px-2">
                        <div class="col-6">

                                บำเหน็จย้อนหลัง:
                                <table class="table">
                                <thead style="background-color:#0f1733;color:white">
                                    <tr>
                                    <th scope="col">ประจำปี</th>
                                    <th scope="col">บำเหน็จ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>2562</td>
                                    <td>11.5</td>
                                    </tr>
                                    <tr>
                                    <td>2561</td>
                                    <td>11.5</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>   


                    <div class="form-group col-6">
                        <div class="form-row px-2">

                            <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput2">บำเหน็จ:</label>
                                    <select class="form-control" id="exampleFormControlSelect1" style="width: 100px;border-color:red">
                                        <option>0.5</option>
                                        <option>1.0</option>
                                    </select>
                            </div>
                        </div>    
                        
                    </div>  
                </div>

         
 <!-- /////////////////////////////////////////////nav nav-tabs//////////////////////////////////////////////////////////////// -->


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">เงินเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ปรับเงินเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">เลือนขั้นเงินเดือน</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="savedref"  data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">บันทึกข้อมูลเลขที่ร่างคำสั่ง</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="save"  data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">บันทึกเลขที่คำสั่ง</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  
<!-- //////////////////////////////////////////////1 เงินเดือน////////////////////////////////////////////////////////////////// -->
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                
                <div class="form-row px-2">

                   <div class="col-12">
                            <h5>เงินเดือน</h5>

                            <div class="form-row">
                                        <div class="form-group col-md-3">
                                                <label for="formGroupExampleInput2">ขั้น/ชั้นของเงินเดือน:</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>0.5</option>
                                                    <option>1.0</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                                <label for="formGroupExampleInput">จำนวนเงิน:</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                                        </div>

                                        <div class="form-group col-md-3">
                                                <label for="formGroupExampleInput">เบิกลด:</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                                        </div>
                                      

                            </div>

                            <div class="form-row">
                                        <div class="form-group col-md-3">
                                                <label for="formGroupExampleInput">เงินค่าตอบแทน:</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                                        </div>
                                        <div class="form-group col-md-3">        
                                                <label for="formGroupExampleInput">เงินค่าตอบแทนพิเศษ:</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">รายละเอียด:</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                       
                            </div>   
                </div>
        </div>

</div>
<!-- //////////////////////////////////////////2 ปรับเงินเดือน////////////////////////////////////////////////////////////////////// -->
                        
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
 
<div class="form-row px-2">

<div class="col-12">
         <h5>ปรับเงินเดือน</h5>

         <div class="form-row">
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput2">ขั้น/ชั้นของเงินเดือน:</label>
                             <select class="form-control" id="exampleFormControlSelect1">
                                 <option>0.5</option>
                                 <option>1.0</option>
                             </select>
                     </div>
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">จำนวนเงิน:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">เบิกลด:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
                    

         </div>

         <div class="form-row">
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">เงินค่าตอบแทน:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
                     <div class="form-group col-md-3">        
                             <label for="formGroupExampleInput">เงินค่าตอบแทนพิเศษ:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-6">
                         <label for="exampleFormControlTextarea1">รายละเอียด:</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                    
        </div>   
</div>
</div>   
</div>
<!-- //////////////////////////////////////////////3 เลื่อนเงินเดือน////////////////////////////////////////////////////////////////// -->
                        
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<div class="form-row px-2">

<div class="col-12">
         <h5>เลื่อนเงินเดือน</h5>

         <div class="form-row">
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput2">ขั้น/ชั้นของเงินเดือน:</label>
                             <select class="form-control" id="exampleFormControlSelect1">
                                 <option>0.5</option>
                                 <option>1.0</option>
                             </select>
                     </div>
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">จำนวนเงิน:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">เบิกลด:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
                     <!-- <div class="form-group col-md-3">        
                             <label for="formGroupExampleInput">เงินค่าตอบแทน:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div> -->

         </div>

         <div class="form-row">
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">เงินค่าตอบแทน:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
                     <div class="form-group col-md-3">        
                             <label for="formGroupExampleInput">เงินค่าตอบแทนพิเศษ:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-6">
                         <label for="exampleFormControlTextarea1">รายละเอียด:</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                    
        </div>   
</div>
</div>                
</div>
            
<!-- //////////////////////////////////////////////4 บันทึกข้อมูลเลขที่ร่างคำสั่ง///////////////////////////////////////////////////////////////// -->
                        
<div class="tab-pane fade" id="savedref" role="tabpanel" aria-labelledby="save-dref">
<div class="form-row px-2">

<div class="col-12">
         <h5>บันทึกข้อมูลเลขที่ร่าง</h5>

         <div class="form-row">
                    
                     <div class="form-group col-md-6">
                             <label for="formGroupExampleInput">ข้อมูลเลขที่ร่าง:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

         </div>
</div>                
</div>
</div> 

<!-- //////////////////////////////////////////////5 บันทึกข้อมูลเลขที่คำสั่ง///////////////////////////////////////////////////////////////// -->
                        
<div class="tab-pane fade" id="save" role="tabpanel" aria-labelledby="save">
<div class="form-row px-2">

<div class="col-12">
         <h5 class="mt-2">บันทึกข้อมูลเลขที่ร่าง</h5>

         <div class="form-row">
                     
                     <div class="form-group col-md-6">
                             <label for="formGroupExampleInput">คำสั่ง:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-6">
                             <label for="formGroupExampleInput">เลขที่คำสั่ง:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
            </div>
            <div class="form-row">            
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">ลง:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>

                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">วันที่มีผล:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
                     <div class="form-group col-md-3">
                             <label for="formGroupExampleInput">วันที่สิ้นสุด:</label>
                             <input type="text" class="form-control" id="formGroupExampleInput" placeholder="33,400">
                     </div>
             </div>
</div>                
</div>
</div> 


</div> <!-- close myTabContent  -->

<!-- //////////////////////////////////////////////////btn ////////////////////////////////////////////////////////////// -->
                    <div class="row mt-2"> 
                    <div class="col-12 d-flex justify-content-center"> 
                    <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:green; color:white;">
                        <span class="la la-save"style="color:white; font-weight: bold;font-size: 18px"></span>บันทึก</a> 
                    <a href="#" class="btn btn-social btn-min-width mb-1 round" role="button" style="background-color:red; color:white;">
                        <span class="la la-reload"style="color:white; font-weight: bold;font-size: 18px"></span>ยกเลิก</a> 
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