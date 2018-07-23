<?php
/**
 *
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 * @version 1.0
 */

?>

<?php
$url_encode   = rawurlencode( get_permalink() );
$title_encode = rawurlencode( get_the_title() ) . '｜' . get_bloginfo( 'name' );
?>

<div class="share">
	<ul>
		<!--ツイートボタン-->
		<li class="tweet">
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
		</li>

		<!--Facebookボタン-->
		<li class="facebook">
			<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
				<span class="icon-facebook fab fa-facebook">facebook<?php if (function_exists( 'scc_get_share_facebook' )) echo ( scc_get_share_facebook() === 0 ) ? '' : scc_get_share_facebook(); ?></span>
			</a>
		</li>


		<!--はてなボタン-->
		<li class="hatena">
			<a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label-counter" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加">
				<img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" />
			</a>
		</li>

		<!--ポケットボタン-->
		<li class="pocket">
			<a href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode; ?>">
				<span class="icon-pocket"></span> Pocket <?php if (function_exists( 'scc_get_share_pocket' )) echo ( scc_get_share_pocket() === 0 ) ? '' : scc_get_share_pocket(); ?>
			</a>
		</li>
