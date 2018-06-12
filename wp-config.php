<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'wp_em18');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']3<QhIZ=:kz:ov^[PZO6@k5JoO~`6^Vmi14;32SC<t.JYtn0UG-cdA;e9L@RP1+4');
define('SECURE_AUTH_KEY',  '-Pfoi[.kqI%hLTRy~YM6bGh9^W)z`}hkc]opMCu](i(.EzF&j_Zds;TQg!9@UDC^');
define('LOGGED_IN_KEY',    'C{~/<Z!61ce)~}m#-E/LC4qfk4?V=YbT0-A?JE{}=3IRr|~:-eycp.q~hf14i^u^');
define('NONCE_KEY',        'iOm}vF@k ,2##H<8{^1E_ptvlYx9$]wzOe:FlMDM3Eo~o8UD+Bp/!h08D*FO/1y7');
define('AUTH_SALT',        'SK[8%KAz&z?@W66F)k#Tp?nAe74u_!-UIU?5q|H+|!W:e!M{XL6ME/s(H=xGq;Qy');
define('SECURE_AUTH_SALT', 'X:e5_&rY`+Wu S$lqc,~PJ0?,}@SYeCbZ TD4H8}edj2lv&cfa%~6yO:7j1I>-lj');
define('LOGGED_IN_SALT',   'c==pu2@2e(B{I#?`|/h-lqT-:P<1N+w%l)m,kY)8]dpbr`DC<dQ>)kWsKO%PG(wN');
define('NONCE_SALT',       '+.{eOw3,M0m^.E/S$/#f&}GOJ5a/eyrG8)Y=nx.^sO<{rs7z=zB};/DG/f=,F=Oc');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
