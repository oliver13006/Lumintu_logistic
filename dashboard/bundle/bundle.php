<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Link -->
  
  <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <script src="https://cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sidebar close">
      <div class="logo-details">
        <div class="logo_name">
          <img src="assets/img/unnamed.png" />
        </div>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#">
            <i class="fas fa-home"></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="navbar.html">Dashboard</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user"></i>
            <span class="link_name">Data Akun</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Akun</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-users"></i>
            <span class="link_name">Data Peserta</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Peserta</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-calendar-minus"></i>
            <span class="link_name">Data Acara</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Acara</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-ticket-alt"></i>
            <span class="link_name">Data Tiket</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Data Tiket</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fas fa-clipboard-list"></i>
              <span class="link_name">Data Transaksi</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Data Transaksi</a></li>
            <li><a href="#">Pemesanan</a></li>
            <li><a href="#">Pembayaran</a></li>
            <li><a href="#">Check In</a></li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fas fa-folder-open"></i>
              <span class="link_name">Data Logistik</span>
            </a>
            <i class="bx bxs-chevron-down arrow"></i>
          </div>
          <ul class="sub-menu">
            <li><a class="link_name" href="#">Data Logistik</a></li>
            <li><a href="index.php">Data Merchandise</a></li>
            <li><a href="bundle.php">Data Bundle</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <header>
          <h1>
            <label for="nav-toggle">
              <span class="fas fa-bars" style="text-align: center"></span>
            </label>
            Dashboard
          </h1>

          <div class="user-wrapper">
            <i class="fas fa-users-cog"></i>
            <div>
              <h4>Admin Logistic</h4>
              <small>Admin</small>
            </div>
          </div>
        </header>
      </div>  
      <section class="customer-logos slider">
      <?php
          require_once "koneksi.php";
          
          $sql = mysqli_query($koneksi, "
          
          select merch.id, merch.merch_name as name, count(customer_x_merch.id_ticket) as merch_terbagi, sum(distinct(merch_eligibility.quantity)),
          (sum(distinct(merch_eligibility.quantity)) - count(customer_x_merch.id_ticket)) as sisa_merch_dibagi
          from merch, merch_eligibility, customer_x_merch, customer_x_merch_eligible
          where merch.id = merch_eligibility.merch_id
          and customer_x_merch.id_ticket = merch_eligibility.id_ticket
          and customer_x_merch_eligible.id = merch_eligibility.id
          group by merch.id;");
          
          while ($row = mysqli_fetch_assoc($sql)) 
          
          {
            echo "<div class='slide'>"; 
          echo "<div class='card'>";    
          echo "<div class='card-single'>";
          echo "<div>";
          echo "<h1>".$row['sisa_merch_dibagi']."</h1>";
          echo "<span>".$row["name"]."</span>";
          echo "</div>";
          echo "<div>";
          echo "<span class='fas fa-box-open'></span>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          }
          ?>
      </section>
      <main>
            <div class="recent-flex">
                <div class="project">
                    <div class="project-header">
                    <h4>Data Merchandise Setiap Peserta</h4>
                    </div>

                    <div class="project-body">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Jenis Peserta</td>
                                    <td>Merchandise</td>
                                    <td>Add New Merch</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php 
                                function get_nama_merch($id){
                                    require("koneksi.php");
                                    $sql = "SELECT merch_name FROM merch WHERE id=".$id;
                                    $result = $koneksi->query($sql);
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            return $row["merch_name"];
                                        }
                                    }
                                }

                                function get_nama_tiket($id){
                                  require("koneksi.php");
                                  $sql = "SELECT ticket_name FROM merch_eligibility WHERE id_ticket=".$id;
                                  $result = $koneksi->query($sql);
                                  if($result->num_rows > 0){
                                      while($row = $result->fetch_assoc()){
                                          return $row["ticket_name"];
                                          die();
                                      }
                                  }

                                  
                                }

                              require("koneksi.php");
                              for($x=1; $x <= 7; $x++){
                                echo '<tr>
                                    <td>'.$x.'</td>
                                    <td>'. get_nama_tiket($x) .'</td>
                                    <td>
                                    
                                    <div class="tag-container1">'; 
                                    $sql = "SELECT * FROM merch_eligibility WHERE id_ticket=".$x;
                                    $result = $koneksi->query($sql);  
                                    
                                      if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                          echo '<span class="tag">'. get_nama_merch($row["merch_id"]).'<span class="remove-tag">✖</span></span>';
                                          }
                                      }
                                      
                                echo '</div>                                
                                    
                                    </td>
                                    <td>
                                      <button type="button" id="add_button" data-bs-toggle="modal" data-bs-target="#bundleModal" class="btn btn-info btn-lg">Add</button>
                                    </td>
                                    
                                </tr>';
                              }
                              $koneksi->close();

                       
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="bundleModal" class="modal fade">
              <div class="modal-dialog">
              
                <form method="post" id="bundle_form" enctype="multipart/form-data">
                
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title">Add Merch</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  
                  <div class="modal-body">
                  <label>Jenis Peserta</label>
                  <input type="text" name="ticket_name" id="ticket_name" class="form-control" readonly  />
                  <br />
                  <label>Merchandise</label>
                  <input type="text" name="merch_id" id="merch_id" class="form-control" />
                  <br />
                  </div>
                  <div class="modal-footer">
                  <input type="hidden" name="merch_eligibility_id" id="merch_eligibility_id" />
                  <input type="hidden" name="operation" id="operation" />
                  <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
                </form>
              </div>
            </div>
    </div>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".fa-bars");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });
</script>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#bundle_form')[0].reset();
  $('.modal-title').text("Add Merch");
  $('#action').val("Add");
  $('#operation').val("Add");
 });
 
 var dataTable = $('#bundle_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0,2],
    aaSortable:true,
   },
  ],
 }); 

 $(document).on('submit', '#bundle_form', function(event){
  event.preventDefault();
  var ticketName = $('#ticket_name').val();
  var idMerch = $('#merch_id').val();
  if(icketName != '' && idMerch != '')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#bundle_form')[0].reset();
     $('#bundleModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
//  edit
 $(document).on('click', '.update', function(){
  var merch_eligibility_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single.php",
   method:"POST",
   data:{merch_eligibility_id:merch_eligibility_id},
   dataType:"json",
   success:function(data)
   {
    $('#bundleModal').modal('show');
    $('#ticket_name').val(data.ticket_name);
    $('#merch_id').val(data.merch_id);
    $('.modal-title').text("Edit Merch");
    $('#merch_eligibility_id').val(merch_eligibility_id);
    $('#action').val("Edit");
    $('#operation').val("Edit");
   }
  })
 });
 
 //delete
 $(document).on('click', '.delete', function(){
  var merch_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{merch_eligibility_id:merch_eligibility_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
});

$(document).ready(function () {
        $(".customer-logos").slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [
            {
              breakpoint: 768,
              setting: {
                slidesToShow: 4,
              },
            },
            {
              breakpoint: 520,
              setting: {
                slidesToShow: 3,
              },
            },
          ],
        });
      });
</script>
    <!-- <script>
        const button = document.querySelector("#add-button");
        const tagInput = document.querySelector("#input");

        const form = document.forms[0];
        const tagContainer = document.querySelector(".tag-container1");
        const tags = [];
        
        const createTag = (tagValue) => {
        const value = tagValue.trim();

        if (value === "" || tags.includes(value)) return;

        const tag = document.createElement("span");
        const tagContent = document.createTextNode(value);
        tag.setAttribute("class", "tag");
        tag.appendChild(tagContent);
        

        const close = document.createElement("span");
        close.setAttribute("class", "remove-tag");
        close.innerHTML = "&#10006;";
        close.onclick = handleRemoveTag;

        //   $(document).on('click', '.delete', function(){
        //   var merch_id = $(this).attr("id");
        //   if(confirm("Are you sure you want to delete this?"))
        //   {
        //   $.ajax({
        //   url:"delete.php",
        //   method:"POST",
        //   data:{merch_id:merch_id},
        //   success:function(data)
        //   {
        //   alert(data);
        //   dataTable.ajax.reload();
        //   }
        //   });
        //   }
        //   else
        //   {
        //   return false; 
        //   }
        // });
        // });

        
        tag.appendChild(close);
        tagContainer.appendChild(tag);
        tags.push(tag);

        tagInput.value = "";
        tagInput.focus();
      };

      const handleRemoveTag = (e) => {
        const item = e.target.textContent;
        e.target.parentElement.remove();
        tags.splice(tags.indexOf(item), 1);
      };

      const handleFormSubmit = (e) => {
        e.preventDefault();
        createTag(tagInput.value);
      };

      tagInput.addEventListener("keyup", (e) => {
        const { key } = e;
        if (key === ",") {
          createTag(tagInput.value.substring(0, tagInput.value.length - 1));
        }
      });

      form.addEventListener("submit", handleFormSubmit);
    </script> -->