<form id="drupal" action="#" method="post">
    <fieldset class="personalblock">
        <legend><strong>drupal</strong></legend>
        <p>
            <label for="drupal_db_host"><?php echo $l->t('DB Host');?></label>
            <input type="text" id="drupal_db_host" name="drupal_db_host"
                value="<?php echo $_['drupal_db_host']; ?>" />

            <label for="drupal_db_name"><?php echo $l->t('DB Name');?></label>
            <input type="text" id="drupal_db_name" name="drupal_db_name" 
                value="<?php echo $_['drupal_db_name']; ?>" />

            <label for="drupal_db_prefix"><?php echo $l->t('DB Prefix');?></label>
            <input type="text" id="drupal_db_prefix" name="drupal_db_prefix" 
                value="<?php echo $_['drupal_db_prefix']; ?>" />
        </p>

        <p>
            <label for="drupal_db_user"><?php echo $l->t('DB User');?></label>
            <input type="text" id="drupal_db_user" name="drupal_db_user" 
                value="<?php echo $_['drupal_db_user']; ?>" />

            <label for="drupal_db_password"><?php echo $l->t('DB Password');?></label>
            <input type="text" id="drupal_db_password" name="drupal_db_password" 
                value="<?php echo $_['drupal_db_password']; ?>" />
        </p>

        <input type="submit" value="Save" />
    </fieldset>
</form>
