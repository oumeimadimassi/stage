<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
         <header>
        <nav  id="nav" class="navbar">
          <div class="logo"></div>
          <ul>
            <li><a href=""  onclick="document.getElementById('main').scrollIntoView({ behavior: 'smooth' });">Portfolio</a></li>
            <li><a href="#"  onclick="document.getElementById('services').scrollIntoView({ behavior: 'smooth' });">Services</a></li>
            <li><a href="#" onclick="document.getElementById('skills-section').scrollIntoView({ behavior: 'smooth' });">Skills</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#" onclick="document.getElementById('education').scrollIntoView({ behavior: 'smooth' });">Education</a></li>
            <a href="{{ url('pdf_generator')}}"  class="contact-me" >download pdf</a>

          </ul>
          <button class="contact-me"  onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });">Contact Me</button>
        </nav>
      </header>
    </head>


    <body>
    <a id="scrollToTopBtn" onclick="document.getElementById('nav').scrollIntoView({ behavior: 'smooth' });">
       <img src="{{ asset('images/fleshe.png') }}" alt="">
   </a>
       <main id="main">
        <div class="intro" id="intro">
          <h1>Hi <br> I'm <span>Oumayma Dimassi</span> </h1>
          <br> 
          <h2>  <span class="dynamic-text">Frontend Developer</span></h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum eum laudantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum eum laudantium.....</p>
          
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>          
          
          <div class="buttons">
          
            <button class="read"   onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' });">Hire Me</button>
            <button class="read"   onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });">Contact</button>
          </div>
        </div>
        <div class="profile-pic">
          <img src="../resources/images/oumeima.png" alt="">
        </div>
      </main>

      <section class="about" id="about">
        <div class="about-img">
          <img src="../resources/images/oumeima.png" alt="">

          <div class="about-content">
            <h2 class="heading"> About  <span>Me</span></h2>
            <h3>   {{$about->job}}</h3>
            <p>
              {{$about->profil}}
               
            </p>
            
          </div>

        </div>

      </section>

      <section class="services" id="services">
            <div class="contain">
                <h1 class="sub-title"> My <span>Services</span></h1> 
            <div class="services-container">

            @foreach ($services as $s)
            
                 <div class="services-list">

                    <div>
                    
                         <h2>{{$s->title}}</h2>
                         <p>
                           {{$s->description}}
                         </p>
                      <a href="#" class="read">learn more</a>
                    </div>
                 </div>

            @endforeach
            </div>
    </section>

    <section class="education" id="education">
        <h1 class="sub-title"> My  <span>Education</span></h1>
        
        <div class="timeline-items">

        @foreach ($educations as $education)
            

            <div  class="timeline-item">
              <div  class="timeline-dot"> </div>
                    <div class="timeline-date">{{ $education->date }}</div>
                    <div class="timeline-content">
                    
                      <h3 >{{ $education->name }}</h3>
                      <p >
                      {{ $education->description }}</p>
                    </div>
              
            </div>
            @endforeach
        </div> 
      </section>

      <section  class="skills-section" id="skills-section">
       
       <div class="container1" id="skills">
               <h1 class="heading1">Technical skills</h1>
              
               <div class="technical-bars">
                 
             @foreach ($skills as $skill)
             @if($skill->category == 'Tech')
                <div class="bar">
                    <h3>{{$skill->name}}</h3>
                      <div class="info">
                           <span></span>
                       </div>
                       <div class="percentage">
                         
                       <div class="progress-line ">
                        <span class="progress-orange" style="width: {{ $skill->percentage }}%;"></span>
                      </div>

                       <div class="progress-text">{{$skill->percentage}}%</div>
                       </div>
                   </div>
                   @endif
             @endforeach 
               </div>
           </div>

           <div class="container1">
            <h1 class="heading1">Professional Skills</h1>
            <div class="radial-bars">
            @foreach ($skills as $skill)
            @if($skill->category == 'Pro')
            <?php
                // Calculer le décalage du trait pour la progression
                $radius = 80;
                $circumference = 2 * pi() * $radius;
                $progress = ($skill->percentage / 100) * $circumference;
                $offset = $circumference - $progress;
            ?>
           
            <div class="radial-bar">
           
                <svg viewBox="0 0 200 200">
                    <circle class="progress-bar" cx="100" cy="100" r="80" fill="none" stroke="#ccc" stroke-width="10"></circle>
                    <circle class="path" cx="100" cy="100" r="80" fill="none" stroke="#ff6600" stroke-width="10" stroke-dasharray="{{ $circumference }}" stroke-dashoffset="{{ $offset }}"></circle>
                </svg>
            <div class="text-radial">
                
                <h3>{{ $skill->percentage }}%</h3>

                    {{ $skill->name }}
            </div>
                
            </div>
        @endif
    @endforeach

          </div>
            </div>
         <div>
                    
        </div>

        
         </div>
      
     </section>


     <section class="contact" id="contact" >
        <h1 class="sub-title"> Contact  <span>Me</span></h1>

          <form action="/contact" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="input-group">
                <div class="input-box">
                  <input type="text" placeholder="Full Name" name="full_name">
                  <input type="email" placeholder="Email"  name="email" >
                </div>

                <div class="input-box">
                  <input type="number" placeholder="Phone Number"  name="phone_number">
                  <input type="text" placeholder="Subject" name="subject" >
                </div>
              </div>
              <div class="input-group-2">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                <button type="submit" class="read">Send Message</button>
              </div>
          </form>
      </section>
     

      <footer class="footer" id="footer">
            <div class="social">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                <div class="social-icons-footer">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <ul class="list">
                <li><a href="#">Home</a></li>
                <li><a href="{{ 'Education' }}">Services</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Education</a></li>
            </ul>
            <p class="copyright">
                <img src="../assets/images/logos/copyright-regular-24.png" alt="" width="15" height="15">
                Oumeima Dimassi | All Right Reserved
            </p>
        </footer>
        
    </body>

    <script>
    import Typed from 'typed.js';
import axios from 'axios';


export default {
    data() {
        return {
            user: {}
        };
    },
    mounted() {
        axios.get('/user')
            .then(response => {
                this.user = response.data;
            })
            .catch(error => {
                console.error('There was an error!', error);
            });
    },
    methods: {
        scrollTo(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    }
};





    document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('nav ul li a, .contact-me');

    links.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });
  });

</script>
</html>
