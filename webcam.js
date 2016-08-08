
window.webcam = {
	version: '1.0.9',
	
	// globals
	ie: !!navigator.userAgent.match(/MSIE/),
	protocol: location.protocol.match(/https/i) ? 'https' : 'http',
	callback: null, // user callback for completed uploads
	swf_url: 'webcam.swf', // URI to webcam.swf movie (defaults to cwd)
	shutter_url: 'shutter.mp3', // URI to shutter.mp3 sound
	api_url: '', // URL to upload script
	loaded: false, // true when webcam movie finishes loading
	quality: 90, // JPEG quality (1 - 100)
	shutter_sound: true, // shutter sound effect on/off
	stealth: false, // stealth mode (do not freeze image upon capture)
	hooks: {
		onLoad: null,
		onComplete: null,
		onError: null
	}, // callback hook functions
	
	