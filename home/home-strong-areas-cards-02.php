<?php
require_once 'db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

$stmt = $pdo->query('
SELECT * 
FROM strengths
ORDER BY sort_order ASC;');
$strengths = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

                        <?php foreach ($strengths as $str): ?>

<div class="col col-12 col-xl-6 col-lg-12 last-paragraph-no-margin grid-card-area">
  <div class="topic-cards">
      <div class="margin-10px-bottom card-number">[<?= $str['short_text'] ?>]</div>
        <!-- <i class="icon-desktop icon-extra-medium text-deep-pink margin-20px-bottom"></i> -->
         <div>
            <h6 class="font-weight-700 alt-font-2 margin-10px-bottom padding-50px-right"><?= $str['title'] ?></h6>
            <p><?= $str['long_text'] ?></p>
         </div>
    </div>
</div>


                        <?php endforeach; ?>
