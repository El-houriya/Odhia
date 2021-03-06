<tr style="" class="inline-edit-row quick-edit-row alternate inline-editor" id="edit-1">
    <td class="colspanchange" colspan="<?php echo $columns ?>">
        <form action="<?php echo admin_url('admin-ajax.php') ?>" method="post">

        <?php $label = $action == 'debit' ? __( 'Remove Credit', 'another-wordpress-classifieds-plugin') : __( 'Add Credit', 'another-wordpress-classifieds-plugin'); ?>

        <fieldset class="inline-edit-col-wide">
            <div class="inline-edit-col">
                <h4><?php echo $label ?></h4>

                <label>
                    <span class="title"><?php _e('Amount', 'another-wordpress-classifieds-plugin'); ?></span>
                    <span class="input-text-wrap formatted-field"><input type="text" value="" name="amount"></span>
                </label>
            </div>
        </fieldset>

        <p class="submit inline-edit-save">
            <?php $cancel = __( 'Cancel', 'another-wordpress-classifieds-plugin'); ?>
            <a class="button-secondary cancel alignleft" title="<?php echo $cancel; ?>" href="#inline-edit" accesskey="c"><?php echo $cancel; ?></a>
            <a class="button-primary save alignleft" style="margin-left: 5px;" title="<?php echo $label ?>" href="#inline-edit" accesskey="s"><?php echo $label ?></a>
            <img alt="" src="<?php echo admin_url( '/images/wpspin_light.gif' ); ?>" style="display: none;" class="waiting">
            <input type="hidden" value="<?php echo esc_attr( $user->ID ); ?>" name="user">
            <input type="hidden" value="<?php echo esc_attr( sanitize_text_field( wp_unslash( $_POST['action'] ) ) ); ?>" name="action">
            <br class="clear">
        </p>

        </form>
    </td>
</tr>
