let lastScrollTop = 0; // Tracks the last scroll position
const navbar = document.querySelector(".navbar"); // Selects the navbar element

// Throttle function for better performance
const throttle = (callback, delay) => {
  let timeout = false;
  return () => {
    if (!timeout) {
      callback();
      timeout = true;
      setTimeout(() => (timeout = false), delay);
    }
  };
};

// Scroll event listener
window.addEventListener(
  "scroll",
  throttle(() => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // Scrolling down - hide navbar
      navbar.style.top = "-86px"; // Match the navbar's height
    } else {
      // Scrolling up - show navbar
      navbar.style.top = "0";
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Prevents negative values
  }, 100) // Adjust throttle delay (100ms)
);

