<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Emarket - Situs jual beli online terlengkap</title>
<meta name="robots" content="index, follow">
<meta name="description" content="Menyajikan berita terbaru, tercepat, dan terpercaya seputar tunggul hitam.">
<meta name="keywords" content="Selamat datang di CMS Swarakalibata, adalah penyempurnaan dan perbaikan.">
<meta name="author" content="phpmu.com">
<meta name="robots" content="all,index,follow">
<meta http-equiv="Content-Language" content="id-ID">
<meta name="Distribution" content="Global">
<meta name="Rating" content="General">
<link rel="canonical" href="#"/>
<link rel="shortcut icon" href="img/log.png"/>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="rss.xml"/>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="css/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/plugins/fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
<link rel="stylesheet" href="css/plugins/bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" href="css/plugins/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="css/plugins/slick/slick/slick.css">
<link rel="stylesheet" href="css/plugins/lightGallery-master/dist/css/lightgallery.min.css">
<link rel="stylesheet" href="css/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
<link rel="stylesheet" href="css/plugins/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="css/plugins/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="css/red.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap-multiselect.css">
<link rel="stylesheet" href="css/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="css/summernote-bs4.css">
<link rel="stylesheet" type="css/uploadfile.css">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        function nospaces(t){
            if(t.value.match(/\s/g)){
                alert('Maaf, Tidak Boleh Menggunakan Spasi,..');
                t.value=t.value.replace(/\s/g,'');
            }
        }
        $(".formatNumber").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            $(this).val(n.toLocaleString());
        });
    </script>
<script>
        $(document).ready(function(){
        $('#operator').change(function(){
            var operator_id = $(this).val();
            $.ajax({
            type:"POST",
            url:"https://tajalapak.com/main/produk",
            data:"operator_id="+operator_id,
            success: function(response){
                $('#produk').html(response);
            }
            })
        })
        })
    </script>
<style>
        .dataTables_wrapper .row{ width:100% }
        table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after{ display:none }
        .dataTables_length select, .dataTables_filter input[type=search]{ height:30px }
        .dataTables_length{ float:left }
        .dataTables_filter{ float:right }
        #example1 th, #example11 th{ font-weight:bold }
        .modal-content .btn-primary{ height: 30px; font-size: 12px; }
        .modal-content input[type=text]{ height: 30px; }
        .iconset .fa { font-size: 13px !important; }
        .blink_me{
            animation:blinker 1s linear infinite;color:red
        }
        .blink_me:hover{
            animation:blinker 0s linear infinite;color:red
        }
        @keyframes blinker{
            50%{opacity:0}
        }
        .mb-10{
          margin-bottom:0px;
        }
        .pricing-table-product-box {
            -webkit-box-shadow: 0 4px 9px 0 rgba(67,65,79,.1);
            box-shadow: 0 4px 9px 0 rgba(67,65,79,.1);
            border: solid 2px #f5f5f5;
        }
        .harga {
            font-size: 3em;
            font-weight: 700;
            line-height: .8em;
          display:inline-block;
        }
        .currency {
            font-size: 1em;
            font-weight: 700;
            margin-top: .2em;
          display:inline-block;
        }
        .waktu {
            font-size: .7em;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            margin: .3em;
          display:inline-block;
        }
        .waktu_block{
          display:inline-block;
        }
        #Back-to-top { text-align: center; z-index: 99999; position: fixed; bottom: 70px; right: 30px; cursor: pointer; display: none; opacity: 0.7; } 
        #Back-to-top:hover { opacity: 1; } 
        .badge-secondary {
            color: #fff;
            background-color: #dd2400;
            padding: 5px 7px 4px 7px;
        }
        .notif .nav-tabs .nav-link {
            background: #3cd03c;
            color: #fff;
            border-top:1px solid #e3e3e3 !important;
            border-left:1px solid #e3e3e3 !important;
            border-right:1px solid #e3e3e3 !important;
        }
        .notif .badge-secondary {
            color: #fff;
            background-color: #00b30e;
            padding: 5px 7px 4px 7px;
        }
        .notif .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #495057 !important;
            background-color: #fff !important;
        }
        .penjualan .nav-tabs .nav-link {
            background: #ff9900;
            color: #fff;
            border-top:1px solid #e3e3e3 !important;
            border-left:1px solid #e3e3e3 !important;
            border-right:1px solid #e3e3e3 !important;
        }
        .penjualan .badge-secondary {
            color: #fff;
            background-color: #dc8400;
            padding: 5px 7px 4px 7px;
        }
        .penjualan .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #495057 !important;
            background-color: #fff !important;
        }
        .container .ps-section__content{
            min-height:650px;
        }
        input[type=number]::-webkit-inner-spin-button {
            opacity: 1
        }
        .form-control{
            border-bottom: 1px solid #cecece;
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            background-color: #f9f9f9;
        }
        .multiselect-container{
            width: 100%;
            font-size: 13px;
        }
        button.multiselect {
            font-size: 14px;
        }
        .multiselect-container>li {
            border-bottom: 1px dotted #e3e3e3;
        }
</style>
<style>
        .form-sm .form-group{
            margin-bottom: 5px !important;
        }
        .form-sm i{
            margin-left: 10px;
        }
        .form-sm .ajax-file-upload{
            width:100%;
        }
</style>
</head>
<body>
<div class="modal fade bd-example-modal-lg" style='z-index:99999' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header" style='border-bottom:0px solid #e9ecef'>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6" style='padding:0px 40px'>
						<div class='ps-block__item' style='margin-bottom: 18px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-rocket'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Pengiriman gratis</h5>
								<p>
									 Untuk pesanan min Rp 100.000
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 18px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-sync'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>90 uang Kembali</h5>
								<p>
									 Jika barang Bermasalah
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 18px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-credit-card'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Pembayaran aman</h5>
								<p>
									 Pembayaran aman 100%
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 18px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-bubbles'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Dukungan 1 x 24 jam</h5>
								<p>
									 Dukungan khusus untuk anda
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 18px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-gift'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Layanan Hadiah</h5>
								<p>
									 Mendukung layanan hadiah
								</p>
							</div>
						</div>
						<hr style='padding:15px 0px 5px 0px'>
						<div class="info--register-bottom" style='margin-bottom:20px'>
							<center><span>Belum punya akun?</span><a style='color:#000' href="#" class="btn-register" target="_parent">Daftar sekarang!</a></center>
						</div>
					</div>
					<div class="col-md-6" style='padding:0px 40px'>
						<h3>MASUK</h3>
						<form action="#" method="POST">
							<div class="ps-form__content">
								<div class="form-group" style='margin-bottom: 1.2rem;'>
									<label style='margin-bottom:5px' class="col-form-label">Username, Email atau No. Handphone</label>
									<input class="form-control" name='a' style='height:40px' type="text" autofocus required></div>
								<div class="form-group" style='margin-bottom: 1rem;'>
									<label style='margin-bottom:5px' class="col-form-label">Password</label>
									<input class="form-control" name='b' style='height:40px' type="password" required></div>
								<div class="form-group" style='margin-bottom: 1rem;'>
									<div class="ps-checkbox">
										<input class="form-control" type="checkbox" id="remember-me" name="remember-me">
										<label for="remember-me">Ingat saya</label>
										<a href='#' style='color:#000' class='float-right' data-dismiss="modal" aria-hidden="true" data-toggle='modal' data-target='.lupa-example-modal-lg'>Lupa Password?</a>
									</div>
								</div>
								<br>
								<div class="form-group submit" style='margin-bottom:5px'>
									<button type='submit' name='login' class="ps-btn ps-btn--fullwidth gray-btn">Masuk</button>
									<a href='https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=https%3A%2F%2Ftajalapak.com%2Fauth%2Fgoogle_login&client_id=299574065913-7h05p08ljjab5ddc3u9l1s3geibrd36d.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=online&approval_prompt=auto' class='ps-btn ps-btn--fullwidth red-btn' style='margin: 4px 0px'>Google</a>
									<a href='https://www.facebook.com/v3.2/dialog/oauth?client_id=239427474160015&state=2ccf8557e0a07250bb8b4815a52d44d2&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Ftajalapak.com%2Fauth%2Ffacebook_login&scope=email' class='ps-btn ps-btn--fullwidth blue-btn'>Facebook</a>
								</div>
								<br></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade lupa-example-modal-lg" style='z-index:99999' tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header" style='border-bottom:0px solid #e9ecef'>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-s6" style='padding:0px 40px'>
						<div class='ps-block__item' style='margin-bottom: 10px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-rocket'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Pengiriman gratis</h5>
								<p>
									 Untuk pesanan min Rp 999.000
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 10px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-sync'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>90 uang Kembali</h5>
								<p>
									 Jika barang Bermasalah
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 10px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-credit-card'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Pembayaran aman</h5>
								<p>
									 Pembayaran aman 100%
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 10px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-bubbles'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Dukungan 1 x 24 jam</h5>
								<p>
									 Dukungan khusus untuk anda
								</p>
							</div>
						</div>
						<div class='ps-block__item' style='margin-bottom: 10px;'>
							<div class='ps-block__left' style='display:block; float:left'>
								<i style='font-size:35px; margin-right:20px' class='icon-gift'></i>
							</div>
							<div class='ps-block__right'>
								<h5 style='margin-bottom:0px'>Layanan Hadiah</h5>
								<p>
									 Mendukung layanan hadiah
								</p>
							</div>
						</div>
						<hr style='padding:15px 0px 5px 0px'>
						<div class="info--register-bottom" style='margin-bottom:20px'>
							<center><span>Belum punya akun?</span><a style='color:#000' href="https://tajalapak.com/auth/login" class="btn-register" target="_parent">Daftar sekarang!</a></center>
						</div>
					</div>
					<div class="col-md-6" style='padding:0px 40px'>
						<h3>LUPA PASSWORD?</h3>
						<form action="#" method="POST">
							<div class="ps-form__content">
								<div class="form-group" style='margin-bottom: 1.8rem;'>
									<label style='margin-bottom:5px' class="col-form-label">Username, Email</label>
									<input class="form-control" name='a' style='height:40px' type="text" autofocus required></div>
								<div class="form-group">
									<label style='margin-bottom:5px' class="col-form-label">No. Handphone</label>
									<input class="form-control" name='b' style='height:40px' type="text" required></div>
								<div class="form-group" style='margin-bottom: 1rem;'>
									<div class="ps-checkbox">
										<a href='#' class='text' data-dismiss="modal" aria-hidden="true">Batalkan?</a>
										<a href='#' style='color:#000' class='float-right' data-dismiss="modal" aria-hidden="true" data-toggle='modal' data-target='.bd-example-modal-lg'>Kembali Login?</a>
									</div>
								</div>
								<br>
								<div class="form-group submit" style='margin-bottom:5px'>
									<button type='submit' name='submit3' class="ps-btn ps-btn--fullwidth">Kirimkan Permintaan</button>
								</div>
								<br></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id='Back-to-top'>
	<img alt='Scroll to top' src="img/top.png"/>
</div>
<header class="header header--1" data-sticky="true">
<div class="header__topone">
	<div class="container">
		<div class="header__left">
			<p>
				<strong>Pengiriman gratis</strong>
				Untuk pesanan min Rp 100.000
			</p>
		</div>
		<!--<div class="header__right">
			<ul class="header__top-links">
				<li>
					<a href="#">Telusuri Pesanan</a>
				</li>
				<li>
					<div class="ps-block--user-header">
						<div class="ps-block__left">
							<i class="icon-user"></i>
						</div>
						<div class="ps-block__right">
							<a href='#' data-toggle='modal' data-target='.bd-example-modal-lg'>Login</a>
							<a href='#'>Register</a>
						</div>
					</div>
				</li>
			</ul>
		</div>-->
                    <div class="header__right">
                        <ul class="header__top-links">
                            <li><a href="#">Telusuri Pesanan</a></li>
                                                        <li>
                                <div class="ps-dropdown"><a href="#"><i class='icon-bag'></i> Menu Toko</a>
                                    <ul class="ps-dropdown-menu">
                                        <li><a href="#">Pengaturan Toko</a></li>
                                        <li><a href="#">Daftar Produk <span class="badge badge-secondary" style='font-size:85%; background-color: #028600;'>0</span></a></li>
                                        <li><a href="#">Alamat Transaksi COD</a></li>
                                        <li><a href="#">Orders Pusat (Reseller)</a></li>
                                        <li><a href="#">Orders Masuk <span class="badge badge-secondary" style='font-size:85%'>0</span></a></li>
                                        <li><a href="#"><i class="fa fa-star text-yellow"></i> <span class="blink_me">Upgrade Toko</span></a></li>
                                    </ul>
                                </div>
                            </li>
                                                        <li>
                                <div class="ps-block--user-header">
                                    <div class="ps-block__left"><i class="icon-user"></i></div>
                                    <div class="ps-block__right">
                                    <a href='#'>Akun</a>
                                    <a href='#'>Logout</a>                                    
									</div>
                                </div>
                            </li>
                        </ul>
                    </div>		
	</div>
</div>

<div class="header__top">
	<div class="ps-container">
		<div class="header__left">
			<div class="menu--product-categories">
				<div class="menu__toggle">
					<i class="icon-menu"></i><span>Kategori Produk</span>
				</div>
				<div class="menu__content">
					<ul class="menu--dropdown">
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-gift'></i> Alat Musik & Pro Audio <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Gitar</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Piano</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Talempong</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-heart'></i> Fashion & Busana Pria <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Accessories</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Kid's Fashion</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Shoes</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-bag2'></i> Fashion & Busana Wanita <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Kiyora Dalam</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Kiyora Sedang</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-sync'></i> Olahraga dan Luar Rumah <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Freezer Burn</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Frigde Cooler</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Wine Cabinets</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-telephone'></i> Perhiasan dan Aksesoris <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Cincin</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Jam tangan</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Kalung</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>sdasd</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-credit-card'></i> Perhiasan dan Jam Tangan <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Cincin Kawin</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Emas Putih</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-rocket'></i> Taman dan Alat Dapur <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Cookware</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Decoration</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Furniture</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Garden Tools</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li class='current-menu-item menu-item-has-children has-mega-menu'>
							<a href='#'><i class='icon-bubbles'></i> Tas, Koper & Perjalanan <span class='caret caret-right'></span></a>
							<div class='mega-menu'>
								<div class='mega-menu__column'>
									<ul class='mega-menu__list'>
										<li class='current-menu-item'>
											<a href='#'>Car Electronics</a>
										</li>
										<li class='current-menu-item'>
											<a href='#'>Office Electronics</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<a class='ps-logo' href='#'><img src='img/logo4.png'/></a>
		</div>
		<div class="header__center">
			<form class="ps-form--quick-search" action="#" method="POST">
				<div class="form-group--icon">
					<i class="icon-chevron-down"></i>
					<select class="form-control" name='filter'>
						<option value="0" selected="selected">Semua</option>
						<option class='level-0' value='kategori|9'>Alat Musik & Pro Audio</option>
						<option class='level-1' value='subkategori|21'>- Gitar</option>
						<option class='level-1' value='subkategori|22'>- Piano</option>
						<option class='level-1' value='subkategori|23'>- Talempong</option>
						<option class='level-0' value='kategori|6'>Fashion & Busana Pria</option>
						<option class='level-1' value='subkategori|14'>- Accessories</option>
						<option class='level-1' value='subkategori|15'>- Kid's Fashion</option>
						<option class='level-1' value='subkategori|16'>- Shoes</option>
						<option class='level-0' value='kategori|2'>Fashion & Busana Wanita</option>
						<option class='level-1' value='subkategori|2'>- Kiyora Dalam</option>
						<option class='level-1' value='subkategori|1'>- Kiyora Sedang</option>
						<option class='level-0' value='kategori|13'>Olahraga dan Luar Rumah</option>
						<option class='level-1' value='subkategori|11'>- Freezer Burn</option>
						<option class='level-1' value='subkategori|12'>- Frigde Cooler</option>
						<option class='level-1' value='subkategori|13'>- Wine Cabinets</option>
						<option class='level-0' value='kategori|1'>Perhiasan dan Aksesoris</option>
						<option class='level-1' value='subkategori|6'>- Cincin</option>
						<option class='level-1' value='subkategori|4'>- Jam tangan</option>
						<option class='level-1' value='subkategori|3'>- Kalung</option>
						<option class='level-1' value='subkategori|24'>- sdasd</option>
						<option class='level-0' value='kategori|12'>Perhiasan dan Jam Tangan</option>
						<option class='level-1' value='subkategori|20'>- Cincin Kawin</option>
						<option class='level-1' value='subkategori|19'>- Emas Putih</option>
						<option class='level-0' value='kategori|14'>Taman dan Alat Dapur</option>
						<option class='level-1' value='subkategori|7'>- Cookware</option>
						<option class='level-1' value='subkategori|8'>- Decoration</option>
						<option class='level-1' value='subkategori|9'>- Furniture</option>
						<option class='level-1' value='subkategori|10'>- Garden Tools</option>
						<option class='level-0' value='kategori|10'>Tas, Koper & Perjalanan</option>
						<option class='level-1' value='subkategori|17'>- Car Electronics</option>
						<option class='level-1' value='subkategori|18'>- Office Electronics</option>
					</select>
				</div>
				<input class="form-control" name='kata' type="text" placeholder="Aku mau Belanja..." autocomplete='off' required>
				<button type='submit' name='cari'>Cari</button>
			</form>
		</div>
		<div class="header__right">
			<div class="header__actions">
				<a class='header__extra' href='#'>
					<i class='icon-bag2'></i>
					<span><i class='wishlistcount'>0</i></span>
				</a>
				<div class='ps-cart--mini'>
					<a class='header__extra' href='#'><i class='icon-heart'></i></a>
				</div>
				<div class='ps-cart--mini'>
					<a class='header__extra' href='#'><i class='icon-bubble'></i><span><i>0</i></span></a>
				</div>	
				<div class='ps-cart--mini'>
					<a class='header__extra' href='#'><i class='icon-history'></i></a>
				</div>					
				<div class="ps-block__left">
						<a class='header__extra' href='#'><i class="icon-apartment"></i></a>
				</div>				
				<!--<div class="ps-block--header-hotline">
					<div class="ps-block__left">
						<i class="icon-telephone"></i>
					</div>
					<div class="ps-block__right">
						<p>
							 Buka Bantuan<strong>0812 6777 13xx</strong>
						</p>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>

<nav class="navigation">
<div class="ps-container">
	<div class="navigation__left">
		<div class="menu--product-categories">
			<div class="menu__toggle">
				<i class="icon-menu"></i><span>Kategori Produk</span>
			</div>
			<div class="menu__content">
				<ul class="menu--dropdown">
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-gift'></i> Alat Musik & Audio <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Gitar</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Piano</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Talempong</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-heart'></i> Fashion & Busana Pria <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Accessories</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Kid's Fashion</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Shoes</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-bag2'></i> Fashion & Busana Wanita <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Kiyora Dalam</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Kiyora Sedang</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-sync'></i> Olahraga dan Luar Rumah <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Freezer Burn</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Frigde Cooler</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Wine Cabinets</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-telephone'></i> Perhiasan dan Aksesoris <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Cincin</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Jam tangan</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Kalung</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>sdasd</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-credit-card'></i> Perhiasan dan Jam Tangan <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Cincin Kawin</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Emas Putih</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-rocket'></i> Taman dan Alat Dapur <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Cookware</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Decoration</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Furniture</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Garden Tools</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class='current-menu-item menu-item-has-children has-mega-menu'>
						<a href='#'><i class='icon-bubbles'></i> Tas, Koper & Perjalanan <span class='caret caret-right'></span></a>
						<div class='mega-menu'>
							<div class='mega-menu__column'>
								<ul class='mega-menu__list'>
									<li class='current-menu-item'>
										<a href='#'>Car Electronics</a>
									</li>
									<li class='current-menu-item'>
										<a href='#'>Office Electronics</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="navigation__right">
		<ul class='menu'>
			<li class='current-menu-item'>
				<a href='#'>Beranda</a><span class='sub-toggle'></span>
			</li>
			<li class='current-menu-item'>
				<a href='#'>Blog</a><span class='sub-toggle'></span>
			</li>
			<li class='menu-item-has-children'>
				<a href='#'><span>Shop</span></a>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Semua Produk</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Toko (Pelapak)</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Tracking Orders</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Konfirmasi Orders</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Orders Report</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Testimoni</a><span class='sub-toggle'></span>
					</li>
				</ul>
			</li>
			<li class='menu-item-has-children'>
				<a href='#'><span>Donasi</span></a>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Sedekah Online</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Wakaf Uang</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Wakaf Asset</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Jemput Zakat</a><span class='sub-toggle'></span>
					</li>
				</ul>
			</li>
			<li class='menu-item-has-children'>
				<a href='#'><span>Theme</span></a>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Red</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Green</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Blue</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Orange</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Yellow</a><span class='sub-toggle'></span>
					</li>
					<li class='current-menu-item'>
						<a href='#'>White</a><span class='sub-toggle'></span>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="navigation__extra">
			<li>
				<a href='#'>Tentang Kami</a>
			</li>
			<li>
				<a href='#'>Cara Belanja</a>
			</li>
			<li>
				<a href='#'>Mitra Kami</a>
			</li>
		</ul>
	</div>
</div>
</nav>
</header>
<header class="header header--mobile" data-sticky="true">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="navigation--mobile">
	<div class="navigation__left">
		<a class='ps-logo' href='#'><img src='img/logo4.png'/></a>
	</div>
	<div class="navigation__right">
		<div class="header__actions">
			<div class='ps-cart--mini'>
				<a class='header__extra' href='#'><i class='icon-bag2'></i><span><i>0</i></span></a>
				<div class='ps-cart__content'>
					<div class='ps-cart__items'></div>
					<div class='ps-cart__footer'>
						<h3>Sub Total : <strong>Rp 0</strong></h3>
						<figure><a class='ps-btn' href='#'>Keranjang</a><a class='ps-btn' href='#'>Pembayaran</a></figure>
					</div>
				</div>
			</div>
			<div class="ps-block--user-header">
				<div class="ps-block__left">
					<a href='#'><i class="icon-user"></i></a>
				</div>
				<div class="ps-block__right">
					<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Login</a>
					<a href="#">Register</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ps-search--mobile">
	<form class="ps-form--search-mobile" action="#" method="POST">
		<div class="form-group--nest">
			<input class="form-control" name='kata' type="text" placeholder="Aku Mau Belanja..." required>
			<button type='submit' name='cari'><i class="icon-magnifier"></i></button>
		</div>
	</form>
</div>
</header>
<div class="ps-panel--sidebar" id="cart-mobile">
	<div class="ps-panel__header">
		<h3>Shopping Cart</h3>
	</div>
	<div class="navigation__content">
		<div class="ps-cart--mobile">
			<div class="ps-cart__content"></div>
			<div class="ps-cart__footer">
				<h3>Sub Total:<strong>Rp 0</strong></h3>
				<figure><a class="ps-btn" href="#">Keranjang</a>
				<a class="ps-btn" href="#">Pembayaran</a></figure>
			</div>
		</div>
	</div>
</div>
<div class="ps-panel--sidebar" id="navigation-mobile">
	<div class="ps-panel__header">
		<h3>Kategori Produk</h3>
	</div>
	<div class="ps-panel__content">
		<ul class="menu--mobile">
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Perhiasan dan Aksesoris</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Kalung</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Jam tangan</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Cincin</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>sdasd</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Fashion & Busana Wanita</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Kiyora Sedang</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Kiyora Dalam</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Fashion & Busana Pria</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Accessories</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Kid's Fashion</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Shoes</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Alat Musik & Pro Audio</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Gitar</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Piano</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Talempong</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Tas, Koper & Perjalanan</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Car Electronics</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Office Electronics</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Perhiasan dan Jam Tangan</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Emas Putih</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Cincin Kawin</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Olahraga dan Luar Rumah</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Freezer Burn</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Frigde Cooler</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Wine Cabinets</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class='current-menu-item menu-item-has-children has-mega-menu'>
				<a href='#'>Taman dan Alat Dapur</a><span class='sub-toggle'></span>
				<div class='mega-menu'>
					<div class='mega-menu__column'>
						<ul class='menu-custom'>
							<li class='current-menu-item '>
								<a href='#'>Cookware</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Decoration</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Furniture</a>
							</li>
							<li class='current-menu-item '>
								<a href='#'>Garden Tools</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="navigation--list">
	<div class="navigation__content">
		<a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span>Menu</span></a>
		<a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span>Kategori</span></a>
		<a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span>Cari</span></a>
		<a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span>Keranjang</span></a>
	</div>
</div>
<div class="ps-panel--sidebar" id="search-sidebar">
	<div class="ps-panel__header">
		<form class="ps-form--search-mobile" action="#" method="POST">
			<div class="form-group--nest">
				<input class="form-control" name='kata' type="text" placeholder="Aku Mau Belanja...">
				<button type='submit' name='cari'><i class="icon-magnifier"></i></button>
			</div>
		</form>
	</div>
	<div class="navigation__content"></div>
</div>
<div class="ps-panel--sidebar" id="menu-mobile">
	<div class="ps-panel__header">
		<h3>Menu</h3>
	</div>
	<div class="ps-panel__content">
		<ul class='menu--mobile'>
			<li class='current-menu-item'>
				<a href='#'>Beranda</a>
			</li>
			<li class='current-menu-item'>
				<a href='#'>Blog</a>
			</li>
			<li class='menu-item-has-children'>
				<a href='#'>Shop</a><span class='sub-toggle'></span>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Semua Produk</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Toko (Pelapak)</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Tracking Orders</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Konfirmasi Orders</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Orders Report</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Testimoni</a>
					</li>
				</ul>
			</li>
			<li class='menu-item-has-children'>
				<a href='#'>Donasi</a><span class='sub-toggle'></span>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Sedekah Online</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Wakaf Uang</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Wakaf Asset</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Jemput Zakat</a>
					</li>
				</ul>
			</li>
			<li class='menu-item-has-children'>
				<a href='##'>Theme</a><span class='sub-toggle'></span>
				<ul class='sub-menu'>
					<li class='current-menu-item'>
						<a href='#'>Red</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Green</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Blue</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Orange</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>Yellow</a>
					</li>
					<li class='current-menu-item'>
						<a href='#'>White</a>
					</li>
				</ul>
			</li>
			<li class='current-menu-item'>
				<a href='#'>Login</a>
			</li>
		</ul>
	</div>
</div>



<div id="homepage-1">
	<!--<div class="ps-container" style='margin-top:10px'>
		<div class='ps-block--site-features' style='margin-top:10px; background-color:#fff; border: none; padding: 10px 0px;'>
			<form class='col-md-12' style='padding-right:0px; padding-left:0px' method='POST' action='#'>
				<div class='form-row'>
					<div style='margin-bottom:0px' class='col-md-4 form-group'>
						<input type='number' name='tujuan' class='form-control' placeholder='Masukkan Nomor Handphone,..' required></div>
					<div style='margin-bottom:0px' class='col-md-3 form-group'>
						<select name='operator' class='form-control' id='operator' required>
							<option value=''>- Pilih Operator -</option>
							<option value='1'>AXIS</option>
							<option value='5'>BOLT</option>
							<option value='7'>CERIA</option>
							<option value='13'>INDOSAT</option>
							<option value='26'>SMARTFREN</option>
							<option value='29'>TELKOMSEL</option>
							<option value='36'>TRI</option>
							<option value='44'>XL</option>
						</select>
					</div>
					<div style='margin-bottom:0px' class='col-md-3 form-group'>
						<select name='produk' class='form-control' id='produk' required>
							<option value=''>- Pilih Produk -</option>
						</select>
					</div>
					<div style='margin-bottom:0px' class='col-md-2 form-group'>
						<button type='submit' name='submit' style='padding:9px 12px' class='ps-btn ps-btn--fullwidth gray-btn'>Beli Pulsa</button>
					</div>
				</form>
			</div>
			<div style='clear:both'></div>
		</div>
	</div>-->
	<div class="ps-home-banner ps-home-banner--1" style='padding-top:20px'>
		<div class="ps-container">
			<div class="ps-section__left">
				<div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
					<div class='ps-banner'>
						<a title='Images Slider Produk 1' href='#'><img src='img/slide-1.jpg' alt='slide-1.jpg'></a>
					</div>
					<div class='ps-banner'>
						<a title='Images Slider Produk 2' href='#'><img src='img/slide-2.jpg' alt='slide-2.jpg'></a>
					</div>
					<div class='ps-banner'>
						<a title='Images Slider Produk 3' href='#'><img src='img/slide-3.jpg' alt='slide-3.jpg'></a>
					</div>
				</div>
			</div>
			<div class="ps-section__right">
				<a class='ps-collection' href='#' target='_blank'><img src='img/promotion-2.jpg' alt='Iklan Sidebar Kanan atas 2'/></a><a class='ps-collection' href='#' target='_blank'><img src='img/promotion-1.jpg' alt='Iklan Sidebar Kanan atas 1'/></a>
			</div>
		</div>
	</div>
	<div class="ps-site-features">
		<div class="ps-container">
			<div class="ps-block--site-features">
				<div class='ps-block__item'>
					<div class='ps-block__left'>
						<i class='icon-rocket'></i>
					</div>
					<div class='ps-block__right'>
						<h4>Pengiriman gratis</h4>
						<p>
							 Untuk pesanan min Rp 999.000
						</p>
					</div>
				</div>
				<div class='ps-block__item'>
					<div class='ps-block__left'>
						<i class='icon-sync'></i>
					</div>
					<div class='ps-block__right'>
						<h4>90 uang Kembali</h4>
						<p>
							 Jika barang Bermasalah
						</p>
					</div>
				</div>
				<div class='ps-block__item'>
					<div class='ps-block__left'>
						<i class='icon-credit-card'></i>
					</div>
					<div class='ps-block__right'>
						<h4>Pembayaran aman</h4>
						<p>
							 Pembayaran aman 100%
						</p>
					</div>
				</div>
				<div class='ps-block__item'>
					<div class='ps-block__left'>
						<i class='icon-bubbles'></i>
					</div>
					<div class='ps-block__right'>
						<h4>Dukungan 1 x 24 jam</h4>
						<p>
							 Dukungan khusus untuk anda
						</p>
					</div>
				</div>
				<div class='ps-block__item'>
					<div class='ps-block__left'>
						<i class='icon-gift'></i>
					</div>
					<div class='ps-block__right'>
						<h4>Layanan Hadiah</h4>
						<p>
							 Mendukung layanan hadiah
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-deal-of-day">
		<div class="ps-container">
			<div class="ps-section__header">
				<div class="ps-block--countdown-deal">
					<div class="ps-block__left">
						<h3>Penawaran Berakhir</h3>
					</div>
					<div class="ps-block__right">
						<figure>
						<figcaption></figcaption>
						<span style='display:none' id='berakhir'>0:12:40:44</span>
						<ul class="ps-countdown d-none d-sm-block" data-time="">
							<li>
								<span class="days"></span> Hari
							</li>
							<li>
								<span class="hours"></span> Jam
							</li>
							<li>
								<span class="minutes"></span> Menit
							</li>
							<li>
								<span class="seconds"></span> Detik
							</li>
						</ul>
						<ul class="ps-countdown d-block d-sm-none" data-time="">
							<li>
								<span class="days"></span> Hari
							</li>
							<li>
								<span class="hours"></span> Jam
							</li>
							<li>
								<span class="minutes"></span> Menit
							</li>
							<li>
								<span class="seconds"></span>
							</li>
						</ul>
						</figure>
					</div>
				</div>
				<a class='d-none d-sm-block' href="#">Lihat Semua</a>
			</div>
			<div class="ps-section__content">
				<div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/RV71_27_Jeans_grande.jpg' alt='Segitiga Instan Aira- AA94.8 Minty Green'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-2'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='2'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-2' title='Add to Whishlist'><i class='icon-heart' onclick="save('2',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>
								 Rp 250,000 <del>350,000</del>
							</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Aira- AA94.8 Minty Gre,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 0
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/Emily_Grey_grande.jpg' alt='Pashmina Instan Rafella - RLN1.2 Gold Maroon'></a>
							<ul class='ps-product__actions produk-6'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='6'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-6' title='Add to Whishlist'><i class='icon-heart' onclick="save('6',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 75,000</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.2 Gold ,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 34
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/22.png' alt='Segitiga Instan Madeira - MDB5.3 Sunset'></a>
							<ul class='ps-product__actions produk-4'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='4'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-4' title='Add to Whishlist'><i class='icon-heart' onclick="save('4',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 129,900</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Madeira - MDB5.3 Sunse,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'>1</option>
										<option value='1'>2</option>
										<option value='1'>3</option>
										<option value='1'>4</option>
										<option value='2'>5</option>
									</select>
									<span>2</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 67
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis5.jpg' alt='Rompi Kurta Hoodie Zip Dark Grey Semi Wol'></a>
							<ul class='ps-product__actions produk-9'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='9'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-9' title='Add to Whishlist'><i class='icon-heart' onclick="save('9',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 68,500</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Dark Grey Semi ,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 9
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/AD_19_20_Misty_Grey_grande.jpg' alt='Super Segiempat Rebya - RYB6.7 Pink Clover'></a>
							<ul class='ps-product__actions produk-20'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='20'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-20' title='Add to Whishlist'><i class='icon-heart' onclick="save('20',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 65,000</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Super Segiempat Rebya - RYB6.7 Pink C,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 12
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/AYD5_3_Mayra_Pink_grande.jpg' alt='Pashmina Instan Rafella - RLN1.1 Sweet Grey'></a>
							<ul class='ps-product__actions produk-7'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='7'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-7' title='Add to Whishlist'><i class='icon-heart' onclick="save('7',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 99,000</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.1 Sweet,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 9
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class='ps-product ps-product--inner'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis4.jpg' alt='Rompi Kurta Hoodie Zip Mentantarei YU-234'></a>
							<ul class='ps-product__actions produk-11'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='11'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-11' title='Add to Whishlist'><i class='icon-heart' onclick="save('11',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<p class='ps-product__price sale'>Rp 89,000</p>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Mentantarei YU-,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<div class='ps-product__progress-bar ps-progress' data-value='0'>
									<div class='ps-progress__value'>
										<span></span>
									</div>
									<p>
										 Terjual : 0 / 23
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-home-ads">
		<div class="ps-container">
			<div class="row">
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>
					<a class='ps-collection' href='#' target='_blank'><img src='img/3.jpg' alt='Home - Iklan Home No 3'/></a>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>
					<a class='ps-collection' href='#' target='_blank'><img src='img/2.jpg' alt='Home - Iklan Home No 2'/></a>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>
					<a class='ps-collection' href='#' target='_blank'><img src='img/1.jpg' alt='Home - Iklan Home No 1'/></a>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-top-categories">
		<div class="ps-container">
			<h3>Kategori Populer bulan ini</h3>
			<div class="row">
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/fashion.jpg' alt='fashion.jpg'/></a>
						<p>
							 Fashion & Busana Pria
						</p>
					</div>
				</div>
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/fashion_wanita.jpg' alt='fashion_wanita.jpg'/></a>
						<p>
							 Fashion & Busana Wanita
						</p>
					</div>
				</div>
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/kat1.jpg' alt='kat1.jpg'/></a>
						<p>
							 Perhiasan dan Aksesoris
						</p>
					</div>
				</div>
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/dapur1.jpg' alt='dapur1.jpg'/></a>
						<p>
							 Taman dan Alat Dapur
						</p>
					</div>
				</div>
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/perjalanan.jpg' alt='perjalanan.jpg'/></a>
						<p>
							 Tas, Koper & Perjalanan
						</p>
					</div>
				</div>
				<div class='col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 '>
					<div class='ps-block--category'>
						<a class='ps-block__overlay' href='#'></a><img style='width:210px;' src='img/Jewelry_Watch.jpg' alt='Jewelry_Watch.jpg'/></a>
						<p>
							 Perhiasan dan Jam Tangan
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-product-list ps-clothings">
		<div class="ps-container">
			<div class="ps-section__header">
				<h3>Perhiasan dan Aksesoris</h3>
				<ul class='ps-section__links'>
					<li>
						<a href='#'>Lihat Semua</a>
					</li>
				</ul>
			</div>
			<div class="ps-section__content">
				<div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/a4.jpg' alt='HP Business EliteBook X360 1020 G2'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-23'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='23'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-23' title='Add to Whishlist'><i class='icon-heart' onclick="save('23',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>HP Business EliteBook X360 1020 G2</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>
									 Rp 31,020,000 <del>32,520,000</del>
								</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>HP Business EliteBook X360 1020 G2</a>
								<p class='ps-product__price sale'>
									 Rp 31,020,000 <del>32,520,000</del>
								</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/Capture111.JPG' alt='ACER Swift 7 (SF713-51) (Core i7-7Y75) - Gold'></a>
							<ul class='ps-product__actions produk-51'>
								<li>
									<a href='https://tajalapak.com/produk/detail/acer-swift-7-sf71351-core-i77y75--gold' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='51'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-51' title='Add to Whishlist'><i class='icon-heart' onclick="save('51',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>lagi Test</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>ACER Swift 7 (SF713-51) (Core i7-7Y75),..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 1,000,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>ACER Swift 7 (SF713-51) (Core i7-7Y75) - Gold</a>
								<p class='ps-product__price sale'>Rp 1,000,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/a7.jpg' alt='ACER Swift 7 (SF713-51) (Core i7-7Y75) - Gold'></a>
							<ul class='ps-product__actions produk-24'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='24'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-24' title='Add to Whishlist'><i class='icon-heart' onclick="save('24',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>ACER Swift 7 (SF713-51) (Core i7-7Y75),..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 22,465,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>ACER Swift 7 (SF713-51) (Core i7-7Y75) - Gold</a>
								<p class='ps-product__price sale'>Rp 22,465,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/a1.jpg' alt='Ultrabook Hackintosh Acer - I5 Haswell - 8 Gb - SSD'></a>
							<ul class='ps-product__actions produk-21'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='21'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-21' title='Add to Whishlist'><i class='icon-heart' onclick="save('21',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Ultrabook Hackintosh Acer - I5 Haswell,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 16,500,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Ultrabook Hackintosh Acer - I5 Haswell - 8 Gb - SSD</a>
								<p class='ps-product__price sale'>Rp 16,500,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/a2.jpg' alt='APPLE MacBook Pro - Space Gray - Intel Core i5 2.3GHz'></a>
							<ul class='ps-product__actions produk-22'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='22'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-22' title='Add to Whishlist'><i class='icon-heart' onclick="save('22',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>APPLE MacBook Pro - Space Gray - Intel,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 22,500,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>APPLE MacBook Pro - Space Gray - Intel Core i5 2.3GHz</a>
								<p class='ps-product__price sale'>Rp 22,500,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/carbon1.jpg' alt='LENOVO X1 Carbon Gen 6 [20KGA04GID]'></a>
							<ul class='ps-product__actions produk-26'>
								<li>
									<a href='https://tajalapak.com/produk/detail/lenovo-x1-carbon-gen-6-20kga04gid-121807' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='26'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-26' title='Add to Whishlist'><i class='icon-heart' onclick="save('26',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>LENOVO X1 Carbon Gen 6 [20KGA04GID]</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 35,750,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>LENOVO X1 Carbon Gen 6 [20KGA04GID]</a>
								<p class='ps-product__price sale'>Rp 35,750,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/a8.jpg' alt='DELL Business Latitude 7290 (Core i7-8650U)'></a>
							<ul class='ps-product__actions produk-25'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='25'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-25' title='Add to Whishlist'><i class='icon-heart' onclick="save('25',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Kalifah Umayyah</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>DELL Business Latitude 7290 (Core i7-8,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 22,449,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>DELL Business Latitude 7290 (Core i7-8650U)</a>
								<p class='ps-product__price sale'>Rp 22,449,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-product-list ps-clothings">
		<div class="ps-container">
			<div class="ps-section__header">
				<h3>Fashion & Busana Wanita</h3>
				<ul class='ps-section__links'>
					<li>
						<a href='#'>Lihat Semua</a>
					</li>
				</ul>
			</div>
			<div class="ps-section__content">
				<div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/foto_produk/RYB6_1_Grey_grande.jpg' alt='Segitiga Instan Aira- AA94.9 Tropical Blue'></a>
							<ul class='ps-product__actions produk-1'>
								<li>
									<a href='https://tajalapak.com/produk/detail/segitiga-instan-aira-aa949-tropical-blue' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='1'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-1' title='Add to Whishlist'><i class='icon-heart' onclick="save('1',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Aira- AA94.9 Tropical ,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 70,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segitiga Instan Aira- AA94.9 Tropical Blue</a>
								<p class='ps-product__price sale'>Rp 70,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/Emily_Grey_grande.jpg' alt='Pashmina Instan Rafella - RLN1.2 Gold Maroon'></a>
							<ul class='ps-product__actions produk-6'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='6'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-6' title='Add to Whishlist'><i class='icon-heart' onclick="save('6',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.2 Gold ,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 75,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.2 Gold Maroon</a>
								<p class='ps-product__price sale'>Rp 75,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/RV71_5_Cold_Ocean_grande.jpg' alt='Segitiga Instan KEINA - KN54.38 Delfine Lilac'></a>
							<ul class='ps-product__actions produk-3'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='3'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-3' title='Add to Whishlist'><i class='icon-heart' onclick="save('3',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan KEINA - KN54.38 Delfin,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 169,980</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segitiga Instan KEINA - KN54.38 Delfine Lilac</a>
								<p class='ps-product__price sale'>Rp 169,980</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/22.png' alt='Segitiga Instan Madeira - MDB5.3 Sunset'></a>
							<ul class='ps-product__actions produk-4'>
								<li>
									<a href='https://tajalapak.com/produk/detail/segitiga-instan-madeira--mdb53-sunset' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='4'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-4' title='Add to Whishlist'><i class='icon-heart' onclick="save('4',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Madeira - MDB5.3 Sunse,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'>1</option>
										<option value='1'>2</option>
										<option value='1'>3</option>
										<option value='1'>4</option>
										<option value='2'>5</option>
									</select>
									<span>2</span>
								</div>
								<p class='ps-product__price sale'>Rp 129,900</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segitiga Instan Madeira - MDB5.3 Sunset</a>
								<p class='ps-product__price sale'>Rp 129,900</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href=''><img src='img/KYB4_14_Soft_Lavender_1024x1024_f993283a-dae0-4a05-b163-9f6b44465732_grande.jpg' alt='Segitiga Instan Madeira - MDB5.2 Ocean'></a>
							<ul class='ps-product__actions produk-5'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='5'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-5' title='Add to Whishlist'><i class='icon-heart' onclick="save('5',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href=''>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Madeira - MDB5.2 Ocean</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 75,500</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segitiga Instan Madeira - MDB5.2 Ocean</a>
								<p class='ps-product__price sale'>Rp 75,500</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/no-image.png' alt='Jilbab Syariah Indonesia raya Meriah'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-55'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='55'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-55' title='Add to Whishlist'><i class='icon-heart' onclick="save('55',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Toko ABCD</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Jilbab Syariah Indonesia raya Meriah</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 50,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Jilbab Syariah Indonesia raya Meriah</a>
								<p class='ps-product__price sale'>Rp 50,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/RV71_27_Jeans_grande.jpg' alt='Segitiga Instan Aira- AA94.8 Minty Green'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-2'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='2'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-2' title='Add to Whishlist'><i class='icon-heart' onclick="save('2',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segitiga Instan Aira- AA94.8 Minty Gre,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>
									 Rp 250,000 <del>350,000</del>
								</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segitiga Instan Aira- AA94.8 Minty Green</a>
								<p class='ps-product__price sale'>
									 Rp 250,000 <del>350,000</del>
								</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/AD_19_20_Misty_Grey_grande.jpg' alt='Super Segiempat Rebya - RYB6.7 Pink Clover'></a>
							<ul class='ps-product__actions produk-20'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='20'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-20' title='Add to Whishlist'><i class='icon-heart' onclick="save('20',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Umar Lapakers</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Super Segiempat Rebya - RYB6.7 Pink C,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 65,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#''>Super Segiempat Rebya - RYB6.7 Pink Clover</a>
								<p class='ps-product__price sale'>Rp 65,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/AYD5_3_Mayra_Pink_grande.jpg' alt='Pashmina Instan Rafella - RLN1.1 Sweet Grey'></a>
							<ul class='ps-product__actions produk-7'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='7'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-7' title='Add to Whishlist'><i class='icon-heart' onclick="save('7',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.1 Sweet,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 99,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Pashmina Instan Rafella - RLN1.1 Sweet Grey</a>
								<p class='ps-product__price sale'>Rp 99,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/AD_19_20_Misty_Grey_grande.jpg' alt='Segiempat Rebya - RYB6.7 Pink Clover'></a>
							<ul class='ps-product__actions produk-17'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='17'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-17' title='Add to Whishlist'><i class='icon-heart' onclick="save('17',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Segiempat Rebya - RYB6.7 Pink Clover</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 65,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Segiempat Rebya - RYB6.7 Pink Clover</a>
								<p class='ps-product__price sale'>Rp 65,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-product-list ps-clothings">
		<div class="ps-container">
			<div class="ps-section__header">
				<h3>Fashion & Busana Pria</h3>
				<ul class='ps-section__links'>
					<li>
						<a href='#'>Lihat Semua</a>
					</li>
				</ul>
			</div>
			<div class="ps-section__content">
				<div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/no-image.png' alt='Ini bukan jual diri, tapi numpang eksis'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-56'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='56'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-56' title='Add to Whishlist'><i class='icon-heart' onclick="save('56',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Toko XYZ</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Ini bukan jual diri, tapi numpang eksi,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 75,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Ini bukan jual diri, tapi numpang eksis</a>
								<p class='ps-product__price sale'>Rp 75,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis5.jpg' alt='Rompi Kurta Hoodie Zip Dark Grey Semi Wol'></a>
							<ul class='ps-product__actions produk-9'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='9'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-9' title='Add to Whishlist'><i class='icon-heart' onclick="save('9',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Dark Grey Semi ,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 68,500</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Dark Grey Semi Wol</a>
								<p class='ps-product__price sale'>Rp 68,500</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis6.jpg' alt='Black Cotton Puplin Semi Wol Red White URI-12'></a>
							<div class='ps-product__badge out-stock'>Habis Terjual</div>
							<ul class='ps-product__actions produk-8'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='8'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-8' title='Add to Whishlist'><i class='icon-heart' onclick="save('8',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Black Cotton Puplin Semi Wol Red White,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 34,501</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Black Cotton Puplin Semi Wol Red White URI-12</a>
								<p class='ps-product__price sale'>Rp 34,501</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis2.jpg' alt='Koku Black Cotton Sesnsation Gamis TY-4312'></a>
							<div class='ps-product__badge'>10 %</div>
							<ul class='ps-product__actions produk-14'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='14'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-14' title='Add to Whishlist'><i class='icon-heart' onclick="save('14',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Syarii Sentral Java</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Koku Black Cotton Sesnsation Gamis TY-,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>
									 Rp 90,000 <del>100,000</del>
								</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Koku Black Cotton Sesnsation Gamis TY-4312</a>
								<p class='ps-product__price sale'>
									 Rp 90,000 <del>100,000</del>
								</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis11.jpg' alt='Gamis Green Filosifi Oxorcities TG-3452'></a>
							<ul class='ps-product__actions produk-28'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='28'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-28' title='Add to Whishlist'><i class='icon-heart' onclick="save('28',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Umar Lapakers</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Gamis Green Filosifi Oxorcities TG-345,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 59,900</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Gamis Green Filosifi Oxorcities TG-3452</a>
								<p class='ps-product__price sale'>Rp 59,900</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis4.jpg' alt='Rompi Kurta Hoodie Zip Mentantarei YU-234'></a>
							<ul class='ps-product__actions produk-11'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='11'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-11' title='Add to Whishlist'><i class='icon-heart' onclick="save('11',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Umar Lapakers</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Mentantarei YU-,..</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 89,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Rompi Kurta Hoodie Zip Mentantarei YU-234</a>
								<p class='ps-product__price sale'>Rp 89,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/baju_dalam7.jpg' alt='Men Singelete - Baju Dalam Menarik'></a>
							<ul class='ps-product__actions produk-40'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='40'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-40' title='Add to Whishlist'><i class='icon-heart' onclick="save('40',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Umar Lapakers</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Men Singelete - Baju Dalam Menarik</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 5,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Men Singelete - Baju Dalam Menarik</a>
								<p class='ps-product__price sale'>Rp 5,000</p>
							</div>
						</div>
					</div>
					<div class='ps-product'>
						<div class='ps-product__thumbnail'>
							<a href='#'><img src='img/gamis3.jpg' alt='Koku Fren Grenn Latifa Consesi TY-634'></a>
							<ul class='ps-product__actions produk-27'>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Read More'><i class='icon-bag2'></i></a>
								</li>
								<li>
									<a href='#' data-toggle='tooltip' data-placement='top' title='Quick View' class='quick_view' data-id='27'><i class='icon-eye'></i></a>
								</li>
								<li>
									<a data-toggle='tooltip' data-placement='top' id='save-27' title='Add to Whishlist'><i class='icon-heart' onclick="save('27',this.id)"></i></a>
								</li>
							</ul>
						</div>
						<div class='ps-product__container'>
							<a class='ps-product__vendor' href='#'>Umar Lapakers</a>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Koku Fren Grenn Latifa Consesi TY-634</a>
								<div class='ps-product__rating'>
									<select class='ps-rating' data-read-only='true'>
										<option value='1'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
										<option value='2'></option>
									</select>
									<span>0</span>
								</div>
								<p class='ps-product__price sale'>Rp 3,000</p>
							</div>
							<div class='ps-product__content hover'>
								<a class='ps-product__title' href='#'>Koku Fren Grenn Latifa Consesi TY-634</a>
								<p class='ps-product__price sale'>Rp 3,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ps-home-ads">
		<div class="ps-container">
			<div class="row">
				<div class='col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 '>
					<a class='ps-collection' href='#' target='_blank'><img src='img/ad-1.jpg' alt='Footer - Iklan No 1'/></a>
				</div>
				<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>
					<a class='ps-collection' href='#' target='_blank'><img src='img/ad-2.jpg' alt='Footer - Iklan No 2'/></a>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="ps-download-app">
        <div class="ps-container">
            <div class="ps-block--download-app">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__thumbnail"><img src="template//img/app.png" alt=""></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__content">
                                <h3>Download Martfury App Now!</h3>
                                <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone</p>
                                <form class="ps-form--download-app" action="do_action" method="post">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="Email" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                </form>
                                <p class="download-link"><a href="#"><img src="template//img/google-play.png" alt=""></a><a href="#"><img src="template//img/app-store.png" alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
	<div style='clear:both'>
		<br></div>
	<div class="ps-product-list ps-new-arrivals">
		<div class="ps-container">
			<div class="ps-section__header">
				<h3>Produk Baru Terpopuler</h3>
				<ul class="ps-section__links">
					<li>
						<a href='#'>Fashion & Busana Pria</a>
					</li>
					<li>
						<a href='#'>Perhiasan dan Aksesoris</a>
					</li>
					<li>
						<a href='#'>Olahraga dan Luar Rumah</a>
					</li>
					<li>
						<a href="#">Lihat Semua</a>
					</li>
				</ul>
			</div>
			<div class="ps-section__content">
				<div class="row">
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/no-image.png' alt='no-image.png'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Ini bukan jual diri, tapi numpang eksi,..</a>
								<p class='ps-product__price'>Rp 75,000</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/no-image.png' alt='no-image.png'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Jilbab Syariah Indonesia raya Meriah</a>
								<p class='ps-product__price'>Rp 50,000</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/sendok1.jpg' alt='sendok1.jpg'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Sendok Goreng Cantik dan Imut</a>
								<p class='ps-product__price'>Rp 18,000</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/Capture111.jpg' alt='Capture111.JPG'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>ACER Swift 7 (SF713-51) (Core i7-7Y75),..</a>
								<p class='ps-product__price'>Rp 1,000,000</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/no-image.png' alt='no-image.png'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Consina Expert Series Lunara Biru Gela,..</a>
								<p class='ps-product__price'>
									 Rp 749,000 <del>759,000</del>
								</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/baju_dalam7.jpg' alt='baju_dalam7.jpg'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Men Singelete - Baju Dalam Menarik</a>
								<p class='ps-product__price'>Rp 5,000</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/panci.jpg' alt='panci.jpg'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Panci Masak Super Hebat dan Awet</a>
								<p class='ps-product__price'>
									 Rp 120,000 <del>130,000</del>
								</p>
							</div>
						</div>
					</div>
					<div class='col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 '>
						<div class='ps-product--horizontal'>
							<div class='ps-product__thumbnail'>
								<a href='#'><img src='img/subscribe.jpg' alt='foto_kopers.jpg'></a>
							</div>
							<div class='ps-product__content'>
								<a class='ps-product__title' href='#'>Koper anti Maling Conggih Sekali</a>
								<p class='ps-product__price'>Rp 550,000</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<!--<div class="ps-newsletter">
        <div class="ps-container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
</div>
<footer class="ps-footer">
<div class="ps-container">
	<div class="ps-footer__widgets">
		<aside class='widget widget_contact-us'>
		<h4 class='widget-title'>Hubungi Kami</h4>
		<div class='widget_content'>
			<p>
				 Hubungi (0751) 461692<br/>
				<h3>0812 6777 13xx</h3>
				 Jl. Angkasa Puri, Perundam, Padang<br/>contact@tajalapak.com</p>
			<ul class='ps-list--social'>
				<li>
					<a class='facebook' href='#'><i class='fa fa-facebook'></i></a>
				</li>
				<li>
					<a class='twitter' href='#'><i class='fa fa-twitter'></i></a>
				</li>
				<li>
					<a class='google-plus' href='#'><i class='fa fa-google-plus'></i></a>
				</li>
				<li>
					<a class='instagram' href='#'><i class='fa fa-instagram'></i></a>
				</li>
			</ul>
		</div>
		</aside><aside class='widget widget_footer'>
		<h4 class='widget-title'>Link Terkait</h4>
		<ul class='ps-list--link'>
			<li>
				<a href='#'>Tentang Tajalapak</a>
			</li>
			<li>
				<a href='#'>Aturan Penggunaan</a>
			</li>
			<li>
				<a href='#'>Kebijakan Privasi</a>
			</li>
			<li>
				<a href='#'>Affiliate Program</a>
			</li>
		</ul>
		</aside><aside class='widget widget_footer'>
		<h4 class='widget-title'>Pembeli</h4>
		<ul class='ps-list--link'>
			<li>
				<a href='#'>Cara Belanja</a>
			</li>
			<li>
				<a href='#'>Pembayaran</a>
			</li>
			<li>
				<a href='#'>Jaminan Aman</a>
			</li>
			<li>
				<a href='#'>Jasa Pengadaan</a>
			</li>
		</ul>
		</aside><aside class='widget widget_footer'>
		<h4 class='widget-title'>Pelapak</h4>
		<ul class='ps-list--link'>
			<li>
				<a href='#'>Cara Berjualan</a>
			</li>
			<li>
				<a href='#'>Keuntungan Jualan</a>
			</li>
			<li>
				<a href='#'>Indeks Merek</a>
			</li>
			<li>
				<a href='#'>Direktori Pelapak</a>
			</li>
		</ul>
		</aside>
	</div>
	<div class="ps-footer__copyright">
		<p>
			Copyright &copy; 2020 Emarket Indonesia
		</p>
	</div>
</div>
</footer>
<!--<div class="ps-popup" id="subscribe" data-time="500">
				<div class="ps-popup__content bg--cover" data-background="img/subscribe.jpg">
					<a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
			<form class="ps-form--subscribe-popup" action="#" method="POST">
						<div class="ps-form__content">
							<h4>Dapatkan Diskon 25%</h4>
								<p>
									Berlangganan milis Tajalapak.Com untuk menerima pembaruan tentang informasi terbaru, penawaran khusus dan promosi kami.
								</p>
								<div class="form-group">
									<input class="form-control" type="email" name='email' placeholder="Email Address" required>
										<div class="ps-checkbox">
											<input class="form-control" type="checkbox" id="not-show" name="notshow">
						<label for="not-show">Jangan Tampilkan lagi Form ini.</label>
					</div>
					<br>
					<button type='submit' name='submit' class="ps-btn">Subscribe</button>
					</div>
				</div>
			</form>
		</div>
	</div>-->
<div id="back2top">
	<i class="pe-7s-angle-up"></i>
</div>
<div class="ps-site-overlay"></div>
<div id="loader-wrapper">
	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>
</div>
<div class="ps-search" id="site-search">
	<a class="ps-btn--close" href="#"></a>
	<div class="ps-search__content">
		<form class="ps-form--primary-search" action="do_action" method="post">
			<input class="form-control" type="text" placeholder="Search for...">
			<button><i class="aroma-magnifying-glass"></i></button>
		</form>
	</div>
</div>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="css/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="css/plugins/bootstrap4/js/bootstrap.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<script src="css/plugins/slick/slick/slick.min.js"></script>
<script src="js/jquery.barrating.min.js"></script>
<script src="js/slick-animation.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/sticky-sidebar.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/select2.full.min.js"></script>
<!-- custom scripts-->
<!-- DataTables -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/jquery.uploadfile.min.js"></script>
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $(function() { $(window).scroll(function() {
                if($(this).scrollTop()>400) { $('#Back-to-top').fadeIn(); }else { $('#Back-to-top').fadeOut();}});
                $('#Back-to-top').click(function() {
                    $('body,html')
                    .animate({scrollTop:0},300)
                    .animate({scrollTop:40},200)
                    .animate({scrollTop:0},130)
                    .animate({scrollTop:15},100)
                    .animate({scrollTop:0},70);
                    });
            });
            $('#editor1').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
        function uploadImage(image) {
            var data = new FormData();
            data.append("image", image);
            $.ajax({
                url: "https://tajalapak.com/members/upload_image",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "POST",
                success: function(url) {
                    $('#editor1').summernote("insertImage", url);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
        function deleteImage(src) {
            $.ajax({
                data: {src : src},
                type: "POST",
                url: "https://tajalapak.com/members/delete_image",
                cache: false,
                success: function(response) {
                    console.log(response);
                }
            });
        }
        });
    </script>
<script src="js/summernote-bs4.min.js"></script>
<script>
    $(function () {
        // Summernote
        $('#editor1').summernote()
    })
    </script>
<script>
        $(".formatNumber").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            $(this).val(n.toLocaleString());
        });
	$(document).ready(function(){
        $('#state').change(function(){
          var state_id = $(this).val();
          $.ajax({
            type:"POST",
            url:"https://tajalapak.com/auth/city",
            data:"stat_id="+state_id,
            success: function(response){
              $('#city').html(response);
            }
          })
        })
      })
      $(document).ready(function(){
        $('#state_reseller').change(function(){
          var state_id = $(this).val();
          $.ajax({
            type:"POST",
            url:"https://tajalapak.com/auth/city",
            data:"stat_id="+state_id,
            success: function(response){
              $('#city_reseller').html(response);
            }
          })
        })
      })
	function toDuit(number) {
	    var number = number.toString(), 
	    duit = number.split('.')[0], 
	    duit = duit.split('').reverse().join('')
	        .replace(/(\d{3}(?!$))/g, '$1,')
	        .split('').reverse().join('');
	    return 'Rp ' + duit ;
    }
    </script>
<script>
    $(function () { 
        $("#example1").DataTable({
            "bSortable": false,
            "lengthChange": false,
            "oLanguage": {
            "sSearch": "Pencarian "
            }
        });
        $("#example11").DataTable({
            "bSortable": false,
            "lengthChange": false,
            "oLanguage": {
            "sSearch": "Pencarian "
            }
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 10,
            "order": [[ 4, "desc" ]]
        });
    });
    </script>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Notifikasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">Produk Berhasil Disimpan!</div>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-lg" id="myModalDetail" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style='padding:10px'>
			<div class="modal-header">
				<h5 class="modal-title h4" id="myModalLabel">Informasi Detail</h5>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="content-body"></div>
			</div>
		</div>
	</div>
</div>
<script>
    function save(id,data2){
        $.ajax({
            type : "POST",
            url  : "https://tajalapak.com/produk/save",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                $(".produk-"+id).hide().load(" .produk-"+id).fadeIn();
                $("#exampleModalCenter").modal('show');
                $(".wishlistcount").hide().load(" .wishlistcount").fadeIn();
            }
        });
        return false;
    }
    </script>
<script>
        $(function(){
            $(document).on('click','.quick_view',function(e){
                e.preventDefault();
                $("#myModalDetail").modal('show');
                $.post("https://tajalapak.com/produk/quick_view",
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".content-body").html(html);
                    }   
                );
            });
        });
    </script>
<div class='hidden'>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/620335389bd1f31184dba6c7/1fre8fphb';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();


	</script>
	<!--End of Tawk.to Script-->
	<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $('#multiple_select').multiselect({
                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: false,
                maxHeight: 300,
                enableCaseInsensitiveFiltering: true,
                buttonWidth: '99%',
                numberDisplayed: 6
            });
            $('#multiple_select2').multiselect({
                enableClickableOptGroups: true,
                enableCollapsibleOptGroups: true,
                enableFiltering: true,
                includeSelectAllOption: false,
                maxHeight: 200,
                enableCaseInsensitiveFiltering: true
            });
        });
    </script>
</div>
</body>
</html>