<?php
    include "../parts/head.php";
    include "../parts/Parsedown.php";
    $parsedown = new Parsedown();
    head('announcements');
    include '../db.php';
    $sql = "SELECT * FROM announcements";
    $result = mysqli_query($conn, $sql);
?>
    <section id="main" class="wrapper">
        <div class="inner">
            <div class="content">
                <header>
                    <h2>announcements</h2>
                </header>
                <?php
                foreach($result as $row){
                    if(isset($row['attachment']) && $row['attachment'] != ""){
                        echo '<div class="row">';
                        echo '<div class="col-8 col-12-medium">'.PHP_EOL;
                    }
                    echo $parsedown->text($row['announcement']).PHP_EOL;
                    if(isset($row['attachment']) && $row['attachment'] != ""){
                        echo '</div>';
                        echo '<div class="col-4 col-12-medium"><img src="';
                        echo $row['attachment'];
                        echo '" style="max-width: 300px;"></p>'.PHP_EOL;
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '<hr>'.PHP_EOL;
                }
                ?>
            </div>
        </div>
        <div class="inner">
            <div class="content">
                <header>
                    <h2>announcements</h2>
                </header>
                <?php
                foreach($result as $row){
                    if(isset($row['attachment']) && $row['attachment'] != ""){
                        echo '<div class="row">';
                        echo '<div class="col-8 col-12-medium">'.PHP_EOL;
                    }
                    echo $parsedown->text($row['announcement']).PHP_EOL;
                    if(isset($row['attachment']) && $row['attachment'] != ""){
                        echo '</div>';
                        echo '<div class="col-4 col-12-medium"><img src="';
                        echo $row['attachment'];
                        echo '" style="max-width: 300px;"></p>'.PHP_EOL;
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '<hr>'.PHP_EOL;
                }
                ?>
            </div>
        </div>
    </section>
    <?php include "../parts/footer.php";?>
</body></html>