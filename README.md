# Number Guessing Game

Welcome to the "Guessing Game" created by Khawar Khan. Test your guessing skills and try to guess the correct number!

## Prerequisites
- PHP installed on your machine.
- XAMPP installed on your machine. 
- A web server (e.g., Apache) to host the PHP files.
  
## How to Play

1. **Access the Game:**
   - Open the game in your web browser.

2. **Guess the Number:**
   - Enter your guess in the input field provided.

3. **Submit Your Guess:**
   - Click the "Guess Number" button to submit your guess.

4. **Game Feedback:**
   - Receive feedback on your guess:
     - "Missing guess parameter" if no guess is provided.
     - "Your guess is too short" if the guess is empty.
     - "Your guess is not a number" if the input is not a numeric value.
     - "You are close" if the guess is within 5 units of the correct answer (excluding the correct answer).
     - "Your guess is too high" if the guess is higher than the correct answer.
     - "Your guess is too low" if the guess is lower than the correct answer.
     - "Congratulations - You are right" if the guess matches the correct answer.

## Game Mechanics

- The correct answer is initially set to 57. You can customize it by changing the value of `$ans` in the PHP code.

## How to Run

1. Clone the Repository:
   ```bash
   git clone https://github.com/KhawarGit/Guessing-Game-PHP.git
2. Navigate to the Program:
   ```bash
   cd Guessing-Game-PHP
3. Copy Repository in XAMPP's htdocs (if not cloned in htdocs):
   ```bash
   #for Windows
   xcopy /E Guessing-Game-PHP C:\xampp\htdocs\
   #for Linux/Unix
   cp -r Guessing-Game-PHP C:\xampp\htdocs\
4. Access the Program:
   * Open your web browser and go to:
   ```plaintext
   http://localhost/Guessing-Game-PHP/guess.php

## Troubleshooting
  If you encounter any issues, please check the following:
  * Ensure that XAMPP's Apache server is running.
  * Verify the correct path in the browser URL, including the folder name.
  * Check for any error messages in the XAMPP logs.

## Author
Khawar Khan
<br />
LinkedIn: www.linkedin.com/in/khawar-khan
