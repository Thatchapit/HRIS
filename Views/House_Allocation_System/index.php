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
.btn-red {
    border-color: #FF1C1C !important;
    background-color: #FF1C1C !important;
    color: #FFFFFF;
}
.btn-orang {
    border-color: #FF9149 !important;
    background-color: #FF9149 !important;
    color: #FFFFFF;
}
.btn-gree {
    border-color: #5CB85C !important;
    background-color: #5CB85C !important;
    color: #FFFFFF;
}
.btn-cancel {
    border-color: #FF1C1C !important;
    background-color: #FF1C1C !important;
    color: #FFFFFF;
}

--
  </style>

  <section>

      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">จัดสรรบ้านพักอาศัย</h3>
                  </div>
              </div>
              <div class="content-body">
              
             <section id="bootstrap3">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-content collapse show">
                                      <div class="card-body card-dashboard">
                                          <p class="card-text"></p>
                                          <nav aria-label="breadcrumb">
                                              <ol class="breadcrumb">
                                                  <li class="breadcrumb-item"><a
                                                          href="../Request_for_residence/index.php">แจ้งความจำนง</a></li>
                                                  <li class="breadcrumb-item active" aria-current="page">
                                                  จัดสรรบ้านพักอาศัย</li>
                                              </ol>
                                          </nav>

                                          <div class="content-body">
        
                        <section class="horizontal-grid" id="horizontal-grid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#0f1733;"><br>
                                <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp; เลือกการแสดงบ้านพักอาศัย ทอ.</h4>
                                <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                                
                                </div>
                                <div class="card-content collapse show">
                                <div class="card-body">
                                    <form action="#">
                                    <div class="form-body">

                                    <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">ประเภทบ้าน :<select  class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="ประเภทบ้านพักอาศัย ทอ.">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  น.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  ร.
                                                                                                                              </option>                                                                                                                             
                                                                                                                      </select>
                              
                            </div>
                          </div>
                        
                          <div class="col-md-4">
                            <div class="form-group">เขต :<select  class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="เขตบ้านพักอาศัย ทอ.">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 1
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 2
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 3
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 4
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 5
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 6
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เขตที่ 7
                                                                                                                              </option>
                                                                                                                              
                                                                                                                      </select>
                              
                            </div>
                          </div>                        
                      </div>

                      <div class="form-actions">
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary"> ค้นหา </button>
                          <button type="reset" class="btn btn-warning" > ล้างค่า </button>
                        </div>
                      </div>

                                
                            </div>
                        </div>
                    </div>
                </section>

                <section class="horizontal-grid" id="horizontal-grid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#0f1733;"><br>
                                <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp; รายละเอียดบ้านพัก ทอ. : แผนผังเขต 1 บ้านเรือนแถว</h4>
                                <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                                
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="#">
                                        <div class="form-body">

                                        <div class="row">
                                            
                                            <div class="col-3">
                                                <div class="form-group">จำนวนห้องทั้งหมด :
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="48 ห้อง">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="form-group">จำนวนห้องไม่ว่างทั้งหมด :
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="10 ห้อง">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="form-group">จำนวนห้องว่างทั้งหมด :
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="10 ห้อง">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="form-group">จำนวนห้องซ่อมแซมทั้งหมด :
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="28 ห้อง">
                                                </div>
                                            </div>

                                            <img src="../../Asset/Images/คำอธิบาย.jpg" class="img-fluid" alt="Responsive image">

                                        </div>
                                        

                                    
                                        
                                                                           
                                    </div>
                                </div>         
                            </div>
                        </div>
                    </div>
                </section>


                <section class="horizontal-grid" id="horizontal-grid">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header" style="background-color:#0f1733;"><br>
                                        <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp; แผนผังเขต 1 บ้านเรือนแถว</h4>
                                        <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>                             
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form action="#">
                                            <div class="form-body">                                                               
                                                <img src="../../Asset/Images/02Home.jpg" class="img-fluid" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>  
                                </div>  
                            </div> 


                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header" style="background-color:#0f1733;"><br>
                                    <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp; รายชื่อผู้สามารถเข้าพักอาศัย</h4>
                                    <a class="heading-elements-toggle"><i class="ft-align-justify font-medium-3"></i></a>
                                    
                                    </div>
                                    <div class="card-content collapse show">
                                        <div class="card-body">
                                            <form action="#">
                                            <div class="form-body">                                                               
                                                <img src="../../Asset/Images/01User.jpg" class="img-fluid" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                            </div> 

                    </div>
                </section>


                <div class="form-actions">
                    <div class="text-center">
                    <a href="./confirm_home.php"><button type="submit" class="btn btn-gree"> บันทึก </button></a>
                    <a href="#"><button type="reset" class="btn btn-cancel" > ยกเลิก </button></a>
                    </div>
                </div>
               


             </section>
             </section>

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