<?php
add_theme_support('post-thumbnails');

//記事の表示順変更
function sortpost($query) {
    if(is_admin() || !$query->is_main_query()){
        return;
    }
    //ASC:昇順、DESC:降順
    $query->set('order', 'DASC');
    //orderbyで何順に並べ替えるか指定
    $query->set('orderby', 'modified');
}
add_action('pre_get_posts', 'sortpost');

//カスタム投稿の表示数設定
function change_posts_per_page($query) {
	/* 管理画面,メインクエリに干渉しないために必須 */
	if( is_admin() || ! $query->is_main_query() ){  return; }
	/* カテゴリーページの表示件数を5件にする */
	if ( $query->is_post_type_archive('voice') ) { $query->set( 'posts_per_page', '5' );  return;  } 
} add_action( 'pre_get_posts', 'change_posts_per_page' );

?>