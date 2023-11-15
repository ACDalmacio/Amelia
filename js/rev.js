


function success(notif) {
  Swal.fire({

      icon: 'success',
      title: notif,
      showConfirmButton: false,
      timer: 1500
  })
}



function failed(notif) {
  Swal.fire({

      icon: 'error',
      title: notif,
      showConfirmButton: false,
      timer: 1500
  })
}
function warning(notif) {
  Swal.fire({

      icon: 'warning',
      title: notif,
      showConfirmButton: false,
      timer: 1500
  })
}





function getAnalytics(branch) {


    var dataString = "";
    var url = "../pages/"+branch+".php";
  
    $.ajax({
      type: "GET",
      crossDomain: true,
      cache: false,
      url: url,
      data: dataString,
      beforeSend: function () {},
      success: function (data) {
       
        $("#dashboard_analytics_content").html(data);
     
      },
      error: function (jqXHR, status, err) {},
      complete: function (jqXHR, status) {},
    });
  }


function allbranch(){

    $("#dashboard_allbranch").show();
    $("#main_branch").hide();
    $("#bauan_branch").hide();
    $("#kumintang_branch").hide();
    $("#pburgos_branch").hide();
    $("#smbat_branch").hide();

    
}
  function mainbranch(){
    $("#dashboard_allbranch").hide();
    $("#main_branch").show();
    $("#bauan_branch").hide();
    $("#kumintang_branch").hide();
    $("#pburgos_branch").hide();
    $("#smbat_branch").hide();
  }
  function bauanbranch(){
    $("#dashboard_allbranch").hide();
    $("#main_branch").hide();
    $("#bauan_branch").show();
    $("#kumintang_branch").hide();
    $("#pburgos_branch").hide();
    $("#smbat_branch").hide();
  }

  function kumbranch(){
    $("#dashboard_allbranch").hide();
    $("#main_branch").hide();
    $("#bauan_branch").hide();
    $("#kumintang_branch").show();
    $("#pburgos_branch").hide();
    $("#smbat_branch").hide();
}

function pburbranch(){
    $("#dashboard_allbranch").hide();
    $("#main_branch").hide();
    $("#bauan_branch").hide();
    $("#kumintang_branch").hide();
    $("#pburgos_branch").show();
    $("#smbat_branch").hide();
}

function smbatbranch(){
    $("#dashboard_allbranch").hide();
    $("#main_branch").hide();
    $("#bauan_branch").hide();
    $("#kumintang_branch").hide();
    $("#pburgos_branch").hide();
    $("#smbat_branch").show();
}


function getInventory(branchname){
    var dataString = "bname="+branchname;
    var url = "../pages/inv_by_branch.php";
  
    $.ajax({
      type: "POST",
      crossDomain: true,
      cache: false,
      url: url,
      data: dataString,
      beforeSend: function () {},
      success: function (data) {
       
        $("#inventory_data").html(data);
        $("#dataTable").dataTable();
     
      },
      error: function (jqXHR, status, err) {},
      complete: function (jqXHR, status) {},
    });
}



function confirmdelprod(id) {
  Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
      if (result.isConfirmed) {
          del_prod(id);
      }
  })
}


function del_prod(id){
  var dataString = "id="+id;

  var url = "../pages/del_prod.php";

  $.ajax({
    type: "POST",
    crossDomain: true,
    cache: false,
    url: url,
    data: dataString,
    beforeSend: function () {},
    success: function (data) {
      
      if (data == 1) {
          success("Deleted Successfully !");
         window.location.href = "product.php";
         
        } else {
          failed("Failed, Please try again later.");
        }
     
    },
    error: function (jqXHR, status, err) {},
    complete: function (jqXHR, status) {},
  });
}
