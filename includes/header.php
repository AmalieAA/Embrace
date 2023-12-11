<?php
if(isset($db) == false) {
    require "settings/init.php";
}

$headerUsers = $db->sql("SELECT * FROM user WHERE userId = " . $_COOKIE["userId"]);

if(count($headerUsers) > 0) {
    $headerUser = $db->sql("SELECT * FROM user WHERE userId = " . $_COOKIE["userId"])[0];
}

?>

<header role="banner" class="py-2">
        <div class="d-flex justify-content-around align-items-center text-center fs-4 p-1">
            <div>
                <a onclick="history.back()">
                    <i class="fa-solid fa-chevron-left text-dark-green"></i>
                </a>
            </div>

            <div>
                <img id="Logo" class="img-fluid" src="images/logo.png" />
            </div>

            <div>
            <?php if(isset($headerUser)) { ?>
                <button class="btn-no-styling" type="button" data-bs-toggle="offcanvas" data-bs-target="#AppSettings">
                    <i class="fa-solid fa-ellipsis text-dark-green"></i>
                </button>
            <?php } ?>
            </div>
        </div>
</header>


<?php if(isset($headerUser)) { ?>
<div class="offcanvas offcanvas-end" tabindex="-1" id="AppSettings" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <img width="64" class="img-fluid rounded-circle" src="uploads/<?php echo $headerUser->profileImage ?>" />
            Hej, <?php echo $headerUser->firstname ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <div>
            <label for="ThemeSelector">Change theme</label>
            <select id="ThemeSelector" class="form-select">
                <option value="" selected>Default</option>
                <option value="GreenBlind">Grønblind</option>
                <option value="RedBlind">Rødblind</option>
            </select>
        </div>
        <div class="flex-grow-1"></div>
        <div class="my-2">
            <a class="btn btn-dark-green w-100" href="index.php">
                Logud
            </a>
        </div>
    </div>
</div>
<?php } ?>