<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  
  
    @vite('resources/css/app.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Ajoutez votre CSS ici -->
   <style>
    .progress-orange {
    display: block;
    height: 100%;
    background-color: #ff6600; /* Couleur orange */
    width: 0; /* Largeur initiale à zéro */
    transition: width 0.3s ease; 
}
.skills-section-admin{
        display: flex;
      justify-content: space-between;
      align-items: flex-start; /* Optional: align items at the start of the container */
      flex-wrap: wrap; /* Ensure wrapping if container is too narrow */
      /* Définissez la hauteur fixe selon vos besoins */
    overflow-y: scroll; /* Ajoutez le défilement vertical */
    border: 1px solid #ccc; /* Optionnel : ajoutez une bordure pour une meilleure visibilité */
    padding: 10px; /* Optionnel : ajoutez du padding pour un meilleur aspect visuel */
    }


    </style>
   
</head>

<body>
<div class="container">

        </div>  
        <div class="sidebar">
            <div class="logo" id="user-name">
                    <!-- Le nom de l'utilisateur sera inséré ici par JavaScript -->
                </div>
                <ul>
                    <li><a href="{{ url('admin') }}" >Portfolio</a></li>
                    <li><a href="{{ url('admin/service') }}" >Services</a></li>
                    <li><a href="{{ url('admin/skills') }}">Skills</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="{{ url('admin/education') }}" >Education</a></li>
                    <li><a href="{{ url('admin/about') }}" >About Me</a></li>

                </ul>
             <button class="contact-me" >Contact Me</button>
        </div>

        <div class="main-content">
        <section  class="skills-section-admin" id="skills-section">
       
       <div class="container1" id="skills">
               <h1 class="heading1">Technical skills
               <a href="#" id="show-form">
                    <img src="{{ asset('images/comment-add.png') }}" alt="">
                </a>
               </h1>
              
               <div class="technical-bars">
                 
             @foreach ($skills as $skill)
             @if($skill->category == 'Tech')
                <div class="bar">
                  <a  href="{{url ('/admin/edit-skills/'.$skill->id)}}">
                        <img src="{{ asset('images/logos/edit.png') }}" alt="">
                    </a>
                    <a  href="{{url ('/admin/delete-skills/'.$skill->id)}}">
                         <img src="{{ asset('images/delete1.png') }}" alt="Delete">
                    </a>
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
                <a  href="{{url ('/admin/edit-skills/'.$skill->id)}}">
                        <img src="{{ asset('images/logos/edit.png') }}" alt="">
                    </a>
                    <a  href="{{url ('/admin/delete-skills/'.$skill->id)}}">
                         <img src="{{ asset('images/delete1.png') }}" alt="Delete">
                    </a>
                <div class="text-radial">
                
                <h3>{{ $skill->percentage }}%</h3>

                    {{ $skill->name }}</div>
                
            </div>
        @endif
    @endforeach

          </div>
            </div>
         <div>
                    <form action="/admin/skills" method="POST" id="form">
                    @csrf
                        <div>
                            <label for="name">Skill Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div>
                            <label for="percentage">Percentage:</label>
                            <input type="number" id="percentage" name="percentage" min="0" max="100" required>
                        </div>
                        <div>
                            <label>Category:</label>
                            <input type="checkbox" id="Tech" name="category" value="Tech">
                            <label for="category1">Technique</label>
                            <input type="checkbox" id="Pro" name="category" value="Pro">
                            <label for="category2">Professionnel</label>
                        </div>
                        <button type="submit">Add Skill</button>
                    </form>
                    
        </div>

        
         </div>
      
     </section>

        </div>
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
        
      @vite('resources/js/app.js')

      <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Récupération du token CSRF
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            document.getElementById('csrf-token').value = csrfToken;

            // Récupération des données utilisateur
            axios.get('/user')
                .then(response => {
                    const userName = response.data.name;
                    document.getElementById('user-name').insertAdjacentHTML('afterbegin', userName);
                })
                .catch(error => {
                    console.error('There was an error!', error);
                });
        });

        document.getElementById('show-form').addEventListener('click', function(event) {
            event.preventDefault();
            var formContainer = document.getElementById('form');
            if (formContainer.style.display === 'none' || formContainer.style.display === '') {
                formContainer.style.display = 'block';
            } else {
                formContainer.style.display = 'none';
            }
        });
        </script>



      </body>

      </html>