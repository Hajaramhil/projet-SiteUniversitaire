@extends('welcome')

@section('content')


<div class="image-container">
    <img src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/06/281198598_5107608495990508_1136900385662101748_n.jpg" alt="Votre Image">
      <div class="image-content">
        <div class="centered-text">
           <p>Faculté des sciences et techniques de Tanger</p>
         </div>
        <a href="{{route("login")}}"><button class="login-button">Se connecter</button></a>
      </div>
      <div class="new">
          <h1>DÉPARTEMENTS</h1>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
          <div class="cta-bg-wrapper">
              <div class="cta-bg"  style="background-image: url(https://tse2.mm.bing.net/th?id=OIP.HiRJAQ3Ht-TFdXeQe796lgHaE8&amp;pid=Api&amp;P=0);"></div>
              <div class="cta-bg-overlay"></div>
          </div>
          <div class="cta-content">
              <h3 class="cta-title"><a href="{{ url('DepInfo') }}">GÉNIE INFORMATIQUE</a></h3>
              <div class="cta-description">
                  Chef : Pr. EL BRAK Mohamed <br>
                  Email : <br>
                   melbrak@uae.ac.ma
              </div>
          </div>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
        <div class="cta-bg-wrapper">
          <div class="cta-bg" style="background-image: url(https://tse1.mm.bing.net/th?id=OIP.H6neWQrMQSCmRszzL9mvfAHaEN&amp;pid=Api&amp;P=0);"></div>
          <div class="cta-bg-overlay"></div>
        </div>
        <div class="cta-content">
          <h3 class="cta-title">GÉNIE CHIMIQUE</h3>
          <div class="cta-description">
            Chef : Pr. CHABBI Mohamed<br>
            Email : <br>
            mchabbi@uae.ac.ma
          </div>
        </div>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
        <div class="cta-bg-wrapper">
          <div class="cta-bg" style="background-image: url(https://tse1.mm.bing.net/th?id=OIP.JGgpd3ZQRv0lj1Vu0lerjAHaE8&amp;pid=Api&amp;P=0);"></div>
          <div class="cta-bg-overlay"></div>
        </div>
        <div class="cta-content">
          <h3 class="cta-title">GÉNIE MÉCANIQUE</h3>
          <div class="cta-description">
            Chef : Pr. ELAYACHI Ilham <br>
            Email : <br>
            i.elayachi@uae.ac.ma
          </div>
        </div>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
        <div class="cta-bg-wrapper">
          <div class="cta-bg" style="background-image: url(https://tse3.mm.bing.net/th?id=OIP.hmOyOH2xUbJw3AtmLBpo7wHaE8&amp;pid=Api&amp;P=0);"></div>
          <div class="cta-bg-overlay"></div>
        </div>
        <div class="cta-content">
          <h3 class="cta-title">GÉNIE ÉLECTRIQUE</h3>
          <div class="cta-description">
            Chef : Pr. HADJ BARAKA Ibrahim<br>
            Email : <br>
            ihadjbaraka@uae.ac.ma
          </div>
        </div>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
        <div class="cta-bg-wrapper">
          <div class="cta-bg" style="background-image: url(https://tse4.mm.bing.net/th?id=OIP.8jcsJ01NVApdeBd8jGLOHwHaEK&amp;pid=Api&amp;P=0);"></div>
          <div class="cta-bg-overlay"></div>
        </div>
        <div class="cta-content">
          <h3 class="cta-title">PHYSIQUE</h3>
          <div class="cta-description">
            Chef : Pr. AJDOUR Mounia<br>
            Email : <br>
             majdour@uae.ac.ma
          </div>
        </div>
      </div>
  </div>
  <div class="custom-column">
      <div class="cta-container">
        <div class="cta-bg-wrapper">
          <div class="cta-bg" style="background-image: url(https://tse1.mm.bing.net/th?id=OIP.aWBgt5On5F-sS2C9MDSpxwHaHa&amp;pid=Api&amp;P=0);"></div>
          <div class="cta-bg-overlay"></div>
        </div>
        <div class="cta-content">
          <h3 class="cta-title"><a href="{{ url('DepMaths') }}">MATHÉMATIQUES</a></h3>
          <div class="cta-description">
            Chef : Pr. EL HALIMI RACHID<br>
            Email : <br>
             r.elhalimi@uae.ac.ma
          </div>
        </div>
      </div>
  </div>
  <div class="new2">
      <h1>ACTUALITÉS</h1>
  </div>
  <div class="announcements-section">
      <div class="announcement">
          <div class="content-annoucement">
              <h2>Annonce 1</h2>
                  <a href="annonce1.html" class="read-more">Plus</a>
          </div>
      </div>
      <div class="announcement">
          <div class="content-annoucement">
              <h2>Annonce 2</h2>
                  <a href="annonce2.html" class="read-more">Plus</a>
          </div>
      </div>
      <div class="announcement">
          <div class="content-annoucement">
              <h2>Annonce 2</h2>
                  <a href="annonce2.html" class="read-more">Plus</a>
          </div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>



@endsection
