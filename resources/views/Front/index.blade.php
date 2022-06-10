

@extends('Front.layout')

@section('content')


  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">CONFIANCE & QUALITÉ</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Apprendre aujourd'hui. . . Diriger demain.</p>
              <p class="small-text">Centre de formation accrédité par KNX Association pour l’organisation <br> des formations KNX .</p>
              <a href="#" class="btn get-quote" data-target="#inscrire" data-toggle="modal">S 'INCRIRE</a>
            </div>
            <a href="#featureX" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Mirage Group-->
  <section id="featureX" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Mirage Group</h2>
          <p>Mirage Group est un centre de formation KNX certifié qui propose une formation formelle <br> à plusieurs niveaux et propose un modèle d'éducation KNX pour la formation.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          
           
          
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <img src="{{ asset('Front/img')}}/capture1.png" alt="" height="180" width="300"/>
                <h4>Formation En Ligne</h4>
                <p>Mirage group a la possibilité de proposer des cours knx via un E-Learning en ligne .</p>
              

              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <img src="{{ asset('Front/img')}}/formation.png" alt="" />
                <h4>Formation Présentiel</h4>
                <p> Mirage Group a la possibilité de proposer des cours knx en présentiel.</p>
              </div>
              <div class="fea-img pull-left">
                
              </div>
</div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <img src="{{ asset('Front/img')}}/capture2.png" alt="" height="180" width="300"/>
                <h4>Projet de fin d'étude KNX</h4>
                <p> Mirage Group a la possibilité de proposer des projets de fin d'étude KNX.</p>
              

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Mirage Group-->
    <!--/ Faculity member-->
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">KNX IoTech signifie</h2>
          <p class="white">Les nouveaux appareils et solutions KNX IoTech font passer les maisons et les bâtiments intelligents au niveau supérieur.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-name">Universel            </p>
            <p class="text-par">Des solutions de pointe avec des informations précieuses de l'installation KNX, grâce à une couche complète d'informations sémantiques.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-name">Sécurisé</p>
            <p class="text-par">Services sécurisés basés sur une puissante communication sécurisée des données et cryptée IP sur tous les produits et applications.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->

   <!--Cours en ligne-->
   <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours En Ligne</h2>
          <p>Les cours en ligne disponible dans la plateforme.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
            @php($count=0)
            @foreach($Cours as $cours)
            @if($count < 6)
            @php($count++)
    <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset ('images/' . $cours->url_image)}}" height="300px" width="380px">
            <figcaption>
              <h3>{{$cours->nom}}</h3>
              <p>{{$cours->description}}</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        
          @endif
          
          @endforeach
          <a href="{{route('cours')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter touts les cours  <i class="fa fa-arrow-right"></i></button> </a>
        </div>
      </div>
    </div>
  </section>


  <!--/ Cours en ligne-->

  <!--Cours Presentiel-->
  "<section id="coursesP" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours Présentiel</h2>
          <p>Les cours disponible dans Mirage Group.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>

    @php($count=0)
  @foreach($Courp as $courp)
  @if($courp->statut == 'A venir')
  @if($count < 6)
  @php($count++)
  <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
           <img src="{{ asset ('images/' . $courp->url_image)}}" height="300px" width="380px">
            <figcaption>
            <h3>{{$courp->nom}}</h3>
             <div class="readMore2"> <p>{{$courp->resumer}}</div>...</p>
            </figcaption>
            <a href="{{route('presentielcours',$courp->id)}}"></a>
          </figure>
        </div>
          @endif
          @endif
          @endforeach
          <a href="{{route('coursp')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter touts les cours  <i class="fa fa-arrow-right"></i></button> </a>
        </div>
      </div>
    </div>
  </section>


  <!--/ Cours Presentiel-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>87%</h3>
              <p>Oui!!</p>
              <img src="{{ asset('Front/img')}}/smile.png" alt="" />
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>10%</h3>
              <p>Oui Non!!</p>
              <img src="{{ asset('Front/img')}}/smile1.png" alt="" />
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>3%</h3>
              <p>Non!!</p>
              <img src="{{ asset('Front/img')}}/smile2.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> L’enquête de satisfaction</h3>
              <h4 class="sm-txt">Centre de formation Mirage Groupe</h4>
            </hgroup>
            <p class="det-p">Notre site internet est bien plus qu’une interface web entre nos clients et nous : c’est un outil essentiel à la relation client et un vecteur de l’expérience client. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Sécurité et domotique        </h2>
          <p>Intégrateur de solutions de sécurité et d’automatisation pour le résidentiel, </br> le tertiaire et l’industrie.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">

            </div>
            <div class="icon-text">
                <img src="{{ asset('Front/img')}}/eclairagee.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
            </div>
            <div class="icon-text">
                <img src="{{ asset('Front/img')}}/alarme.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
            </div>
            <div class="icon-text">
                <img src="{{ asset('Front/img')}}/camera.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--projet f'in d'étude-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Projet de Fin d'Études</h2>
          <p>Les projet de fin d'études proposée par  mirage Group</p>
          <hr class="bottom-line">
        </div>.
        @php($count=0)
        @foreach($projet as $projets)
        @if($count < 3)
        @php($count++)
        <!--un projet-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
            <img src="{{ asset ('images/' . $projets->url_image)}}"class="pm-staff-profile-image"  alt="PFE" class="img-thumbnail img-circle" />
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">{{$projets->titre}}</p>

              <div class="readMore"><p  >{{$projets->description}} </p></div>

            </div>
          </div>
        </div>
        @endif
        @endforeach
        <!--fin d'un projet-->
              <a href="{{route('projets')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
                Consulter touts les projets  <i class="fa fa-arrow-right"></i></button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

<!--Postuler-->
<section id="postuler" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Postuler Maintenant</h2>
          <p> EN TRAIN DE CHERCHER DU TRAVAIL ? 
          <br/>Déposer vos Cvs ici</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>

    <div class="container">

    <form action="/AdminDashboard/Candidat" method="POST" enctype="multipart/form-data"  id="loginForm">
        @csrf
        <div class="col-md-6 col-sm-6 col-xs-12 left">

            <div class="form-group">
              <input type="text" name="nom" class="form-control form" id="name" placeholder="Nom" required />

            </div>

            <div class="form-group">
              <select name="pays" class="form-control form" id="pays" >
                <option value="Tunisie" selected="selected">Tunisie </option>

                <option value="Afghanistan">Afghanistan </option>
                <option value="Afrique_Centrale">Afrique_Centrale </option>
                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                <option value="Albanie">Albanie </option>
                <option value="Algerie">Algerie </option>
                <option value="Allemagne">Allemagne </option>
                <option value="Andorre">Andorre </option>
                <option value="Angola">Angola </option>
                <option value="Anguilla">Anguilla </option>
                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                <option value="Argentine">Argentine </option>
                <option value="Armenie">Armenie </option>
                <option value="Australie">Australie </option>
                <option value="Autriche">Autriche </option>
                <option value="Azerbaidjan">Azerbaidjan </option>

                <option value="Bahamas">Bahamas </option>
                <option value="Bangladesh">Bangladesh </option>
                <option value="Barbade">Barbade </option>
                <option value="Bahrein">Bahrein </option>
                <option value="Belgique">Belgique </option>
                <option value="Belize">Belize </option>
                <option value="Benin">Benin </option>
                <option value="Bermudes">Bermudes </option>
                <option value="Bielorussie">Bielorussie </option>
                <option value="Bolivie">Bolivie </option>
                <option value="Botswana">Botswana </option>
                <option value="Bhoutan">Bhoutan </option>
                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                <option value="Bresil">Bresil </option>
                <option value="Brunei">Brunei </option>
                <option value="Bulgarie">Bulgarie </option>
                <option value="Burkina_Faso">Burkina_Faso </option>
                <option value="Burundi">Burundi </option>

                <option value="Caiman">Caiman </option>
                <option value="Cambodge">Cambodge </option>
                <option value="Cameroun">Cameroun </option>
                <option value="Canada">Canada </option>
                <option value="Canaries">Canaries </option>
                <option value="Cap_vert">Cap_Vert </option>
                <option value="Chili">Chili </option>
                <option value="Chine">Chine </option>
                <option value="Chypre">Chypre </option>
                <option value="Colombie">Colombie </option>
                <option value="Comores">Colombie </option>
                <option value="Congo">Congo </option>
                <option value="Congo_democratique">Congo_democratique </option>
                <option value="Cook">Cook </option>
                <option value="Coree_du_Nord">Coree_du_Nord </option>
                <option value="Coree_du_Sud">Coree_du_Sud </option>
                <option value="Costa_Rica">Costa_Rica </option>
                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                <option value="Croatie">Croatie </option>
                <option value="Cuba">Cuba </option>

                <option value="Danemark">Danemark </option>
                <option value="Djibouti">Djibouti </option>
                <option value="Dominique">Dominique </option>

                <option value="Egypte">Egypte </option>
                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                <option value="Equateur">Equateur </option>
                <option value="Erythree">Erythree </option>
                <option value="Espagne">Espagne </option>
                <option value="Estonie">Estonie </option>
                <option value="Etats_Unis">Etats_Unis </option>
                <option value="Ethiopie">Ethiopie </option>

                <option value="France">France </option>
                <option value="Falkland">Falkland </option>
                <option value="Feroe">Feroe </option>
                <option value="Fidji">Fidji </option>
                <option value="Finlande">Finlande </option>
                <option value="France">France </option>

                <option value="Gabon">Gabon </option>
                <option value="Gambie">Gambie </option>
                <option value="Georgie">Georgie </option>
                <option value="Ghana">Ghana </option>
                <option value="Gibraltar">Gibraltar </option>
                <option value="Grece">Grece </option>
                <option value="Grenade">Grenade </option>
                <option value="Groenland">Groenland </option>
                <option value="Guadeloupe">Guadeloupe </option>
                <option value="Guam">Guam </option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernesey">Guernesey </option>
                <option value="Guinee">Guinee </option>
                <option value="Guinee_Bissau">Guinee_Bissau </option>
                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                <option value="Guyana">Guyana </option>
                <option value="Guyane_Francaise ">Guyane_Francaise </option>

                <option value="Haiti">Haiti </option>
                <option value="Hawaii">Hawaii </option>
                <option value="Honduras">Honduras </option>
                <option value="Hong_Kong">Hong_Kong </option>
                <option value="Hongrie">Hongrie </option>

                <option value="Inde">Inde </option>
                <option value="Indonesie">Indonesie </option>
                <option value="Iran">Iran </option>
                <option value="Iraq">Iraq </option>
                <option value="Irlande">Irlande </option>
                <option value="Islande">Islande </option>
                <option value="Israel">Israel </option>
                <option value="Italie">italie </option>

                <option value="Jamaique">Jamaique </option>
                <option value="Jan Mayen">Jan Mayen </option>
                <option value="Japon">Japon </option>
                <option value="Jersey">Jersey </option>
                <option value="Jordanie">Jordanie </option>

                <option value="Kazakhstan">Kazakhstan </option>
                <option value="Kenya">Kenya </option>
                <option value="Kirghizstan">Kirghizistan </option>
                <option value="Kiribati">Kiribati </option>
                <option value="Koweit">Koweit </option>

                <option value="Laos">Laos </option>
                <option value="Lesotho">Lesotho </option>
                <option value="Lettonie">Lettonie </option>
                <option value="Liban">Liban </option>
                <option value="Liberia">Liberia </option>
                <option value="Liechtenstein">Liechtenstein </option>
                <option value="Lituanie">Lituanie </option>
                <option value="Luxembourg">Luxembourg </option>
                <option value="Lybie">Lybie </option>

                <option value="Macao">Macao </option>
                <option value="Macedoine">Macedoine </option>
                <option value="Madagascar">Madagascar </option>
                <option value="Madère">Madère </option>
                <option value="Malaisie">Malaisie </option>
                <option value="Malawi">Malawi </option>
                <option value="Maldives">Maldives </option>
                <option value="Mali">Mali </option>
                <option value="Malte">Malte </option>
                <option value="Man">Man </option>
                <option value="Mariannes du Nord">Mariannes du Nord </option>
                <option value="Maroc">Maroc </option>
                <option value="Marshall">Marshall </option>
                <option value="Martinique">Martinique </option>
                <option value="Maurice">Maurice </option>
                <option value="Mauritanie">Mauritanie </option>
                <option value="Mayotte">Mayotte </option>
                <option value="Mexique">Mexique </option>
                <option value="Micronesie">Micronesie </option>
                <option value="Midway">Midway </option>
                <option value="Moldavie">Moldavie </option>
                <option value="Monaco">Monaco </option>
                <option value="Mongolie">Mongolie </option>
                <option value="Montserrat">Montserrat </option>
                <option value="Mozambique">Mozambique </option>

                <option value="Namibie">Namibie </option>
                <option value="Nauru">Nauru </option>
                <option value="Nepal">Nepal </option>
                <option value="Nicaragua">Nicaragua </option>
                <option value="Niger">Niger </option>
                <option value="Nigeria">Nigeria </option>
                <option value="Niue">Niue </option>
                <option value="Norfolk">Norfolk </option>
                <option value="Norvege">Norvege </option>
                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                <option value="Oman">Oman </option>
                <option value="Ouganda">Ouganda </option>
                <option value="Ouzbekistan">Ouzbekistan </option>

                <option value="Pakistan">Pakistan </option>
                <option value="Palau">Palau </option>
                <option value="Palestine">Palestine </option>
                <option value="Panama">Panama </option>
                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                <option value="Paraguay">Paraguay </option>
                <option value="Pays_Bas">Pays_Bas </option>
                <option value="Perou">Perou </option>
                <option value="Philippines">Philippines </option>
                <option value="Pologne">Pologne </option>
                <option value="Polynesie">Polynesie </option>
                <option value="Porto_Rico">Porto_Rico </option>
                <option value="Portugal">Portugal </option>

                <option value="Qatar">Qatar </option>

                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                <option value="Republique_Tcheque">Republique_Tcheque </option>
                <option value="Reunion">Reunion </option>
                <option value="Roumanie">Roumanie </option>
                <option value="Royaume_Uni">Royaume_Uni </option>
                <option value="Russie">Russie </option>
                <option value="Rwanda">Rwanda </option>

                <option value="Sahara Occidental">Sahara Occidental </option>
                <option value="Sainte_Lucie">Sainte_Lucie </option>
                <option value="Saint_Marin">Saint_Marin </option>
                <option value="Salomon">Salomon </option>
                <option value="Salvador">Salvador </option>
                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                <option value="Samoa_Americaine">Samoa_Americaine </option>
                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                <option value="Senegal">Senegal </option>
                <option value="Seychelles">Seychelles </option>
                <option value="Sierra Leone">Sierra Leone </option>
                <option value="Singapour">Singapour </option>
                <option value="Slovaquie">Slovaquie </option>
                <option value="Slovenie">Slovenie</option>
                <option value="Somalie">Somalie </option>
                <option value="Soudan">Soudan </option>
                <option value="Sri_Lanka">Sri_Lanka </option>
                <option value="Suede">Suede </option>
                <option value="Suisse">Suisse </option>
                <option value="Surinam">Surinam </option>
                <option value="Swaziland">Swaziland </option>
                <option value="Syrie">Syrie </option>

                <option value="Tadjikistan">Tadjikistan </option>
                <option value="Taiwan">Taiwan </option>
                <option value="Tonga">Tonga </option>
                <option value="Tanzanie">Tanzanie </option>
                <option value="Tchad">Tchad </option>
                <option value="Thailande">Thailande </option>
                <option value="Tibet">Tibet </option>
                <option value="Timor_Oriental">Timor_Oriental </option>
                <option value="Togo">Togo </option>
                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                <option value="Tristan da cunha">Tristan de cuncha </option>

                <option value="Turkmenistan">Turmenistan </option>
                <option value="Turquie">Turquie </option>

                <option value="Ukraine">Ukraine </option>
                <option value="Uruguay">Uruguay </option>

                <option value="Vanuatu">Vanuatu </option>
                <option value="Vatican">Vatican </option>
                <option value="Venezuela">Venezuela </option>
                <option value="Vierges_Americaines">Vierges_Americaines </option>
                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                <option value="Vietnam">Vietnam </option>

                <option value="Wake">Wake </option>
                <option value="Wallis et Futuma">Wallis et Futuma </option>

                <option value="Yemen">Yemen </option>
                <option value="Yougoslavie">Yougoslavie </option>

                <option value="Zambie">Zambie </option>
                <option value="Zimbabwe">Zimbabwe </option>

                </select>

            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="mail" id="email" placeholder="Email"  required/>

            </div>

            <div class="form-group">
              <input type="tel" class="form-control" name="numero" id="tel" placeholder="numéro télephone"   required/>

            </div>


          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
              <br> <br>
                <div class="form-group">
                  <label style=color:black;>Ajouter votre CV </label>
                  <input type="file" class="form-control" name="cv" id="cv" accept = "application/pdf"  required/>

                </div>
          </div>
    </tr>

          <div class="col-xs-12">
            <!-- Button -->

            <button type="submit" id="submit"  class="form contact-form-button light-form-button oswald light">Postuler</button>
          </div>
        </form>

          </div>

    </div>
        </div>
      </form>
    </div>

  </section>

  <!--/ Postuler-->

  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Contactez‑nous</h2>
          <p>VOUS SOUHAITEZ NOUS CONTACTER ? <br>Remplissez un formulaire reprenant les détails de celui‑ci.</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="/AdminDashboard/Message" method="POST" enctype="multipart/form-data"  id="loginForm">

          @csrf
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="nom" class="form-control form"  id="name" placeholder="Nom & Prénom"  required />

              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="mail" id="email"  placeholder="Email" required />

              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="sujet" id="subject"  placeholder="Sujet" required />

              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5"  placeholder="Message" required></textarea>

              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Envoyer Message</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->

  @endsection




