<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>200611_Owl-carousel Cards Slider</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="content">
          <div class="title">Asa</div>
          <div class="sub-title">dolor sit amet</div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="btn">
            <button>Read more</button>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
      });

    </script>

  </body>
</html>

<!--
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 -->
 div class="container">
    <div class="slider">  
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
                echo "<div class='card'>";
                echo "<div class='content'>";
                echo "<div class='title'>".$row['sisa_merch_dibagi']."</div>";
                echo "<div class='sub-title'>".$row["name"]."</div>";
                echo"</div>";
                echo"</div>";
                }
                ?>
        </div>