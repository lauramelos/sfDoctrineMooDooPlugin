<section class="mini-panel">
   <nav class="menu">
    <ul>
      <li><a href="<?php// echo url_for('sfMooDooUser/edit?id='.$sf_user->getGuardUser()->getId()) ?>"><span
class="user"></span><?php echo __('User').': User';// <strong>'.$sf_user->getGuardUser().'</strong>'; ?></a></li>
      <li><a href="<?php echo url_for('sfMooDooAuth/signout') ?>"><span class="close"></span><?php echo __('Log Off'); ?></a>

      </li>
    </ul>
   </nav>
</section>
