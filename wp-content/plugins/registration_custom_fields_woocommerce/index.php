<?php
   /**
 * Plugin Name:       Custom Registration Field Woccommerce
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Custom field for registration form
 * Version:           1.01
 * Requires PHP:      7.2
 * Author:            Houriya Elansari
 * Author URI:        https://elhouriya.com/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
add_action('woocommerce_register_form_start','front_end_field');
function front_end_field(){
  ?>
  
   <!-- Field Second name -->
   
   <p class="form-row form-row-wide">
      <label for="reg_billing_last_name"><?php _e('Last name','woocommerce');?>
            <span class="required">*</span>
      </label>
      <input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" 
         value="<?php if(!empty($_POST['billing_last_name'])) esc_attr_e($_POST['billing_last_name']); ?>"/>
   </p>

   <!-- Field First name -->
  <p class="form-row form-row-wide">
      <label for="reg_billing_first_name"><?php _e('First name','woocommerce');?>
            <span class="required">*</span>
      </label>
      <input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" 
         value="<?php if(!empty($_POST['billing_first_name'])) esc_attr_e($_POST['billing_first_name']); ?>"/>
  </p>
  
  <div class="clear"></div>
  <?php
}
  
add_action('woocommerce_register_post','validate_input',3,10);
function validate_input($username,$email,$validation_errors){
      if(isset($_POST['billing_first_name']) && empty($_POST['billing_first_name'])){
            $validation_errors->add('billing_first_name_error', __('<strong>Error</strong>: First name is required','woocommerce'));
      }

      if(isset($_POST['billing_last_name']) && empty($_POST['billing_last_name'])){
            $validation_errors->add('billing_last_name_error', __('<strong>Error</strong>: Last name is required','woocommerce'));
      }

      if(isset($_POST['billing_address']) && empty($_POST['billing_address'])){
            $validation_errors->add('billing_address_error', __('<strong>Error</strong>: Address is required','woocommerce'));
      }

      return $validation_errors;
}

/** nsert values in database "wp_usermeta" */
add_action('woocommerce_created_customer','save_data');
function save_data($customer_id){
      if(isset($_POST['billing_first_name'])){
            update_user_meta($customer_id,'first_name',sanitize_text_field($_POST['billing_first_name']));           
      }

      if(isset($_POST['billing_last_name'])){
            update_user_meta($customer_id,'last_name',sanitize_text_field($_POST['billing_last_name']));           
      }

      if(isset($_POST['billing_address'])){
            update_user_meta($customer_id,'address',sanitize_text_field($_POST['billing_address']));           
      }
}


