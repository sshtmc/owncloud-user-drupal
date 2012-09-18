<form id="drupal" action="#" method="post">
    <fieldset class="personalblock">
        <legend><strong>Drupal 6.x DB configuration (for user authentication)</strong></legend>
        <p>
            <label for="drupal_db_host"><?php echo $l->t('drupal_db_host');?></label>
            <input type="text" id="drupal_db_host" name="drupal_db_host"
                value="<?php echo $_['drupal_db_host']; ?>" />

            <label for="drupal_db_name"><?php echo $l->t('drupal_db_name');?></label>
            <input type="text" id="drupal_db_name" name="drupal_db_name" 
                value="<?php echo $_['drupal_db_name']; ?>" />

            <label for="drupal_db_prefix"><?php echo $l->t('drupal_db_prefix');?></label>
            <input type="text" id="drupal_db_prefix" name="drupal_db_prefix" 
                value="<?php echo $_['drupal_db_prefix']; ?>" />
        </p>

        <p>
            <label for="drupal_db_user"><?php echo $l->t('drupal_db_user');?></label>
            <input type="text" id="drupal_db_user" name="drupal_db_user" 
                value="<?php echo $_['drupal_db_user']; ?>" />

            <label for="drupal_db_password"><?php echo $l->t('drupal_db_password');?></label>
            <input type="text" id="drupal_db_password" name="drupal_db_password" 
                value="<?php echo $_['drupal_db_password']; ?>" />
        </p>

        <input type="submit" value="Save" />
    </fieldset>
</form>
