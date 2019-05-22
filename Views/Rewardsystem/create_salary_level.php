  <!-- header -->
  <?php include '../include/header.php'; ?>

  <!-- menu -->
  <?php include '../include/menu.php'; ?>

  <!-- model -->
  <?php  require_once '../../Model/Rewardsystem/Reward_system.php'; ?>
  <?php 
    $reward_system = new Reward_system();
    $dropdown_person = $reward_system->get_person_type();
    $dropdown_sal_level_code = $reward_system->get_sal_level_code();
  ?>

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
                      <h3 class="content-header-title">ระดับเงินเดือนข้าราชการทหาร</h3>
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="set_salary_level.php">ระบบบำเหน็จประจำปี</a></li>
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
                          <a data-toggle="collapse" href="#collapse31" aria-expanded="true" aria-controls="collapse31"
                              class="card-title lead white" style="color:white;">
                              <h6 style="background-color:#0f1733;color:white;line-height:40px;padding-left:10px;">
                                  บันทึก แก้ไข ระดับเงินเดือนข้าราชการทหาร</h6>
                          </a></div>
                      <div id="collapse31" role="tabpanel" aria-labelledby="headingCollapse31"
                          class="card-collapse collapse show" aria-expanded="true">


                          <form>

                              <div class="row">
                                  <div class="col-10 m-auto pt-3">
                                      <div class="form-row px-2 m-auto">




                                          <div class="form-group col-md-3">
                                              <label for="">รหัสระดับ :</label>
                                              <input type="text" class="form-control" name="code" id=""
                                                  aria-describedby="helpId" placeholder="ระบุรหัสระดับ">
                                          </div>


                                          <div class="form-group col-md-3">
                                              <label for="formGroupExampleInput">ระดับ:</label>
                                              <select class="form-control" name="level" id="exampleFormControlSelect1">
                                                  <?php 
                                                  foreach ($dropdown_sal_level_code as $key => $value) {
                                                    echo "<option value='".$value['SAL_LEVEL_CODE']."'>".$value['SAL_LEVEL_NAME']."</option>";
                                                    }
                                                  ?>
                                              </select>
                                          </div>

                                          <div class="form-group col-md-3 offset-2">
                                              <label for="formGroupExampleInput"> ประเภทกำลังพล:</label>
                                              <select class="form-control" name="type" id="exampleFormControlSelect1">
                                                  <?php 
                                                    foreach ($dropdown_person as $key => $value) {
                                                        echo "<option value='".$value['PERSON_TYPE_PK']."'>".$value['PERSON_TYPE_NAME']."</option>";
                                                    }

                                                ?>
                                              </select>
                                          </div>

                                          <div class="col-12">
                                              <hr />
                                          </div>
                                          <div class="col-12">
                                              <input type="checkbox" id="switch" checked data-toggle="toggle" data-style="ios"
                                                  data-on="ใช้งาน" data-off="ยกเลิก" data-onstyle="success"
                                                  data-offstyle="danger" data-size="sm">
                                          </div>

                                      </div>


                                      <div class="row mt-2 pb-3">
                                          <div class="col-12 d-flex justify-content-center">
                                              <button type="button" onclick="insertSalaryLevel()"
                                                  class="btn  d-flex justify-content-center btn-min-width mb-1 round mr-1"
                                                  role="button" style="background-color:#28a745; color:white;">
                                                  <span class="mr-1 la la-save"
                                                      style="color:white; font-weight: bold;font-size: 18px"></span>บันทึก</button>
                                              <a href="#"
                                                  class="btn d-flex justify-content-center btn-min-width mb-1 round ml-1"
                                                  role="button" style="background-color:#dc3545; color:white;">
                                                  <span class="mr-1 la la-times-circle-o"
                                                      style="color:white; font-weight: bold;font-size: 18px"></span>ยกเลิก</a>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                          </form>


                      </div> <!-- close id="collapse31" -->
                  </div> <!-- close card collapse-icon accordion-icon-rotate active -->
              </div> <!-- close shadow -->
          </div>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"></script>

  <script type="text/javascript">
      $(document).ready(function () {
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
  
  <script src="../../Controllers/salaryLevel.js"></script>



  <!-- footer -->
  <?php include '../include/footer.php'; ?>