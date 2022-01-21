<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="coba.css">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
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
            <li><a href="merchandise.php">Data Merchandise</a></li>
            <li><a href="bundle.php">Data Bundle</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <header>
          <h3>
            <label for="nav-toggle">
              <span class="fas fa-bars" style="text-align: center"></span>
            </label>
            Dashboard
          </h3>

          <div class="user-wrapper">
            <i class="fas fa-users-cog"></i>
            <div>
              <h5>Tamia Indah Imanika</h5>
              <small>Admin</small>
            </div>
          </div>
        </header>
      </div>
      <main>
        <!-- <div class="cards">
          <div class="card-single">
            <div>
              <h1>895</h1>
              <span>Notebook</span>
            </div>
            <div>
            <span class="fas fa-book"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>987</h1>
              <span>Alat Tulis</span>
            </div>
            <div>
            <span class="fas fa-pencil-alt"></span>
            </div> 
          </div>

          <div class="card-single">
            <div>
              <h1>866</h1>
              <span>Mug</span>
            </div>
            <div>
            <span class="fas fa-coffee"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h1>987</h1>
              <span>Goody Bag</span>
            </div>
            <div>
              <span class="fas fa-shopping-bag"></span>
            </div>
          </div>
        </div> -->
       
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Umum</td>
                                    <td>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Merchandise</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                          <form method="post" id="programmer_form">
                                            <div class="form-group">
                                              <label>Enter your Skill</label>
                                              <input type="text" name="skill" id="skill" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                              <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
                                            </div>
                                            </form> 
                                          <!-- <form autocomplete="off">
                                            <p>Add something lurr.</p>
                                            <div class="input-container">
                                              <input type="text"  name="skill" id="input" placeholder="Enter tags . . ." />
                                              <button id="add-button">Add</button>
                                            </div>
                                            </div>
                                          </form> -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="tag-container">
                                    </div>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="ke Tabel">+</button>
                                    </td>
                                </tr>                                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
      // untuk sidebar
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
    
        //buat modalnya
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')
      });
    
        //buat tagnya
      $(document).ready(function(){  
        $('#skill').tokenfield({
        autocomplete:{
        source: ['Notebook','Mug','Alat Tulis','Gantungan Kunci','Goody Bag Undangan','Goody Bag peserta Umum','Goody Bag Pembicara','Goody Bag Media','Co card','Baju','Laptop'],
        delay:100
        },
        showAutocompleteOnFocus: true
        });
        $('#programmer_form').on('submit', function(event){
          event.preventDefault();
          if($.trim($('#skill').val()).length == 0)
          {
          alert("Please Enter Atleast one Skill");
          return false;
          }
          else
          {
          var form_data = $(this).serialize();
          $('#submit').attr("disabled","disabled");
          $.ajax({
            url:"insert.php",
            method:"POST",
            data:form_data,
            beforeSend:function(){
            $('#submit').val('Submitting...');
            },
            success:function(data){
            if(data != '')
            {
              $('#skill').tokenfield('setTokens',[]);
              $('#success_message').html(data);
              $('#submit').attr("disabled", false);
              $('#submit').val('Submit');
            }
            }
          });
          setInterval(function(){
            $('#success_message').html('');
          }, 5000);
          }
        });
      });

      //   const button = document.querySelector("#add-button");
      //   const tagInput = document.querySelector("#input");

      //   const form = document.forms[0];
      //   const tagContainer = document.querySelector(".tag-container");
      //   const tags = [];
        
      //   const createTag = (tagValue) => {
      //   const value = tagValue.trim();

      //   if (value === "" || tags.includes(value)) return;

      //   const tag = document.createElement("span");
      //   const tagContent = document.createTextNode(value);
      //   tag.setAttribute("class", "tag");
      //   tag.appendChild(tagContent);

      //   const close = document.createElement("span");
      //   close.setAttribute("class", "remove-tag");
      //   close.innerHTML = "&#10006;";
      //   close.onclick = handleRemoveTag;

      //   tag.appendChild(close);
      //   tagContainer.appendChild(tag);
      //   tags.push(tag);

      //   tagInput.value = "";
      //   tagInput.focus();
      // };

      // const handleRemoveTag = (e) => {
      //   const item = e.target.textContent;
      //   e.target.parentElement.remove();
      //   tags.splice(tags.indexOf(item), 1);
      // };

      // const handleFormSubmit = (e) => {
      //   e.preventDefault();
      //   createTag(tagInput.value);
      // };

      // tagInput.addEventListener("keyup", (e) => {
      //   const { key } = e;
      //   if (key === ",") {
      //     createTag(tagInput.value.substring(0, tagInput.value.length - 1));
      //   }
      // });

      // form.addEventListener("submit", handleFormSubmit);
    </script>
</html>