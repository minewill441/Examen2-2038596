<div>
    <?php
    if(is_404()):
        get_404_template();
    elseif ( is_front_page() ):
        $postes = get_posts( array( 'post_type' => 'post' ) );
        if ( ! empty( $postes ) ):
            echo '<div class="contenuprincipal">
                    <hr class="divider">
                    <h1 id="titreh1" class="text-center">Formation PUB020&nbsp;: WordPress, 2023</h1>
                    <hr class="divider bas">
                    <div class="contenu">
                    <div>
                    <div class="boutonshaut">
                        <div class="float-left">
                        </div>
                        <div class="float-right">
                            <a id="developperreduire" class="btn btn-secondary" role="button" data-developper="Tout développer" data-reduire="Tout réduire">Tout développer</a>
                        </div>
                    </div>
                <div class="push"></div>
                    </div>

            <div class="ui-sortable">';
            foreach ( $postes as $post ):
                echo '<div class="card border-bottom-0" id="dragchapitre_2990">
                        <div class="card-header" id="chapitre-choisir_les_outils_pour_developper_un_site_wordpress">
                            <a data-toggle="collapse" href="#fichesduchapitre-choisir_les_outils_pour_developper_un_site_wordpress" class="" aria-expanded="true">
                                <span class="titrealigneboutons">'. $post->post_title .'</span>
                            </a>
                            <div class="float-right boutonsalignes"></div>
                        </div>
                        <div class="collapse show" aria-expanded="false" id="fichesduchapitre-choisir_les_outils_pour_developper_un_site_wordpress" style="">';
                if ($post->comment_count > 0):
                    $comments = get_comments( array( 'post_id' => $post->ID ) );
                    echo'<div class="card-body aucune-marge-haut-bas listefichesajax" id="fichesduchapitre-2990" data-id="2990">
                            <ul class="list-group list-group-flush">';

                    foreach ($comments as $comment):
                        echo '<li class="list-group-item">
                                <a href="https://apical.xyz/fiches/choisir_les_outils_pour_developper_un_site_wordpress/Choisir_un_IDE_pour_coder_en_PHP">' . $comment->comment_content . '</a>
                              </li>';
                    endforeach;
                    echo '</ul>
                        </div>
                        </div>
                        </div>';
                else:
                echo '</div>
                    </div>
                    </div>
                    </div>';
                endif;
            endforeach;
            echo '</div>
                    </div>';
        endif;
    else:
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</div>
