 function countUp(elementId, target, duration = 2000) {
            let start = 1;
            const element = document.getElementById(elementId);
            if (!element) return;
            
            const startTime = performance.now();

            function updateCount(currentTime) {
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / duration, 1);
                const value = Math.floor(progress * target);

                element.textContent = value;

                if (value < target) {
                    requestAnimationFrame(updateCount);
                }
            }

            requestAnimationFrame(updateCount);
        }

        countUp("card1", 1000);
        countUp("card2", 400);
        countUp("card3", 74);