<header id="header" role="banner" class="line">
  <p></p>
  <nav id="navigation" role="navigation">
    <ul class=" ma0">
      <?php
      if(basename(getcwd()) == "fanfare") {
        echo '<li class="pam inbl"><a href="fanfare.php">La fanfare</a></li>
              <li class="pam inbl"><a href="fanfarons.php">Les fanfarons</a></li>
              <li class="pam inbl menuderoul">Les spectacles
              <ul class="spectacles">
              <li class="pam categorie">Spectacles en cours</li>
              <li class="pam sous-categorie"><a href="spectacles/fanfaronnades.php">Fanfaronnades</a></li>
              <li class="pam sous-categorie"><a href="spectacles/grain.php">Un grain dans les rouages</a></li>
                <li class="pam categorie">Anciens spectacles</li>
                <li class="pam sous-categorie"><a href="spectacles/fabuleuse.php">Une fabuleuse histoire ordinaire</a></li>
                <li class="pam sous-categorie"><a href="spectacles/rue.php">Dans la rue</a></li>
              </ul>
              </li>
              <li class="pam inbl menuderoul">M&eacute;dias
                <ul class="media">
                  <li class="pam "><a href="media/videos.php">Vid&eacute;os</a></li>
                  <li class="pam "><a href="media/photos.php">Photos</a></li>
                </ul>
              </li>
              <li class="pam inbl"><a href="agenda.php">Agenda</a></li>
              <li class="pam inbl"><a href="presse.php">Presse</a></li>
              <li class="pam inbl"><a href="contact.php">Contact</a></li>
              ';
      } else {
        echo '<li class="pam inbl"><a href="../fanfare.php">La fanfare</a></li>
              <li class="pam inbl"><a href="../fanfarons.php">Les fanfarons</a></li>
              <li class="pam inbl menuderoul">Les spectacles
              <ul class="spectacles">
              <li class="pam categorie">Spectacles en cours</li>
              <li class="pam sous-categorie"><a href="../spectacles/fanfaronnades.php">Fanfaronnades</a></li>
              <li class="pam sous-categorie"><a href="../spectacles/grain.php">Un grain dans les rouages</a></li>
                <li class="pam categorie">Anciens spectacles</li>
                <li class="pam sous-categorie"><a href="../spectacles/fabuleuse.php">Une fabuleuse histoire ordinaire</a></li>
                <li class="pam sous-categorie"><a href="../spectacles/rue.php">Dans la rue</a></li>
              </ul>
              </li>
              <li class="pam inbl menuderoul">M&eacute;dias
                <ul class="media">
                  <li class="pam "><a href="../media/videos.php">Vid&eacute;os</a></li>
                  <li class="pam "><a href="../media/photos.php">Photos</a></li>
                </ul>
              </li>
              <li class="pam inbl"><a href="../agenda.php">Agenda</a></li>
              <li class="pam inbl"><a href="../presse.php">Presse</a></li>
              <li class="pam inbl"><a href="../contact.php">Contact</a></li>
              ';
            }
           ?>






    </ul>
    <div class="logo-container">
        <a href="https://facebook.com/">
            <svg class="logo-fb" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 167.657 167.657" xml:space="preserve">
                <g>
                    <rect x="0" y="0" width="40" height="168" fill="black"/>
                    <rect x="128" y="0" width="40" height="168" fill="black"/>
                    <rect x="0" y="0" width="168" height="20" fill="black"/>
                    <rect x="0" y="150" width="69" height="20" fill="black"/>
                    <rect x="95" y="150" width="70" height="20" fill="black"/>
                    <path style="fill:#010002;" d="M83.829,0.349C37.532,0.349,0,37.881,0,84.178c0,41.523,30.222,75.911,69.848,82.57v-65.081H49.626
                        v-23.42h20.222V60.978c0-20.037,12.238-30.956,30.115-30.956c8.562,0,15.92,0.638,18.056,0.919v20.944l-12.399,0.006
                        c-9.72,0-11.594,4.618-11.594,11.397v14.947h23.193l-3.025,23.42H94.026v65.653c41.476-5.048,73.631-40.312,73.631-83.154
                        C167.657,37.881,130.125,0.349,83.829,0.349z"/>
                </g>
            </svg>
        </a>
    </div>
  </nav>
</header>
