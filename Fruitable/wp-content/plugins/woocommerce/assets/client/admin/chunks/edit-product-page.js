"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[3307],{86541:(e,r,t)=>{t.r(r),t.d(r,{default:()=>x});var o=t(51393),n=t(14599),i=t(69307),c=t(46530),d=t(98817),a=t(93601),s=t(55609),u=t(65736),p=t(57726),l=t(9818),_=t(37798),m=t(17869),h=t(81514);function x(){const{productId:e,variationId:r}=(0,a.UO)(),t=function(e){const[r,t]=(0,i.useState)(void 0);return(0,i.useEffect)((()=>{(0,l.resolveSelect)(_.store).getEntityRecord("postType","product_variation",Number.parseInt(e,10)).then((e=>{t(e)})).catch((e=>{throw t(void 0),e}))}),[e]),r}(r);return(0,i.useEffect)((()=>{(0,d.registerPlugin)("wc-admin-more-menu",{scope:"woocommerce-product-block-editor",render:()=>(0,h.jsx)(h.Fragment,{children:(0,h.jsx)(o.__experimentalWooProductMoreMenuItem,{children:({onClose:e})=>(0,h.jsxs)(h.Fragment,{children:[(0,h.jsx)(m.XG,{onClose:e}),(0,h.jsx)(p.e,{productType:"product_variation",onClose:e})]})})})});const e=(0,o.__experimentalInitBlocks)();return()=>{(0,d.unregisterPlugin)("wc-admin-more-menu"),e()}}),[]),(0,i.useEffect)((function(){e?(0,n.recordEvent)("product_edit_view",{source:o.TRACKS_SOURCE,product_id:e}):(0,n.recordEvent)("product_add_view",{source:o.TRACKS_SOURCE})}),[e]),t?(0,h.jsxs)(h.Fragment,{children:[(0,h.jsx)(o.__experimentalEditor,{productId:t.id,postType:"product_variation"}),(0,h.jsx)(c.WooFooterItem,{order:0,children:(0,h.jsxs)(h.Fragment,{children:[(0,h.jsx)(o.__experimentalVariationSwitcherFooter,{parentId:t?.parent_id,variationId:t?.id}),(0,h.jsx)(o.__experimentalProductMVPFeedbackModalContainer,{productId:t?.parent_id})]})})]}):(0,h.jsx)("div",{className:"woocommerce-layout__loading",children:(0,h.jsx)(s.Spinner,{"aria-label":(0,u.__)("Creating the product","woocommerce")})})}(0,o.productEditorHeaderApiFetchMiddleware)(),(0,o.productApiFetchMiddleware)()}}]);