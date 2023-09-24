"use strict";(globalThis.webpackChunknewfold_Onboarding=globalThis.webpackChunknewfold_Onboarding||[]).push([[958],{8958:(e,t,a)=>{a.r(t),a.d(t,{default:()=>k});var c=a(9307),n=a(2819),s=a(4333),l=a(9818),i=a(6831),o=a(2200),r=a(1996),d=a(3421),u=a(4316),m=a(1984),h=a(6058),b=a(5609),v=a(682);const p=e=>{let{name:t,icon:a,title:n,desc:s,subtitle:l,callback:i,tabIndex:o=0,isSelectedDefault:r,className:d="checkbox-item"}=e;const[u,p]=(0,c.useState)(!1),[E,g]=(0,c.useState)(r),k=()=>{p(!u)};return(0,c.createElement)("div",null,(0,c.createElement)("div",{className:`${d} ${E&&`${d}--selected`} ${u&&`${d}--shown`}`},(0,c.createElement)("div",{className:`${d}-container`},(0,c.createElement)(b.CheckboxControl,{checked:E,onChange:()=>{g(!E),i(t,!E)},className:`${d}-checkbox`}),(0,c.createElement)("div",{className:`${d}__contents`},(0,c.createElement)("div",{className:`${d}__contents-icon\n                                     ${E&&`${d}__contents-icon--selected`}\n                                     ${u&&`${d}__contents-icon--shown`}`},(0,c.createElement)("div",{style:{width:"35px",height:"35px",backgroundPosition:"center",backgroundRepeat:"no-repeat",backgroundImage:`var(${a}${E?"--light":""})`}})),(0,c.createElement)("div",{className:`${d}__contents-text`},(0,c.createElement)("div",{className:`${d}__contents-text-title ${E&&`${d}__contents-text-title--selected`}`},n),(0,c.createElement)("div",{className:`${d}__contents-text-subtitle`},l)),(0,c.createElement)("div",{className:`${d}__contents-help ${u?"highlighted":""}`,onClick:k,role:"button",onKeyDown:k,tabIndex:o},(0,c.createElement)(m.Z,{icon:h.Z,style:{width:"30px",height:"30px"}}))))),u&&(0,c.createElement)(v.Z,{className:` ${d}__dropdown `,type:"dropdown"},(0,c.createElement)("div",{className:`${d}__desc`},s)))},E=e=>{let{count:t}=e;const a=()=>{const e=[];for(let a=0;a<t;a++)e.push((0,c.createElement)(v.Z,{type:"shine-placeholder",className:"checkbox-skeleton-item"}));return e};return(0,c.createElement)("div",{className:"checkbox-list"},(0,c.createElement)("div",{className:"checkbox-list-col"},a().slice(0,Math.floor(t/2))),(0,c.createElement)("div",{className:"checkbox-list-col"},a().slice(Math.floor(t/2),t)))},g=e=>{let{callback:t,selectedItems:a,customItemsList:n}=e;const s=Object.keys(n).length,l=()=>{var e=[];for(const l in n){var s=n[l];const i=a[s.slug];e.push((0,c.createElement)(p,{name:s.slug,icon:s.icon,title:s.title,subtitle:s.subtitle,desc:s.desc,callback:t,isSelectedDefault:null!=i&&i}))}return e};return(0,c.createElement)("div",{className:"checkbox-list"},(0,c.createElement)("div",{className:"checkbox-list-col"},l().slice(0,Math.floor(s/2))),(0,c.createElement)("div",{className:"checkbox-list-col"},l().slice(Math.floor(s/2),s)))},k=()=>{var e;const t=(0,s.useViewportMatch)("medium"),[a,m]=(0,c.useState)(),[h,b]=(0,c.useState)(),{setIsDrawerOpened:v,setDrawerActiveView:p,setSidebarActiveView:k,setCurrentOnboardingData:$,setIsDrawerSuppressed:_,setIsHeaderNavigationEnabled:x}=(0,l.useDispatch)(i.h),{currentStep:w,currentData:N,themeVariations:f}=(0,l.useSelect)((e=>({currentStep:e(i.h).getCurrentStep(),currentData:e(i.h).getCurrentOnboardingData(),themeVariations:e(i.h).getStepPreviewData()})),[]);return(0,c.useEffect)((()=>{t&&v(!1),k(o.Jq),_(!1),p(o.tM),x(!0),async function(){var e,t;const a=await(0,d.yn)();(0,n.isEmpty)(null==N||null===(e=N.data)||void 0===e?void 0:e.siteFeatures)?async function(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];const a={};for(const t in e){const c=e[t];a[c.slug]=c.selected}m(a),t&&(N.data.siteFeatures={...a},$(N))}(a.body,!0):m({...null==N||null===(t=N.data)||void 0===t?void 0:t.siteFeatures}),b(a.body)}()}),[]),(0,c.createElement)(r.Z,null,(0,c.createElement)("div",{style:{margin:"100px"}},(0,c.createElement)(u.Z,{title:null==w?void 0:w.heading,subtitle:null==w?void 0:w.subheading})),!h&&(0,c.createElement)(E,{count:null===(e=f[null==w?void 0:w.patternId])||void 0===e?void 0:e.previewCount}),h&&(0,c.createElement)(g,{callback:async function(e,t){const c={...a};c[e]=t,m(c),N.data.siteFeatures={...c},$(N)},selectedItems:a,customItemsList:h}))}}}]);