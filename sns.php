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

		<!--はてなボタン-->
		<li class="hatena">
		<a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button" data-hatena-bookmark-layout="basic-label" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加">
			<img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" />
		</a>
		</li>

		<!--ポケットボタン-->
		<li class="pocket">
			<a data-pocket-label="pocket" data-pocket-count="none" class="pocket-btn" data-lang="en"></a>
			<script type="text/javascript">!function(d,i){if(!d.getElementById(i)){var j=d.createElement("script");j.id=i;j.src="https://widgets.getpocket.com/v1/j/btn.js?v=1";var w=d.getElementById(i);d.body.appendChild(j);}}(document,"pocket-btn-js");</script>
		</li>
