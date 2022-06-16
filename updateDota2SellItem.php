<?php 
include 'connectDatabase.php';
session_start();
if(!isset($_SESSION['username'])){
  header("Location:index.php");
}
$useruserName = $_SESSION['username'];

$message = "";
$messageIcon = "";
$messageemailAddress = "";

$updateDota2SellItemID = $_GET['updateDota2SellItemID'];
$sql = "SELECT * FROM dota2sellitem WHERE DOTA2_SELLITEMID = $updateDota2SellItemID";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$dbdota2sellitemName = $row['DOTA2_SELLITEMNAME'];
$dbdota2sellitemHero = $row['DOTA2_SELLITEMHERO'];
$dbdota2sellitemRarity = $row['DOTA2_SELLITEMRARITY'];
$dbdota2sellitemIMG = $row['DOTA2_SELLITEMIMG'];
$dbdota2sellitemPrice = $row['DOTA2_SELLITEMPRICE']; 

if(isset($_POST['edit'])){

    $dota2sellitemName = mysqli_real_escape_string($conn,$_POST['dota2sellitemName']);
    $dota2sellitemHero = mysqli_real_escape_string($conn,$_POST['dota2sellitemHero']);
    $dota2sellitemRarity = mysqli_real_escape_string($conn,$_POST['dota2sellitemRarity']);
    $dota2sellitemPrice = mysqli_real_escape_string($conn,$_POST['dota2sellitemPrice']);

    //if the user update the text only not inlcude the image 
    if($_FILES['dota2sellitemIMG']['name'] == ""){

        $sql = "UPDATE dota2sellitem SET DOTA2_SELLITEMNAME = '$dota2sellitemName',
        DOTA2_SELLITEMHERO = '$dota2sellitemHero',
        DOTA2_SELLITEMRARITY = '$dota2sellitemRarity',
        DOTA2_SELLITEMPRICE = '$dota2sellitemPrice' WHERE DOTA2_SELLITEMID = $updateDota2SellItemID";

        $results=mysqli_query($conn,$sql);
        if($results){
            $messages = "Successfully updated Dota 2 Sell Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
        }else{
            $messageFail = "Unsuccessful update Dota 2 sell item please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
        //when user upload image to update         
    }else{

        $imageName = $_FILES['dota2sellitemIMG']['name'];
        $imageType = $_FILES['dota2sellitemIMG']['type'];
        $imageTempLoc = $_FILES['dota2sellitemIMG']['tmp_name'];
        $imageSize = $_FILES['dota2sellitemIMG']['size'];

        //file path
        //to store images to the folder
        $fileIMG = addslashes(file_get_contents($_FILES['dota2sellitemIMG']['tmp_name']));
        $img_ex = pathinfo($imageName, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc; 
        $img_upload_path = 'dota2IMGDb/'.$new_img_name;
        move_uploaded_file($imageTempLoc,$img_upload_path);

        $sql = "UPDATE dota2sellitem SET DOTA2_SELLITEMNAME = '$dota2sellitemName',
        DOTA2_SELLITEMHERO = '$dota2sellitemHero',
        DOTA2_SELLITEMRARITY = '$dota2sellitemRarity',    
        DOTA2_SELLITEMIMG  = '$fileIMG',
        DOTA2_SELLITEMPRICE = '$dota2sellitemPrice' WHERE DOTA2_SELLITEMID = $updateDota2SellItemID";

        $results=mysqli_query($conn,$sql);

        if($results){
            $messages = "Successfully updated Dota 2 Sell Item";
            echo "<script type='text/javascript'>alert('$messages');window.location.replace('myinventorydota2.php');</script>";
        }else{
            $messageFail = "Unsuccessful Dota 2 sell item please try again";
            echo "<script type='text/javascript'>alert('$messageFail');</script>";
        }
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Dota 2 Sell Item</title>
        <link rel="stylesheet" href="css1/createaccountstyle.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>`
    </head>

    <body>

        <div class="wrapper">

            <div class="title">
                <img src = "image/dota-2.png" width="50" height="50" alt = "Dota 2" >
                Update Dota 2 Sell Item
                <?php echo $message; ?>
            </div>

            <form method = "post" enctype="multipart/form-data">
                <div class = "form">
                
                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Item Name</b></label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Item Name here" name="dota2sellitemName" autocomplete="off" value="<?php echo $dbdota2sellitemName;?>" required>
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"><b>Hero</b></label>
                        <select class="form-select" aria-label="Default select example" name="dota2sellitemHero">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="ABADDON" <?= $dbdota2sellitemHero == 'ABADDON' ? 'selected="selected"':'';?>>ABADDON</option>
                            <option value="ALCHEMIST" <?= $dbdota2sellitemHero == 'ALCHEMIST' ? 'selected="selected"':'';?>>ALCHEMIST</option>
                            <option value="ANCIENT APPARITION" <?= $dbdota2sellitemHero == 'ANCIENT APPARITION' ? 'selected="selected"':'';?>>ANCIENT APPARITION</option>
                            <option value="ANTI-MAGE" <?= $dbdota2sellitemHero == 'ANTI-MAGE' ? 'selected="selected"':'';?>>ANTI-MAGE</option>
                            <option value="ARC WARDEN" <?= $dbdota2sellitemHero == 'ARC WARDEN' ? 'selected="selected"':'';?>>ARC WARDEN</option>
                            <option value="AXE" <?= $dbdota2sellitemHero == 'AXE' ? 'selected="selected"':'';?>>AXE</option>
                            <option value="BANE" <?= $dbdota2sellitemHero == 'BANE' ? 'selected="selected"':'';?>>BANE</option>
                            <option value="BATRIDER" <?= $dbdota2sellitemHero == 'BATRIDER' ? 'selected="selected"':'';?>>BATRIDER</option>
                            <option value="BEAST" <?= $dbdota2sellitemHero == 'BEAST' ? 'selected="selected"':'';?>>BEAST</option>
                            <option value="BLOODSEEKER" <?= $dbdota2sellitemHero == 'BLOODSEEKER' ? 'selected="selected"':'';?>>BLOODSEEKER</option>
                            <option value="BOUNTY HUNTER" <?= $dbdota2sellitemHero == 'BOUNTY HUNTER' ? 'selected="selected"':'';?>>BOUNTY HUNTER</option>
                            <option value="BREWMASTER" <?= $dbdota2sellitemHero == 'BREWMASTER' ? 'selected="selected"':'';?>>BREWMASTER</option>
                            <option value="BRISTLEBACK" <?= $dbdota2sellitemHero == 'BRISTLEBACK' ? 'selected="selected"':'';?>>BRISTLEBACK</option>
                            <option value="BROODMOTHER" <?= $dbdota2sellitemHero == 'BROODMOTHER' ? 'selected="selected"':'';?>>BROODMOTHER</option>
                            <option value="CENTAUR WARRUNNER" <?= $dbdota2sellitemHero == 'CENTAUR WARRUNNER' ? 'selected="selected"':'';?>>CENTAUR WARRUNNER</option>
                            <option value="CHAOS KNIGHT" <?= $dbdota2sellitemHero == 'CHAOS KNIGHT' ? 'selected="selected"':'';?>>CHAOS KNIGHT</option>
                            <option value="CHEN" <?= $dbdota2sellitemHero == 'CHEN' ? 'selected="selected"':'';?>>CHEN</option>
                            <option value="CLINKZ" <?= $dbdota2sellitemHero == 'CLINKZ' ? 'selected="selected"':'';?>>CLINKZ</option>
                            <option value="CLOCKWERK" <?= $dbdota2sellitemHero == 'CLOCKWERK' ? 'selected="selected"':'';?>>CLOCKWERK</option>
                            <option value="CRYSTAL MAIDEN" <?= $dbdota2sellitemHero == 'CRYSTAL MAIDEN' ? 'selected="selected"':'';?>>CRYSTAL MAIDEN</option>
                            <option value="DARKSEER" <?= $dbdota2sellitemHero == 'DARKSEER' ? 'selected="selected"':'';?>>DARK SEER</option>
                            <option value="DARK WILLOW" <?= $dbdota2sellitemHero == 'DARK WILLOW' ? 'selected="selected"':'';?>>DARK WILLOW</option>
                            <option value="DAWNBREAKER" <?= $dbdota2sellitemHero == 'DAWNBREAKER' ? 'selected="selected"':'';?>>DAWNBREAKER</option>
                            <option value="DAZZLE" <?= $dbdota2sellitemHero == 'DAZZLE' ? 'selected="selected"':'';?>>DAZZLE</option>
                            <option value="DEATH PROPHET" <?= $dbdota2sellitemHero == 'DEATH PROPHET' ? 'selected="selected"':'';?>>DEATH PROPHET</option>
                            <option value="DISRUPTOR" <?= $dbdota2sellitemHero == 'DISRUPTOR' ? 'selected="selected"':'';?>>DISRUPTOR</option>
                            <option value="DOOM" <?= $dbdota2sellitemHero == 'DOOM' ? 'selected="selected"':'';?>>DOOM</option>
                            <option value="DRAGON KNIGHT" <?= $dbdota2sellitemHero == 'DRAGON KNIGHT' ? 'selected="selected"':'';?>>DRAGON KNIGHT</option>
                            <option value="DROW RANGER" <?= $dbdota2sellitemHero == 'DROW RANGER' ? 'selected="selected"':'';?>>DROW RANGER</option>
                            <option value="EARTH SPIRIT" <?= $dbdota2sellitemHero == 'EARTH SPIRIT' ? 'selected="selected"':'';?>>EARTH SPIRIT</option>
                            <option value="EARTHSHAKER" <?= $dbdota2sellitemHero == 'EARTHSHAKER' ? 'selected="selected"':'';?>>EARTHSHAKER</option>
                            <option value="ELDER TITAN" <?= $dbdota2sellitemHero == 'ELDER TITAN' ? 'selected="selected"':'';?>>ELDER TITAN</option>
                            <option value="EMBER SPIRIT" <?= $dbdota2sellitemHero == 'EMBER SPIRIT' ? 'selected="selected"':'';?>>EMBER SPIRIT</option>
                            <option value="ENCHANTRESS" <?= $dbdota2sellitemHero == 'ENCHANTRESS' ? 'selected="selected"':'';?>>ENCHANTRESS</option>
                            <option value="ENIGMA" <?= $dbdota2sellitemHero == 'ENIGMA' ? 'selected="selected"':'';?>>ENIGMA</option>
                            <option value="FACELESS VOID" <?= $dbdota2sellitemHero == 'FACELESS VOID' ? 'selected="selected"':'';?>>FACELESS VOID</option>
                            <option value="GRIMSTROKE" <?= $dbdota2sellitemHero == 'GRIMSTROKE' ? 'selected="selected"':'';?>>GRIMSTROKE</option>
                            <option value="GYROCOPTER" <?= $dbdota2sellitemHero == 'GYROCOPTER' ? 'selected="selected"':'';?>>GYROPCOPTER</option>
                            <option value="HOODWINK" <?= $dbdota2sellitemHero == 'HOODWINK' ? 'selected="selected"':'';?>>HOODWINK</option>
                            <option value="HUSKAR" <?= $dbdota2sellitemHero == 'HUSKAR' ? 'selected="selected"':'';?>>HUSKAR</option>
                            <option value="INVOKER" <?= $dbdota2sellitemHero == 'INVOKER' ? 'selected="selected"':'';?>>INVOKER</option>
                            <option value="IO" <?= $dbdota2sellitemHero == 'IO' ? 'selected="selected"':'';?>>IO</option>
                            <option value="JAKIRO" <?= $dbdota2sellitemHero == 'JAKIRO' ? 'selected="selected"':'';?>>JAKIRO</option>
                            <option value="JUGGERNAUT" <?= $dbdota2sellitemHero == 'JUGGERNAUT' ? 'selected="selected"':'';?>>JUGGERNAUT</option>
                            <option value="KEEPER OF THE LIGHT" <?= $dbdota2sellitemHero == 'KEEPER OF THE LIGHT' ? 'selected="selected"':'';?>>KEEPER OF THE LIGHT</option>
                            <option value="KUNKKA" <?= $dbdota2sellitemHero == 'KUNKKA' ? 'selected="selected"':'';?>>KUNKKA</option>
                            <option value="LEGION COMMANDER" <?= $dbdota2sellitemHero == 'LEGION COMMANDER' ? 'selected="selected"':'';?>>LEGION COMMANDER</option>
                            <option value="LESHRAC" <?= $dbdota2sellitemHero == 'LESHRAC' ? 'selected="selected"':'';?>>LESHRAC</option>
                            <option value="LICH" <?= $dbdota2sellitemHero == 'LICH' ? 'selected="selected"':'';?>>LICH</option>
                            <option value="LIFESTEALER" <?= $dbdota2sellitemHero == 'LIFESTEALER' ? 'selected="selected"':'';?>>LIFESTEALER</option>
                            <option value="LINA" <?= $dbdota2sellitemHero == 'LINA' ? 'selected="selected"':'';?>>LINA</option>
                            <option value="LION" <?= $dbdota2sellitemHero == 'LION' ? 'selected="selected"':'';?>>LION</option>
                            <option value="LONE DRUID" <?= $dbdota2sellitemHero == 'LONE DRUID' ? 'selected="selected"':'';?>>LONE DRUID</option>
                            <option value="LUNA" <?= $dbdota2sellitemHero == 'LUNA' ? 'selected="selected"':'';?>>LUNA</option>
                            <option value="LYCAN" <?= $dbdota2sellitemHero == 'LYCAN' ? 'selected="selected"':'';?>>LYCAN</option>
                            <option value="MAGNUS" <?= $dbdota2sellitemHero == 'MAGNUS' ? 'selected="selected"':'';?>>MAGNUS</option>
                            <option value="MARCI" <?= $dbdota2sellitemHero == 'MARCI' ? 'selected="selected"':'';?>>MARCI</option>
                            <option value="MARS" <?= $dbdota2sellitemHero == 'MARS' ? 'selected="selected"':'';?>>MARS</option>
                            <option value="MEDUSA" <?= $dbdota2sellitemHero == 'MEDUSA' ? 'selected="selected"':'';?>>MEDUSA</option>
                            <option value="MEEPO" <?= $dbdota2sellitemHero == 'MEEPO' ? 'selected="selected"':'';?>>MEEPO</option>
                            <option value="MIRANA" <?= $dbdota2sellitemHero == 'MIRANA' ? 'selected="selected"':'';?>>MIRANA</option>
                            <option value="MONKEY KING" <?= $dbdota2sellitemHero == 'MONKEY KING' ? 'selected="selected"':'';?>>MONKEY KING</option>
                            <option value="MORPHLING" <?= $dbdota2sellitemHero == 'MORPHLING' ? 'selected="selected"':'';?>>MORPHLING</option>
                            <option value="NAGA SIREN" <?= $dbdota2sellitemHero == 'NAGA SIREN' ? 'selected="selected"':'';?>>NAGA SIREN</option>
                            <option value="NATURES SPROPHET" <?= $dbdota2sellitemHero == 'NATURES PROPHET' ? 'selected="selected"':'';?>>NATURE'S PROPHET</option>
                            <option value="NECROPHOS" <?= $dbdota2sellitemHero == 'NECROPHOS' ? 'selected="selected"':'';?>>NECROPHOS</option>
                            <option value="NIGHT STALKER" <?= $dbdota2sellitemHero == 'NIGHT STALKER' ? 'selected="selected"':'';?>>NIGHT STALKER</option>
                            <option value="NYX ASSASSIN" <?= $dbdota2sellitemHero == 'NYX ASSASSIN' ? 'selected="selected"':'';?>>NYX ASSASSIN</option>
                            <option value="OGRE MAGI" <?= $dbdota2sellitemHero == 'PGRE MAGI' ? 'selected="selected"':'';?>>OGRE MAGI</option>
                            <option value="OMNIKNIGHT" <?= $dbdota2sellitemHero == 'OMNIKNIGHT' ? 'selected="selected"':'';?>>OMNIKNIGHT</option>
                            <option value="ORACLE" <?= $dbdota2sellitemHero == 'ORACLE' ? 'selected="selected"':'';?>>ORACLE</option>
                            <option value="OUTWORLD DESTROYER" <?= $dbdota2sellitemHero == 'OUTWORLD DESTROYER' ? 'selected="selected"':'';?>>OUTWORLD DESTROYER</option>
                            <option value="PANGOLIER" <?= $dbdota2sellitemHero == 'PANGOLIER' ? 'selected="selected"':'';?>>PANGOLIER</option>
                            <option value="PHANTOM ASSASSIN" <?= $dbdota2sellitemHero == 'PHANTOM ASSASSIN' ? 'selected="selected"':'';?>>PHATOM ASSASSIN</option>
                            <option value="PHANTOM LANCER" <?= $dbdota2sellitemHero == 'PHANTOM LANCER' ? 'selected="selected"':'';?>>PHANTOM LANCER</option>
                            <option value="PHOENIX" <?= $dbdota2sellitemHero == 'PHOENIX' ? 'selected="selected"':'';?>>PHOENIX</option>
                            <option value="PRIMAL BEAST" <?= $dbdota2sellitemHero == 'PRIMAL BEAST' ? 'selected="selected"':'';?>>PRIMAL BEAST</option>
                            <option value="PUCK" <?= $dbdota2sellitemHero == 'PUCK' ? 'selected="selected"':'';?>>PUCK</option>
                            <option value="PUDGE" <?= $dbdota2sellitemHero == 'PUDGE' ? 'selected="selected"':'';?>>PUDGE</option>
                            <option value="PUGNA" <?= $dbdota2sellitemHero == 'PUGNA' ? 'selected="selected"':'';?>>PUGNA</option>
                            <option value="QUEEN OF PAIN" <?= $dbdota2sellitemHero == 'QUEEN OF PAIN' ? 'selected="selected"':'';?>>QUEEN OF PAIN</option>
                            <option value="RAZOR" <?= $dbdota2sellitemHero == 'RAZOR' ? 'selected="selected"':'';?>>RAZOR</option>
                            <option value="RIKI" <?= $dbdota2sellitemHero == 'RIKI' ? 'selected="selected"':'';?>>RIKI</option>
                            <option value="RUBICK" <?= $dbdota2sellitemHero == 'RUBICK' ? 'selected="selected"':'';?>>RUBICK</option>
                            <option value="SAND KING" <?= $dbdota2sellitemHero == 'SAND KING' ? 'selected="selected"':'';?>>SAND KING</option>
                            <option value="SHADOW DEMON" <?= $dbdota2sellitemHero == 'SHADOW DEMON' ? 'selected="selected"':'';?>>SHADOW DEMON</option>
                            <option value="SHADOW FIEND" <?= $dbdota2sellitemHero == 'SHADOW FIEND' ? 'selected="selected"':'';?>>SHADOW FIEND</option>
                            <option value="SHADOW SHAMAN" <?= $dbdota2sellitemHero == 'SHADOW SHAMAN' ? 'selected="selected"':'';?>>SHADOW SHAMAN</option>
                            <option value="SILENCER" <?= $dbdota2sellitemHero == 'SILENCER' ? 'selected="selected"':'';?>>SILENCER</option>
                            <option value="SKYWRATH MAGE" <?= $dbdota2sellitemHero == 'SKYWRATH MAGE' ? 'selected="selected"':'';?>>SKYWRATH MAGE</option>
                            <option value="SLARDAR" <?= $dbdota2sellitemHero == 'SLARDAR' ? 'selected="selected"':'';?>>SLARDAR</option>
                            <option value="SLARK" <?= $dbdota2sellitemHero == 'SLARK' ? 'selected="selected"':'';?>>SLARK</option>
                            <option value="SNAPFIRE" <?= $dbdota2sellitemHero == 'SNAPFIRE' ? 'selected="selected"':'';?>>SNAPFIRE</option>
                            <option value="SNIPER" <?= $dbdota2sellitemHero == 'SNIPER' ? 'selected="selected"':'';?>>SNIPER</option>
                            <option value="SPECTRE" <?= $dbdota2sellitemHero == 'SPECTRE' ? 'selected="selected"':'';?>>SPECTRE</option>
                            <option value="SPIRIT BREAKER" <?= $dbdota2sellitemHero == 'SPIRIT BREAKER' ? 'selected="selected"':'';?>>SPIRIT BREAKER</option>
                            <option value="STORM SPIRIT" <?= $dbdota2sellitemHero == 'STORM SPIRIT' ? 'selected="selected"':'';?>>STORM SPIRIT</option>
                            <option value="SVEN" <?= $dbdota2sellitemHero == 'SVEN' ? 'selected="selected"':'';?>>SVEN</option>
                            <option value="TECHIES" <?= $dbdota2sellitemHero == 'TECHIES' ? 'selected="selected"':'';?>>TECHIES</option>
                            <option value="TEMPLAR ASSASSIN" <?= $dbdota2sellitemHero == 'TEMPLAR ASSASSIN' ? 'selected="selected"':'';?>>TEMPLAR ASSASSIN</option>
                            <option value="TERRORBLADE" <?= $dbdota2sellitemHero == 'TERRORBLADE' ? 'selected="selected"':'';?>>TERRORBLADE</option>
                            <option value="TIDEHUNTER" <?= $dbdota2sellitemHero == 'TIDEHUNTER' ? 'selected="selected"':'';?>>TIDEHUNTER</option>
                            <option value="TIMBERSAW" <?= $dbdota2sellitemHero == 'TIMBERSAW' ? 'selected="selected"':'';?>>TIMBERSAW</option>
                            <option value="TINKER" <?= $dbdota2sellitemHero == 'TINKER' ? 'selected="selected"':'';?>>TINKER</option>
                            <option value="TINY" <?= $dbdota2sellitemHero == 'TINY' ? 'selected="selected"':'';?>>TINY</option>
                            <option value="TREANT PROTECTOR" <?= $dbdota2sellitemHero == 'TREANT PROTECTOR' ? 'selected="selected"':'';?>>TREANT PROTECTOR</option>
                            <option value="TROLL WARLORD" <?= $dbdota2sellitemHero == 'TROLL WARLORD' ? 'selected="selected"':'';?>>TROLL WARLORD</option>
                            <option value="TUSK" <?= $dbdota2sellitemHero == 'TUSK' ? 'selected="selected"':'';?>>TUSK</option>
                            <option value="UNDERLORD" <?= $dbdota2sellitemHero == 'UNDERLORD' ? 'selected="selected"':'';?>>UNDERLORD</option>
                            <option value="UNDYING" <?= $dbdota2sellitemHero == 'UNDYING' ? 'selected="selected"':'';?>>UNDYING</option>
                            <option value="URSA" <?= $dbdota2sellitemHero == 'URSA' ? 'selected="selected"':'';?>>URSA</option>
                            <option value="VENGEFUL SPIRIT" <?= $dbdota2sellitemHero == 'VENGEFUL SPIRIT' ? 'selected="selected"':'';?>>VENGEFUL SPIRIT</option>
                            <option value="VENOMANCER" <?= $dbdota2sellitemHero == 'VENOMANCER' ? 'selected="selected"':'';?>>VENOMANCER</option>
                            <option value="VIPER" <?= $dbdota2sellitemHero == 'VIPER' ? 'selected="selected"':'';?>>VIPER</option>
                            <option value="VISAGE" <?= $dbdota2sellitemHero == 'VISAGE' ? 'selected="selected"':'';?>>VISAGE</option>
                            <option value="VOID SPIRIT" <?= $dbdota2sellitemHero == 'VOID SPIRIT' ? 'selected="selected"':'';?>>VOID SPIRIT</option>
                            <option value="WARLOCK" <?= $dbdota2sellitemHero == 'WARLOCK' ? 'selected="selected"':'';?>>WARLOCK</option>
                            <option value="WEAVER" <?= $dbdota2sellitemHero == 'WEAVER' ? 'selected="selected"':'';?>>WEAVER</option>
                            <option value="WINDRANGER" <?= $dbdota2sellitemHero == 'WINDRANGER' ? 'selected="selected"':'';?>>WINDRANGER</option>
                            <option value="WINTER WYVERN" <?= $dbdota2sellitemHero == 'WINTER WYVERN' ? 'selected="selected"':'';?>>WINTER WYVERN</option>
                            <option value="WITCH DOCTOR" <?= $dbdota2sellitemHero == 'WITCH DOCTOR' ? 'selected="selected"':'';?>>WITCH DOCTOR</option>
                            <option value="WRAITH KING" <?= $dbdota2sellitemHero == 'WRAITH KING' ? 'selected="selected"':'';?>>WRAITH KING</option>
                            <option value="ZEUS" <?= $dbdota2sellitemHero == 'ZEUS' ? 'selected="selected"':'';?>>ZEUS</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Rarity</b></label>
                        <select class="form-select" aria-label="Default select example" name="dota2sellitemRarity">
                            <!--OPTION LIST DOTA 2 HERO-->
                            <option value="COMMON" <?= $dbdota2sellitemRarity == 'COMMON' ? 'selected="selected"':'';?>>COMMON</option>
                            <option value="UNCOMMON" <?= $dbdota2sellitemRarity == 'UNCOMMON' ? 'selected="selected"':'';?>>UNCOMMON</option>
                            <option value="RARE" <?= $dbdota2sellitemRarity == 'RARE' ? 'selected="selected"':'';?>>RARE</option>
                            <option value="MYTHICAL" <?= $dbdota2sellitemRarity == 'MYTHICAL' ? 'selected="selected"':'';?>>MYTHICAL</option>
                            <option value="LEGENDARY" <?= $dbdota2sellitemRarity == 'LEGENDARY' ? 'selected="selected"':'';?>>LEGENDARY</option>
                            <option value="IMMORTAL" <?= $dbdota2sellitemRarity == 'IMMORTAL' ? 'selected="selected"':'';?>>IMMORTAL</option>
                            <option value="ARCANA" <?= $dbdota2sellitemRarity == 'ARCANA' ? 'selected="selected"':'';?>>ARCANA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Image</b></label>
                        <div class="mb-3">
                            <div class = "row">
                                <?php echo '<img src = "data:image/jpeg/png/jpg;base64,'.base64_encode($dbdota2sellitemIMG).'" width="440" height="240"/>'?>                           
                            </div>
                            <input class="form-control" type="file" accept="image/*" name="dota2sellitemIMG" id="dota2sellitemIMG">   
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label"><b>Price</b></label>
                        <input type="text" value="<?php echo $dbdota2sellitemPrice;?>" class="form-control" id="formGroupExampleInput" placeholder="Input Price here" name="dota2sellitemPrice" autocomplete="off" required>
                    </div>
                     
                    <br>
                    <div class="inputfield">
                        <input type="submit" value="Update" name="edit" class="btn">
                    </div>

                    <div class="inputfield">
                        <button type="button" class="btn btn-primary btn-lg btn-block" onclick="
                            location.href = 'myinventorydota2.php'">Back
                        </button>
                    </div>

                </div>
            </form>    
        </div>	
    </body>
</html>
