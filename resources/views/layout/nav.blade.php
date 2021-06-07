<link href="{{ asset('public/css/app.css') }}" rel="stylesheet" type="text/css" >

<div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="{{ asset('/resources/views/res/images/logo.png') }}" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active"> <a href="{{url('/')}}">Home</a> </li>
                  
                      <li> <a href="{{ route('about') }}">About</a> </li>
                      <li> <a href="{{url('/')}}/courses">Courses</a> </li>
                      <li> <a href="{{url('/')}}/contact">Contact</a> </li>
      
                        <li > <a   href="#contact">login</a> </li>
                      <li  > <a  class="last_manu" href="#"><img src="{{ asset('/resources/views/res/images/search_icon.png') }}" alt="#" /></a> </li>
                      
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>