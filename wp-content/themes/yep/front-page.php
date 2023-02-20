<?php  
    $menuItems = getNavigationMenu(); 
    $data = getHomepageData();   
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header>
            <figure>
                <img src="wp-content/themes/yep/assets/img/Gaellan-Logo.svg">
            </figure>
            <nav>
                <ul>
                    <?php foreach($menuItems as $item) { ?>  
                        <li>  
                            <a href="<?= $item->url ?>">  
                            <?= $item->title ?>  
                            </a>  
                        </li>  
                    <?php  
                        }  
                    ?>
                </ul>
            </nav>
        </header>

        <main>
            <section>
                <h1>Yepfolio</h1>
                <h2>Développement web et mobile</h2>
            </section>
            <section id="about">  
                <h3><?= $data["a-propos"]["titre"] ?></h2>  
                    <p>  
                        <?= $data["a-propos"]["contenu"] ?>  
                    </p>  
            </section>
            <section>
                <h2>Mes derniers Projets</h2>
                <?php var_dump(getProjects($projects))?>
                    <article>
                        <h3>Application santé</h3>
                        <h4>Pharmacie de Maurepas</h4>
                    </article>
                    <article>
                        <h3>Site e-commerce</h3>
                        <h4>Librairie l'écume des jours</h4>
                    </article>
                    <article>
                        <h3>Site vitrine</h3>
                        <h4>Boulangerie Galtier</h4>
                    </article>
                    <article>
                        <h3>Site institutionnel</h3>
                        <h4>Mairie de Ploutruc</h4>
                    </article>
                    <article>
                        <h3>Site promotionnel</h3>
                        <h4>Festival des choses</h4>
                    </article>
            </section>
        </main>

        <footer>
            <h3>Me contacter</h3>
            <form>

                <fieldset>
                    <label>Prénom + Nom *</label>
                </fieldset>
                <fieldset>
                    <input type="text" name="name">
                </fieldset>

                <fieldset>
                    <label>Email *</label>
                </fieldset>
                <fieldset>
                    <input type="text" name="email">
                </fieldset>

                <fieldset>
                    <label>Message</label>
                </fieldset>
                <fieldset>
                    <textarea type="text" name="message"></textarea>
                </fieldset>

                <input type="submit" name="contact" value="Contacter" id="contactButton">
            </form>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>