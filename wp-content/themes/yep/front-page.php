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
            <section id="projects">
                <h2>Mes derniers Projets</h2>
                
                <?php foreach($data['projets'] as $projet){ ?>
                    <article data-img="<?= $projet["image"]["url"] ?>">
                        <h3><?= $projet['category']?></h3>
                        <h4><?= $projet['data']->post_title ?></h4>
                    </article>
                <?php }?>
            </section>
        </main>

        <footer>
            <section id="contact">  
                <h3>Me contacter</h3>  
                <?php echo do_shortcode("[contact-form-7 id='83' title='Formulaire de Contact']"); ?>  
            </section>
        </footer>
        
        <?php wp_footer(); ?>
        <script type ="text/javascript" src="<?php echo get_template_directory_uri(); ?>/index.js"></script>
    </body>
</html>