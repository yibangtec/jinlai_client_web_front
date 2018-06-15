(function (doc, win) {
			    var docEl = doc.documentElement,
			        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
			        recalc = function () {
			            var clientWidth = docEl.clientWidth;
			            if (!clientWidth) return;
			            // [娉╙:chrome涓嬩笉鏀寔10px鎵€浠ュ墠杈圭殑100浠ｈ〃锛�1rem = 100px;鍚庤竟鐨�750浠ｈ〃璁捐绋跨殑瀹藉害
			            docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
			        };
			 
			    if (!doc.addEventListener) return;recalc();
			    win.addEventListener(resizeEvt, recalc, false);
			    doc.addEventListener('DOMContentLoaded', recalc, false);
			})(document, window);