<div class="sidebar">
    <h3>Indira Gandhi Delhi Technical University for Women</h3>
    <div class="dashboard_sidebar_user">
        <img src="" alt="User Image">
        <span><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></span>
    </div>
    <ul class="menu">
        <li class="menu-item"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="menu-item"><a href="pprset.php" target="_blank">Paper Setting</a></li>
        <li class="menu-item"><a href="#">Answer Sheet Evaluation</a></li>
        <li class="menu-item">
            <a href="#">Practical Exam Conduction </i></a>
            <ul class="submenu">
                <li><a href="internalprac.php" target="_blank">Internal Exam</a></li>
                <li><a href="externalprac.php" target="_blank">External Exam</a></li>
            </ul>
        </li>
        <li class="menu-item"><a href="#">Visiting Faculty</a></li>
    </ul>
</div>
