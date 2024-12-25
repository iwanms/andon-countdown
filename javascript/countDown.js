let countdown;
let timeLeft = 15;
let isRunning = false;
let interval;

// Format time in MM:SS
function formatTime(seconds) {
	const minutes = Math.floor(seconds / 60);
	const remainingSeconds = seconds % 60;
	return `${String(minutes)}:${String(remainingSeconds)}`;
}

// Start the countdown
function startCountdown() {
	interval = setInterval(() => {
		if (timeLeft > 0) {
			timeLeft--;
			document.getElementById("countdown").textContent = formatTime(timeLeft);
		} else {
			clearInterval(interval);
			disableButtons();
		}
	}, 1000);

	// Update button states
	// document.getElementById("startButton").disabled = true;
	// document.getElementById("pauseButton").disabled = false;
	// document.getElementById("resetButton").disabled = false;
	isRunning = true;
}

// Pause the countdown
function pauseCountdown() {
	clearInterval(interval);
	// document.getElementById("startButton").disabled = false;
	// document.getElementById("pauseButton").disabled = true;
	isRunning = false;
}

// Reset the countdown
function resetCountdown() {
	clearInterval(interval);
	timeLeft = 15; // Reset to initial time (600 seconds = 10 minutes)
	document.getElementById("countdown").textContent = formatTime(timeLeft);
	disableButtons();
}

// Disable buttons when timer is stopped
function disableButtons() {
	// document.getElementById("startButton").disabled = false;
	// document.getElementById("pauseButton").disabled = true;
	// document.getElementById("resetButton").disabled = true;
}

// Event listeners
// document
// 	.getElementById("startButton")
// 	.addEventListener("click", startCountdown);
// document
// 	.getElementById("pauseButton")
// 	.addEventListener("click", pauseCountdown);
// document
// 	.getElementById("resetButton")
// 	.addEventListener("click", resetCountdown);

// Initialize the countdown display and buttons
document.getElementById("countdown").textContent = formatTime(timeLeft);

disableButtons(); // Initially disable the pause and reset buttons
