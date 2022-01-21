<?php
                    require_once "koneksi.php";
                    $id = $_GET['id'];

                    $data = mysqli_query($koneksi, "select * from merch_eligibility where id='$id'");
                    $r = mysqli_fetch_array($data);
                ?>

value="<?php echo $r['ticket_name'] ?>"