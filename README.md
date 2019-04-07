# ROC intake test site
This is a website I had to make for the intake test of ROC Flevoland. I do not allow use in any way without my permission.

Click this [link](http://geometrydashprogramming.7m.pl/) to visit the site.
**The page is not finished yet but that has to do with the fact that I had 3 days for this.**

------------------------------------------------------------------------------------------------------------------

My built in adblocker for 7m.pl is made open source for general use. just use the code below in their respective place.

CSS part (Put this in the head).
```html
<head>
  <style>
    /*
      General adblock code
    */
    html body iframe{
      display: none !important;
      box-sizing: border-box !important;
      margin: 0px !important;
      padding: 0px !important;
      height: 0px !important;
      position: absolute !important;
      align: right !important;
    }
    #ads{
      display: none !important;
      box-sizing: border-box !important;
      margin: 0px !important;
      padding: 0px !important;
      height: 0px !important;
      position: absolute !important;
      align: right !important;
    }
    #ads_bottom_static{
      display: none !important;
      box-sizing: border-box !important;
      margin: 0px !important;
      padding: 0px !important;
      height: 0px !important;
      position: absolute !important;
      align: right !important;
    }
    ins{
      display: none !important;
      box-sizing: border-box !important;
      margin: 0px !important;
      padding: 0px !important;
      height: 0px !important;
      position: absolute !important;
      align: right !important;
    }
    .adsbygoogle{
      display: none !important;
      box-sizing: border-box !important;
      margin: 0px !important;
      padding: 0px !important;
      height: 0px !important;
      position: absolute !important;
      align: right !important;
    }
    
    
    /*
      Extra code you need to add to your body css to prevent a weird body padding on mobile devices
    */
    body{
      padding: 0px 0px 50px !important;
    }
  </style>
</head>
```

JavaScript part (Put this at the bottom of your page (Under the body tag)).
```html
<script>
	var ads = document.getElementsByTagName("iframe");
	for(var i = 0; i<ads.length; i++){
		ads[i].sandbox = "";
		ads[i].remove();
		ads[i].parentNode.removeChild(ads[i]);
	}
	var ads = document.getElementsByTagName("ins");
	for(var i = 0; i<ads.length; i++){
		ads[i].sandbox = "";
		ads[i].remove();
		ads[i].parentNode.removeChild(ads[i]);
	}
</script>
```
