<div class="sidebar">
    <h3>Indira Gandhi Delhi Technical University for Women</h3>
    <div class="dashboard_sidebar_user">
        <img src="" alt="User Image">
        <span><?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?></span>
    </div>
    <ul class="menu">
        <li class="menu-item"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        <li class="menu-item"><a href="pprset.php" target="_blank">Paper Setting</a></li>
        <li class="menu-item"><a href="ppreval.php" target="_blank">Paper Evaluation</a></li>
        <li class="menu-item">
                Practical Exam Conduction 
                <button class="dropdown-btn" onclick="toggleDropdown()"> &#9662;</button>
                <div id="myDropdown" class="dropdown-content">
                    <ul class="submenu">
                        <li><a href="internalprac.php" target="_blank">Internal Exam</a></li>
                        <li><a href="externalprac.php" target="_blank">External Exam</a></li>
                    </ul>
                </div>
            </li>
        <li class="menu-item"><a href="#">Visiting Faculty</a></li>
    </ul>
</div>

<style>
    .dropdown-content {
            display: none;
            position: absolute;
            background-color: #2e6b28;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

    .dropdown-btn {
            background-color: #2e6b28;
            color: white;
            font-size: 15px;
            display: inline;
            border: none;
            cursor: pointer;
            margin-left: 30px;
        }
    
</style>

<script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("myDropdown");
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-btn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === "block") {
                        openDropdown.style.display = "none";
                    }
                }
            }
        }
    </script>
