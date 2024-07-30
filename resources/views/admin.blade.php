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
    
</head>
<body>
    <div class="container">
       

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
                    <li><a href="{{ url('admin/contact') }}" >Contacts</a></li>

                    <li><a href="{{ url('admin/about') }}" >About Me</a></li>

                </ul>
             <button class="contact-me" >Contact Me</button>
        </div>

      
        <div class="main-content">
        <main id="main">
        <div class="intro" id="intro">
                
          <h1>Hi <br> I'm <span>Oumayma dimassi</span> </h1>
          <br> 
          <h2>  <span class="dynamic-text">{{$about->job}}</span></h2>
          <p>
          {{$about->profil}} </p>
          
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>          
          
          <div class="buttons">
          
            <button class="read" >Hire Me</button>
            <button class="read"   >Contact</button>
            
          </div>
        </div>
        
        <div class="profile-pic">
          <img src="../resources/images/oumeima.png" alt=""/>
        </div>
            
            
      </main>
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
    </div>

    @vite('resources/js/app.js')
    <!-- Ajouter votre script ici -->
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
