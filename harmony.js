function toggleAccordion(accordionId) {
  var accordion = document.getElementById(accordionId);
  if (accordion.style.display === "block" || accordion.style.display === "") {
    accordion.style.display = "none";
  } else {
    accordion.style.display = "block";
  }
}
