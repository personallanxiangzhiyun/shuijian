BQ.add("util.KeyMap",function(g){function e(a,f){var b=String(f.split("-")[0].match(/[A-Za-z]+/)).toUpperCase(),c=String(f.split("-")[1].match(/[A-Za-z]+/)).toUpperCase(),d=null;switch(b){case "A":b=a.altKey;break;case "C":b=a.ctrlKey;break;case "S":b=a.shiftKey}switch(c){case "ALT":d=c=a.altKey;break;case "CTRL":d=c=a.ctrlKey;break;case "SHIFT":d=c=a.shiftKey}return b&&((a.keyCode||a.which)==e[c]||d)?!0:!1}g.mix(e,{BACKSPACE:8,TAB:9,CLEAR:12,ENTER:13,SHIFT:16,CTRL:17,ALT:18,PAUSE:19,CAPS_LOCK:20,
ESC:27,SPACE:32,PRIOR:33,NEXT:34,END:35,HOME:36,LEFT:37,UP:38,RIGHT:39,DOWN:40,SELECT:41,PRINT:42,EXECUTE:43,INSERT:45,DELETE:46,HELP:47,0:48,1:49,2:50,3:51,4:52,5:53,6:54,7:55,8:56,9:57,A:65,B:66,C:67,D:68,E:69,F:70,G:71,H:72,I:73,J:74,K:75,L:76,M:77,N:78,O:79,P:80,Q:81,R:82,S:83,T:84,U:85,V:86,W:87,X:88,Y:89,Z:90,NUM0:96,NUM1:97,NUM2:98,NUM3:99,NUM4:100,NUM5:101,NUM6:102,NUM7:103,NUM8:104,NUM9:105,"NUM*":106,"NUM+":107,KP_SEPARATOR:108,"NUM-":109,"NUM.":110,"NUM/":111,F1:112,F2:113,F3:114,F4:115,
F5:116,F6:117,F7:118,F8:119,F9:120,F10:121,F11:122,F12:123,F13:124,F14:125,F15:126,F16:127,F17:128,F18:129,F19:130,F20:131,F21:132,F22:133,F23:134,F24:135,NUM_LOCK:144,SCROLL_LOCK:145});return e});