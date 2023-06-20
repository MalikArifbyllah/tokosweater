<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweater Store</title>

    <!--fonts-->
    

<!--feathe icons-->
<script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">Sportsweater<span>Store</span>.</a>
            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="#product">Product</a>
                <a href="#contact">Contact</a>
            </div>

    </nav>

    <section class="hero" id="home">
        <main class="content">
            <h1>Hello Welcome to</h1>
            <h1><span>My Store</span></h1>
            <p>Semoga barang barang yang ada 
                di toko kami bisa membuat anda tertarik 
                dan bisa membuat anda untuk berlangganan di toko kami</p>

        </main>
    </section>
    </section>
    <form action="" method="post">
    <section id="product" class="product">
        <h2><span>Daftar</span> Barang</h2>
        <p>Silahkan di pilih daftar barang yang telah kami sediakan</p>
        <div class="row">
            <div class="product-card">
                <img src="img/sweater2.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title">
                    Arkada Sweater</h3>
                <p class="product-card-price">IDR 100.000</p>
                <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="img/sweater4.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title"> 
                Fiftycloth Black</h3>
                <p class="product-card-price">IDR 170.000</p>
                <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="img/sweater3.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title"> 
                Adidas unisex Sweater</h3>
                <p class="product-card-price">IDR 200.000</p>
               <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="img/sweater5.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title"> 
                    Hoodie Polos</h3>
                <p class="product-card-price">IDR 150.000</p>
               <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="img/sweater9.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title">Lebron Lakers</h3>
                <p class="product-card-price">IDR 180.000</p>
               <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
            <div class="product-card">
                <img src="img/sweater8.jpg" 
                alt="Sportsweater" class="product-card-img">
                <h3 class="product-card-title"> 
                Lebron James Long</h3>
                <p class="product-card-price">IDR 300.000</p>
               <a href="#" class="open-modal">Beli Sekarang</a>
            </div>
        </div>
    </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Form Pembelian</h3>
            <form id="purchase-form">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" id="no" name="phone" required>
                    </div> 
                    <label for="size">Size:</label>
                    <input type="size" id="size" name="size" required>
                </div>
                <div class="form-group">
                    <label for="product">Pemilihan Product:</label>
                    <select id="product" name="product" required>
                        <option value="sweater1">Arkada Sweater</option>
                        <option value="sweater2">Fiftycloth Black</option>
                        <option value="sweater3">Adidas unisex</option>
                        <option value="sweater4">Hoodie Polos</option>
                        <option value="sweater5">Lebron Lakers</option>
                        <option value="sweater6">Lebron James Long</option>
                    </select>
                <div class="form-group">
                    <label for="payment">Metode Pembayaran:</label>
                    <select id="payment" name="payment" required>
                        <option value="dana">Dana</option>
                        <option value="shopeepay">Shopee pay</option>
                        <option value="gopay">Gopay</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // JavaScript untuk menampilkan dan menyembunyikan modal
        var modal = document.getElementById("myModal");
        var openModalLinks = document.getElementsByClassName("open-modal");
        var closeModal = document.getElementsByClassName("close")[0];

        for (var i = 0; i < openModalLinks.length; i++) {
            openModalLinks[i].onclick = function() {
                modal.style.display = "block";
            };
        }

        closeModal.onclick = function() {
            modal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        // JavaScript untuk menangani pengiriman form
        var purchaseForm = document.getElementById("purchase-form");

        purchaseForm.addEventListener("submit", function(event) {
            event.preventDefault();
            var name = document.getElementById("name").value;
            var phone = document.getElementById("email").value;
            var address = document.getElementById("address").value;
            var product = document.getElementById("product").value;
            var size = document.getElementById("size").value;
            var paymentMethod = document.getElementById("payment").value;

            // Lakukan tindakan lain yang diinginkan dengan data pembelian yang diisi di sini

            // Setelah melakukan tindakan, reset form dan sembunyikan modal
            purchaseForm.reset();
            modal.style.display = "none";
        });
    </script>
</form>
    <section id="contact" class="contact">
        <h2><span>Contact</span> kami</h2>
        <p>Tersedia Google map disini dan kontak kami</p>
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253741
            .5860537786!2d106.70662097944631!3d-6.
            4309948317640355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x2e69c77952710c83%3A0x84eb4a9e3fc2e874!2sJB%20STORE%20BOGOR%20
            (Toko%20Jaket%20Import)
            !5e0!3m2!1sid!2sid!4v1687161910931!5m2!1sid!2sid" 
            allowfullscreen="" 
            loading="lazy" referrerpolicy="no-referrer-when-downgrade " class="map"></iframe>
            <form action="pesan.php">
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="socials">
            <a href="https://instagram.com/mrff.by?igshid=NGExMmI2YTkyZg=="><i data-feather="instagram"></i></a>
            <a href="https://wa.me/+6281513613217"><i data-feather="message-circle"></i></a>
            <a href="https://www.facebook.com/malik.arifbyllah"><i data-feather="facebook"></i></a>

            <div class="links">
                <a href="https://instagram.com/mrff.by?igshid=NGExMmI2YTkyZg=="></a>
                <a href="https://wa.me/+6281513613217"></a>
                <a href="https://www.facebook.com/malik.arifbyllah"></a>
            </div>

            <div class="credit">
                <p>Created by <a href="">Malik Arifbyllah
                </a>.| @copy 2023.</p>
            </div>
        </div>
    </footer>
    

    <!--feather icons-->
    <script>
        feather.replace()
      </script>

    <script src="js/script.js"></script>
</body>
</html>