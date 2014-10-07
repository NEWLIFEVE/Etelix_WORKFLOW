/**
 * Copyright (C) 2010-2014 Graham Breach
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
/**
 * TagCanvas 2.5.1
 * For more information, please contact <graham@goat1000.com>
 */
(function(){var K,I,J=Math.abs,ad=Math.sin,v=Math.cos,q=Math.max,ax=Math.min,ak=Math.ceil,C=Math.sqrt,am=Math.pow,f={},h={},k={0:"0,",1:"17,",2:"34,",3:"51,",4:"68,",5:"85,",6:"102,",7:"119,",8:"136,",9:"153,",a:"170,",A:"170,",b:"187,",B:"187,",c:"204,",C:"204,",d:"221,",D:"221,",e:"238,",E:"238,",f:"255,",F:"255,"},w,b,O,az,F,aA,B=document,n,a={};for(K=0;K<256;++K){I=K.toString(16);if(K<16){I="0"+I}h[I]=h[I.toUpperCase()]=K.toString()+","}function ae(i){return typeof i!="undefined"}function G(i){return typeof i=="object"&&i!=null}function ao(i,j,aB){return isNaN(i)?aB:ax(aB,q(j,i))}function au(){return false}function E(){return new Date().valueOf()}function z(aB,aE){var j=[],aC=aB.length,aD;for(aD=0;aD<aC;++aD){j.push(aB[aD])}j.sort(aE);return j}function aj(j){var aC=j.length-1,aB,aD;while(aC){aD=~~(Math.random()*aC);aB=j[aC];j[aC]=j[aD];j[aD]=aB;--aC}}function aa(i,aB,j){this.x=i;this.y=aB;this.z=j}F=aa.prototype;F.length=function(){return C(this.x*this.x+this.y*this.y+this.z*this.z)};F.dot=function(i){return this.x*i.x+this.y*i.y+this.z*i.z};F.cross=function(j){var i=this.y*j.z-this.z*j.y,aC=this.z*j.x-this.x*j.z,aB=this.x*j.y-this.y*j.x;return new aa(i,aC,aB)};F.angle=function(j){var i=this.dot(j),aB;if(i==0){return Math.PI/2}aB=i/(this.length()*j.length());if(aB>=1){return 0}if(aB<=-1){return Math.PI}return Math.acos(aB)};F.unit=function(){var i=this.length();return new aa(this.x/i,this.y/i,this.z/i)};function af(aB,j){j=j*Math.PI/180;aB=aB*Math.PI/180;var i=ad(aB)*v(j),aD=-ad(j),aC=-v(aB)*v(j);return new aa(i,aD,aC)}function P(i){this[1]={1:i[0],2:i[1],3:i[2]};this[2]={1:i[3],2:i[4],3:i[5]};this[3]={1:i[6],2:i[7],3:i[8]}}az=P.prototype;P.Identity=function(){return new P([1,0,0,0,1,0,0,0,1])};P.Rotation=function(aC,i){var j=ad(aC),aB=v(aC),aD=1-aB;return new P([aB+am(i.x,2)*aD,i.x*i.y*aD-i.z*j,i.x*i.z*aD+i.y*j,i.y*i.x*aD+i.z*j,aB+am(i.y,2)*aD,i.y*i.z*aD-i.x*j,i.z*i.x*aD-i.y*j,i.z*i.y*aD+i.x*j,aB+am(i.z,2)*aD])};az.mul=function(aB){var aC=[],aF,aE,aD=(aB.xform?1:0);for(aF=1;aF<=3;++aF){for(aE=1;aE<=3;++aE){if(aD){aC.push(this[aF][1]*aB[1][aE]+this[aF][2]*aB[2][aE]+this[aF][3]*aB[3][aE])}else{aC.push(this[aF][aE]*aB)}}}return new P(aC)};az.xform=function(aB){var j={},i=aB.x,aD=aB.y,aC=aB.z;j.x=i*this[1][1]+aD*this[2][1]+aC*this[3][1];j.y=i*this[1][2]+aD*this[2][2]+aC*this[3][2];j.z=i*this[1][3]+aD*this[2][3]+aC*this[3][3];return j};function o(aC,aE,aJ,aG){var aF,aI,j,aH,aK=[],aD=Math.PI*(3-C(5)),aB=2/aC;for(aF=0;aF<aC;++aF){aI=aF*aB-1+(aB/2);j=C(1-aI*aI);aH=aF*aD;aK.push([v(aH)*j*aE,aI*aJ,ad(aH)*j*aG])}return aK}function T(aD,aB,aG,aM,aK){var aL,aN=[],aE=Math.PI*(3-C(5)),aC=2/aD,aJ,aI,aH,aF;for(aJ=0;aJ<aD;++aJ){aI=aJ*aC-1+(aC/2);aL=aJ*aE;aH=v(aL);aF=ad(aL);aN.push(aB?[aI*aG,aH*aM,aF*aK]:[aH*aG,aI*aM,aF*aK])}return aN}function L(aB,aC,aF,aL,aJ,aH){var aK,aM=[],aD=Math.PI*2/aC,aI,aG,aE;for(aI=0;aI<aC;++aI){aK=aI*aD;aG=v(aK);aE=ad(aK);aM.push(aB?[aH*aF,aG*aL,aE*aJ]:[aG*aF,aH*aL,aE*aJ])}return aM}function ai(aC,i,j,aB){return T(aC,0,i,j,aB)}function an(aC,i,j,aB){return T(aC,1,i,j,aB)}function c(aD,i,j,aB,aC){aC=isNaN(aC)?0:aC*1;return L(0,aD,i,j,aB,aC)}function l(aD,i,j,aB,aC){aC=isNaN(aC)?0:aC*1;return L(1,aD,i,j,aB,aC)}function S(aE,i){var aD=aE,aC,aB,j=(i*1).toPrecision(3)+")";if(aE[0]==="#"){if(!f[aE]){if(aE.length===4){f[aE]="rgba("+k[aE[1]]+k[aE[2]]+k[aE[3]]}else{f[aE]="rgba("+h[aE.substr(1,2)]+h[aE.substr(3,2)]+h[aE.substr(5,2)]}}aD=f[aE]+j}else{if(aE.substr(0,4)==="rgb("||aE.substr(0,4)==="hsl("){aD=(aE.replace("(","a(").replace(")",","+j))}else{if(aE.substr(0,5)==="rgba("||aE.substr(0,5)==="hsla("){aC=aE.lastIndexOf(",")+1,aB=aE.indexOf(")");i*=parseFloat(aE.substring(aC,aB));aD=aE.substr(0,aC)+i.toPrecision(3)+")"}}}return aD}function N(i,j){if(window.G_vmlCanvasManager){return null}var aB=B.createElement("canvas");aB.width=i;aB.height=j;return aB}function ah(){var j=N(3,3),aC,aB;if(!j){return false}aC=j.getContext("2d");aC.strokeStyle="#000";aC.shadowColor="#fff";aC.shadowBlur=3;aC.globalAlpha=0;aC.strokeRect(2,2,2,2);aC.globalAlpha=1;aB=aC.getImageData(2,2,1,1);j=null;return(aB.data[0]>0)}function ag(aF,j,aE,aD){var aC=aF.createLinearGradient(0,0,j,0),aB;for(aB in aD){aC.addColorStop(1-aB,aD[aB])}aF.fillStyle=aC;aF.fillRect(0,aE,j,1)}function g(aD,aB,j){var aC=1024,aH=1,aG=aD.weightGradient,aF,aJ,aE,aI;if(aD.gCanvas){aJ=aD.gCanvas.getContext("2d");aH=aD.gCanvas.height}else{if(G(aG[0])){aH=aG.length}else{aG=[aG]}aD.gCanvas=aF=N(aC,aH);if(!aF){return null}aJ=aF.getContext("2d");for(aE=0;aE<aH;++aE){ag(aJ,aC,aE,aG[aE])}}j=q(ax(j||0,aH-1),0);aI=aJ.getImageData(~~((aC-1)*aB),j,1,1).data;return"rgba("+aI[0]+","+aI[1]+","+aI[2]+","+(aI[3]/255)+")"}function V(aK,aD,j,aM,aE,aJ,aF,aC,aI,aL){var aH=aE+(aF||0)+(aC.length&&aC[0]<0?J(aC[0]):0),aB=aE+(aF||0)+(aC.length&&aC[1]<0?J(aC[1]):0),aG,aN;aK.font=aD;aK.textBaseline="top";aK.fillStyle=j;aJ&&(aK.shadowColor=aJ);aF&&(aK.shadowBlur=aF);aC.length&&(aK.shadowOffsetX=aC[0],aK.shadowOffsetY=aC[1]);for(aG=0;aG<aM.length;++aG){aN=aL?(aI-aL[aG])/2:0;aK.fillText(aM[aG],aH+aN,aB);aB+=parseInt(aD)}}function al(aF,i,aE,j,aC,aD,aB){if(aD){aF.beginPath();aF.moveTo(i,aE+aC-aD);aF.arcTo(i,aE,i+aD,aE,aD);aF.arcTo(i+j,aE,i+j,aE+aD,aD);aF.arcTo(i+j,aE+aC,i+j-aD,aE+aC,aD);aF.arcTo(i,aE+aC,i,aE+aC-aD,aD);aF.closePath();aF[aB?"stroke":"fill"]()}else{aF[aB?"strokeRect":"fillRect"](i,aE,j,aC)}}function t(aF,aN,aH,aS,aI,aP,aG,aQ,aO,aM,i,aK,aE,aL,aU){var aC=aH+J(i[0])+2*(aM+aK)+aQ,aJ=aS+J(i[1])+2*(aM+aK)+aQ,aD,aV,aT,aR,aB,j;aD=N(aC,aJ);if(!aD){return null}aT=aB=aQ/2;aR=aC-aQ;j=aJ-aQ;aK+=aT;aV=aD.getContext("2d");if(aP){aV.fillStyle=aP;al(aV,aT,aB,aR,j,aE)}if(aQ){aV.strokeStyle=aG;aV.lineWidth=aQ;al(aV,aT,aB,aR,j,aE,true)}V(aV,aN,aI,aF,aK,aO,aM,i,aL,aU);return aD}function u(aC,j,aD){var aB=N(j,aD),aE;if(!aB){return null}aE=aB.getContext("2d");aE.drawImage(aC,(j-aC.width)/2,(aD-aC.height)/2);return aB}function aq(aC,j,aD){var aB=N(j,aD),aE;if(!aB){return null}aE=aB.getContext("2d");aE.drawImage(aC,0,0,j,aD);return aB}function aw(aN,aI,aO,aS,aJ,aH,aG,aL,aE,aF){var aC=aI+((2*aL)+aH)*aS,aK=aO+((2*aL)+aH)*aS,aD=N(aC,aK),aR,aQ,aB,aP,j,aT,aM;if(!aD){return null}aH*=aS;aE*=aS;aQ=aB=aH/2;aP=aC-aH;j=aK-aH;aL=(aL*aS)+aQ;aR=aD.getContext("2d");if(aJ){aR.fillStyle=aJ;al(aR,aQ,aB,aP,j,aE)}if(aH){aR.strokeStyle=aG;aR.lineWidth=aH;al(aR,aQ,aB,aP,j,aE,true)}if(aF){aT=N(aC,aK);aM=aT.getContext("2d");aM.drawImage(aN,aL,aL,aI,aO);aM.globalCompositeOperation="source-in";aM.fillStyle=aG;aM.fillRect(0,0,aC,aK);aM.globalCompositeOperation="destination-over";aM.drawImage(aD,0,0);aM.globalCompositeOperation="source-over";aR.drawImage(aT,0,0)}else{aR.drawImage(aN,aL,aL,aN.width,aN.height)}return{image:aD,width:aC/aS,height:aK/aS}}function X(aH,aN,aJ,aD,aL,aM,aC){var aO=J(aC[0]),aI=J(aC[1]),aE=aN+(aO>aM?aO+aM:aM*2)*aD,j=aJ+(aI>aM?aI+aM:aM*2)*aD,aG=aD*((aM||0)+(aC[0]<0?aO:0)),aB=aD*((aM||0)+(aC[1]<0?aI:0)),aF,aK;aF=N(aE,j);if(!aF){return null}aK=aF.getContext("2d");aL&&(aK.shadowColor=aL);aM&&(aK.shadowBlur=aM*aD);aC&&(aK.shadowOffsetX=aC[0]*aD,aK.shadowOffsetY=aC[1]*aD);aK.drawImage(aH,aG,aB,aN,aJ);return{image:aF,width:aE/aD,height:j/aD}}function r(aN,aF,aL){var aM=parseInt(aN.toString().length*aL),aE=parseInt(aL*2*aN.length),aC=N(aM,aE),aI,j,aD,aH,aK,aJ,aB,aG;if(!aC){return null}aI=aC.getContext("2d");aI.fillStyle="#000";aI.fillRect(0,0,aM,aE);V(aI,aL+"px "+aF,"#fff",aN,0,0,0,[]);j=aI.getImageData(0,0,aM,aE);aD=j.width;aH=j.height;aG={min:{x:aD,y:aH},max:{x:-1,y:-1}};for(aJ=0;aJ<aH;++aJ){for(aK=0;aK<aD;++aK){aB=(aJ*aD+aK)*4;if(j.data[aB+1]>0){if(aK<aG.min.x){aG.min.x=aK}if(aK>aG.max.x){aG.max.x=aK}if(aJ<aG.min.y){aG.min.y=aJ}if(aJ>aG.max.y){aG.max.y=aJ}}}}if(aD!=aM){aG.min.x*=(aM/aD);aG.max.x*=(aM/aD)}if(aH!=aE){aG.min.y*=(aM/aH);aG.max.y*=(aM/aH)}aC=null;return aG}function m(i){return"'"+i.replace(/(\'|\")/g,"").replace(/\s*,\s*/g,"', '")+"'"}function Z(i,j,aB){aB=aB||B;if(aB.addEventListener){aB.addEventListener(i,j,false)}else{aB.attachEvent("on"+i,j)}}function ap(aF,aB,aJ,aE){var aK=aE.imageScale,aH,aC,aG,j,aD,aI;if(!aB.complete){return Z("load",function(){ap(aF,aB,aJ,aE)},aB)}if(!aF.complete){return Z("load",function(){ap(aF,aB,aJ,aE)},aF)}aB.width=aB.width;aB.height=aB.height;if(aK){aF.width=aB.width*aK;aF.height=aB.height*aK}aJ.w=aF.width;aJ.h=aF.height;if(aE.txtOpt){aC=aF;aH=aE.zoomMax*aE.txtScale;aD=aJ.w*aH;aI=aJ.h*aH;if(aD<aB.naturalWidth||aI<aB.naturalHeight){aC=aq(aF,aD,aI);if(aC){aJ.image=aC}}else{aD=aJ.w;aI=aJ.h;aH=1}if(aE.shadow){aC=X(aJ.image,aD,aI,aH,aE.shadow,aE.shadowBlur,aE.shadowOffset);if(aC){aJ.image=aC.image;aJ.w=aC.width;aJ.h=aC.height}}if(aE.bgColour||aE.bgOutlineThickness){aG=aE.bgColour=="tag"?W(aJ.a,"background-color"):aE.bgColour;j=aE.bgOutline=="tag"?W(aJ.a,"color"):(aE.bgOutline||aE.textColour);aD=aJ.image.width;aI=aJ.image.height;if(aE.outlineMethod=="colour"){aC=aw(aJ.image,aD,aI,aH,aG,aE.bgOutlineThickness,aE.outlineColour,aE.padding,aE.bgRadius,1);if(aC){aJ.oimage=aC.image}}aC=aw(aJ.image,aD,aI,aH,aG,aE.bgOutlineThickness,j,aE.padding,aE.bgRadius);if(aC){aJ.image=aC.image;aJ.w=aC.width;aJ.h=aC.height}}if(aE.outlineMethod=="size"){if(aE.outlineIncrease>0){aJ.w+=2*aE.outlineIncrease;aJ.h+=2*aE.outlineIncrease;aD=aH*aJ.w;aI=aH*aJ.h;aC=aq(aJ.image,aD,aI);aJ.oimage=aC;aJ.image=u(aJ.image,aJ.oimage.width,aJ.oimage.height)}else{aD=aH*(aJ.w+(2*aE.outlineIncrease));aI=aH*(aJ.h+(2*aE.outlineIncrease));aC=aq(aJ.image,aD,aI);aJ.oimage=u(aC,aJ.image.width,aJ.image.height)}}}}function W(aC,aB){var j=B.defaultView,i=aB.replace(/\-([a-z])/g,function(aD){return aD.charAt(1).toUpperCase()});return(j&&j.getComputedStyle&&j.getComputedStyle(aC,null).getPropertyValue(aB))||(aC.currentStyle&&aC.currentStyle[i])}function s(j,aC,aB){var i=1,aD;if(aC){i=1*(j.getAttribute(aC)||aB)}else{if(aD=W(j,"font-size")){i=(aD.indexOf("px")>-1&&aD.replace("px","")*1)||(aD.indexOf("pt")>-1&&aD.replace("pt","")*1.25)||aD*3.3}}return i}function e(i){return i.target&&ae(i.target.id)?i.target.id:i.srcElement.parentNode.id}function Q(aD,aE){var aC,aB,i=parseInt(W(aE,"width"))/aE.width,j=parseInt(W(aE,"height"))/aE.height;if(ae(aD.offsetX)){aC={x:aD.offsetX,y:aD.offsetY}}else{aB=Y(aE.id);if(ae(aD.changedTouches)){aD=aD.changedTouches[0]}if(aD.pageX){aC={x:aD.pageX-aB.x,y:aD.pageY-aB.y}}}if(aC&&i&&j){aC.x/=i;aC.y/=j}return aC}function A(aB){var j=aB.target||aB.fromElement.parentNode,i=x.tc[j.id];if(i){i.mx=i.my=-1;i.UnFreeze();i.EndDrag()}}function ab(aF){var aC,aB=x,j,aE,aD=e(aF);for(aC in aB.tc){j=aB.tc[aC];if(j.tttimer){clearTimeout(j.tttimer);j.tttimer=null}}if(aD&&aB.tc[aD]){j=aB.tc[aD];if(aE=Q(aF,j.canvas)){j.mx=aE.x;j.my=aE.y;j.Drag(aF,aE)}j.drawn=0}}function y(aC){var j=x,i=B.addEventListener?0:1,aB=e(aC);if(aB&&aC.button==i&&j.tc[aB]){j.tc[aB].BeginDrag(aC)}}function ay(aD){var aB=x,j=B.addEventListener?0:1,aC=e(aD),i;if(aC&&aD.button==j&&aB.tc[aC]){i=aB.tc[aC];ab(aD);if(!i.EndDrag()&&!i.touched){i.Clicked(aD)}}}function R(aB){var i=x,j=e(aB);if(j&&aB.changedTouches&&i.tc[j]){i.tc[j].touched=1;i.tc[j].BeginDrag(aB)}}function p(aB){var i=x,j=e(aB);if(j&&aB.changedTouches&&i.tc[j]){at(aB);if(!i.tc[j].EndDrag()){i.tc[j].Draw();i.tc[j].Clicked(aB)}}}function at(aF){var aC,aB=x,j,aE,aD=e(aF);for(aC in aB.tc){j=aB.tc[aC];if(j.tttimer){clearTimeout(j.tttimer);j.tttimer=null}}if(aD&&aB.tc[aD]&&aF.changedTouches){j=aB.tc[aD];if(aE=Q(aF,j.canvas)){j.mx=aE.x;j.my=aE.y;j.Drag(aF,aE)}j.drawn=0}}function ac(aB){var i=x,j=e(aB);if(j&&i.tc[j]){aB.cancelBubble=true;aB.returnValue=false;aB.preventDefault&&aB.preventDefault();i.tc[j].Wheel((aB.wheelDelta||aB.detail)>0)}}function M(){D(E())}function D(aC){var j=x.tc,aB;x.NextFrame(x.interval);aC=aC||E();for(aB in j){j[aB].Draw(aC)}}function Y(aB){var aE=B.getElementById(aB),i=aE.getBoundingClientRect(),aH=B.documentElement,aF=B.body,aG=window,aC=aG.pageXOffset||aH.scrollLeft,aI=aG.pageYOffset||aH.scrollTop,aD=aH.clientLeft||aF.clientLeft,j=aH.clientTop||aF.clientTop;return{x:i.left+aC-aD,y:i.top+aI-j}}function U(j,aC,aD,aB){var i=j.radius*j.z1/(j.z1+j.z2+aC.z);return{x:aC.x*i*aD,y:aC.y*i*aB,z:aC.z,w:(j.z1-aC.z)/j.z2}}function av(i){this.e=i;this.br=0;this.line=[];this.text=[];this.original=i.innerText||i.textContent}aA=av.prototype;aA.Lines=function(aD){var aC=aD?1:0,aE,j,aB;aD=aD||this.e;aE=aD.childNodes;j=aE.length;for(aB=0;aB<j;++aB){if(aE[aB].nodeName=="BR"){this.text.push(this.line.join(" "));this.br=1}else{if(aE[aB].nodeType==3){if(this.br){this.line=[aE[aB].nodeValue];this.br=0}else{this.line.push(aE[aB].nodeValue)}}else{this.Lines(aE[aB])}}}aC||this.br||this.text.push(this.line.join(" "));return this.text};aA.SplitWidth=function(aB,aI,aF,aE){var aD,aC,aH,aG=[];aI.font=aE+"px "+aF;for(aD=0;aD<this.text.length;++aD){aH=this.text[aD].split(/\s+/);this.line=[aH[0]];for(aC=1;aC<aH.length;++aC){if(aI.measureText(this.line.join(" ")+" "+aH[aC]).width>aB){aG.push(this.line.join(" "));this.line=[aH[aC]]}else{this.line.push(aH[aC])}}aG.push(this.line.join(" "))}return this.text=aG};function H(i,j){this.ts=E();this.tc=i;this.tag=j;this.x=this.y=this.w=this.h=this.sc=1;this.z=0;this.Draw=i.pulsateTo<1&&i.outlineMethod!="colour"?this.DrawPulsate:this.DrawSimple;this.radius=i.outlineRadius|0;this.SetMethod(i.outlineMethod)}w=H.prototype;w.SetMethod=function(aB){var j={block:["PreDraw","DrawBlock"],colour:["PreDraw","DrawColour"],outline:["PostDraw","DrawOutline"],classic:["LastDraw","DrawOutline"],size:["PreDraw","DrawColour"],none:["LastDraw"]},i=j[aB]||j.outline;if(aB=="none"){this.Draw=function(){return 1}}else{this.drawFunc=this[i[1]]}this[i[0]]=this.Draw};w.Update=function(aH,aG,aI,aD,aE,aF,aC,i){var j=this.tc.outlineOffset,aB=2*j;this.x=aE*aH+aC-j;this.y=aE*aG+i-j;this.w=aE*aI+aB;this.h=aE*aD+aB;this.sc=aE;this.z=aF};w.DrawOutline=function(aE,i,aD,j,aB,aC){aE.strokeStyle=aC;al(aE,i,aD,j,aB,this.radius,true)};w.DrawColour=function(aC,aF,aD,aG,aB,i,aH,j,aE){if(aH.oimage){aH.alpha=1;aH.Draw(aC,j,aE,aH.oimage);return 1}return this[aH.image?"DrawColourImage":"DrawColourText"](aC,aF,aD,aG,aB,i,aH,j,aE)};w.DrawColourText=function(aD,aG,aE,aH,aB,i,aI,j,aF){var aC=aI.colour;aI.colour=i;aI.alpha=1;aI.Draw(aD,j,aF);aI.colour=aC;return 1};w.DrawColourImage=function(aG,aJ,aH,aK,aF,i,aN,j,aI){var aL=aG.canvas,aD=~~q(aJ,0),aC=~~q(aH,0),aE=ax(aL.width-aD,aK)+0.5|0,aM=ax(aL.height-aC,aF)+0.5|0,aB;if(n){n.width=aE,n.height=aM}else{n=N(aE,aM)}if(!n){return this.SetMethod("outline")}aB=n.getContext("2d");aB.drawImage(aL,aD,aC,aE,aM,0,0,aE,aM);aG.clearRect(aD,aC,aE,aM);aN.alpha=1;aN.Draw(aG,j,aI);aG.setTransform(1,0,0,1,0,0);aG.save();aG.beginPath();aG.rect(aD,aC,aE,aM);aG.clip();aG.globalCompositeOperation="source-in";aG.fillStyle=i;aG.fillRect(aD,aC,aE,aM);aG.restore();aG.globalCompositeOperation="destination-over";aG.drawImage(n,0,0,aE,aM,aD,aC,aE,aM);aG.globalCompositeOperation="source-over";return 1};w.DrawBlock=function(aE,i,aD,j,aB,aC){aE.fillStyle=aC;al(aE,i,aD,j,aB,this.radius)};w.DrawSimple=function(aD,i,j,aC){var aB=this.tc;aD.setTransform(1,0,0,1,0,0);aD.strokeStyle=aB.outlineColour;aD.lineWidth=aB.outlineThickness;aD.shadowBlur=aD.shadowOffsetX=aD.shadowOffsetY=0;aD.globalAlpha=1;return this.drawFunc(aD,this.x,this.y,this.w,this.h,aB.outlineColour,i,j,aC)};w.DrawPulsate=function(aE,i,j,aC){var aD=E()-this.ts,aB=this.tc;aE.setTransform(1,0,0,1,0,0);aE.strokeStyle=aB.outlineColour;aE.lineWidth=aB.outlineThickness;aE.shadowBlur=aE.shadowOffsetX=aE.shadowOffsetY=0;aE.globalAlpha=aB.pulsateTo+((1-aB.pulsateTo)*(0.5+(v(2*Math.PI*aD/(1000*aB.pulsateTime))/2)));return this.drawFunc(aE,this.x,this.y,this.w,this.h,aB.outlineColour,i,j,aC)};w.Active=function(aB,i,j){return(i>=this.x&&j>=this.y&&i<=this.x+this.w&&j<=this.y+this.h)};w.PreDraw=w.PostDraw=w.LastDraw=au;function d(aC,aN,aJ,aM,aK,aD,aB,aF,aL,aE,aI,j,aH,i){var aG=aC.ctxt;this.tc=aC;this.image=aN.src?aN:null;this.text=aN.src?[]:aN;this.text_original=i;this.line_widths=[];this.title=aJ.title||null;this.a=aJ;this.position=new aa(aM[0],aM[1],aM[2]);this.x=this.y=this.z=0;this.w=aK;this.h=aD;this.colour=aB||aC.textColour;this.bgColour=aF||aC.bgColour;this.bgRadius=aL|0;this.bgOutline=aE||this.colour;this.bgOutlineThickness=aI|0;this.textFont=j||aC.textFont;this.padding=aH|0;this.sc=this.alpha=1;this.weighted=!aC.weight;this.outline=new H(aC,this);if(!this.image){this.textHeight=aC.textHeight;this.Measure(aG,aC)}this.SetShadowColour=aC.shadowAlpha?this.SetShadowColourAlpha:this.SetShadowColourFixed;this.SetDraw(aC)}b=d.prototype;b.EqualTo=function(aB){var j=aB.getElementsByTagName("img");if(this.a.href!=aB.href){return 0}if(j.length){return this.image.src==j[0].src}return(aB.innerText||aB.textContent)==this.text_original};b.SetDraw=function(i){this.Draw=this.image?(i.ie>7?this.DrawImageIE:this.DrawImage):this.DrawText;i.noSelect&&(this.CheckActive=au)};b.MeasureText=function(aE){var aC,aB=this.text.length,j=0,aD;for(aC=0;aC<aB;++aC){this.line_widths[aC]=aD=aE.measureText(this.text[aC]).width;j=q(j,aD)}return j};b.Measure=function(aG,j){var aE=r(this.text,this.textFont,this.textHeight),aC,aD,aF,aB,i;this.h=aE?aE.max.y+aE.min.y:this.textHeight;aG.font=this.font=this.textHeight+"px "+this.textFont;this.w=this.MeasureText(aG);if(j.txtOpt){aC=j.txtScale;aD=aC*this.textHeight;aF=aD+"px "+this.textFont;aB=[aC*j.shadowOffset[0],aC*j.shadowOffset[1]];aG.font=aF;i=this.MeasureText(aG);this.image=t(this.text,aF,i+aC,(aC*this.h)+aC,this.colour,this.bgColour,this.bgOutline,aC*this.bgOutlineThickness,j.shadow,aC*j.shadowBlur,aB,aC*this.padding,aC*this.bgRadius,i,this.line_widths);if(j.outlineMethod=="colour"){this.oimage=t(this.text,aF,i+aC,(aC*this.h)+aC,j.outlineColour,this.bgColour,j.outlineColour,aC*this.bgOutlineThickness,j.shadow,aC*j.shadowBlur,aB,aC*this.padding,aC*this.bgRadius,i,this.line_widths)}else{if(j.outlineMethod=="size"){aE=r(this.text,this.textFont,this.textHeight+j.outlineIncrease);aD=aE.max.y+aE.min.y;aF=(aC*(this.textHeight+j.outlineIncrease))+"px "+this.textFont;aG.font=aF;i=this.MeasureText(aG);this.oimage=t(this.text,aF,i+aC,(aC*aD)+aC,this.colour,this.bgColour,this.bgOutline,aC*this.bgOutlineThickness,j.shadow,aC*j.shadowBlur,aB,aC*this.padding,aC*this.bgRadius,i,this.line_widths);if(j.outlineIncrease>0){this.image=u(this.image,this.oimage.width,this.oimage.height)}else{this.oimage=u(this.oimage,this.image.width,this.image.height)}}}if(this.image){this.w=this.image.width/aC;this.h=this.image.height/aC}this.SetDraw(j);j.txtOpt=!!this.image}};b.SetFont=function(j,aC,aB,i){this.textFont=j;this.colour=aC;this.bgColour=aB;this.bgOutline=i;this.Measure(this.tc.ctxt,this.tc)};b.SetWeight=function(aB){var j=this.tc,aD=j.weightMode.split(/[, ]/),i,aC,aE=aB.length;if(!this.text.length){return}this.weighted=true;for(aC=0;aC<aE;++aC){i=aD[aC]||"size";if("both"==i){this.Weight(aB[aC],j.ctxt,j,"size",j.min_weight[aC],j.max_weight[aC],aC);this.Weight(aB[aC],j.ctxt,j,"colour",j.min_weight[aC],j.max_weight[aC],aC)}else{this.Weight(aB[aC],j.ctxt,j,i,j.min_weight[aC],j.max_weight[aC],aC)}}this.Measure(j.ctxt,j)};b.Weight=function(aB,aG,aC,j,aF,aD,aE){aB=isNaN(aB)?1:aB;var i=(aB-aF)/(aD-aF);if("colour"==j){this.colour=g(aC,i,aE)}else{if("bgcolour"==j){this.bgColour=g(aC,i,aE)}else{if("bgoutline"==j){this.bgOutline=g(aC,i,aE)}else{if("size"==j){if(aC.weightSizeMin>0&&aC.weightSizeMax>aC.weightSizeMin){this.textHeight=aC.weightSize*(aC.weightSizeMin+(aC.weightSizeMax-aC.weightSizeMin)*i)}else{this.textHeight=q(1,aB*aC.weightSize)}}}}}};b.SetShadowColourFixed=function(aB,j,i){aB.shadowColor=j};b.SetShadowColourAlpha=function(aB,j,i){aB.shadowColor=S(j,i)};b.DrawText=function(aD,aG,aC){var aH=this.tc,aF=this.x,aE=this.y,aI=this.sc,j,aB;aD.globalAlpha=this.alpha;aD.fillStyle=this.colour;aH.shadow&&this.SetShadowColour(aD,aH.shadow,this.alpha);aD.font=this.font;aF+=aG/aI;aE+=(aC/aI)-(this.h/2);for(j=0;j<this.text.length;++j){aB=aF-(this.line_widths[j]/2);aD.setTransform(aI,0,0,aI,aI*aB,aI*aE);aD.fillText(this.text[j],0,0);aE+=this.textHeight}};b.DrawImage=function(aD,aK,aC,aF){var aH=this.x,aE=this.y,aL=this.sc,j=aF||this.image,aI=this.w,aB=this.h,aG=this.alpha,aJ=this.shadow;aD.globalAlpha=aG;aJ&&this.SetShadowColour(aD,aJ,aG);aH+=(aK/aL)-(aI/2);aE+=(aC/aL)-(aB/2);aD.setTransform(aL,0,0,aL,aL*aH,aL*aE);aD.drawImage(j,0,0,aI,aB)};b.DrawImageIE=function(aD,aH,aC){var j=this.image,aI=this.sc,aG=j.width=this.w*aI,aB=j.height=this.h*aI,aF=(this.x*aI)+aH-(aG/2),aE=(this.y*aI)+aC-(aB/2);aD.setTransform(1,0,0,1,0,0);aD.globalAlpha=this.alpha;aD.drawImage(j,aF,aE)};b.Calc=function(i,aB){var j,aE=this.tc,aD=aE.minBrightness,aC=aE.maxBrightness,aF=aE.max_radius;j=i.xform(this.position);this.xformed=j;j=U(aE,j,aE.stretchX,aE.stretchY);this.x=j.x;this.y=j.y;this.z=j.z;this.sc=j.w;this.alpha=aB*ao(aD+(aC-aD)*(aF-this.z)/(2*aF),0,1)};b.UpdateActive=function(aG,aB,aE){var aD=this.outline,j=this.w,aC=this.h,i=this.x-j/2,aF=this.y-aC/2;aD.Update(i,aF,j,aC,this.sc,this.z,aB,aE);return aD};b.CheckActive=function(aD,i,aC){var j=this.tc,aB=this.UpdateActive(aD,i,aC);return aB.Active(aD,j.mx,j.my)?aB:null};b.Clicked=function(aE){var j=this.a,aB=j.target,aC=j.href,i;if(aB!=""&&aB!="_self"){if(self.frames[aB]){self.frames[aB].document.location=aC}else{try{if(top.frames[aB]){top.frames[aB].document.location=aC;return}}catch(aD){}window.open(aC,aB)}return}if(B.createEvent){i=B.createEvent("MouseEvents");i.initMouseEvent("click",1,1,window,0,0,0,0,0,0,0,0,0,0,null);if(!j.dispatchEvent(i)){return}}else{if(j.fireEvent){if(!j.fireEvent("onclick")){return}}}B.location=aC};function x(aH,j,aC){var aB,aE,aG=B.getElementById(aH),aD=["id","class","innerHTML"],aF;if(!aG){throw 0}if(ae(window.G_vmlCanvasManager)){aG=window.G_vmlCanvasManager.initElement(aG);this.ie=parseFloat(navigator.appVersion.split("MSIE")[1])}if(aG&&(!aG.getContext||!aG.getContext("2d").fillText)){aE=B.createElement("DIV");for(aB=0;aB<aD.length;++aB){aE[aD[aB]]=aG[aD[aB]]}aG.parentNode.insertBefore(aE,aG);aG.parentNode.removeChild(aG);throw 0}for(aB in x.options){this[aB]=aC&&ae(aC[aB])?aC[aB]:(ae(x[aB])?x[aB]:x.options[aB])}this.canvas=aG;this.ctxt=aG.getContext("2d");this.z1=250/this.depth;this.z2=this.z1/this.zoom;this.radius=ax(aG.height,aG.width)*0.0075;this.max_weight=[];this.min_weight=[];this.textFont=this.textFont&&m(this.textFont);this.textHeight*=1;this.pulsateTo=ao(this.pulsateTo,0,1);this.minBrightness=ao(this.minBrightness,0,1);this.maxBrightness=ao(this.maxBrightness,this.minBrightness,1);this.ctxt.textBaseline="top";this.lx=(this.lock+"").indexOf("x")+1;this.ly=(this.lock+"").indexOf("y")+1;this.frozen=this.dx=this.dy=this.fixedAnim=this.touched=0;this.fixedAlpha=1;this.source=j||aH;this.transform=P.Identity();this.startTime=this.time=E();this.Animate=this.dragControl?this.AnimateDrag:this.AnimatePosition;this.animTiming=(typeof x[this.animTiming]=="function"?x[this.animTiming]:x.Smooth);if(this.shadowBlur||this.shadowOffset[0]||this.shadowOffset[1]){this.ctxt.shadowColor=this.shadow;this.shadow=this.ctxt.shadowColor;this.shadowAlpha=ah()}else{delete this.shadow}this.Load();if(j&&this.hideTags){(function(i){if(x.loaded){i.HideTags()}else{Z("load",function(){i.HideTags()},window)}})(this)}this.yaw=this.initial?this.initial[0]*this.maxSpeed:0;this.pitch=this.initial?this.initial[1]*this.maxSpeed:0;if(this.tooltip){if(this.tooltip=="native"){this.Tooltip=this.TooltipNative}else{this.Tooltip=this.TooltipDiv;if(!this.ttdiv){this.ttdiv=B.createElement("div");this.ttdiv.className=this.tooltipClass;this.ttdiv.style.position="absolute";this.ttdiv.style.zIndex=aG.style.zIndex+1;Z("mouseover",function(i){i.target.style.display="none"},this.ttdiv);B.body.appendChild(this.ttdiv)}}}else{this.Tooltip=this.TooltipNone}if(!this.noMouse&&!a[aH]){Z("mousemove",ab,aG);Z("mouseout",A,aG);Z("mouseup",ay,aG);Z("touchstart",R,aG);Z("touchend",p,aG);Z("touchcancel",p,aG);Z("touchmove",at,aG);if(this.dragControl){Z("mousedown",y,aG);Z("selectstart",au,aG)}if(this.wheelZoom){Z("mousewheel",ac,aG);Z("DOMMouseScroll",ac,aG)}a[aH]=1}if(!x.started){aF=window.requestAnimationFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;x.NextFrame=aF?x.NextFrameRAF:x.NextFrameTimeout;x.interval=this.interval;x.NextFrame(this.interval);x.started=1}}O=x.prototype;O.SourceElements=function(){if(B.querySelectorAll){return B.querySelectorAll("#"+this.source)}return[B.getElementById(this.source)]};O.HideTags=function(){var aB=this.SourceElements(),j;for(j=0;j<aB.length;++j){aB[j].style.display="none"}};O.GetTags=function(){var aF=this.SourceElements(),aE,aB=[],aD,aC;for(aD=0;aD<aF.length;++aD){aE=aF[aD].getElementsByTagName("a");for(aC=0;aC<aE.length;++aC){aB.push(aE[aC])}}return aB};O.CreateTag=function(aE,j){var aH=aE.getElementsByTagName("img"),aD,aI,aG,aB,aF,aC;j=j||[0,0,0];if(aH.length){aD=new Image;aD.src=aH[0].src;aI=new d(this,aD,aE,j,0,0);ap(aD,aH[0],aI,this);return aI}aG=new av(aE);aI=aG.Lines();aB=this.textFont||m(W(aE,"font-family"));if(this.splitWidth){aI=aG.SplitWidth(this.splitWidth,this.ctxt,aB,this.textHeight)}aF=this.bgColour=="tag"?W(aE,"background-color"):this.bgColour;aC=this.bgOutline=="tag"?W(aE,"color"):this.bgOutline;return new d(this,aI,aE,j,2,this.textHeight+2,this.textColour||W(aE,"color"),aF,this.bgRadius,aC,this.bgOutlineThickness,aB,this.padding,aG.original)};O.UpdateTag=function(aB,i){var aE=this.textColour||W(i,"color"),j=this.textFont||m(W(i,"font-family")),aD=this.bgColour=="tag"?W(i,"background-color"):this.bgColour,aC=this.bgOutline=="tag"?W(i,"color"):this.bgOutline;aB.a=i;aB.title=i.title;if(aB.colour!=aE||aB.textFont!=j||aB.bgColour!=aD||aB.bgOutline!=aC){aB.SetFont(j,aE,aD,aC)}};O.Weight=function(aH){var aD=aH.length,aF,aB,aI,aE=[],j,aC=this.weightFrom?this.weightFrom.split(/[, ]/):[null],aG=aC.length;for(aB=0;aB<aD;++aB){aE[aB]=[];for(aI=0;aI<aG;++aI){aF=s(aH[aB].a,aC[aI],this.textHeight);if(!this.max_weight[aI]||aF>this.max_weight[aI]){this.max_weight[aI]=aF}if(!this.min_weight[aI]||aF<this.min_weight[aI]){this.min_weight[aI]=aF}aE[aB][aI]=aF}}for(aI=0;aI<aG;++aI){if(this.max_weight[aI]>this.min_weight[aI]){j=1}}if(j){for(aB=0;aB<aD;++aB){aH[aB].SetWeight(aE[aB])}}};O.Load=function(){var aK=this.GetTags(),aG=[],aJ,aF,aC,aB,j,aD,aI,aE=[],aH={sphere:o,vcylinder:ai,hcylinder:an,vring:c,hring:l};if(aK.length){aE.length=aK.length;for(aI=0;aI<aK.length;++aI){aE[aI]=aI}this.shuffleTags&&aj(aE);aC=100*this.radiusX;aB=100*this.radiusY;j=100*this.radiusZ;this.max_radius=q(aC,q(aB,j));if(this.shapeArgs){this.shapeArgs[0]=aK.length}else{aF=this.shape.toString().split(/[(),]/);aJ=aF.shift();this.shape=aH[aJ]||aH.sphere;this.shapeArgs=[aK.length,aC,aB,j].concat(aF)}aD=this.shape.apply(this,this.shapeArgs);this.listLength=aK.length;for(aI=0;aI<aK.length;++aI){aG.push(this.CreateTag(aK[aE[aI]],aD[aI]))}this.weight&&this.Weight(aG,true)}this.taglist=aG};O.Update=function(){var aK=this.GetTags(),aJ=[],aE=this.taglist,aL,aI=[],aG=[],aC,aH,aB,aF,aD;if(!this.shapeArgs){return this.Load()}if(aK.length){aB=this.listLength=aK.length;aH=aE.length;for(aF=0;aF<aH;++aF){aJ.push(aE[aF]);aG.push(aF)}for(aF=0;aF<aB;++aF){for(aD=0,aL=0;aD<aH;++aD){if(aE[aD].EqualTo(aK[aF])){this.UpdateTag(aJ[aD],aK[aF]);aL=aG[aD]=-1}}if(!aL){aI.push(aF)}}for(aF=0,aD=0;aF<aH;++aF){if(aG[aD]==-1){aG.splice(aD,1)}else{++aD}}if(aG.length){aj(aG);while(aG.length&&aI.length){aF=aG.shift();aD=aI.shift();aJ[aF]=this.CreateTag(aK[aD])}aG.sort(function(j,i){return j-i});while(aG.length){aJ.splice(aG.pop(),1)}}aD=aJ.length/(aI.length+1);aF=0;while(aI.length){aJ.splice(ak(++aF*aD),0,this.CreateTag(aK[aI.shift()]))}this.shapeArgs[0]=aB=aJ.length;aC=this.shape.apply(this,this.shapeArgs);for(aF=0;aF<aB;++aF){aJ[aF].position=new aa(aC[aF][0],aC[aF][1],aC[aF][2])}this.weight&&this.Weight(aJ)}this.taglist=aJ};O.SetShadow=function(i){i.shadowBlur=this.shadowBlur;i.shadowOffsetX=this.shadowOffset[0];i.shadowOffsetY=this.shadowOffset[1]};O.Draw=function(aL){if(this.paused){return}var aF=this.canvas,aD=aF.width,aK=aF.height,aN=0,aC=(aL-this.time)*x.interval/1000,aJ=aD/2+this.offsetX,aI=aK/2+this.offsetY,aR=this.ctxt,aH,aS,aP,aB=-1,aE=this.taglist,aO=aE.length,j=this.frontSelect,aM=(this.centreFunc==au),aG;this.time=aL;if(this.frozen&&this.drawn){return this.Animate(aD,aK,aC)}aG=this.AnimateFixed();aR.setTransform(1,0,0,1,0,0);for(aP=0;aP<aO;++aP){aE[aP].Calc(this.transform,this.fixedAlpha)}aE=z(aE,function(aT,i){return i.z-aT.z});if(aG&&this.fixedAnim.active){aH=this.fixedAnim.tag.UpdateActive(aR,aJ,aI)}else{this.active=null;for(aP=0;aP<aO;++aP){aS=this.mx>=0&&this.my>=0&&this.taglist[aP].CheckActive(aR,aJ,aI);if(aS&&aS.sc>aN&&(!j||aS.z<=0)){aH=aS;aB=aP;aH.tag=this.taglist[aP];aN=aS.sc}}this.active=aH}this.txtOpt||(this.shadow&&this.SetShadow(aR));aR.clearRect(0,0,aD,aK);for(aP=0;aP<aO;++aP){if(!aM&&aE[aP].z<=0){try{this.centreFunc(aR,aD,aK,aJ,aI)}catch(aQ){alert(aQ);this.centreFunc=au}aM=true}if(!(aH&&aH.tag==aE[aP]&&aH.PreDraw(aR,aE[aP],aJ,aI))){aE[aP].Draw(aR,aJ,aI)}aH&&aH.tag==aE[aP]&&aH.PostDraw(aR)}if(this.freezeActive&&aH){this.Freeze()}else{this.UnFreeze();this.drawn=(aO==this.listLength)}if(this.fixedCallback){this.fixedCallback(this,this.fixedCallbackTag);this.fixedCallback=null}aG||this.Animate(aD,aK,aC);aH&&aH.LastDraw(aR);aF.style.cursor=aH?this.activeCursor:"";this.Tooltip(aH,this.taglist[aB])};O.TooltipNone=function(){};O.TooltipNative=function(j,i){this.canvas.title=j&&i&&i.title?i.title:""};O.TooltipDiv=function(aD,j){var i=this,aC=i.ttdiv.style,aE=i.canvas.id,aB="none";if(aD&&j&&j.title){if(j.title!=i.ttdiv.innerHTML){aC.display=aB}i.ttdiv.innerHTML=j.title;j.title=i.ttdiv.innerHTML;if(aC.display==aB&&!i.tttimer){i.tttimer=setTimeout(function(){var aF=Y(aE);aC.display="block";aC.left=aF.x+i.mx+"px";aC.top=aF.y+i.my+24+"px";i.tttimer=null},i.tooltipDelay)}}else{aC.display=aB}};O.Transform=function(aE,i,aG){if(i||aG){var j=ad(i),aF=v(i),aH=ad(aG),aD=v(aG),aB=new P([aD,0,aH,0,1,0,-aH,0,aD]),aC=new P([1,0,0,0,aF,-j,0,j,aF]);aE.transform=aE.transform.mul(aB.mul(aC))}};O.AnimateFixed=function(){var aB,j,aD,i,aC;if(this.fadeIn){j=E()-this.startTime;if(j>=this.fadeIn){this.fadeIn=0;this.fixedAlpha=1}else{this.fixedAlpha=j/this.fadeIn}}if(this.fixedAnim){if(!this.fixedAnim.transform){this.fixedAnim.transform=this.transform}aB=this.fixedAnim,j=E()-aB.t0,aD=aB.angle,i,aC=this.animTiming(aB.t,j);this.transform=aB.transform;if(j>=aB.t){this.fixedCallbackTag=aB.tag;this.fixedCallback=aB.cb;this.fixedAnim=this.yaw=this.pitch=0}else{aD*=aC}i=P.Rotation(aD,aB.axis);this.transform=this.transform.mul(i);return(this.fixedAnim!=0)}return false};O.AnimatePosition=function(aB,aE,aC){var j=this,i=j.mx,aG=j.my,aD,aF;if(!j.frozen&&i>=0&&aG>=0&&i<aB&&aG<aE){aD=j.maxSpeed,aF=j.reverse?-1:1;j.lx||(j.yaw=((i*2*aD/aB)-aD)*aF*aC);j.ly||(j.pitch=((aG*2*aD/aE)-aD)*-aF*aC);j.initial=null}else{if(!j.initial){if(j.frozen&&!j.freezeDecel){j.yaw=j.pitch=0}else{j.Decel(j)}}}this.Transform(j,j.pitch,j.yaw)};O.AnimateDrag=function(j,aD,aC){var i=this,aB=100*aC*i.maxSpeed/i.max_radius/i.zoom;if(i.dx||i.dy){i.lx||(i.yaw=i.dx*aB/i.stretchX);i.ly||(i.pitch=i.dy*-aB/i.stretchY);i.dx=i.dy=0;i.initial=null}else{if(!i.initial){i.Decel(i)}}this.Transform(i,i.pitch,i.yaw)};O.Freeze=function(){if(!this.frozen){this.preFreeze=[this.yaw,this.pitch];this.frozen=1;this.drawn=0}};O.UnFreeze=function(){if(this.frozen){this.yaw=this.preFreeze[0];this.pitch=this.preFreeze[1];this.frozen=0}};O.Decel=function(i){var aB=i.minSpeed,aC=J(i.yaw),j=J(i.pitch);if(!i.lx&&aC>aB){i.yaw=aC>i.z0?i.yaw*i.decel:0}if(!i.ly&&j>aB){i.pitch=j>i.z0?i.pitch*i.decel:0}};O.Zoom=function(i){this.z2=this.z1*(1/i);this.drawn=0};O.Clicked=function(aB){var i=this.active;try{if(i&&i.tag){if(this.clickToFront===false||this.clickToFront===null){i.tag.Clicked(aB)}else{this.TagToFront(i.tag,this.clickToFront,function(){i.tag.Clicked(aB)},true)}}}catch(j){}};O.Wheel=function(j){var aB=this.zoom+this.zoomStep*(j?1:-1);this.zoom=ax(this.zoomMax,q(this.zoomMin,aB));this.Zoom(this.zoom)};O.BeginDrag=function(i){this.down=Q(i,this.canvas);i.cancelBubble=true;i.returnValue=false;i.preventDefault&&i.preventDefault()};O.Drag=function(aD,aC){if(this.dragControl&&this.down){var aB=this.dragThreshold*this.dragThreshold,j=aC.x-this.down.x,i=aC.y-this.down.y;if(this.dragging||j*j+i*i>aB){this.dx=j;this.dy=i;this.dragging=1;this.down=aC}}};O.EndDrag=function(){var i=this.dragging;this.dragging=this.down=null;return i};O.Pause=function(){this.paused=true};O.Resume=function(){this.paused=false};O.SetSpeed=function(j){this.initial=j;this.yaw=j[0]*this.maxSpeed;this.pitch=j[1]*this.maxSpeed};O.FindTag=function(aB){if(!ae(aB)){return null}ae(aB.index)&&(aB=aB.index);if(!G(aB)){return this.taglist[aB]}var aC,aD,j;if(ae(aB.id)){aC="id",aD=aB.id}else{if(ae(aB.text)){aC="innerText",aD=aB.text}}for(j=0;j<this.taglist.length;++j){if(this.taglist[j].a[aC]==aD){return this.taglist[j]}}};O.RotateTag=function(aJ,aC,aI,i,aG,aB){var aH=aJ.xformed,aE=new aa(aH.x,aH.y,aH.z),aD=af(aI,aC),j=aE.angle(aD),aF=aE.cross(aD).unit();if(j==0){this.fixedCallbackTag=aJ;this.fixedCallback=aG}else{this.fixedAnim={angle:-j,axis:aF,t:i,t0:E(),cb:aG,tag:aJ,active:aB}}};O.TagToFront=function(i,aB,aC,j){this.RotateTag(i,0,0,aB,aC,j)};x.Start=function(aB,i,j){x.tc[aB]=new x(aB,i,j)};function ar(i,j){x.tc[j]&&x.tc[j][i]()}x.Linear=function(i,j){return j/i};x.Smooth=function(i,j){return 0.5-v(j*Math.PI/i)/2};x.Pause=function(i){ar("Pause",i)};x.Resume=function(i){ar("Resume",i)};x.Reload=function(i){ar("Load",i)};x.Update=function(i){ar("Update",i)};x.SetSpeed=function(j,i){if(G(i)&&x.tc[j]&&!isNaN(i[0])&&!isNaN(i[1])){x.tc[j].SetSpeed(i);return true}return false};x.TagToFront=function(j,i){if(!G(i)){return false}i.lat=i.lng=0;return x.RotateTag(j,i)};x.RotateTag=function(aB,i){if(G(i)&&x.tc[aB]){if(isNaN(i.time)){i.time=500}var j=x.tc[aB].FindTag(i);if(j){x.tc[aB].RotateTag(j,i.lat,i.lng,i.time,i.callback,i.active);return true}}return false};x.Delete=function(i){delete a[i];delete x.tc[i]};x.NextFrameRAF=function(){requestAnimationFrame(D)};x.NextFrameTimeout=function(i){setTimeout(M,i)};x.tc={};x.options={z1:20000,z2:20000,z0:0.0002,freezeActive:false,freezeDecel:false,activeCursor:"pointer",pulsateTo:1,pulsateTime:3,reverse:false,depth:0.5,maxSpeed:0.05,minSpeed:0,decel:0.95,interval:20,minBrightness:0.1,maxBrightness:1,outlineColour:"#ffff99",outlineThickness:2,outlineOffset:5,outlineMethod:"outline",outlineRadius:0,textColour:"#ff99ff",textHeight:15,textFont:"Helvetica, Arial, sans-serif",shadow:"#000",shadowBlur:0,shadowOffset:[0,0],initial:null,hideTags:true,zoom:1,weight:false,weightMode:"size",weightFrom:null,weightSize:1,weightSizeMin:null,weightSizeMax:null,weightGradient:{0:"#f00",0.33:"#ff0",0.66:"#0f0",1:"#00f"},txtOpt:true,txtScale:2,frontSelect:false,wheelZoom:true,zoomMin:0.3,zoomMax:3,zoomStep:0.05,shape:"sphere",lock:null,tooltip:null,tooltipDelay:300,tooltipClass:"tctooltip",radiusX:1,radiusY:1,radiusZ:1,stretchX:1,stretchY:1,offsetX:0,offsetY:0,shuffleTags:false,noSelect:false,noMouse:false,imageScale:1,paused:false,dragControl:false,dragThreshold:4,centreFunc:au,splitWidth:0,animTiming:"Smooth",clickToFront:false,fadeIn:0,padding:0,bgColour:null,bgRadius:0,bgOutline:null,bgOutlineThickness:0,outlineIncrease:4};for(K in x.options){x[K]=x.options[K]}window.TagCanvas=x;Z("load",function(){x.loaded=1},window)})();
