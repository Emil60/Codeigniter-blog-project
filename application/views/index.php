<?php $this->load->view('include/header'); ?>

   	<section class="ftco-section">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-12">
				   <?php foreach($info as $info){ ?>
   					<div class="case">
   						<div class="row">
   							<div class="col-md-6 col-lg-6 col-xl-8 d-flex">
   								<a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url(<?php echo base_url('/temp/user/'); ?>images/image_1.jpg);"></a>
   							</div>
   							<div class="col-md-6 col-lg-6 col-xl-4 d-flex">
   								<div class="text w-100 pl-md-3">
   									<span class="subheading"><?php echo $info->category; ?></span>
   									<h2><a href="<?php echo base_url('home/postdetail/'); echo''.$info->id.''; ?>"><?php echo $info->title; ?></a></h2>
   									<ul class="media-social list-unstyled">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
   									<div class="meta">
   										<p class="mb-0"><a href="#"><?php echo $info->date; ?></a> | <a href="#"><?php echo $info->views; ?>views</a></p>
   									</div>
   								</div>
   							</div>
   						</div>
   					</div>
				   <?php } ?>
   				</div>
   			</div>
			<div class="row mt-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
   		</div>
   	</section>

<?php $this->load->view('include/footer'); ?>