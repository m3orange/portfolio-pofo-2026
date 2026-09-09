<?php require_once( '../../config.php' ) ?>

<?php require_once '../../db-config.php';

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);

// Project info
$stmt = $pdo->prepare('SELECT * FROM projects WHERE id = ?');
$stmt->execute([3]);
$project = $stmt->fetch(PDO::FETCH_ASSOC);

// Tags (decoded from the LONGTEXT JSON cell)
$tags = json_decode($project['tags'], true);
if (!is_array($tags)) {
    $tags = []; // fallback if the cell is empty or malformed
}

// Assets by type
function getAssets($pdo, $project_id, $type) {
    $stmt = $pdo->prepare('SELECT * FROM project_assets WHERE project_id = ? AND display_type = ? ORDER BY sort_order ASC');
    $stmt->execute([$project_id, $type]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$hero     = getAssets($pdo, 3, 'hero');
$grid     = getAssets($pdo, 3, 'grid');
$single   = getAssets($pdo, 3, 'single');
$lightbox = getAssets($pdo, 3, 'lightbox');
$slideshow = getAssets($pdo, 3, 'slideshow');
?>

<?php include ROOT_PATH . 'includes/header.php'; ?>


<body class="admin">


     <?php include ROOT_PATH . 'includes/global-nav.php'; ?>

     <section id="block-intro-slider" class="p-0">
        Null
    </section>
    
    <?php include ROOT_PATH . 'projects/admin/video-embed-var-02.php'; ?>

</body>

</html>