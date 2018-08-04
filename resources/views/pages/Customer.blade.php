@extends('layout')
@section('content')

	<section id="cart_items">
		<div class="container">
		<div class="col-sm-8">    			   			
					<h2 class="title text-center">My <strong>Profile</strong></h2>    			    				    				
		</div>
			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<div class="form-one">
								<form action="" method="get">
								@foreach( $customer_info as $v_customer)
								<p>Nama</p>
								<li class="list-group-item text-right"><span class="pull-left"><span>{{ $v_customer->customer_name }}</span></li><br>
								<p>E-mail</p>
								<li class="list-group-item text-right"><span class="pull-left"></span></li><br>
								<p>Mobile Number</p>
								<li class="list-group-item text-right"><span class="pull-left"></span> </li><br>
								<p>Status</p>
								<li class="list-group-item text-right"><span class="pull-left"></span> </li><br>
								

                                <!-- <p>Nama lengkap</p>
                                <input type="text" name="shipping_first_name"   required="">
                                <p>Nomor Telephone</p>
								<input type="text" name="shipping_mobile_number"   required="">
								<p>Alamat E-mail</p>
                                <input type="text" name="shipping_email"  required="">
                                <p>Status</p>
                                <input type="text" name="shipping_mobile_number"  required="">
		 -->
								@endforeach
								</form>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->



@endsection