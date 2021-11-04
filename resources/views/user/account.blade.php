@extends('layouts.rentbike')
@section('title','Profile')
@section('content')
<style>

  /**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR *//**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR *//**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR *//**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
/**UNDER REPAIR */
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 15%;
}

.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 30px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #0b56a8; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #E50000;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}
.btn-blog {
    color: #ffffff;
    background-color: #E50000;
    border-color: #E50000;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: blue;
    background-color:#a80b28;
    border-color: #a80b28;
}
article h2{color:#333333;}
h2{color:#0b56a8;}
 .margin10{margin-bottom:10px; margin-right:10px;}
 
 .container .text-style
{
  text-align: justify;
  line-height: 23px;
  margin: 0 13px 0 0;
  font-size: 19px;
}
</style>




<div class="container">
	<div class="col-sm-2">
    <nav class="nav-sidebar">
		<ul class="nav tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
          <li class=""><a href="#tab2" data-toggle="tab">My Bikes</a></li>
          <li class=""><a href="#tab3" data-toggle="tab">Upload Bikes</a></li>  
          <li class=""><a href="#tab4" data-toggle="tab">My rentals</a></li>  
          <hr>
          <li class=""><a href="#tab5" data-toggle="tab">Maps</a></li> 
          <li class=""><a href="#tab6" data-toggle="tab">Payouts</a></li>
          <li class=""><a href="#tab7" data-toggle="tab">My Earnigs</a></li>
		</ul>
	</nav>

</div>
<!-- tab content -->
<!--  PROFILE -->
 <!--  PROFILE -->
 <!--  PROFILE -->
<div class="tab-content">
<div class="tab-pane active text-style" id="tab1">
  <form action=""method="">
  @csrf
  <h2>Profile</h2>
       <div class="col-xs-4 col-lg-6">
                      <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="fname">First name</label>
                                        <input type="text" class="form-control" name = "fname"id="fname" value="{{ Auth::user()->fname }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="lname">Last name</label>
                                        <input type="text" class="form-control" name = "lname"id="lname" value="{{ Auth::user()->lname }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name = "email"id="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="number">Number</label>
                                        <input type="text" class="form-control" name = "number"id="number" value=" {{ Auth::user()->number }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="gender">Gender</label>
                                        <input type="text" class="form-control" name = "gender"id="gender" value="{{ Auth::user()->gender }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="street">Street</label>
                                        <input type="text" class="form-control" name = "street"id="street" value="{{ Auth::user()->street }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name = "city"id="city" value="{{ Auth::user()->city }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="submit"></label>
                                        <br>
                                        <button type="text" class="btn btn-info" name = "submit"id="submit">Save Changes</button>
                                    </div>
                                </div>
                                </div> 
                                            <div class="col-sm-6">
                                            <div id="profile-container">
                                            <image id="profileImage" src="http://lorempixel.com/100/100" />
                                            </div>
                                                  <div class="input-group">
                                                      <span class="input-group-btn">
                                                          <span class="btn-sm btn-danger btn-file">
                                                              Change Picture <input type="file" id="imgInp">
                                                          </span>
                                                      </span>
                                                      <input type="text" name="image" id="image"class="form-control" readonly>
                                                  </div>
                                                  <img id='img-upload'/>
                                              </div> 
</form>                                

</div>                     

<!-- END PROFILE -->
 <!-- END PROFILE -->
 <!-- END PROFILE -->
   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   

<!-- POSTED Bike -->
 <!-- POSTED Bike -->
 <!-- POSTED Bike -->

<div class="tab-pane text-style" id="tab2">
  <h2>My Bikes</h2>
   <p>
   <section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-1">
    @forelse ($BikeDetail as $key=>$data)
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img  src="../uploads/{{$data->bikepic}} " class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="">{{$data->bikename}} </a></h5>
            <p class="list-price">Price Per Day: {{$data->bikeprice}} Pesos  </p>
            <ul>
             <!-- <li><i class="fa fa-user" aria-hidden="true"></i> {{$data->bikeseats}} seats</li> -->
              <li><i class="fa fa-calendar" aria-hidden="true"></i> {{$data->bikemodel}} model</li>
            <!--  <li><i class="fa fa-car" aria-hidden="true">{{$data->posttype}} </i></li> -->
            </ul>
            <a href="../editbike/{{$data->id}} " class="btn">Edit Details <span class="angle_arrow"><i class="far fa-edit" ></i></span></a>
            <a href="../deletebike/{{$data->id}} " class="btn">Delete<span class="angle_arrow"><i class="far fa-trash-alt"></i></span></a></div>
            </div>
            @empty
                no data found
                @endforelse
         </div>
   
</div>
</div>
   </p>
    <hr>   
</div>

<!--end POSTED Bike -->
 <!--end POSTED Bike -->
 <!--end POSTED Bike -->

 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   



 <!-- Upload Bike -->
 <!-- Upload Bike -->
 <!-- Upload Bike -->
<div class="tab-pane text-style" id="tab3">
 <h2>Upload Bikes</h2>

<div class="uploadcontainer ">  
  <form id="contact" action="{{route('bike_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h4><a>Provide The Details</a></h4>
    <fieldset>
      <input placeholder="Bike name" type="text" name="bikename"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Bike Price Per Day" type="number" name="bikeprice"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Bike Model" type="number" name="bikemodel"  required autofocus>
    </fieldset>
    <fieldset>
    <select name="biketype" id="Location" required>
    <option value="" disabled selected>Select Bike Type</option>
    <option value="BMX">BMX</option>
    <option value="Mountain Bike">Mountain Bike</option>
    </select>
    </fieldset>
    <fieldset>
      <input placeholder="Address" name="address" type="text"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" value="{{ Auth::user()->number }}" name="personnumber" type="tel" required>
    </fieldset>
    <fieldset>
   <input id="bikepic" type="file" name="bikepic"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
    <fieldset>
    <select name="location" id="Location" required>
    <option value="" disabled selected>Select The City</option>
    <option value="Cagayan De Oro City">Cagayan De Oro City</option>
    <option value="Iligan City" >Iligan City</option>
    <option value="Bukidnon">Bukidnon</option>
  </select>
    </fieldset>
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
  </form>
</div>
    <hr>
    




  </div>




  <!--END Upload Bike -->
 <!-- END Upload Bike -->
 <!-- END Upload Bike -->

 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   



<!--RENTALS-->
 <!-- RENTALS  -->
 <!-- RENTALS  -->
  <div class="tab-pane text-style" id="tab4">
  <h2>My Rentals</h2>
  <p>
Rentals
  </p>
    <hr>
  </div>


<!--END RENTALS-->
 <!--END RENTALS  -->
 <!--END RENTALS  -->


 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   


 <!--MAPS-->
 <!--MAPS  -->
 <!--MAPS  -->
  <div class="tab-pane text-style" id="tab5">
  <h2>Maps</h2>
  <p>
Maps
  </p>
    <hr>
  </div>
  <!--END MAPS-->
 <!--END MAPS  -->
 <!--END MAPS  -->

 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   

<!--PAYOUTS-->
 <!--PAYOUTS  -->
 <!--PAYOUTS  -->
  <div class="tab-pane text-style" id="tab6">
  <h2>Payouts</h2>
  <p>
Payouts
  </p>
  <hr> 
  </div>
  <!--END PAYOUTS-->
 <!--END PAYOUTS  -->
 <!--END PAYOUTS  -->

 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   
 <!-- ----------------------------------------------------------------------------------------------------------------------------- -->   


  <!--EARNINGS-->
 <!--EARNINGS -->
 <!--EARNINGS -->
  <div class="tab-pane text-style" id="tab7">
  <h2>Earnigs</h2>
  <p>
EARNINGS
  </p>
    <hr>
</div>

  <!--END EARNINGS-->
 <!--END EARNINGS -->
 <!--END EARNINGS -->


</div>
</div>
</div>  
    
</div>




<script>
  $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
  </script>
@endsection