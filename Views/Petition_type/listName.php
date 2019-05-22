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

--
  </style>

  <section>

      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">รายชื่อผู้ยื่นยันคำร้องผู้แจ้งความจำนงขอบ้าน</h3>
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
                                                  รายชื่อผู้ยื่นยันคำร้องผู้แจ้งความจำนงขอบ้าน</li>
                                              </ol>
                                          </nav>

                                          <div class="content-body">
        
        <section class="horizontal-grid" id="horizontal-grid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header" style="background-color:#0f1733;"><br>
                  <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp;ค้นหา</h4>
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
                            <div class="form-group">ยศ / ตำแหน่ง :<select  class="select2 form-control"
                                                                                                                          style="width: 90%;">
                                                                                                                          <optgroup
                                                                                                                              label="สัญญาบัตร">
                                                                                                                              <option
                                                                                                                                  value="AK">
                                                                                                                                  เลือก
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศเอก/พล.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศโท/พล.อ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศตรี/พล.อ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  พลอากาศจัตวา/พล.อ.จ.(ยกเลิกแล้ว)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศเอก/น.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศโท/น.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  นาวาอากาศตรี/น.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศเอก/ร.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศโท/ร.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="HI">
                                                                                                                                  เรืออากาศตรี/ร.ต.
                                                                                                                              </option>
                                                                                                                          </optgroup>
                                                                                                                          <optgroup
                                                                                                                              label="ชั้นประทวน">
                                                                                                                              <option
                                                                                                                                  value="CA">
                                                                                                                                  พันจ่าอากาศเอก
                                                                                                                                  พิเศษ/พ.อ.อ.(พ.)
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  พันจ่าอากาศเอก/พ.อ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  พันจ่าอากาศโท/พ.อ.ท
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พันจ่าอากาศตรี/พ.อ.ต
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="NV">
                                                                                                                                  จ่าอากาศเอก/จ.อ.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="OR">
                                                                                                                                  จ่าอากาศโท/จ.ท.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  จ่าอากาศตรี/จ.ต.
                                                                                                                              </option>
                                                                                                                              <option
                                                                                                                                  value="WA">
                                                                                                                                  พลทหาร/พลฯ
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
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        </div>
        <br>
              





                                       

                                          
                                          <table class="table table-striped table-borderless table-hover ">
                                              <thead>
                                                  <tr align="center"
                                                      style="background-color:#0f1733; color:whitesmoke;">
                                                      <th><input type="checkbox" class="checkAll"
                                                              onclick="toggle(this);" /></th>
                                                      <th>ตรวจสอบ</th>
                                                      <th>ลบ</th>
                                                      <th>ลำดับที่</th>
                                                      <th>วัน/เดือน/ปี</th>
                                                      <th>ประเภทบ้าน</th>
                                                      <th>เขต</th>
                                                      <th>หมายเลขประจำตัว</th>
                                                      <th>ชื่อ</th>
                                                      <th>นามสกุล</th>
                                                      <th>สถานะบ้านพักอาศัย</th>
                                                  </tr>
                                              </thead>
                                              <tbody align="center">
                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="./investigate.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          
                                                      </td>
                                                      <td>
                                                            <a href="./delete.php"><i class="la la-trash-o"
                                                                        style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td>1</td>
                                                      <td>07/07/2552</td>
                                                      <td>พ.</td>
                                                      <td>เขตที่ 1</td>
                                                      <td>322330086500</td>
                                                      <td>กิตติศักดิ์ </td>
                                                      <td>สอนสวน </td>
                                                      <td>บ้านพักข้าราชการ ทอ. </td>
                                                  </tr>
                                                  <tr>
                                                      <td><input type="checkbox" class="checkAll" /></td>
                                                      <td>
                                                          <a href="./investigate.php"><i class="la la-pencil-square-o"
                                                                  style="color:#0f1733;"></i></a>
                                                          
                                                      </td>
                                                      <td>
                                                            <a href="./delete.php"><i class="la la-trash-o"
                                                                        style="color:#0f1733;"></i></a>
                                                      </td>
                                                      <td>2</td>
                                                      <td>07/07/2552</td>
                                                      <td>พ.</td>
                                                      <td>เขตที่ 1</td>
                                                      <td>322330086500</td>
                                                      <td>กิตติศักดิ์ </td>
                                                      <td>สอนสวน </td>
                                                      <td>บ้านพักข้าราชการ ทอ. </td>
                                                  </tr>
                                              </tbody>
                                              <!-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> -->
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  
              </div>
          </div>
      </div>
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