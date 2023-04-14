/* For prices page to have tabs for different tables */
function selectTab(tabIndex) {
  //Hide All Tabs
  document.getElementById('tab1Content').style.display="none";
  document.getElementById('tab2Content').style.display="none";
  document.getElementById('tab3Content').style.display="none";
  
  //Show the Selected Tab
  document.getElementById('tab' + tabIndex + 'Content').style.display="block";  
}

/* For admin gallery delete button on hover */
const imageContainers = document.querySelectorAll('#alb');

imageContainers.forEach(imageContainer => {
  const deleteButton = imageContainer.querySelector('.delete_button');
  const image = imageContainer.querySelector('img');

  imageContainer.addEventListener('mouseenter', () => {
    deleteButton.style.display = 'block';
  });

  imageContainer.addEventListener('mouseleave', () => {
    deleteButton.style.display = 'none';
  });
});