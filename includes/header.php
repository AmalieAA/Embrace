<?php
if(isset($db) == false) {
    require "settings/init.php";
}

if(!empty($_COOKIE["userId"])) {
    $headerUsers = $db->sql("SELECT * FROM user WHERE userId = " . $_COOKIE["userId"]);

    if (count($headerUsers) > 0) {
        $headerUser = $headerUsers[0];
    }
}
?>

<header role="banner" class="py-2">
        <div class="row g-0 align-items-center text-center fs-4 p-1">
            <div class="col">
                <a onclick="history.back()">
                    <i class="fa-solid fa-chevron-left text-dark-green"></i>
                </a>
            </div>

            <div class="col">
                <img id="Logo" class="img-fluid" src="images/logo.png" alt="Logo af embrace" />
            </div>

            <div class="col">
            <?php if(isset($headerUser)) { ?>
                <button class="btn-no-styling" type="button" data-bs-toggle="offcanvas" data-bs-target="#AppSettings">
                    <i class="fa-solid fa-ellipsis text-dark-green"></i>
                </button>
            <?php } ?>
            </div>
        </div>
</header>


<?php if(isset($headerUser)) { ?>
<div class="offcanvas offcanvas-end bg-light-green" tabindex="-1" id="AppSettings" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <img width="64" class="img-fluid rounded-circle" src="uploads/<?php echo $headerUser->profileImage ?>" />
            Hej, <?php echo $headerUser->firstname ?>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>



    <div class="offcanvas-body d-flex flex-column">
        <div  class="my-2">
            <label for="ThemeSelector">Skift farvetema</label>
            <select id="ThemeSelector" class="form-select">
                <option value="">Standard</option>
                <option value="GreenRedBlind">Grøn/rød blind</option>
                <option value="BlueYellowBlind">Blå/gul blind</option>
            </select>
        </div>


            <div class="my-2">
                <label for="FontSelector">Skift skriftype</label>
                <select id="FontSelector" class="form-select">
                    <option value="">Standard</option>
                    <option value="comic-sans">Comic sans</option>
                </select>
            </div>



        <div class="flex-grow-1"></div>
        <div class="my-2">
            <a class="btn btn-dark-green w-100" href="index.php">
                Log ud
            </a>
        </div>
    </div>
</div>
<?php } ?>