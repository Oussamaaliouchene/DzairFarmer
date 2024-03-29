<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>DZAIRFRAMER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset ('assest/styleH (1).css')}}" />
    
  </head>
  <body>
    <div class="logo-bar">
      <div class="profile">
        <img src="{{ asset ('assest/images/profile.png')}}" alt="Profile Picture" id="profile-picture" onclick="toggleProfileOptions()" style="cursor: pointer;">
        <div  class="profile-options">
          <a onclick="RedirectProfile()" style="cursor: pointer;">Profile</a>
          <a onclick="logout()" style="cursor: pointer;">Logout</a>
        </div>
      </div>
    
      <div class="logo">
        <img src="{{ asset ('assest/images/Rectangle 1.png')}}" alt="Logo">
      </div>
      <div class="flags">
        <img src="{{ asset ('assest/images/flagA.png')}}" >
        <img src= "{{ asset ('assest/images/flagU.png')}}" > 
      </div>
    </div>
      <section class="home">
        <div class="hero">
     
          <div class="nav-center">
            <div class="nav-item">
              <from action="{{route('profile.store')}}" method="get">
                <a  onclick="RedirectProfile()"   style="cursor: pointer;">PROFILE</a>
              </from>
            </div>
           <div class="nav-item">
              <a href="#article">ARTICLES</a>
            </div>
            <div class="nav-item">
              <a href="#technology">TECHNOLOGY</a>
           </div>
           <div class="nav-item">
              <a href="#contact">CONTACT</a>
           </div>
          </div>
        </div>
        <div class="im"><img  src="{{ asset ('assest/images/1.jpg')}}"></div>
        
        




        <div class="text ">
          <h1>CropSense+ - </h1>
          <p>The cutting-edge precision agriculture technology that uses smart sensor networks and AI-powered insights to optimize farming practices for increased yields and sustainability.</p>
        </div>
        <div class="slider-nav">
          <div id="circle1" class="nav-btn "></div>
          <div id="circle2" class="nav-btn" ></div>
        </div>
     </section>
      <section  id="article"class="article">
      <div class="cont-arti"><h2 class="title">ARTICLES</h2></div>  
      <div class="contaArt">
        <div class="row">
          <div class=" rect" onclick="toggleContent(this)">
            <img src="{{ asset ('assest/images/image1.jpg')}}" alt="Image 1">
            <div class="above">
              <h2>Greenhouse Farming:</h2>
            <p> Algeria’s new project </p>
            </div>
            
          </div>
          <div class="rect" onclick="toggleContent(this)">
            <img style="  max-height: 267px !important;"src="{{ asset ('assest/images/image2.jpg')}}" alt="Image 2">
            <div class="above">
              <h2>Irrigation:</h2>
              <p>Algeria has been investing in various irrigation projects</p>
            </div>
            
          </div>
          <div class=" rect" onclick="toggleContent(this)" >
            <img src="{{ asset ('assest/images/image3.jpg')}}" alt="Image 3">
            <div class="above">
              <h2>Sustainable Agriculture:</h2>
              <p>
                including soil conservation
               </p>
            </div>
            "{{ asset ('assest/images/im2.png')}}"
          </div>
          <div class=" rect" onclick="toggleContent(this)">
            <img src="{{ asset ('assest/images/image3.jpg')}}" alt="Image 4">
            <div class="above">
            <h2>Greenhouse Farming:</h2>
            <p> Algeria’s new project </p>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class=" technology">
      <div class="cont-arti" id="technology"><h2 class="title" >TECHNOLOGY</h2></div>  
      <div class="contaArt">
        <div class="row">
          <div class=" rect" onclick="toggleContent(this)">
            <img src="{{ asset ('assest/images/im1.png')}}">
          </div>
          <div class="rect" onclick="toggleContent(this)">
            <img style="  max-height: 267px !important;"src="{{ asset ('assest/images/im2.png')}}" >
          </div>
        
          <div class=" rect" onclick="toggleContent(this)" >
            <img src="{{ asset ('assest/images/im3.png')}}" >
          </div>
          <div class=" rect" onclick="toggleContent(this)">
            <img src="{{ asset ('assest/images/im4.png')}}">
          </div>
        </div>
        <div class="row">
          <div class=" rect" onclick="toggleContent(this)">
            <img src="{{ asset ('assest/images/im5.png')}}" >
          </div>
          <div class=" rect shdow" onclick="toggleContent(this)">
            <img style=" width: 185px; max-height: 300px !important;border-radius: 0px;" src="{{ asset ('assest/images/im6.png')}}" >
            <div class="above">
              <h2 style="color: white; font-weight: bolder ;margin-top:80px;">Livestock Monitoring</h2>
            </div>
          </div>

        </div>
      </div>
      
    </section>  
    <section class="contact-section" id="contact">
      <div class="contact-header">
        <div class="logo">
          <img src="{{ asset ('assest/images/Rectangle 1.png')}}" alt="Logo">
        </div>
        <div class="about-text">
          <h1>About DZAIRFARMER website</h1>
        </div>
      </div>
      <div class="contact-info">
        <div class="contact-list">
          <ul>
            <li>Advertising</li>
            <li>Privacy Policy</li>
            <li>FAQ</li>
            <li>About Us</li>
            <li>Contact us</li>
            <li>Subscribe</li>
            <li>Suggestions</li>
          </ul>
        </div>
        <div class="contact-list">
          <ul>
            <a style="color: rgb(0, 128, 0);" href="#technology">LATET TECHNOLOGIES</a>
            <a style="color: green;" href="#article">NEWS AND ARTICLES</a>
            <a style="color: green;" href="#contact">CONTACT</a>
          </ul>
        </div>
      </div>
      <div class="social-media">
        <ul>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="far fa-envelope"></i></li>
        </ul>
      </div>
      <div class="footer">
        <p style="margin-left: 50px;">All rights reserved. © 2023 DZAIRFARMER. Unauthorized reproduction or distribution of this material is strictly prohibited.</p>
      </div>
    </section>
    
  
      

    <script src="{{ asset ('assest/script.js')}}"></script>
  </body>
</html>