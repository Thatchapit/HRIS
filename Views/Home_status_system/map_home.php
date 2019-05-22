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
                      <h3 class="content-header-title">สถานะบ้านพักอาศัย ทอ.</h3>
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
                                                  สถานะบ้านพักอาศัย ทอ.</li>
                                              </ol>
                                          </nav>

                                          <div class="content-body">
        
                        <section class="horizontal-grid" id="horizontal-grid">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#0f1733;"><br>
                                <h4 class="card-title" style="color:#fff; ">&nbsp;&nbsp;&nbsp;&nbsp; เขต 1 บ้านเรือนแถว</h4>
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
                                
                            </div>
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