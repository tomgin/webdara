// viewport振り分け
var d = window.document;

if(navigator.userAgent.indexOf('iPhone') > -1){
	d.write('<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0" />');
}else if(navigator.userAgent.indexOf('iPod') > -1){
	d.write('<meta name="viewport" content="width=device-width ">');
}else if(navigator.userAgent.indexOf('Android') > -1 && navigator.userAgent.indexOf('Mobile') > -1){
	d.write('<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0" />');
}else if(navigator.userAgent.indexOf('Windows Phone') > -1){
	d.write('<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0" />');
}