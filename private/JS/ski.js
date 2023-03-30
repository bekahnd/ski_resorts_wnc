// const tabs = document.querySelectorAll('[data-tab-value]')
// const tabInfos = document.querySelectorAll('[data-tab-info]')

// tabs.forEach(tab => {
//   tab.addEventListener('click', () => {
//     const target = document.querySelector(tab.dataset.tabValue);

//     tabInfos.forEach(tabInfo => {
//         tabInfo.classList.remove('active')
//     })
//     target.classList.add('active');
//   })
// })

function selectTab(tabIndex) {
  //Hide All Tabs
  document.getElementById('tab1Content').style.display="none";
  document.getElementById('tab2Content').style.display="none";
  document.getElementById('tab3Content').style.display="none";
  
  //Show the Selected Tab
  document.getElementById('tab' + tabIndex + 'Content').style.display="block";  
}