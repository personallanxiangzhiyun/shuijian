BQ.add("ui.form.InputHover",function(f){function d(e,b){if(!(this instanceof d))return new d(e,f.merge(g,b));this.config=b;var a=this.container=$(e).eq(0);if(!b.noDef)b.noDef=a.css(COLOR);if(!b.defaultValue)b.defaultValue=a.attr("defaultValue");var c=$(["<span>",b.defaultValue,"</span>"].join("")).css({position:"absolute",display:"none","padding-top":a.css("padding-top"),"padding-left":a.css("padding-left"),"margin-top":a.css("margin-top"),"margin-left":a.css("margin-left"),"font-size":a.css("font-size"),
color:b.isDef});a.wrap("<label/>").before(c);c.click(function(){$(this).hide();a.focus()});setTimeout(function(){a.val()==""?c.show():a.val()==b.defaultValue?a.css(COLOR,b.isDef):a.css(COLOR,b.noDef)},100);a.focus(function(){c.hide()});a.blur(function(){a.val()==""?c.show():a.val()==b.defaultValue&&a.css(COLOR,b.isDef)})}var g={defaultValue:"",isDef:"#CCC",noDef:"#000"};COLOR="color";return d});
