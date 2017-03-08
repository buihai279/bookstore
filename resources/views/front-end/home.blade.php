@extends('front-end.layouts.master')
@section('content')
	
        <div class="row home-slide" style="background-color: #f1f1f1;">
			<div class="col l9 push-l3">
				<!-- slide -->
				<div class="swiper-container">
			        <ul class="swiper-wrapper">
			            <li class="swiper-slide">
		            		<a href="https://tiki.vn" >
						       <img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
							</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			            <li class="swiper-slide">
			            	<a href="#">
			            		<img src="{{ URL::asset('bh279_front-end/images/slide1.png') }}">
		            		</a>
		            	</li>
			        </ul>
			        <!-- Add Pagination -->
			        <div class="swiper-pagination"></div>
			    </div>
			</div>
			<div class="col l3 pull-l9"></div>
		</div>
		<div class="row" >
		    <div class="col s12 " style="padding: 0">
		        <div class="home-header">
		            <h2>
		                <a href="/nha-sach-tiki">Sách</a>
		            </h2>
		            <ul class="">
		                <li>
		                    <a href="/sach-truyen-thieu-nhi/c393" title="Sách Thiếu Nhi ">
		                        Sách Thiếu Nhi                                                     
		                    </a>
		                </li>
		                <li>
		                    <a href="/sach-van-hoc/c839" title="Sách Văn Học">
		                        Sách Văn Học                                                    
		                    </a>
		                </li>
		                <li>
		                    <a href="/sach-kinh-te/c846" title="Sách Kinh Tế">
		                        Sách Kinh Tế                                                    
		                    </a>
		                </li>
		                <li>
		                    <a href="/sach-giao-khoa/c1012" title="Sách Giáo Khoa - Tham Khảo">
		                        Sách Giáo Khoa - Tham Khảo                                                    
		                    </a>
		                </li>
		                <li>
		                    <a href="/sach-nuoi-day-con/c2527" title="Sách Nuôi Dạy Con">
		                        Sách Nuôi Dạy Con                                                    
		                    </a>
		                </li>
		                <li class="last">
		                    <a href="/nha-sach-tiki">
		                        <strong>Tất cả Sách</strong>
		                    </a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div>
		<div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
			<ul id="tabs-swipe-demo" class="tabs" style="box-sizing:content-box;border-bottom: 1px solid #dfdfdf;">
			    <li class="tab col s2"><a href="#test-swipe-1">Test 1</a></li>
			    <li class="tab col s2"><a class="" href="#test-swipe-2">Test 2</a></li>
			    <li class="tab col s2"><a href="#test-swipe-3">Test 3</a></li>
	  		</ul>
		  	<div id="test-swipe-1" class="col s12 l12 m12">
				<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red hoverable">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange " data-badge-caption="-20%"></span>
					            </div>

					            <div class="review ">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
			</div>
			<div id="test-swipe-2" class="col s12 l12 m12">
				<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
			</div>
			<div id="test-swipe-3" class="col s12 l12 m12">
				<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item hoverable">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div>
		    	<div class="col s12 m4 l3">
					<div class="card product-item ">
						<div class="card-image">
							<img src="{{ URL::asset('bh279_front-end/images/sample-1.jpg') }}">
							<a class="btn-floating halfway-fab waves-effect waves-light red">
								<i class="material-icons">add_shopping_cart</i></a>
						</div>
				        <div class="card-content ">
					        <a  href="#" title="Sword Art Online 006" >
		   			            <span class="card-title">
					                Sword Art Online 006 - Phantom Bullet
				                </span>
					        	<div class="author">Reki Kawahara</div>
					        </a>
				        </div>
				        <div class="card-action">
					            <div class="price-sale">76.000&nbsp;₫ 
					                <span class="price-regular">95.000&nbsp;₫</span>
									<span class="new badge orange" data-badge-caption="-20%"></span>
					            </div>
					            <div class="review">Chưa có nhận xét</div>
				        </div>
			      	</div>
		    	</div></div>
			  <!-- end tabs -->
	  	</div>
@stop