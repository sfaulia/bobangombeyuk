<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-1">bobangombeyuk </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/Boba_Milk_Tea') ?>">
                    <i class='fas fa-leaf fa-1x' style='color:#d6d6d6'></i>                    
                    <span>Boba Milk Tea</span></a>
            </li>
			
			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/Boba_Fruit') ?>">
                    <i class='fas fa-apple-alt fa-1x' style='color:#e0e0e0'></i>
                    <span>Boba Fruit</span></a>
            </li>
			
			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/Boba_Milk') ?>">
					<i class='fas fa-wine-glass fa-1x' style='color:#d6d6d6'></i>                    
					<span>Boba Milk</span></a>
            </li>
			
			<li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/Boba_Mix') ?>">
                    <i class='fas fa-atom fa-1x-alt' style='color:#d6d6d6'></i>                    
					<span>Boba Mix</span></a>
            </li>
		
			<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('user/index') ?>">
                    <i class='fas fa-user-alt fa-lg' ></i></i>
                    <span>Profile </span></a> 
            </li>
           
		   <!-- Divider -->
            <hr class="sidebar-divider">
		   
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
			
			 <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <p class="text-center mb-2"><strong><h5>Contact Us</h5></strong><br><center> Silahkan hubungi kami jika ada kendala.</center></p>
               	<?php $no_wa = 628111803600;?>
			   <a href ="https://wa.me/<?php echo $no_wa?>?text= Hai! Saya ingin bertanya." target="_blank" class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Chat Now!</a>
			</div>	

			<div class="sidebar-card d-none d-lg-flex">
                <p class="text-center mb-2"><strong><h5>About Us</h5></strong></p>
				<center>
				<a href ="https://www.instagram.com/ngombeyuk_boba/ " target="_blank"  class='fab fa-instagram fa-lg' style='color:#0a0a0a'></a>
				<br><br>
			   	<a href ="https://www.facebook.com/ngombeyuk_boba/ " target="_blank"  class='fab fa-facebook-square fa-lg' style='color:#0a0a0a'></a>
				<br><br>
				<a href ="https://www.gmail.com/ngombeyukboba/ " target="_blank" class='fab fa-google fa-lg' style='color:#0a0a0a'></a>
				</center>
			</div>
	
        </ul>
		
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
						
						<div class= "navbar">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<?php $keranjang = 'Chart:' .$this->cart->total_items().'items'?>
								    <?php echo anchor ('dashboard/detail_keranjang',$keranjang) ?>
								</li>
							</ul>
							
							 <div class="topbar-divider d-none d-sm-block"></div>

								<ul class="na navbar-nav navbar-right">
									<?php if($this->session->userdata('username')) {?>
										<li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                        </li>

										<li class="ml-2" ><?php echo anchor('auth/logout','Logout') ?></li>
									<?php } else { ?>	
										<li><?php echo anchor('auth/login', 'Login'); ?></li>

									<?php } ?>
								
							     </ul>
							
                       
							</ul>
						
                </nav>
		
                <!-- End of Topbar -->
			
                