import{_ as h,n as f,b}from"./currency-gBUix5n2.js";import{_ as x}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{r as d,o as t,c as o,b as s,t as l,g as u,n as p,f as i,F as y,e as v}from"./runtime-core.esm-bundler-BjZqYwU2.js";const C={mounted(){this.hasLoaded=!1,this.subscription=Dashboard.bestCustomers.subscribe(r=>{this.hasLoaded=!0,this.customers=r})},methods:{__:h,nsCurrency:f,nsRawCurrency:b},data(){return{customers:[],subscription:null,hasLoaded:!1}},unmounted(){this.subscription.unsubscribe()}},g={id:"ns-best-customers",class:"flex flex-auto flex-col shadow rounded-lg overflow-hidden"},w={class:"flex-auto"},j={class:"head text-center flex justify-between items-center border-b w-full p-2"},k={key:0,class:"w-full flex items-center justify-center"},L={key:1,class:"flex items-center justify-center flex-col"},B=s("i",{class:"las la-grin-beam-sweat text-6xl"},null,-1),N={class:"text-sm"},V={key:2,class:"table w-full"},z={class:"p-2"},D={class:"-mx-1 flex justify-start items-center"},F=s("div",{class:"px-1"},[s("div",{class:"rounded-full"},[s("i",{class:"las la-user-circle text-xl"})])],-1),R={class:"px-1 justify-center"},E={class:"font-semibold items-center"},S={class:"flex justify-end amount p-2"};function W(r,a,q,A,e,c){const _=d("ns-close-button"),m=d("ns-spinner");return t(),o("div",g,[s("div",w,[s("div",j,[s("h5",null,l(c.__("Best Customers")),1),s("div",null,[u(_,{onClick:a[0]||(a[0]=n=>r.$emit("onRemove"))})])]),s("div",{class:p(["body flex flex-col h-64",e.customers.length===0?"body flex items-center justify-center flex-col h-64":""])},[e.hasLoaded?i("",!0):(t(),o("div",k,[u(m,{size:"12",border:"4"})])),e.hasLoaded&&e.customers.length===0?(t(),o("div",L,[B,s("p",N,l(c.__("Well.. nothing to show for the meantime")),1)])):i("",!0),e.customers.length>0?(t(),o("table",V,[s("thead",null,[(t(!0),o(y,null,v(e.customers,n=>(t(),o("tr",{key:n.id,class:"entry border-b text-sm"},[s("th",z,[s("div",D,[F,s("div",R,[s("h3",E,l(n.first_name)+" "+l(n.last_name),1)])])]),s("th",S,l(c.nsCurrency(n.purchases_amount)),1)]))),128))])])):i("",!0)],2)])])}const J=x(C,[["render",W]]);export{J as default};
