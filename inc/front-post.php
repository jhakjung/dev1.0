<?php
// 관리자 화면에서 글 메뉴만 보이게
// function restrict_admin_menu_for_subscribers()
// {
//     if (is_admin()) {
//         $user = wp_get_current_user();
//         if (in_array('subscriber', (array) $user->roles)) {
//             // 관리자 화면의 "글" 메뉴를 제외한 나머지 메뉴를 숨깁니다.
//             remove_menu_page('index.php'); // 대시보드
//             remove_menu_page('edit.php?post_type=page'); // 페이지
//             remove_menu_page('upload.php'); // 미디어
//             remove_menu_page('edit-comments.php'); // 댓글
//             remove_menu_page('themes.php'); // 테마
//             remove_menu_page('plugins.php'); // 플러그인
//             remove_menu_page('users.php'); // 사용자
//             remove_menu_page('tools.php'); // 도구
//             remove_menu_page('options-general.php'); // 설정
//         }
//     }
// }
// add_action('admin_menu', 'restrict_admin_menu_for_subscribers', 99);
