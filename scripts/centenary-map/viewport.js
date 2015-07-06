/*
Viewport 0.95. Dynamic Viewport Modification.
Optic Swerve. opticswerve.com. @opticswerve.
Documented at http://menacingcloud.com/?c=viewport
*/

// I can get viewport scale on iOS.
// Turns out Android lets you go straight back to mobile even if scales don't match.

/*--------------|
| Viewport		|
|--------------*/
function Viewport() {
	this.bAndroid; // Android device?
	this.biOS; // iOS device?
	this.bSupported; // Viewport mod supported?

	this.defaultMaxScale; // 5
	this.defaultMinScale; // 0.25
	this.defaultWidth; // 980px or greatest screen dimension

	this.dpr; // Device pixel ratio
	this.orientation; // 'portrait' or 'landscape'
	this.scale; // Current viewport scale
	this.screenWidth; // Last recorded (orientation corrected) screen width

	this.elapsed; // Time elapsed during scale portion of viewport switch
	this.interval; // Scale target timing interval

	// Viewport meta tag variables
	this.bUserScalable; // Viewport scalable?
	this.height; // 223 to 10,000 or 'device-height'. Current specified meta tag viewport width. Not defined by default.
	this.initialScale; // Initial viewport scale. Undefined if meta tag not available.
	this.maxScale; // >0 to 10
	this.minScale; // >0 to 10
	this.width; // 200 to 10,000 or 'device-width'. Current specified meta tag viewport width. Default is 980.

	// Last set viewport meta tag variables
	this.lastWidth;

	// Viewport constructor
	//----------------------
	this.viewport = function() {
		var v = this;
		v.bSupported = true; // Supported until proven otherwise

		// User agent branching
		var ua = navigator.userAgent.toLowerCase();
		v.bAndroid = ua.indexOf('android') > -1;
		v.biOS = ua.match(/(iphone|ipod|ipad)/);

		// querySelector not supported
		if(document.querySelector === undefined) {
			v.bSupported = false;
			return;

		}

		// Ensure document head support
		document.head = document.head || document.getElementsByTagName('head')[0];

		// Ensure string trim support
		if(!String.prototype.trim) {
			String.prototype.trim = function () {
				return this.replace(/^\s+|\s+$/g,'');

			};

		}

		// In an iFrame
		if(window !== parent) {
			v.bSupported = false;
			return;

		}

		// Check for orientation support
		if(window.orientation === undefined) {
			v.bSupported = false;
			return;

		}

		// Update orientation and screen width
		v.updateOrientation();
		v.updateScreenWidth();

		// Defaults
		v.defaultMaxScale = 5;
		v.defaultMinScale = 0.25;
		v.defaultWidth = 980;

		// Force consistent default width on orientation change.
		// E.g. iPad sets 1024 in landscape even if 980 is requested.
	//	if(screen.width > v.defaultWidth) v.defaultWidth = 1024;
	//	if(screen.height > v.defaultWidth) v.defaultWidth = 1024;

		// device-pixel-ratio
		v.dpr = 1;
		if(window.devicePixelRatio !== undefined) v.dpr = window.devicePixelRatio;

		// Process viewport meta tag in head
		var bMetaTagPresent = v.fromHead();

		// Orientation change viewport update
		//------------------------------------
		window.addEventListener('orientationchange', function() {
			var lastOrientation = v.orientation;
			var lastScreenWidth = v.screenWidth;

			v.updateOrientation();
			if(lastOrientation === v.orientation) return; // Check that viewport mod hasn't triggered orientation change event

			v.updateScreenWidth();

			// Mobile
			if(v.width === 'device-width' && v.bUserScalable === true) {
			//	if(v.orientation === 'portrait') v.resetScale(); // iOS

			}

			// Default
			if(v.width === v.defaultWidth && v.bUserScalable === true) {
			//	if(v.orientation === 'portrait') v.resetScale(); // iOS

			}

			// Hardware-pixel-width mode. dpr > 1 only.
			else if(v.dpr > 1 && v.width === lastScreenWidth * v.dpr) v.setDevicePixels();

		}, false);

	};

	// Calculate minimum scale required for viewport width to fit screen width
	//-------------------------------------------------------------------------
	this.calcScaleToFit = function(width) {
		if(width === 'device-width') return 1;

		// Rounded to 3 decimal places. ceil() used to ensure safe scale.
		// E.g. 980 width to device-width, we don't want too small a scale.
		// This would result in the viewport not filling the available screen.
		return Math.ceil(this.screenWidth / width * 1000) / 1000;

	};

	// Initialise from content string
	//--------------------------------
	this.fromContentString = function(content) {
		// Tokenise by ','
		var tokens = content.split(',');
		var nameValue;
		var name;
		var value;

		for(var i = 0; i < tokens.length; i++) {
			// Process name/value pairs
			nameValue = tokens[i].split('=');
			if(nameValue.length !== 2) continue;

			name = nameValue[0].trim();
			value = nameValue[1].trim();

			if(!isNaN(parseFloat(value))) value = parseFloat(value);

			if(name === 'width') this.width = value;
			else if(name === 'height') this.height = value;
			else if(name === 'initial-scale') this.initialScale = value;
			else if(name === 'maximum-scale') this.maxScale = value;
			else if(name === 'minimum-scale') this.minScale = value;
			else if(name === 'user-scalable') {
				if(value === 'no') this.bUserScalable = false;
				else this.bUserScalable = true;

			}

		}

	};

	// Get values from document head
	//-------------------------------
	this.fromHead = function() {
		var meta = document.head.querySelector('meta[name=viewport]');

		if(meta === null) return false;
		else {
			if(meta.hasAttribute('content')) {
				this.fromContentString(meta.getAttribute('content'));
				return true;

			}

		}

	};

	// Document ready
	//----------------
	this.ready = function(handler) {
		if(document.addEventListener) {
			document.addEventListener('DOMContentLoaded', function() {
				document.removeEventListener('DOMContentLoaded', arguments.callee, false);
				handler();

			}, false);

		}

	};
	
	// Scale viewport to target
	//--------------------------
	this.scaleTo = function(target, success, failure) {
		var v = this;
		v.updateScale();

		console.log('Scale to: ' + target);

		// Scale match
		//-------------
		if(v.scale === target || Math.abs(v.scale - target) < 0.01) {
			clearInterval(v.interval);
			v.interval = undefined;
			v.elapsed = undefined;

			if(v.scaleOverPolicy !== undefined) v.scaleOverPolicy();
			if(success !== undefined) success();
			return;

		}

		// Check progress
		//----------------
		if(v.interval !== undefined) {
			v.elapsed += 250;

			if(v.elapsed > 5000) {
				clearInterval(v.interval);
				v.interval = undefined;
				v.elapsed = undefined;

				if(v.scaleOverPolicy !== undefined) v.scaleOverPolicy();
				if(failure !== undefined) failure();

			}

			return;

		}

		// Scale up
		//----------
		if(v.scale < target) {
			v.elapsed = 0;

			// Lock max scale at target
			v.updateMetaScale(target, v.defaultMinScale);

			// Scale policy. Used for UI direction etc.
			if(v.scaleUpPolicy !== undefined) v.scaleUpPolicy();

			v.interval = setInterval(function() {
				v.scaleTo(target, success, failure);

			}, 250);

		}

		// Scale down
		//------------
		else if(v.scale > target) {
			v.elapsed = 0;

			// Lock min scale at target
			v.updateMetaScale(v.defaultMaxScale, target);

			// Scale policy. Used for UI direction etc.
			if(v.scaleDownPolicy !== undefined) v.scaleDownPolicy();

			v.interval = setInterval(function() {
				v.scaleTo(target, success, failure);

			}, 250);

		}

	};

	// Set to predefined default
	//---------------------------
	this.setDefault = function(success, failure) {
		var v = this;

		v.bUserScalable = true;
		v.height = undefined;
		v.maxScale = v.defaultMaxScale;
		v.minScale = v.defaultMinScale;
		v.width = v.defaultWidth;
		v.update(success, failure);

	};

	// Set viewport width to hardware pixels
	//---------------------------------------
	this.setDevicePixels = function(success, failure) {
		var v = this;

		v.bUserScalable = true;
		v.height = undefined;

		v.maxScale = v.defaultMaxScale;
		v.minScale = v.defaultMinScale;

		if(v.dpr > 1) v.width = v.screenWidth * v.dpr;
		else v.width = 'device-width';

		v.update(success, failure);

	};

	// Mobile mode. device-width, scale = 1.0, not user-scalable.
	//-----------------------------------------------------------
	this.setMobile = function(success, failure) {
		var v = this;

		v.bUserScalable = false;
		v.height = undefined;
		v.maxScale = 1;
		v.minScale = 1;
		v.width = 'device-width';
		v.update(success, failure);

	};

	// Construct viewport meta tag content attribute string
	//------------------------------------------------------
	this.toString = function() {
		var content = '';
		var v = this;

		if(v.width !== undefined) content += 'width=' + v.width + ', ';
		if(v.height !== undefined) content += 'height=' + v.height + ', ';
		if(v.maxScale !== undefined) content += 'maximum-scale=' + v.maxScale + ', ';
		if(v.minScale !== undefined) content += 'minimum-scale=' + v.minScale + ', ';
		if(v.bUserScalable === true) content += 'user-scalable=yes';
		else if(v.bUserScalable === false) content += 'user-scalable=no';

		return content;

	};

	// Update document meta tag
	//--------------------------
	this.update = function(success, failure) {
		var prevViewportWidth = document.documentElement.clientWidth;
		var v = this;

		if(!v.bSupported) {
			if(failure !== undefined) failure();
			return;

		}

		// Clear any mods waiting on a scale
		clearInterval(v.interval);
		v.interval = undefined;
		v.elapsed = undefined;

		var widthPx = v.width;
		if(widthPx === 'device-width') widthPx = v.screenWidth;

		var lastWidthPx = v.lastWidth;
		if(lastWidthPx === 'device-width') lastWidthPx = v.screenWidth;
		else if(lastWidthPx === undefined) lastWidthPx = document.documentElement.clientWidth;

		// To smaller width viewport. Need to scale to target (iOS only).
		//---------------------------------------------------------------
	/*	if(widthPx < lastWidthPx) {
			v.updateScale();

			// Minimum scale to fit viewport to screen
			var targetScale = v.calcScaleToFit(widthPx);

			if(v.scale !== targetScale) {
				// Scale to target before meta tag application
				v.scaleTo(targetScale, function() {
					v.update(success, failure);

				}, failure);

				return; // Defer meta tag update until scale target is met

			}

		} */

		console.log('UPDATE. Last width: ' + lastWidthPx + ', new width: ' + widthPx);

		// Update viewport meta tag
		//--------------------------
		v.updateMeta();

		// Check that settings were applied
		//----------------------------------
		setTimeout(function() {
			var bSuccess = false;
			var viewportWidth = document.documentElement.clientWidth;

			// Check width
			if(v.width === 'device-width' && v.screenWidth === viewportWidth) bSuccess = true;
			else if(v.width === viewportWidth) bSuccess = true;

			// Failure
			if(!bSuccess) {
				if(failure !== undefined) failure();

			}

			// Success
			else {
				// Change in viewport width
				//--------------------------
				if(prevViewportWidth !== viewportWidth) {
					// Save last settings
					v.lastWidth = v.width;

					// viewportChange event
					var e = document.createEvent('Event');
					e.initEvent('viewportChange', true, true);
					e.bUserScalable = v.bUserScalable;
					e.maxScale = v.maxScale;
					e.minScale = v.minScale;
					e.width = v.width;
					document.dispatchEvent(e);

				}

				if(success !== undefined) success();

			}

		}, 500);

	};

	// Update viewport meta tag
	//--------------------------
	this.updateMeta = function() {
		var meta = document.head.querySelector('meta[name=viewport]');

		// Add new meta tag
		if(meta === null) {
			meta = document.createElement('meta');
			meta.setAttribute('name', 'viewport');
			meta.setAttribute('content', this.toString());
			document.head.appendChild(meta);

		} // Modify existing meta tag
		else meta.setAttribute('content', this.toString());

	//	console.log(v.toString());

	};

	// Update viewport meta tag for scale targeting
	//----------------------------------------------
	this.updateMetaScale = function(max, min) {
		var content = '';
		var v = this;

		content += 'maximum-scale=' + max;
		content += ', minimum-scale=' + min;
		content += ', user-scalable=yes';

		var meta = document.head.querySelector('meta[name=viewport]');

		// Add new meta tag
		if(meta === null) {
			meta = document.createElement('meta');
			meta.setAttribute('name', 'viewport');
			meta.setAttribute('content', content);
			document.head.appendChild(meta);

		} // Modify existing meta tag
		else meta.setAttribute('content', content);

		console.log(content);

	};

	// Update viewport orientation
	//-----------------------------
	this.updateOrientation = function() {
		var orientation = window.orientation;

		if(orientation === 0 || orientation === 180) orientation = 'portrait';
		else if(orientation === 90 || orientation === -90) orientation = 'landscape';
		else {
			// JavaScript orientation not supported. Work it out.
			// Note that clientHeight can be smaller than available viewport height. Gives an incorrect result in this case.
			if(document.documentElement.clientWidth > document.documentElement.clientHeight) orientation = 'landscape';
			else orientation = 'portrait';

		}

		this.orientation = orientation;

	};

	// Get current scale
	//-------------------
	this.updateScale = function() {
		var viewportWidth = document.documentElement.clientWidth;

		// Calculate viewport scale
		var pageScale = viewportWidth / window.innerWidth;
		var scaleRatio = viewportWidth / this.screenWidth;
		this.scale = pageScale / scaleRatio;

	};

	// Update screen width
	//---------------------
	this.updateScreenWidth = function() {
		this.screenWidth = screen.width;

		if(this.orientation === 'portrait') {
			// Take smaller of the two dimensions
			if(screen.width > screen.height) this.screenWidth = screen.height;

		}
		else {
			// Landscape. Take larger of the two dimensions.
			if(screen.width < screen.height) this.screenWidth = screen.height;

		}

	};

	return true;

}

/*
// Remove all viewport meta tags from document head
//--------------------------------------------------
Viewport.prototype.removeAll = function() {
	var results = document.head.querySelectorAll('meta[name=viewport]');
	var i = results.length;

	while(i--) {
		results.item(i).parentNode.removeChild(results.item(i));

	}

}; */

/*
// More support checks
//---------------------
// After doc ready since dependent on content loaded. E.g. viewport height, scrollbars appear.
v.ready(function() {
	// Check viewport width is correct
	if(v.width !== undefined) {
		if(v.width === 'device-width') {
			if(v.screenWidth !== document.documentElement.clientWidth) {
				alert('Screen width: ' + v.screenWidth + ', viewport width: ' + document.documentElement.clientWidth);
				v.bSupported = false;
				return;

			}

		}
		else if(v.width !== document.documentElement.clientWidth) {
			alert('3');
			v.bSupported = false;
			return;

		}

	}

	// Mobile viewport meta tag supplied. Check scale match.
	if(v.minScale === 1 && v.maxScale === 1) {
		v.updateScale();

		if(v.scale !== 1) {
			alert('4');
			v.bSupported = false;
			return;

		}

	}

}); // End ready */
