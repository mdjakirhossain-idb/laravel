import{_ as d,n as c}from"./currency-gBUix5n2.js";import{_ as a}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{r as i,o as _,c as f,b as e,t as s,g as m}from"./runtime-core.esm-bundler-BjZqYwU2.js";const x={name:"ns-sale-card-widget",methods:{__:d,nsCurrency:c},data(){return{report:{}}},mounted(){Dashboard.day.subscribe(o=>{this.report=o})}},u={class:"flex card-widget flex-auto flex-col rounded-lg shadow-lg bg-gradient-to-br from-indigo-400 to-indigo-600 px-3 py-5"},h={class:"flex flex-row md:flex-col flex-auto"},p={class:"w-1/2 md:w-full flex md:flex-col md:items-start items-center justify-center"},b={class:"flex justify-between w-full items-center"},g={class:"font-bold hidden text-right md:inline-block"},y={class:"text-2xl font-black"},v={class:"w-1/2 md:w-full flex flex-col px-2 justify-end items-end"},w={class:"font-bold inline-block text-right md:hidden"},k={class:"text-xs text-right"};function C(o,n,j,B,r,t){const l=i("ns-close-button");return _(),f("div",u,[e("div",h,[e("div",p,[e("div",b,[e("h6",g,s(t.__("Expenses")),1),e("div",null,[m(l,{class:"border-gray-400",onClick:n[0]||(n[0]=E=>o.$emit("onRemove"))})])]),e("h3",y,s(t.nsCurrency(r.report.total_expenses||0,"abbreviate")),1)]),e("div",v,[e("h6",w,s(t.__("Expenses")),1),e("h4",k,"+"+s(t.nsCurrency(r.report.day_expenses||0))+" "+s(t.__("Today")),1)])])])}const V=a(x,[["render",C]]);export{V as default};
