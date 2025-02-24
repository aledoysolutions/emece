function animateNumber(elementId, targetNumber, duration) {
    let start = 0;
    const increment = targetNumber / (duration / 16); // 60 FPS
    const element = document.getElementById(elementId);

    function updateNumber() {
        start += increment;
        if (start < targetNumber) {
            element.textContent = Math.ceil(start);
            requestAnimationFrame(updateNumber);
        } else {
            element.textContent = targetNumber;
        }
    }

    updateNumber();
}

// Animate the numbers
animateNumber("number1", 1000, 3000); // 3 seconds for 1000
animateNumber("number2", 400, 2000);  // 2 seconds for 400
animateNumber("number3", 74, 1000);   // 1 second for 74