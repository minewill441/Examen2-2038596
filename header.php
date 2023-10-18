<header>
    <div class="aucunepubauto">
        <div class="logo fix-menu" id="zoneentete">
            <div class="container">
                <div class="avant"></div>
                <div class="apres">
                    <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47"
                         data-horizontaloffset="0">
                        <a href="https://apical.xyz"><img
                                    src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil"
                                    title="Accueil"></a>


                        <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche"
                           data-target="#popuprecherche"><img
                                    src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche"
                                    title="Rechercher"></a>
                        <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification"
                           data-target="#popupauthentification"><img
                                    src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg"
                                    alt="Authentification" title=""></a>
                    </div>
                </div>
                <div class="centre">
                    <a href="https://apical.xyz"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg"
                                                      alt="Apical, ma plateforme d'apprentissage"></a>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg navbar-light py-lg-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Apical</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Basculer">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">

                    <ul class="navbar-nav mx-auto">
                        <?php
                        $pages = get_pages();
                        foreach ( $pages as $page ) {
                            $link = 1;
                            echo( '<li class="nav-item px-lg-4">

                    <a class="navpage nav-link text-uppercase text-expanded " href="' . get_page_link( $page->ID ) . '">' . $page->post_title . '</a>
                </li>' );
                        } ?>
                    </ul>


                    <div class="iconespourmobile">
                        <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47"
                             data-horizontaloffset="0">
                            <a href="https://apical.xyz"><img
                                        src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil"
                                        title="Accueil"></a>


                            <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche"
                               data-target="#popuprecherche"><img
                                        src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg"
                                        alt="Recherche" title="Rechercher"></a>
                            <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification"
                               data-target="#popupauthentification"><img
                                        src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg"
                                        alt="Authentification" title=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </nav>


    </div>
</header>

