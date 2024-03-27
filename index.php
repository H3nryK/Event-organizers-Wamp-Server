<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "events";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Select data from events table
$sql = "SELECT title, description, date, time, location, contact FROM event_data";
$result = $conn->query($sql);

$events_data = array();
if ($result->num_rows > 0) {
    //Output data of each rows
    while($row = $result->fetch_assoc()) {
        $events_data[] = $row;
    }
}

// close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>Events Organizers</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .hero {
                position: relative;
                width: 100%;
                padding: 80px 0;
                background: url('IMG_0068-2.jpg') top center fixed;
                background-size: cover;
                background-repeat: no-repeat;
            }

            .hero:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8); /* Adjust the opacity as needed */
                z-index: 1;
            }

            .container {
                position: relative;
                z-index: 10;
            }

            .container h1 {
                text-align: center;
                color: #fff;
                font-family: luminari, fantasy;
                letter-spacing: 3px;
                font-size: 45px;

            }
            h2 {
                text-align: center;
                color: #fff;
                font-family: "Nunito", sans-serif;
            }

            .container table {
                width: 100%;
                margin: 30px auto;
                border-collapse: collapse;
                border: 1px solid #ccc;
                animation: tableBackgroundAnimation 5s infinite;
            }

            @keyframes tableBackgroundAnimation {
                0% {
                    background-color: #f2f2f2;
                }
                50% {
                    background-color: #ffffff;
                }
                100% {
                    background-color: #f2f2f2;
                }
            }

            .container table th,
            .container table td {
                border: 1px solid #ccc;
                padding: 12px;
                text-align: left;
            }

            .container table th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            .container table tr:nth-child(even) {
                background-color: f9f9f9;
            }

            .form {
                margin: 20px auto;
                width: 400px;
                padding: 20px;
                position: relative;
                z-index: 2;
            }

            .form input {
                width: 100%;
                margin: 10px auto;
                padding: 10px;
                border-radius: 10px;
                border: none;
                border-bottom: 1px solid #000000;
                outline: none;
                transition: 1s;
                background-color: rgba(255, 255, 255, 0.6);
            }

            .form input:hover,
            .form textarea:hover,
            .form button:hover {
                background-color: #fff;
            }

            .form input::placeholder,
            .form textarea::placeholder {
                color: #000;
            }

            .form textarea {
                width: 100%;
                height: 100px;
                margin: 10px auto;
                padding: 10px;
                border-radius: 10px;
                border: none;
                border-bottom: 1px solid #000000;
                outline: none;
                transition: 1s;
                background-color: rgba(255, 255, 255, 0.6);
            }

            .form button {
                width: 100%;
                margin: 10px auto;
                padding: 10px;
                border: none;
                border-radius: 10px;
                background-color: rgba(255, 255, 255, 0.6);
            }

            .form button:hover {
                width: 100%;
                margin: 10px auto;
                padding: 10px;
                border: none;
                border-radius: 10px;
                transition: 1s;
                box-shadow: 10px 10px 10px rgba(255,255,255,0.3)
            }

            footer {
                background-color: #333; 
                color: #fff; 
                padding: 30px 0; 
            }

            footer .container {
                text-align: center;
            }

            footer p {
                margin-bottom: 10px; 
            }

            footer p:last-child {
                margin-bottom: 0;
            }

            footer a {
                color: #fff;
                text-decoration: none; 
            }

            footer a:hover {
                text-decoration: underline; 
            }
        </style>
    </head>
    <body>
        <div class="hero">
            <div class="container">
                <h1>Wazito Event Organizers</h1>
                <p style="padding: 30px; font-family: courier, monospace; margin-top: 90px; text-align: center; color: #fff; font-size: 22px;">Wazito Event Organizers is your go-to for flawless event planning. Our experienced team brings creativity and precision to every occasion, from corporate gatherings to weddings. We handle all aspects of event coordination with meticulous attention to detail, ensuring seamless execution and exceeding your expectations. With our commitment to excellence and personalized service, let us turn your vision into reality and create unforgettable experiences for you and your guests.</p>
                <h2>Fill your event details below</h2>
                <form class="form" action="submit.php" method="post">
                    <input type="text" id="title" name="title" placeholder="Your event title" required>
                    <textarea id="description" name="description" placeholder="describe your event"></textarea>
                    <input type="date" id="date" name="date" required>
                    <input type="time" id="time" name="time" required>
                    <input type="text" id="location" name="location" placeholder="Your event location" required>
                    <input type="number" id="contact" name="contact" placeholder="Your event contact" required>
                    <button type="submit" value="submit">Submit</button>
                </form>
            </div>
            <div class="container" style="padding: 30px;">
                <h1>Event List</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Description</th>
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>Event Location</th>
                            <th>Event contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($events_data as $event): ?>
                            <tr>
                                <td><?php echo $event['title']; ?></td>
                                <td><?php echo $event['description']; ?></td>
                                <td><?php echo $event['date']; ?></td>
                                <td><?php echo $event['time']; ?></td>
                                <td><?php echo $event['location']; ?></td>
                                <td><?php echo $event['contact']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <footer>
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> Wazito Event Organizers. All rights reserved.</p>
                <p>Contact us: +254794428309</p>
            </div>
        </footer>
    </body>
</html>