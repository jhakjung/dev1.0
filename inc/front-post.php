<?php

// 관리자 화면에서 글 메뉴만 보이게
function restrict_admin_menu_for_subscribers()
{
    if (is_admin()) {
        $user = wp_get_current_user();
        if (in_array('subscriber', (array) $user->roles)) {
            // 관리자 화면의 "글" 메뉴를 제외한 나머지 메뉴를 숨깁니다.
            remove_menu_page('index.php'); // 대시보드
            remove_menu_page('edit.php?post_type=page'); // 페이지
            remove_menu_page('upload.php'); // 미디어
            remove_menu_page('edit-comments.php'); // 댓글
            remove_menu_page('themes.php'); // 테마
            remove_menu_page('plugins.php'); // 플러그인
            remove_menu_page('users.php'); // 사용자
            remove_menu_page('tools.php'); // 도구
            remove_menu_page('options-general.php'); // 설정
        }
    }
}
add_action('admin_menu', 'restrict_admin_menu_for_subscribers', 99);

// 구독자의 경우 자신의 글 목록만 볼 수 있게
function restrict_posts_to_own($query)
{
    // 관리자 화면 & 글(post) 목록에서만 적용
    if (is_admin() && $query->is_main_query() && $query->get('post_type') === 'post') {
        $user = wp_get_current_user();

        // 구독자인 경우 자신의 게시물만 표시
        if (in_array('subscriber', $user->roles)) {
            $query->set('author', $user->ID); // 자신의 게시물만 쿼리
        }
    }
}
add_action('pre_get_posts', 'restrict_posts_to_own');

// 메뉴 이름을 '내 글 목록'으로 변경
function change_menu_label_for_subscriber()
{
    $user = wp_get_current_user();
    if (in_array('subscriber', $user->roles)) {
        global $menu;
        foreach ($menu as &$item) {
            if ($item[0] === '글') {
                $item[0] = '내 글 목록'; // 메뉴 이름 변경
                break;
            }
        }
    }
}
add_action('admin_menu', 'change_menu_label_for_subscriber', 999);

//
function hide_category_options_for_subscribers()
{
    $user = wp_get_current_user();
    if (in_array('subscriber', (array) $user->roles)) {
        echo '<style>
            #category-add-toggle, /* "새 카테고리 추가" 링크 */
            .categorydiv .hide-if-no-js.tabs { display: none !important; } /* "가장 많이 사용됨" 탭 */
        </style>';
    }
}
add_action('admin_head-post.php', 'hide_category_options_for_subscribers');
add_action('admin_head-post-new.php', 'hide_category_options_for_subscribers');
