<!DOCTYPE html>
<html lang="en">
<head>
    <title>Responsive Slideshow</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            overflow: hidden; /* Menyembunyikan scroll pada body */
            margin: 0; /* Menghilangkan margin default */
            padding: 0; /* Menghilangkan padding default */
        }

        .mySlides {
            display: none;
            width: 100%;
        }

        img {
            width: 100%;
            height: auto;
        }

        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin: auto;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 50%;
            display: inline-block;
            margin: 0 8px;
        }

        .w3-white {
            background-color: #fff;
            border: 1px solid #ccc;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px; /* Mengatasi margin yang ditetapkan oleh Bootstrap */
        }

        .kiri, .kanan {
            padding: 0 15px; /* Menetapkan margin yang sama dengan margin di atas untuk memastikan tampilan yang baik pada layar yang lebih kecil */
            box-sizing: border-box;
        }

        .kiri {
            flex: 1;
            max-width: 100%; /* Lebar maksimum pada layar kecil */
        }

        .kanan {
            flex: 1;
            max-width: 100%; /* Lebar maksimum pada layar kecil */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .kanan form {
            max-width: 400px; /* Atur lebar form sesuai kebutuhan */
        }

        /* Media Query untuk layar kecil */
        @media (max-width: 767px) {
            .kiri, .kanan {
                flex: 100%; /* Mengubah menjadi satu kolom pada layar kecil */
                max-width: 100%; /* Lebar maksimum pada layar kecil */
            }
        }
    </style>
</head>
<body>

<div class="row">
    <div class="kiri col-12 col-md-4 text-center">
        <!-- Slider Code -->
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="img-/10.png" alt="Nature">
            </div>
            <div class="mySlides">
                <img src="img-/9.png" alt="Snow">
            </div>
            <div class="mySlides">
                <img src="img-/8.png" alt="Mountains">
            </div>

            <a class="prev" onclick="plusDivs(-1)">&#10094;</a>
            <a class="next" onclick="plusDivs(1)">&#10095;</a>

            <div style="text-align:center">
                <span class="w3-badge demo" onclick="currentDiv(1)"></span>
                <span class="w3-badge demo" onclick="currentDiv(2)"></span>
                <span class="w3-badge demo" onclick="currentDiv(3)"></span>
            </div>
        </div>
        <!-- End of Slider Code -->
    </div>

    <div class="kanan col-12 col-md-8 text-center">
        <h3 class="mt-5" style="color: #f7ca37;">SELAMAT DATANG DI POLBANGTAN GOWA</h3>

        <form name="login" action="$(link-login-only)" method="post" $(if chap-id) onSubmit="return doLogin()" $(endif)>
            <input type="hidden" name="dst" value="$(link-orig)" />
            <input type="hidden" name="popup" value="true" />

            <div class="form-group" style="margin-top:10px;">
                <input class="form-control text-center" type="text" name="username" placeholder="USERNAME" value="$(username)" required="required" autocomplete="off" style="color:#fff; width:100%; border-radius:0px; margin-bottom:6px; background:rgba(0, 0, 0, 0.2);">
                <input class="form-control text-center" type="password" name="password" placeholder="PASSWORD" required="required" autocomplete="off" style="color:#fff; width:100%; border-radius:0px; margin-bottom:-6px; background:rgba(0, 0, 0, 0.2);">
            </div>

            <button data-toggle="modal" data-target="#myModal" class="btn btn-log btn-orangebri" type="button" style="width:49%; background:transparent; border:2px solid #fff; color:#fff;"><small><b><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; KONTAK KAMI</b></small></button>
            <button type="submit" class="btn btn-log btn-biru" style="margin-top:1px; width:49%; background:transparent; border:2px solid #fff; color:#fff;"><small><span class="glyphicon glyphicon-log-in"></span> <b>&nbsp; LOGIN</b></small></button>
        </form>
    </div>
</div>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-white";
    }
</script>

</body>
</html>
