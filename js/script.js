console.log("testers"); // Add custom JavaScript here

function userScroll() {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 30) {
      navbar.classList.add("bg-light");
      navbar.classList.add("navbar-sticky");
    } else {
      navbar.classList.remove("bg-light");
      navbar.classList.remove("navbar.sticky");
    }
  });
}
document.addEventListener("DOMContentLoaded", userScroll);

const toggler = document.querySelector(".btn");
toggler.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("collapsed");
});

function checkLibraryStatus() {
  const timeStamp = document.querySelector(".timeStamp");
  const currentTime = new Date();
  const openingTime = new Date();
  const closingTime = new Date();

  // Set the opening time to 7:00 AM
  openingTime.setHours(7, 0, 0);

  // Set the closing time to 8:00 PM
  closingTime.setHours(17, 0, 0);

  if (currentTime >= openingTime && currentTime <= closingTime) {
    timeStamp.textContent = "open";
  } else {
    timeStamp.textContent = "closed";
  }
}

// Call the function immediately when the page loads
checkLibraryStatus();

// Call the function every minute to update the status dynamically
setInterval(checkLibraryStatus, 60000); // 60000 milliseconds = 1 minute
