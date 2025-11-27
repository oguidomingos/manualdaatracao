<?php
/**
 * WhatsApp Notification System
 * Sends notification via Evolution API when page is accessed
 */

function send_whatsapp_notification() {
    // Evolution API Configuration
    $base_url = 'https://api.icebergcompany.com.br';
    $api_key = 'DOQ-be65a5378ce91034a889b1eb40c072cf';
    $instance_name = 'oguidomingos';
    $recipients = ['5561936180578', '5561995103399']; // Phone numbers to send to (with country code)

    // Get visitor information
    $visitor_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    $referer = $_SERVER['HTTP_REFERER'] ?? 'Direct Access';
    $timestamp = date('d/m/Y H:i:s');

    // Get UTM parameters if available
    $utm_source = $_GET['utm_source'] ?? 'N/A';
    $utm_medium = $_GET['utm_medium'] ?? 'N/A';
    $utm_campaign = $_GET['utm_campaign'] ?? 'N/A';
    $fbclid = isset($_GET['fbclid']) ? 'Yes' : 'No';

    // Build message
    $message = "🚨 *NOVA VISITA - Landing Page Studio 3*\n\n";
    $message .= "📅 Data/Hora: {$timestamp}\n";
    $message .= "🌐 IP: {$visitor_ip}\n";
    $message .= "📱 Dispositivo: " . (is_mobile() ? 'Mobile' : 'Desktop') . "\n";
    $message .= "🔗 Origem: {$referer}\n";
    $message .= "📊 UTM Source: {$utm_source}\n";
    $message .= "📊 UTM Medium: {$utm_medium}\n";
    $message .= "📊 UTM Campaign: {$utm_campaign}\n";
    $message .= "🎯 Facebook Click ID: {$fbclid}\n";

    // Prepare API request
    $url = "{$base_url}/message/sendText/{$instance_name}";

    $headers = array(
        'Content-Type: application/json',
        'apikey: ' . $api_key
    );

    // Send to each recipient
    foreach ($recipients as $recipient) {
        $data = array(
            'number' => $recipient,
            'text' => $message
        );

        // Send via cURL (non-blocking)
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5); // 5 second timeout
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3); // 3 second connection timeout

        // Execute request in background (don't wait for response)
        curl_exec($ch);
        curl_close($ch);
    }
}

/**
 * Detect if visitor is using mobile device
 */
function is_mobile() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';

    $mobile_keywords = array(
        'Mobile', 'Android', 'iPhone', 'iPad', 'iPod',
        'BlackBerry', 'Windows Phone', 'webOS'
    );

    foreach ($mobile_keywords as $keyword) {
        if (stripos($user_agent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}

/**
 * Send checkout click notification via WhatsApp
 */
function send_checkout_click_notification() {
    // Evolution API Configuration
    $base_url = 'https://api.icebergcompany.com.br';
    $api_key = 'DOQ-be65a5378ce91034a889b1eb40c072cf';
    $instance_name = 'oguidomingos';
    $recipients = ['5561936180578', '5561995103399'];

    // Get visitor information
    $visitor_ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    $referer = $_SERVER['HTTP_REFERER'] ?? 'Direct Access';
    $timestamp = date('d/m/Y H:i:s');

    // Get UTM parameters if available
    $utm_source = $_GET['utm_source'] ?? 'N/A';
    $utm_medium = $_GET['utm_medium'] ?? 'N/A';
    $utm_campaign = $_GET['utm_campaign'] ?? 'N/A';
    $fbclid = isset($_GET['fbclid']) ? 'Yes' : 'No';

    // Build message
    $message = "🎯 *CLIQUE NO CHECKOUT - Landing Page Studio 3*\n\n";
    $message .= "✅ Usuário clicou para ir ao checkout!\n\n";
    $message .= "📅 Data/Hora: {$timestamp}\n";
    $message .= "🌐 IP: {$visitor_ip}\n";
    $message .= "📱 Dispositivo: " . (is_mobile() ? 'Mobile' : 'Desktop') . "\n";
    $message .= "🔗 Origem: {$referer}\n";
    $message .= "📊 UTM Source: {$utm_source}\n";
    $message .= "📊 UTM Medium: {$utm_medium}\n";
    $message .= "📊 UTM Campaign: {$utm_campaign}\n";
    $message .= "🎯 Facebook Click ID: {$fbclid}\n";

    // Prepare API request
    $url = "{$base_url}/message/sendText/{$instance_name}";

    $headers = array(
        'Content-Type: application/json',
        'apikey: ' . $api_key
    );

    // Send to each recipient
    foreach ($recipients as $recipient) {
        $data = array(
            'number' => $recipient,
            'text' => $message
        );

        // Send via cURL (non-blocking)
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);

        curl_exec($ch);
        curl_close($ch);
    }
}

/**
 * AJAX handler for checkout click tracking
 */
function handle_checkout_click() {
    send_checkout_click_notification();
    wp_send_json_success('Notification sent');
}

// Register AJAX handlers (works for both logged in and non-logged in users)
add_action('wp_ajax_track_checkout_click', 'handle_checkout_click');
add_action('wp_ajax_nopriv_track_checkout_click', 'handle_checkout_click');

// Execute notification (only once per session to avoid spam)
if (!isset($_SESSION['whatsapp_notification_sent'])) {
    session_start();
    send_whatsapp_notification();
    $_SESSION['whatsapp_notification_sent'] = true;
}
