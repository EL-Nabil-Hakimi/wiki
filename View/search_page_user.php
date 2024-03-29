<div class="grid-sizer"></div>

<?php   foreach ($results As $result): ?>

        <article class="brick entry">

            <div class="entry__thumb">
            <a href="?route=info_page_user&id=<?= $result['id_wiki'] ?>" class="thumb-link">
                    <img src="<?= $result["image"] ?>" alt="">
                </a>
            </div> <!-- end entry__thumb -->

            <div class="entry__text">
                <div class="entry__header">
                    <div class="entry__meta">
                        <span class="cat-links">
                            <a >Created By</a>
                        </span>
                        <span class="byline">
                            By:
                            <a href="#0"><?= $result['name'] ?></a>
                        </span>
                    </div>
                
                    <h1 class="entry__title"><a ><?= $result['title'] ?></a></h1>
                </div>
                <div class="entry__excerpt">
                    <p>
                    <?= $result['description'] ?>
                    </p>
                </div>
                <div class="entry__meta">
                    
                    <span class="byline">
                        At :
                        <a href="#0"><?= $result['date'] ?></a>
                    </span>
                </div>
                <a class="entry__more-link" href="#0">Read More</a>
            </div> <!-- end entry__text -->

            
        </article> <!-- end article -->
<?php endforeach ?>