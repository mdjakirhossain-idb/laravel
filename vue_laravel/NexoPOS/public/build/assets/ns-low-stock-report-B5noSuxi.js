import{k as w}from"./print-CUp0zkZ6.js";import{c as k,e as R}from"./components-D1XfZkek.js";import{a as b,b as m}from"./bootstrap-DVL_FG6D.js";import{_ as u,n as v}from"./currency-gBUix5n2.js";import{l as T,b as x}from"./ns-prompt-popup-Dy-4MSb-.js";import{j as N}from"./join-array-DLflg2fd.js";import{_ as C}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{r as P,o as c,c as i,b as t,t as s,f as h,F as y,e as f,g as S}from"./runtime-core.esm-bundler-BjZqYwU2.js";import"./ns-avatar-image-B9svyei2.js";import"./index.es-CuHZTwqh.js";import"./chart-CAYz1qzV.js";const j={name:"ns-low-stock-report",props:["storeLogo","storeName"],mounted(){this.reportType=this.options[0].value,this.loadRelevantReport()},components:{nsDatepicker:k,nsDateTimePicker:R,nsPaginate:T},data(){return{ns:window.ns,products:[],options:[{label:u("Stock Report"),value:"stock_report"},{label:u("Low Stock Report"),value:"low_stock"}],stockReportResult:{},reportType:"",reportTypeName:"",unitNames:"",categoryName:"",categoryIds:[],unitIds:[],validation:new w}},watch:{reportType(){const l=this.options.filter(r=>r.value===this.reportType);l.length>0?this.reportTypeName=l[0].label:this.reportTypeName=u("N/A")}},methods:{__:u,nsCurrency:v,joinArray:N,async selectReport(){try{const l=await new Promise((r,d)=>{Popup.show(x,{label:u("Report Type"),options:this.options,resolve:r,reject:d})});this.reportType=l,this.loadRelevantReport()}catch{}},async selectUnits(){b.get("/api/units").subscribe({next:async l=>{try{const r=await new Promise((a,o)=>{Popup.show(x,{label:u("Select Units"),type:"multiselect",options:l.map(e=>({label:e.name,value:e.id})),resolve:a,reject:o})}),d=l.filter(a=>r.includes(a.id)).map(a=>a.name);this.unitNames=this.joinArray(d),this.unitIds=r,this.loadRelevantReport()}catch(r){console.log(r)}},error:l=>{m.error(u("An error has occured while loading the units.")).subscribe()}})},async selectCategories(){b.get("/api/categories").subscribe({next:async l=>{try{const r=await new Promise((a,o)=>{Popup.show(x,{label:u("Select Categories"),type:"multiselect",options:l.map(e=>({label:e.name,value:e.id})),resolve:a,reject:o})}),d=l.filter(a=>r.includes(a.id)).map(a=>a.name);this.categoryName=this.joinArray(d),this.categoryIds=r,this.loadRelevantReport()}catch(r){console.log(r)}},error:l=>{m.error(u("An error has occured while loading the categories.")).subscribe()}})},loadRelevantReport(){switch(this.reportType){case"stock_report":this.loadStockReport();break;case"low_stock":this.loadReport();break}},printSaleReport(){this.$htmlToPaper("low-stock-report")},loadStockReport(l=null){b.post(l||"/api/reports/stock-report",{categories:this.categoryIds,units:this.unitIds}).subscribe({next:r=>{this.stockReportResult=r},error:r=>{m.error(r.message).subscribe()}})},totalSum(l,r,d){if(l.data!==void 0){const o=l.data.map(e=>e.unit_quantities).map(e=>{const p=e.map(n=>n[r]*n[d]);return p.length>0?p.reduce((n,_)=>parseFloat(n)+parseFloat(_)):0});if(o.length>0)return o.reduce((e,p)=>parseFloat(e)+parseFloat(p))}return 0},sum(l,r){if(l.data!==void 0){const a=l.data.map(o=>o.unit_quantities).map(o=>{const e=o.map(p=>p[r]);return e.length>0?e.reduce((p,n)=>parseFloat(p)+parseFloat(n)):0});if(a.length>0)return a.reduce((o,e)=>parseFloat(o)+parseFloat(e))}return 0},loadReport(){b.post("/api/reports/low-stock",{categories:this.categoryIds,units:this.unitIds}).subscribe({next:l=>{this.products=l},error:l=>{m.error(l.message).subscribe()}})}}},F={id:"report-section",class:"px-4"},q={class:"flex -mx-2"},A={class:"px-2"},I={class:"ns-button"},L=t("i",{class:"las la-sync-alt text-xl"},null,-1),U={class:"pl-2"},B={class:"px-2"},D={class:"ns-button"},V=t("i",{class:"las la-print text-xl"},null,-1),E={class:"pl-2"},H={class:"px-2"},z={class:"ns-button"},G=t("i",{class:"las la-filter text-xl"},null,-1),J={class:"pl-2"},K={class:"px-2"},M={class:"ns-button"},O=t("i",{class:"las la-filter text-xl"},null,-1),W={class:"pl-2"},X={class:"px-2"},Y={class:"ns-button"},Z=t("i",{class:"las la-filter text-xl"},null,-1),Q={class:"pl-2"},$={id:"low-stock-report",class:"anim-duration-500 fade-in-entrance"},tt={class:"flex w-full"},et={class:"my-4 flex justify-between w-full"},st={class:"text-primary"},rt={class:"pb-1 border-b border-dashed"},ot={class:"pb-1 border-b border-dashed"},lt={class:"pb-1 border-b border-dashed"},nt=["src","alt"],at={class:"text-primary shadow rounded my-4"},ct={class:"ns-box"},it={key:0,class:"ns-box-body"},dt={class:"table ns-table w-full"},pt={class:"border p-2 text-left"},_t={class:"border p-2 text-left"},ut={width:"150",class:"border p-2 text-right"},ht={width:"150",class:"border border-info-secondary bg-info-primary p-2 text-right"},bt={width:"150",class:"border border-success-secondary bg-success-primary p-2 text-right"},mt={key:0},yt={colspan:"4",class:"p-2 border text-center"},xt={class:"p-2 border"},ft={class:"p-2 border"},gt={class:"p-2 border text-right"},wt={class:"p-2 border text-right"},kt={class:"p-2 border border-success-secondary bg-success-primary text-right"},Rt={key:1,class:"ns-box-body"},vt={class:"table ns-table w-full"},Tt={class:"border p-2 text-left"},Nt={class:"border p-2 text-left"},Ct={width:"150",class:"border p-2 text-right"},Pt={width:"150",class:"border p-2 text-right"},St={width:"150",class:"border p-2 text-right"},jt={key:0},Ft={colspan:"5",class:"p-2 border text-center"},qt={class:"p-2 border"},At={class:"flex flex-col"},It={class:"p-2 border"},Lt={class:"p-2 border text-right"},Ut={class:"p-2 border text-right"},Bt={class:"p-2 border text-right"},Dt=t("td",{class:"p-2 border"},null,-1),Vt=t("td",{class:"p-2 border"},null,-1),Et=t("td",{class:"p-2 border"},null,-1),Ht={class:"p-2 border text-right"},zt={class:"p-2 border text-right"},Gt={key:0,class:"flex justify-end p-2"};function Jt(l,r,d,a,o,e){const p=P("ns-paginate");return c(),i("div",F,[t("div",q,[t("div",A,[t("div",I,[t("button",{onClick:r[0]||(r[0]=n=>e.loadRelevantReport()),class:"rounded flex justify-between shadow py-1 items-center px-2"},[L,t("span",U,s(e.__("Load")),1)])])]),t("div",B,[t("div",D,[t("button",{onClick:r[1]||(r[1]=n=>e.printSaleReport()),class:"rounded flex justify-between shadow py-1 items-center px-2"},[V,t("span",E,s(e.__("Print")),1)])])]),t("div",H,[t("div",z,[t("button",{onClick:r[2]||(r[2]=n=>e.selectReport()),class:"rounded flex justify-between shadow py-1 items-center px-2"},[G,t("span",J,s(e.__("Report Type"))+" : "+s(o.reportTypeName),1)])])]),t("div",K,[t("div",M,[t("button",{onClick:r[3]||(r[3]=n=>e.selectCategories()),class:"rounded flex justify-between shadow py-1 items-center px-2"},[O,t("span",W,s(e.__("Categories"))+" : "+s(o.categoryName||e.__("All Categories")),1)])])]),t("div",X,[t("div",Y,[t("button",{onClick:r[4]||(r[4]=n=>e.selectUnits()),class:"rounded flex justify-between shadow py-1 items-center px-2"},[Z,t("span",Q,s(e.__("Units"))+" : "+s(o.unitNames||e.__("All Units")),1)])])])]),t("div",$,[t("div",tt,[t("div",et,[t("div",st,[t("ul",null,[t("li",rt,s(e.__("Date : {date}").replace("{date}",o.ns.date.current)),1),t("li",ot,s(e.__("Document : {reportTypeName}").replace("{reportTypeName}",o.reportTypeName)),1),t("li",lt,s(e.__("By : {user}").replace("{user}",o.ns.user.username)),1)])]),t("div",null,[t("img",{class:"w-24",src:d.storeLogo,alt:d.storeName},null,8,nt)])])]),t("div",at,[t("div",ct,[o.reportType==="low_stock"?(c(),i("div",it,[t("table",dt,[t("thead",null,[t("tr",null,[t("th",pt,s(e.__("Product")),1),t("th",_t,s(e.__("Unit")),1),t("th",ut,s(e.__("Threshold")),1),t("th",ht,s(e.__("Quantity")),1),t("th",bt,s(e.__("Price")),1)])]),t("tbody",null,[o.products.length===0?(c(),i("tr",mt,[t("td",yt,[t("span",null,s(e.__("There is no product to display...")),1)])])):h("",!0),(c(!0),i(y,null,f(o.products,(n,_)=>(c(),i("tr",{key:_,class:"text-sm"},[t("td",xt,s(n.product.name),1),t("td",ft,s(n.unit.name),1),t("td",gt,s(n.low_quantity),1),t("td",wt,s(n.quantity),1),t("td",kt,s(e.nsCurrency(n.quantity*n.sale_price)),1)]))),128))])])])):h("",!0),o.reportType==="stock_report"?(c(),i("div",Rt,[t("table",vt,[t("thead",null,[t("tr",null,[t("th",Tt,s(e.__("Product")),1),t("th",Nt,s(e.__("Unit")),1),t("th",Ct,s(e.__("Price")),1),t("th",Pt,s(e.__("Quantity")),1),t("th",St,s(e.__("Total Price")),1)])]),t("tbody",null,[o.stockReportResult.data===void 0||o.stockReportResult.data.length===0?(c(),i("tr",jt,[t("td",Ft,[t("span",null,s(e.__("There is no product to display...")),1)])])):h("",!0),o.stockReportResult.data!==void 0?(c(!0),i(y,{key:1},f(o.stockReportResult.data,n=>(c(),i(y,null,[(c(!0),i(y,null,f(n.unit_quantities,(_,g)=>(c(),i("tr",{key:g,class:"text-sm"},[t("td",qt,[t("div",At,[t("span",null,s(n.name),1)])]),t("td",It,s(_.unit.name),1),t("td",Lt,s(e.nsCurrency(_.sale_price)),1),t("td",Ut,s(_.quantity),1),t("td",Bt,s(e.nsCurrency(_.quantity*_.sale_price)),1)]))),128))],64))),256)):h("",!0)]),t("tfoot",null,[t("tr",null,[Dt,Vt,Et,t("td",Ht,s(e.sum(o.stockReportResult,"quantity")),1),t("td",zt,s(e.nsCurrency(e.totalSum(o.stockReportResult,"sale_price","quantity"))),1)])])]),o.stockReportResult.data?(c(),i("div",Gt,[S(p,{onLoad:r[5]||(r[5]=n=>e.loadStockReport(n)),pagination:o.stockReportResult},null,8,["pagination"])])):h("",!0)])):h("",!0)])])])])}const se=C(j,[["render",Jt]]);export{se as default};
