(()=>{var e,t,o,r={9083:(e,t,o)=>{"use strict";o.r(t);const r=window.wc.wcSettings;var l=o(1609),n=o(5573);const c=(0,l.createElement)(n.SVG,{width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,l.createElement)(n.Path,{fillRule:"evenodd",clipRule:"evenodd",d:"M6 10C7.10457 10 8 9.10457 8 8C8 6.89543 7.10457 6 6 6C4.89543 6 4 6.89543 4 8C4 9.10457 4.89543 10 6 10ZM20 8.75H11.1111V7.25L20 7.25V8.75ZM20 15.75L11.1111 15.75V14.25L20 14.25V15.75ZM8 15C8 16.1046 7.10457 17 6 17C4.89543 17 4 16.1046 4 15C4 13.8954 4.89543 13 6 13C7.10457 13 8 13.8954 8 15Z",fill:"currentColor"})),i=window.wp.blocks,s=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","name":"woocommerce/product-filter-checkbox-list","version":"1.0.0","title":"List","description":"Display a list of filter options.","category":"woocommerce","keywords":["WooCommerce"],"textdomain":"woocommerce","apiVersion":3,"ancestor":["woocommerce/product-filter-attribute","woocommerce/product-filter-status"],"supports":{"color":{"enableContrastChecker":false},"interactivity":true},"usesContext":["filterData"],"attributes":{"optionElementBorder":{"type":"string","default":""},"customOptionElementBorder":{"type":"string","default":""},"optionElementSelected":{"type":"string","default":""},"customOptionElementSelected":{"type":"string","default":""},"optionElement":{"type":"string","default":""},"customOptionElement":{"type":"string","default":""}}}');var a=o(851),p=o(7723);const m=window.wp.components,u=e=>(0,l.createElement)(n.SVG,{viewBox:"0 0 10 8",fill:"none",xmlns:"http://www.w3.org/2000/svg",...e},(0,l.createElement)(n.Path,{d:"M9.25 1.19922L3.75 6.69922L1 3.94922",stroke:"currentColor",strokeWidth:"1.5",strokeLinecap:"round",strokeLinejoin:"round"}));var d=o(6087);const b=window.wp.blockEditor;function w(e,t=""){return null!=e&&e.length?`var(--wp--preset--color--${e})`:t||""}function f(e){const{optionElement:t,optionElementBorder:o,optionElementSelected:r,customOptionElement:l,customOptionElementBorder:n,customOptionElementSelected:c}=e,i={"--wc-product-filter-checkbox-list-option-element":w(t,l),"--wc-product-filter-checkbox-list-option-element-border":w(o,n),"--wc-product-filter-checkbox-list-option-element-selected":w(r,c)};return Object.keys(i).reduce(((e,t)=>(i[t]&&(e[t]=i[t]),e)),{})}function h(e){const{optionElement:t,optionElementBorder:o,optionElementSelected:r,customOptionElement:l,customOptionElementBorder:n,customOptionElementSelected:c}=e;return{"has-option-element-color":t||l,"has-option-element-border-color":o||n,"has-option-element-selected-color":r||c}}o(2742),o(1220);const E=(0,b.withColors)({optionElementBorder:"option-element-border",optionElementSelected:"option-element-border",optionElement:"option-element"})((e=>{const{clientId:t,context:o,attributes:r,setAttributes:n,optionElementBorder:c,setOptionElementBorder:i,optionElementSelected:s,setOptionElementSelected:w,optionElement:E,setOptionElement:k}=e,{customOptionElementBorder:O,customOptionElementSelected:g,customOptionElement:v}=r,{filterData:x}=o,{isLoading:_,items:y}=x,C=(0,b.__experimentalUseMultipleOriginColorsAndGradients)(),S=(0,b.useBlockProps)({className:(0,a.A)("wc-block-product-filter-checkbox-list",{"is-loading":_,...h(r)}),style:f(r)}),B=(0,d.useMemo)((()=>[...Array(5)].map(((e,t)=>(0,l.createElement)("li",{key:t,style:{width:Math.floor(75*Math.random())+"%"}}," ")))),[]);if(!y)return(0,l.createElement)(l.Fragment,null);const j=y.length>15;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)("div",{...S},(0,l.createElement)(m.Disabled,null,(0,l.createElement)("ul",{className:"wc-block-product-filter-checkbox-list__list"},_&&B,!_&&(j?y.slice(0,15):y).map(((e,t)=>(0,l.createElement)("li",{key:t,className:"wc-block-product-filter-checkbox-list__item"},(0,l.createElement)("label",{htmlFor:`interactive-checkbox-${t}`,className:" wc-block-product-filter-checkbox-list__label"},(0,l.createElement)("span",{className:"wc-block-product-filter-checkbox-list__input-wrapper"},(0,l.createElement)("input",{name:`interactive-checkbox-${t}`,type:"checkbox",className:"wc-block-product-filter-checkbox-list__input",defaultChecked:!!e.selected}),(0,l.createElement)(m.Icon,{className:"wc-block-product-filter-checkbox-list__mark",icon:u})),(0,l.createElement)("span",{className:"wc-block-product-filter-checkbox-list__text"},e.label)))))),!_&&j&&(0,l.createElement)("button",{className:"wc-block-product-filter-checkbox-list__show-more"},(0,p.__)("Show more…","woocommerce")))),(0,l.createElement)(b.InspectorControls,{group:"color"},C.hasColorsOrGradients&&(0,l.createElement)(b.__experimentalColorGradientSettingsDropdown,{__experimentalIsRenderedInSidebar:!0,settings:[{label:(0,p.__)("Option Element Border","woocommerce"),colorValue:c.color||O,isShownByDefault:!0,enableAlpha:!0,onColorChange:e=>{i(e),n({customOptionElementBorder:e})},resetAllFilter:()=>{i(""),n({customOptionElementBorder:""})}},{label:(0,p.__)("Option Element (Selected)","woocommerce"),colorValue:s.color||g,isShownByDefault:!0,enableAlpha:!0,onColorChange:e=>{w(e),n({customOptionElementSelected:e})},resetAllFilter:()=>{w(""),n({customOptionElementSelected:""})}},{label:(0,p.__)("Option Element","woocommerce"),colorValue:E.color||v,isShownByDefault:!0,enableAlpha:!0,onColorChange:e=>{k(e),n({customOptionElement:e})},resetAllFilter:()=>{k(""),n({customOptionElement:""})}}],panelId:t,...C})))}));(()=>{const{experimentalBlocksEnabled:e}=(0,r.getSetting)("wcBlocksConfig",{experimentalBlocksEnabled:!1});return e})()&&(0,i.registerBlockType)(s,{edit:E,icon:c,save:({attributes:e})=>{const t=b.useBlockProps.save({className:(0,a.A)("wc-block-product-filter-checkbox-list",e.className,h(e)),style:{...f(e)}});return(0,l.createElement)("div",{...t})}})},1220:()=>{},2742:()=>{},1609:e=>{"use strict";e.exports=window.React},6087:e=>{"use strict";e.exports=window.wp.element},7723:e=>{"use strict";e.exports=window.wp.i18n},5573:e=>{"use strict";e.exports=window.wp.primitives}},l={};function n(e){var t=l[e];if(void 0!==t)return t.exports;var o=l[e]={exports:{}};return r[e].call(o.exports,o,o.exports,n),o.exports}n.m=r,e=[],n.O=(t,o,r,l)=>{if(!o){var c=1/0;for(p=0;p<e.length;p++){for(var[o,r,l]=e[p],i=!0,s=0;s<o.length;s++)(!1&l||c>=l)&&Object.keys(n.O).every((e=>n.O[e](o[s])))?o.splice(s--,1):(i=!1,l<c&&(c=l));if(i){e.splice(p--,1);var a=r();void 0!==a&&(t=a)}}return t}l=l||0;for(var p=e.length;p>0&&e[p-1][2]>l;p--)e[p]=e[p-1];e[p]=[o,r,l]},n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},o=Object.getPrototypeOf?e=>Object.getPrototypeOf(e):e=>e.__proto__,n.t=function(e,r){if(1&r&&(e=this(e)),8&r)return e;if("object"==typeof e&&e){if(4&r&&e.__esModule)return e;if(16&r&&"function"==typeof e.then)return e}var l=Object.create(null);n.r(l);var c={};t=t||[null,o({}),o([]),o(o)];for(var i=2&r&&e;"object"==typeof i&&!~t.indexOf(i);i=o(i))Object.getOwnPropertyNames(i).forEach((t=>c[t]=()=>e[t]));return c.default=()=>e,n.d(l,c),l},n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.j=2404,(()=>{var e={2404:0};n.O.j=t=>0===e[t];var t=(t,o)=>{var r,l,[c,i,s]=o,a=0;if(c.some((t=>0!==e[t]))){for(r in i)n.o(i,r)&&(n.m[r]=i[r]);if(s)var p=s(n)}for(t&&t(o);a<c.length;a++)l=c[a],n.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return n.O(p)},o=self.webpackChunkwebpackWcBlocksMainJsonp=self.webpackChunkwebpackWcBlocksMainJsonp||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var c=n.O(void 0,[94],(()=>n(9083)));c=n.O(c),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["product-filter-checkbox-list"]=c})();