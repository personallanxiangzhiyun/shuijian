BQ.add("ui.ImageCamera",function(){function f(b){var d,e,c=b&&b.getAttribute("src");this.stretchType={cut:0,auto:1,scaling:2};this.stretch=1;this.picture=function(){var a=b||document.createElement("img");a.src=this.url;d=a.offsetLeft;e=a.offsetTop;return a}();this.scene=function(){var a=document.createElement("div");a.style.position="relative";return a}();this.setURL=function(a){c=a;this.picture.src=c};this.setSize=function(){};this.setCamera=function(a){var b=this.picture,c="rect("+[a.y+"px",a.x+
a.width+"px",a.y+a.height+"px",a.x+"px"].join(",")+")";b.style.clip=c;b.style.position="absolute";b.style.left=d-a.x+"px";b.style.top=e-a.y+"px"}}return function(b){return new f(b)}});
