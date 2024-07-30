<template>
    <div class="container">
      <header>
        <nav   class="navbar">
          <div class="logo">{{ user.name }}</div>
          <ul>
            <li><a href="{{url('/')}}"  onclick="document.getElementById('main').scrollIntoView({ behavior: 'smooth' });">Portfolio</a></li>
            <li><a href="{{url('service')}}"  onclick="document.getElementById('services').scrollIntoView({ behavior: 'smooth' });">Services</a></li>
            <li><a href="{{url('skills')}}" onclick="document.getElementById('skills-section').scrollIntoView({ behavior: 'smooth' });">Skills</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="{{url('education')}}" onclick="document.getElementById('education').scrollIntoView({ behavior: 'smooth' });">Education</a></li>
          </ul>
          <button class="contact-me"  onclick="document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });">Contact Me</button>
        </nav>
      </header>
      <main id="main">
        <div class="intro" id="intro">
          <h1>Hi <br> I'm <span>{{ user.name }}</span> </h1>
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
            <h3>Frontend <span>Developer</span></h3>
            <p>
              A full stack developer is a versatile professional in the technology field, 
              capable of handling both the front-end and back-end development of a web application. 
              On the front-end, they work with technologies like HTML, CSS, and JavaScript to create appealing and interactive user interfaces.
               
            </p>
            
          </div>

        </div>

      </section>

      <section class="services" id="services">
        <div class="contain">
          <h1 class="sub-title"> My  <span>Services</span></h1>
           <div class="services-list">
              <div>
                <img src="../assets/images/apple.png" alt="">
                <h2>UI/UX Design</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.....
                </p>
                <a href="#" class="read">learn more</a>
              </div>

              <div>
                <img src="../assets/images/code.png" alt="">
                <h2>UI/UX Design</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.....
                </p>
                <a href="#" class="read">learn more</a>
              </div>

              <div>
                <img src="../assets/images/android.png" alt="">
                <h2>UI/UX Design</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Deleniti dolorum eum laudantium.....
                </p>
                <a href="#" class="read">learn more</a>
              </div>
          </div>
        </div>
      </section>


      <section class="education" id="education">
        <h1 class="sub-title"> My  <span>Education</span></h1>
        <div class="timeline-items">

            <div  class="timeline-item">
              <div  class="timeline-dot"> </div>
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                      <h3 >Master of Science in Computer Science</h3>
                      <p >
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum eum laudantium.</p>
                    </div>
              
            </div>

            <div  class="timeline-item">
              <div  class="timeline-dot"></div>
                    <div class="timeline-date">2023</div>
                    <div class="timeline-content">
                      <h3>Licence informatique</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum eum laudantium.</p>
                    </div>
              
            </div>

            <div  class="timeline-item">
              <div  class="timeline-dot"></div>
                    <div class="timeline-date">2022</div>
                    <div class="timeline-content">
                      <h3>Baccalaureat</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
              
            </div>

            <div  class="timeline-item">
              <div  class="timeline-dot"></div>
                    <div class="timeline-date">2022</div>
                    <div class="timeline-content">
                      <h3>Baccalaureat</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        </p>
                    </div>
              
            </div>
        </div>
      </section>



      <h1 class="sub-title"> My  <span>Skills</span></h1>
      <section  class="skills-section" id="skills-section">
       
        <div class="container1" id="skills">
                <h1 class="heading1">Technical skills</h1>
                <div class="technical-bars">
                    <div class="bar">
                      
                       <img src="../assets/images/logos/html5-logo.png" alt="">
                       <div class="info">
                            <span></span>
                        </div>
                        <div class="percentage">
                          
                          <div class="progress-line html">
                            <span></span>
                        </div>
                        <div class="progress-text">90%</div>
                        </div>
                    </div>
                    <div class="bar">
                        <img src="../assets/images/logos/css-logo.png" alt="">
                        <div class="info">
                            <span></span>
                        </div>
                        <div class="progress-line css">
                            <span></span>
                        </div>
                        <div class="percentage">80%</div>
                    </div>
                    <div class="bar">
                        <img src="../images/logos/javascript-logo.png" alt="">
                        <div class="info">
                            <span></span>
                        </div>
                        <div class="progress-line javascript">
                            <span></span>
                        </div>
                        <div class="percentage">85%</div>
                    </div>
                    <div class="bar">
                        <img src="../assets/images/logos/react-logo.png" alt="">
                        <div class="info">
                            <span></span>
                        </div>
                        <div class="progress-line react">
                            <span></span>
                        </div>
                        <div class="percentage">75%</div>
                    </div>
                    <div class="bar">
                        <img src="../assets/images/logos/python-logo.png" alt="">
                        <div class="info">
                            <span></span>
                        </div>
                        <div class="progress-line python">
                            <span></span>
                        </div>
                        <div class="percentage">70%</div>
                    </div>
                </div>
            </div>

            <div class="container1">
          <h1 class="heading1">Professional Skills</h1>
          <div class="radial-bars">
             <svg  viewBox="0 0 200 200">
              <circle class="progress-bar" cx="100"  cy="100" r="80" fill="#ff6600"> </circle>
              <circle class="path path-1" cx="100"  cy="100" r="80" stroke-dasharray="502" stroke-dashoffset="301"  fill="#ff6600"> </circle>
             </svg>

             <div class="percentage">90%</div>
             <div class="text-radial">creativity</div>

          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <h1 class="sub-title"> Contact  <span>Me</span></h1>
          <form action="">
              <div class="input-group">
                <div class="input-box">
                  <input type="text" placeholder="Full Name">
                  <input type="email" placeholder="Email">
                </div>

                <div class="input-box">
                  <input type="number" placeholder="Phone Number">
                  <input type="text" placeholder="Subject">
                </div>
              </div>
              <div class="input-group-2">
                <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
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

        <ul class="list" >
          <li>
            <a href="#" >Home</a>
          </li>

          <li>
            <a href="{{'Education'}}"  >Services</a>
          </li>

          <li>
            <a href="#"  >About Me</a>
          </li>

          <li>
            <a href="#">Education</a>
          </li>
        </ul>

        <p class="copyright">
          <img src="../assets/images/logos/copyright-regular-24.png" alt=""   width="15" height="15">
          Oumeima Dimassi  |  All Right Reserved
        </p>
      </footer>

    </div>
    
    
</template>


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

<style>

</style>