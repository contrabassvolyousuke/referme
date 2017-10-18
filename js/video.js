// IFrame Player API の読み込み
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// YouTubeの埋め込み
function onYouTubeIframeAPIReady() {

  ytPlayer = new YT.Player(
       'mainmovie', // 埋め込む場所の指定
        {
        	width: 734, // プレーヤーの幅
        	height: 413, // プレーヤーの高さ
        	videoId: 'YP0_0EBawaQ', // YouTubeのID

	        playerVars: {
	            rel: 0, // 再生終了後に関連動画を表示するかどうか設定
	            autoplay: 1, // 自動再生するかどうか設定
	            loop: 1,
	            controls: 0,
	            showinfo: 0,
	            playlist:'YP0_0EBawaQ',
	            modestbranding:1,
	            disablekb: 1 // キーボードでの操作をさせない
	        },
		    events: {
		       'onReady': onPlayerReady
		    }

      }
   );
}

// プレーヤーの準備ができたとき
function onPlayerReady(event) {
  // 動画をミュートにする
  event.target.mute();
  ytPlayer.setPlaybackQuality('medium');
}