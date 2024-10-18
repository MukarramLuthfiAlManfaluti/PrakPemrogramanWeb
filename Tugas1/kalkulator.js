document.addEventListener("keydown", function(event) {
    const key = event.key; // Get the key pressed

    // Check if the key is a number or operator and add to the display
    if (!isNaN(key) || ['+', '-', '*', '/', '%', '.'].includes(key)) {
        insert(key);
    }

    // If Enter is pressed, calculate the result
    if (key === 'Enter') {
        calculate();
    }

    // If Backspace is pressed, remove the last character
    if (key === 'Backspace') {
        backspace();
    }

    // If Escape or 'c' is pressed, clear the display
    if (key === 'Escape' || key.toLowerCase() === 'c') {
        clearDisplay();
    }
});

function insert(value) {
    let display = document.getElementById("display");
    display.value += value;
}

function clearDisplay() {
    document.getElementById("display").value = "";
}

function backspace() {
    let display = document.getElementById("display").value;
    document.getElementById("display").value = display.slice(0, -1);
}

function calculate() {
    try {
        let display = document.getElementById("display").value;
        let result = eval(display);
        document.getElementById("display").value = result;
    } catch (e) {
        alert("Invalid input");
        clearDisplay();
    }
}
