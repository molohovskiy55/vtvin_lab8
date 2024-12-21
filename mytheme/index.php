


<?php get_header(); ?>
    
   <nav class="navigation">
            <a class="anav" href="https://ru.wikipedia.org/wiki/Мальдивы">Мальдивы</a>
            <a class="anav" href="https://ru.wikipedia.org/wiki/Бора-Бора">Бора-Бора</a>
   </nav>

    <main>
        <div class="osnova">
            <div class="imgg">
       <img class="main-img" src="http://site/wp-content/uploads/2024/12/maldives-1-scaled.jpg">
       <img class="main-img" src="http://site/wp-content/uploads/2024/12/borabora.jpg">
       </div>
       <div class="txt">
       <div class="text">
           <span>
              <h3>Почему нужно отдыхать?</h3>
              Польза — прежде всего косметическая. Романтическая прогулка вдоль полосы прибоя может заменить поход к специалисту по педикюру.
           </span>
       </div>
       <div class="text">
        <span>
           <h3>Мальдивы</h3>
           Отдых на Мальдивах подходит прежде всего для тех, кто устал от городской суеты и мечтает об уюте, красоте и покое. Здесь действительно можно полностью отключиться от проблем в одном из роскошных 5-звездочных бунгало.
        </span>
         </div>
     <div class="text">
        <span>
           <h3>Бора-Бора</h3>
           Остров Бора-Бора имеет широкую известность, однако среди русских туристов, мало кто был там, зато практически все слышали о том, что где-то далеко есть такое райское место на Земле.
        </span>
     </div>
    </div>
        </div>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="qazx"><?php the_title(); ?></p>
     <?php endwhile; else: ?>
        <p class="qazx"> Записей нет.</p>
      <?php endif; ?>

    </main>
    <div class="topfooter">
    </div>


    <?php get_footer(); ?>