function insertSalaryLevel() {
    var code = $("input[name='code']").val();
    var level = $("select[name='level']").val();
    var type = $("select[name='type']").val();

    if ($(".toggle").hasClass("off")) {
        var isActive = "0";
    } else {
        var isActive = "1";
    }

    if (code == "") {
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาระบุข้อมูลให้ครบถ้วน'
        });
    } else {

        $.ajax({
            type: "POST",
            url: "../../Model/Rewardsystem/insert.php",
            data: {
                code: code,
                level_id: level,
                type_id: type,
                status: isActive
            },
            success: function (data) {
                if (data == 1) {
                    // console.log(data);
                    Swal.fire({
                        type: 'success',
                        title: 'เพิ่มข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'ไม่สามารถเพิ่มข้อมูลได้',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                    });
                }
            },
            error: function (error) {
                // alert(error);
                // console.log(error);
                Swal.fire({
                    type: 'error',
                    title: 'ไม่สามารถเพิ่มข้อมูลได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                });
            }
        });
    }
}

function updateSalaryLevel() {
    var code = $("input[name='code']").val();
    var level = $("select[name='level']").val();
    var type = $("select[name='type']").val();
    var id = $("input[name='id']").val();

    if ($(".toggle").hasClass("off")) {
        var isActive = "0";
    } else {
        var isActive = "1";
    }

    if (code == "") {
        Swal.fire({
            type: 'error',
            title: 'ไม่สามารถเพิ่มข้อมูลได้',
            text: 'กรุณาระบุข้อมูลให้ครบถ้วน'
        });
    } else {

        $.ajax({
            type: "POST",
            url: "../../Model/Rewardsystem/edit.php",
            data: {
                code: code,
                level_id: level,
                type_id: type,
                status: isActive,
                id: id,
            },
            success: function (data) {
                if (data == 1) {
                    Swal.fire({
                        type: 'success',
                        title: 'เพิ่มข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'ไม่สามารถเพิ่มข้อมูลได้',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                    });
                }
            },
            error: function (error) {
                // alert(error);
                // console.log(error);
                Swal.fire({
                    type: 'error',
                    title: 'ไม่สามารถเพิ่มข้อมูลได้',
                    text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                });
            }
        });
    }
}


function deleteSalaryLevel(id) {
    Swal.fire({
        title: 'คุณต้องการลบหัวข้อนี้ใช่ไหม ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่ ฉันต้องการลบ'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "POST",
                url: "../../Model/Rewardsystem/delete.php",
                data: {
                    id: id,
                },
                success: function (data) {
                    if (data == 1) {
                        Swal.fire({
                            type: 'success',
                            title: 'ลบข้อมูลสำเร็จ',
                            showConfirmButton: false,
                            timer: 2000
                        });
                        setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: 'ไม่สามารถลบข้อมูลได้',
                            text: 'กรุณาตรวจลองใหม่อีกครั้ง'
                        });
                    }
                },
                error: function (error) {
                    // alert(error);
                    // console.log(error);
                    Swal.fire({
                        type: 'error',
                        title: 'ไม่สามารถเพิ่มข้อมูลได้',
                        text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                    });
                }
            });
        }
    })
}


function delete_AllSalaryLevel() {
    var numItems = $('.checkAll:checked').length;
    console.log(numItems);
    var check_success = 0;
    var countItem = 0;
    Swal.fire({
        title: 'คุณต้องการลบหัวทั้งหมดนี้ใช่ไหม ?',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ใช่ ฉันต้องการลบ'
    }).then((result) => {
        if (result.value) {
            $(".checkAll:checked").each(function () {
                countItem += 1;
                var id = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: "../../Model/Rewardsystem/delete.php",
                    data: {
                        id: id,
                    },
                    success: function (data) {
                        if (data == 1) {
                            check_success += 1;
                        }

                        if (countItem == numItems) {
                            if (countItem == check_success) {
                                Swal.fire({
                                    type: 'success',
                                    title: 'ลบข้อมูลสำเร็จ',
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                                setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                            } else {
                                Swal.fire({
                                    type: 'error',
                                    title: 'ไม่สามารถลบข้อมูลได้',
                                    text: 'มีบางรายการไม่สามารถลบข้อมูลได้'
                                });

                                setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                            }
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'ไม่สามารถลบข้อมูลได้',
                                text: 'มีบางรายการไม่สามารถลบข้อมูลได้'
                            });

                            setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                        }

                    },
                    error: function (error) {
                        // alert(error);
                        // console.log(error);
                        Swal.fire({
                            type: 'error',
                            title: 'ไม่สามารถเพิ่มข้อมูลได้',
                            text: 'กรุณาตรวจสอบข้อมูลอีกครั้ง'
                        });

                        //setTimeout("window.open('../Rewardsystem/set_salary_level.php', '_self');", 2000);
                    }
                });

            });

        }
    })


}