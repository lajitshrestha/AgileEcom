<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #35424a;
            color: #ffffff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #e8491d 3px solid;
        }
        header a {
            color: #ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header li {
            float: right;
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .team-member {
            background: #ffffff;
            margin: 10px;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            text-align: center;
            width: 250px;
        }
        .team-member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }
        footer {
            background: #35424a;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>Agile Ecom</h1>
            </div>
        </div>
    </header>
    <section class="content container">
        <h2>About Us</h2>
        <p>Welcome to Agile Ecom, your ultimate destination for all kinds of shoes! We specialize in offering a diverse range of footwear to cater to every style, preference, and occasion. Whether you’re looking for the perfect running shoes, comfortable sneakers, or rugged boots, Agile Ecom has it all.</p>
        
        <h3>Our Team</h3>
        <div class="team">
        <div class="team-member">
                <img src="team1.jpg" alt="Team Member 1">
                <h4>Lajit Shrestha</h4>
                <p>Project Manager</p>
                <p>Explain</p>
            </div>
            <div class="team-member">
                <img src="team2.jpg" alt="Team Member 2">
                <h4>Sujal Prajapati</h4>
                <p>Developer</p>
                <p>He is a developer focused on creating the website.</p>
            </div>
            <div class="team-member">
                <img src="team3.jpg" alt="Team Member 3">
                <h4>Pratik Chand Bohara</h4>
                <p>Developer</p>
                <p>John is our tech guru, constantly innovating and improving our technology.</p>
            </div>
            <div class="team-member">
                <img src="team4.jpg" alt="Team Member 4">
                <h4>Pasang Gyalzen Sherpa</h4>
                <p>Developer</p>
                <p>Emily ensures our operations run smoothly and efficiently.</p>
            </div>
            <div class="team-member">
                <img src="team5.jpg" alt="Team Member 5">
                <h4>Pratik Tuladhar</h4>
                <p>BA</p>
                <p>Emily ensures our operations run smoothly and efficiently.</p>
            </div>
        </div>
    </section>
    <footer>
        <p>Agile Ecom &copy; 2024, All Rights Reserved</p>
    </footer>
</body>
</html>
