<h3><?php echo $this->title; ?></h3>
<?php if ($this->err) { ?>
    <p>
        <?php echo $this->err; ?>
    </p>
<?php } else { ?>
    <ul class="list-unstyled iconList borderList">
        <?php
        if ($this->news) {
            $i = 0;
            foreach($this->news as $news) { 
                if ($i++ >= $this->limit) 
                    break; 
                ?>
                <li><?php echo CHtml::link($news->title, $news->guid); ?></li>
            <?php
            }
        } else {
            echo '<li>No news</li>';
        } ?>
    </ul>
<?php } ?>
