import{j as r}from"./print-CUp0zkZ6.js";import{b as n}from"./ns-pos-order-type-popup-Du3xpC7f.js";import{_ as p}from"./currency-gBUix5n2.js";import{_ as i}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{o as l,c as a,b as t,t as d}from"./runtime-core.esm-bundler-BjZqYwU2.js";import"./bootstrap-DVL_FG6D.js";import"./chart-CAYz1qzV.js";import"./ns-prompt-popup-Dy-4MSb-.js";import"./ns-orders-preview-popup-DJHM7uQw.js";import"./index.es-CuHZTwqh.js";const _={name:"ns-pos-delivery-button",methods:{__:p,openOrderTypeSelection(){r.show(n)}},beforeDestroy(){nsHotPress.destroy("ns_pos_keyboard_order_type")},mounted(){for(let e in nsShortcuts)["ns_pos_keyboard_order_type"].includes(e)&&nsHotPress.create("ns_pos_keyboard_order_type").whenNotVisible([".is-popup"]).whenPressed(nsShortcuts[e]!==null?nsShortcuts[e].join("+"):null,o=>{o.preventDefault(),this.openOrderTypeSelection()})}},c={class:"ns-button default"},u=t("i",{class:"mr-1 text-xl las la-truck"},null,-1);function m(e,o,f,y,h,s){return l(),a("div",c,[t("button",{onClick:o[0]||(o[0]=b=>s.openOrderTypeSelection()),class:"rounded shadow flex-shrink-0 h-12 flex items-center px-2 py-1 text-sm"},[u,t("span",null,d(s.__("Order Type")),1)])])}const V=i(_,[["render",m]]);export{V as default};
