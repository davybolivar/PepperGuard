// QiSessionオブジェクトの作成
var qiSession = new QiSession();

//------------FromTablet/ToPepper------------//

// Pepperにデータ送信
// function startGuard(message) {
function startGuard() {
	var message = 1;
	alert(message);
	qiSession.service("ALMemory").done(function (ALMemory) {
		ALMemory.raiseEvent("FromTablet/ToPepper", message);
		// alert(message);
	});
}

//------------FromPepper/ToTablet------------//

// タブレットに処理を反映
function toTabletHandler(value) {
	// document.getElementById("pepper").innerHTML = value;
}

// ALMemoryイベント監視
function startSubscribe() {
	session.service("ALMemory").done(function (ALMemory) {
		ALMemory.subscriber("FromPepper/ToTablet").done(function(subscriber) {
			subscriber.signal.connect(toTabletHandler);
		});
	});
}
