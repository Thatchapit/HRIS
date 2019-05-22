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
.table-dark {
    color: #F9FAFD;
    background-color: #0f1631;
}


--
  </style>

  <section>

      <div class="app-content content">
          <div class="content-wrapper">
              <div class="content-header row">
                  <div class="content-header-left col-12 mb-2">
                      <div style="width:7px;height:30px;background-color:#1a1d52; float:left; margin-right:10px;"></div>
                      <h3 class="content-header-title">การขอความจำนงขอบ้าน</h3>
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
                                                  ประเภทคำร้อง</li>
                                              </ol>
                                          </nav>

                                          <div class="content-body">
        
        <section class="horizontal-grid" id="horizontal-grid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
               
         <div class="row">
            <div class="col-md-12">
                <div class="card-content">
                  <div class="card-body">
                    <form action="#">
                      <div class="form-body">
                                  
                      <table class="table table-dark" style="text-align: center;">
                        <thead>
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ประเภท</th>
                            <th scope="col">จำนวน / คน</th>
                            <th scope="col">ตรวจสอบ / ความจำนงขอบ้าน</th>
                            </tr>
                        </thead>
                        <tbody class="table table-while">
                            <tr style="color:#000;" >
                            <th scope="row">1</th>
                            <td>ขอเข้าพักอาศัยในบ้านพักอาศัย ทอ.</td>
                            <td>21</td>
                            <td>
                            <a href="./listName.php"><i class="la la-pencil-square-o"
                                style="color:#0f1733;"></i></a>
                            </td>
                            </tr>
                            <tr style="color:#000;" >
                            <th scope="row">2</th>
                            <td>ขอเปลี่ยนบ้านพักอาศัย</td>
                            <td>30</td>
                            <td>
                            <a href="./listName.php"><i class="la la-pencil-square-o"
                                        style="color:#0f1733;"  ></i></a>
                            </td>
                            </tr>
                            <tr style="color:#000;" >
                            <th scope="row">3</th>
                            <td>ขอสับเปลี่ยนบ้านพักอาศัย</td>
                            <td>22</td>
                            <td>
                                     <a href="./listName.php"><i class="la la-pencil-square-o"
                                        style="color:#0f1733;"></i></a>
                            </td>
                            </tr>
                            <tr style="color:#000;" >
                            <th scope="row">3</th>
                            <td>ขอต่อบ้านบิดา/มารดา/คู่สมรส</td>
                            <td>22</td>
                            <td>
                                     <a href="./listName.php"><i class="la la-pencil-square-o"
                                        style="color:#0f1733;"></i></a>
                            </td>
                            </tr>
                            <tr style="color:#000;" >
                            <th scope="row">3</th>
                            <td>กรณีขอต่อบ้าน</td>
                            <td>22</td>
                            <td>
                                     <a href="./listName.php"><i class="la la-pencil-square-o"
                                        style="color:#0f1733;"></i></a>
                            </td>
                            </tr>
                        </tbody>
                    </table>


                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      </div>
                  </section>
                  <!--/ Bootstrap 3 table -->
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