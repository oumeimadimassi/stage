<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;

}

.container {
  display: flex;
  height: 100vh; /* prendre toute la hauteur de la page */
}

.sidebar.gauche {
  width: 35%; /* Adjust the width as needed */
   background-color: #323B4C;  /* couleur de fond de la sidebar */
  padding: 20px; /* espacement interne */
  position:  sticky ; 
  min-height: 100%; /* Assure que la hauteur minimale est celle de la fenêtre */
}

.contenu.droite {
  background-color: #ffffff; /* couleur de fond du contenu principal */
  padding: 20px; /* espacement interne */
  position: relative; /* positionner par rapport à la sidebar */
  margin-left: 39%; /* Décalage à droite correspondant à la largeur de la barre latérale */
  flex: 1;
}

.sidebar.gauche, .contenu.droite{
  display: inline-block;
  vertical-align: top;
}

.profile-picture {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin: 20px auto;
  display: block;
}

h1.section-title,
h2.section-title {
  margin-top: 10px;
  color: #fff;
  font-size: 18px;
  font-weight: bold;
 
    display: inline-block; /* Le texte et la ligne s'ajustent ensemble */
    border-bottom: 2px solid #fff; /* Ligne sous le texte */
    padding-bottom: 5px; /* Espace entre le texte et la ligne */

}

.section-content {
  margin-bottom: 20px;
}

ul.list-item {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li.list-item {
  margin-bottom: 5px;
  font-size: 14px;
  color: #fff;

}

li.list-item-droite {
  margin-bottom: 5px;
  font-size: 14px;
  color:#323B4C;
  font-weight: bold;

}

.section-title-droite{
  margin-top: 10px;
  color:  #323B4C;
  display: inline-block; /* Le texte et la ligne s'ajustent ensemble */
    border-bottom: 2px solid #323B4C; /* Ligne sous le texte */
    padding-bottom: 5px; /* Espace entre le texte et la ligne */
}

.experience-item {
  margin-bottom: 20px;
}

.experience-item-title {
  font-weight: bold;
  margin-bottom: 5px;
}

.experience-item-details {
  margin-bottom: 5px;
}

</style>
</head>
<body>


<div class="container">

  <div class="sidebar gauche">
  <img src="profile-picture.jpg" alt="" class="profile-picture">
    <h1 class="section-title">Dimassi Oumeima</h1>

    <div class="section-content">
    <h2 class="section-title">Contact</h2>

      <ul>
        <li class="list-item">Linkedin: <a href="linkedin.com/in/oumeima-dimassi">linkedin.com/in/oumeima-dimassi</a></li>
        <li class="list-item">Email: oumeyma.dimassi@gmail.com</li>
        <li class="list-item">Adresse: Monastir, Tunisie</li>
      </ul>
    </div>
    <h2 class="section-title">Compétences Techniques</h2>
    <div class="section-content">
      <ul>
      @foreach ($skills as $skill)
      @if($skill->category == 'Pro')

        <li class="list-item">    
        <h3 class="list-item">{{ $skill->name }} :{{ $skill->percentage }}%</h3>

        </li>
       
        

        @endif
    @endforeach
      </ul>
    </div>
    <h2 class="section-title">Compétences Générales</h2>
    <div class="section-content">
      <ul>
      @foreach ($skills as $skill)
      @if($skill->category == 'Tech')

        <li class="list-item">
        <h3  class="list-item">{{ $skill->name }} :{{ $skill->percentage }}%</h3>
        </li>
      </ul>

      @endif
    @endforeach
    </div>
    
  </div>


  <div class="contenu droite">
  <h1 class="section-title-droite">{{$about->job}}</h1>
    <div class="section-content">
      <p>
      {{$about->profil}}
      </p>
    </div>
    

    <h2 class="section-title-droite">Education</h2>
    <div class="section-title">
    @foreach ($educations as $education)
      <ul>
        <li class="list-item-droite">{{ $education->date }}</li>
        <h3 >{{ $education->name }}</h3>
        <p >
        {{ $education->description }}</p>
        
      </ul>
      @endforeach
    </div>

    <h2 class="section-title-droite">Services</h2>
    <div class="section-content">
      <div class="experience-item">
      @foreach ($services as $s)

        <h3 class="experience-item-title">{{$s->title}}</h3>
        <div class="experience-item-details">
          <p>
          {{$s->description}}          </p>
        </div>
      @endforeach

      </div>
    </div>

  </div>
</div>




</body>
</html>