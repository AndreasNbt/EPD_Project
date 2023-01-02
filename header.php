<div class="flex header teal big-border-bottom"> 
    <a href="home_page.php"><i class="fa-sharp fa-2xl fa-solid fa-house header-icon pad-left teal"></i></a>
    <?php echo"<h1> $page_title </h1>" ?> 
    <div class="flex">             
        <?php
            session_start();
            if (isset($_SESSION['role'])) {
                if ($_SESSION['role'] === "Tutor") {
                    echo "<a href='tutor_users_list.php' > <i class='fa-solid fa-2xl teal fa-users header-icon pad-right'></i></a>";
                }
            }
        ?>
        <a href="PHP_Back_End/logout.php"><i class="fa-solid fa-2xl fa-right-from-bracket header-icon pad-right teal"></i></a>
    </div>
</div>