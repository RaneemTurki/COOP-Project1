<?php
session_start();
require_once 'db_connect.php';

// Fake role check (replace this with real query logic)
$userName = "مشاعل الخالدي";
$userRole = 'employee'; // or 'manager'

// Redirect unauthorized users
if (!isset($_SESSION['user_id']) || $userRole !== 'employee') {
    header('Location: unauthorized.php');
    exit;
}

// Sample data for vacations (replace with database query)
$vacations = [
    ['status' => 'مقبول', 'color' => 'green'],
    ['status' => 'مرفوض', 'color' => 'red'],
    ['status' => 'معلق', 'color' => 'gray']
];

include 'header.php';
?>

<main class="vacation-page">
    <div class="vacation-container">
        <div class="vacation-left">
            <h3>الإجازات السابقة</h3>
            <?php foreach ($vacations as $vac): ?>
                <div class="vacation-card">
                    <span class="status-dot" style="background-color: <?= $vac['color'] ?>;"></span>
                    <span><?= $vac['status'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="vacation-right">
            <a href="new-vacation.php" class="new-vacation-link">
                طلب إجازة جديدة <span class="plus-icon">+</span>
            </a>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
