<?php

function boilerplate_load_assets() {
  wp_enqueue_script(
    'ourmainjs',
    get_theme_file_uri('/build/index.js'),
    array('wp-element', 'react-jsx-runtime'),
    '1.0',
    true
  );
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));

  // Pass nonce + ajaxUrl to React (used by ContactForm)
  wp_localize_script('ourmainjs', 'tikalForm', array(
    'nonce'   => wp_create_nonce('tikal_estimate_form'),
    'ajaxUrl' => admin_url('admin-post.php'),
  ));
}
add_action('wp_enqueue_scripts', 'boilerplate_load_assets');


function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'boilerplate_add_support');


/**
 * Handle the estimate form submission from React ContactForm.
 * Hooked to admin-post.php via action=tikal_estimate_submit.
 */
function tikal_handle_estimate_form() {
  // Verify nonce
  if ( ! isset($_POST['tikal_nonce']) || ! wp_verify_nonce($_POST['tikal_nonce'], 'tikal_estimate_form') ) {
    wp_send_json_error('Invalid security token.', 403);
    return;
  }

  $full_name = sanitize_text_field($_POST['full_name'] ?? '');
  $phone     = sanitize_text_field($_POST['phone']     ?? '');
  $email     = sanitize_email($_POST['email']          ?? '');
  $service   = sanitize_text_field($_POST['service']   ?? '');
  $city_zip  = sanitize_text_field($_POST['city_zip']  ?? '');
  $message   = sanitize_textarea_field($_POST['message'] ?? '');

  if (empty($full_name) || empty($phone) || empty($email)) {
    wp_send_json_error('Missing required fields.', 422);
    return;
  }

  // ── Send notification email to admin ──────────────────────────────────────
  $to      = get_option('admin_email'); // swap for business email
  $subject = "New Estimate Request — {$full_name}";
  $body    = "Name: {$full_name}\n"
           . "Phone: {$phone}\n"
           . "Email: {$email}\n"
           . "Service: {$service}\n"
           . "City/ZIP: {$city_zip}\n\n"
           . "Message:\n{$message}";
  $headers = array(
    'Content-Type: text/plain; charset=UTF-8',
    "Reply-To: {$full_name} <{$email}>",
  );

  wp_mail($to, $subject, $body, $headers);

  wp_send_json_success('Message sent.');
}
add_action('admin_post_tikal_estimate_submit',        'tikal_handle_estimate_form');
add_action('admin_post_nopriv_tikal_estimate_submit', 'tikal_handle_estimate_form');