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
define( 'DB_NAME', 'in-plus' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Ne2+)uNk}c$gU62!E`YirnWetogapRrHFBzyvzxJmF6?0rE3nzwK#u17aOU)!7ej' );
define( 'SECURE_AUTH_KEY',  '5c>H!E3v5tM(P<-R_K&jh,Mq7tbWHjXD,L1/~o$e[FmGFo9!)h@%oQP29O3gpU:>' );
define( 'LOGGED_IN_KEY',    '$_5/gO$q!N!?-&FpoAKw.AG`z&iiV7Ow1nkB%Dt_+x)!Y%N>=8[[o!Fh-.nYJGmc' );
define( 'NONCE_KEY',        'mMz)0.w$=UZv|s#*Z|5~qoTAFDBO_f>.V39wlk |]%d:W|V0s2/,t|67% 9ai<CI' );
define( 'AUTH_SALT',        'c5?hi}(pc@3LVVfzYb8UMqo;.%s0G,Xs]f#^/Y}|(d[a:|ek2n<&q[@G-,Blp5-A' );
define( 'SECURE_AUTH_SALT', 'k 1m>oOS#6c|2&l{)ex~-f?WKoHH>N<z!C2Z|K>gD(=tu17cSey@jd%6Hx@3sV/U' );
define( 'LOGGED_IN_SALT',   'M7s5NSHjScQ1#xpnow>?w6[nibE?o$S7>9QCav8Sj2>m@9!m.~Pu9RcTLT@oy7DP' );
define( 'NONCE_SALT',       'G1!,IR/A5|0U@`{zDO8-5e]L9nZfU:OOlw.d&_3nqdea2<A?Qhs.]9T!?tLAN9si' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
