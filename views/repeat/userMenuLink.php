<ul class="menu">
    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'user_notification.php' : 'user_notification.php'; ?>
    >Notifications</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'dashboard.php' : 'dashboard.php'; ?>
    >Dashboard</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'wallet.php' : 'wallet.php'; ?>
    >Wallet</a></li>
    
    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'explorer.php' : 'explorer.php'; ?>
    >Explorer</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'shop.php' : 'shop.php'; ?>
    >Shop</a></li>
 
    <!-- <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'view.php' : 'view.php'; ?>
    >View</a></li>
 
    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'edit.php' : 'edit.php'; ?>
    >Edit</a></li>
 
    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'changeProfilePicture.php' : 'changeProfilePicture.php'; ?>
    >Change Profile Picture</a></li>
 
    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'changePassword.php' : 'changePassword.php'; ?>
    >Change Password</a></li> -->

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'settings.php' : 'settings.php'; ?>
    >User Settings</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'faq_user.php' : 'faq_user.php'; ?>
    >FAQs</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'feedback.php' : 'feedback.php'; ?>
    >Feedback</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'offer.php' : 'offer.php'; ?>
    >Offer</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'../../other/index.php' : '../../other/index.php'; ?>
    >Other</a></li>

    <li>
    <a href=
    <?php   echo isset($_SESSION['#menuPath']) ? $_SESSION['#menuPath'].'logout.php' : 'logout.php'; ?>
    >Logout</a>

    <?php 
        $_SESSION['#menuPath'] = '';
    ?>
</li>
 
</ul>