<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/main.css">
    <title>Contact</title>
</head>
<body>
    <div class="projects">
    <section id="project1">
          <div class="label_wrapper">
            <h1 class="hidden">bootcamp</h1>
            <img src="images/boot_camp.png" alt="bootcamp">
            <span class="see-more" data-target="1">See More Info!</span>
          </div>
        </section>

        <section id="project2">
          <div class="label_wrapper">
            <h1 class="hidden">hackathon</h1>
            <img src="images/hackthon.png" alt="hackathon">
            <span class="see-more" data-target="2">See More Info!</span>
          </div>

        </section>

        <section id="project3">
          <div class="label_wrapper">
            <h1 class="hidden">organ donate</h1>
            <img src="images/organ_donate.jpg" alt="organ donate">
            <span class="see-more" data-target="3">See More Info!</span>
          </div>
        </section>

        <article class="popover">
            <h4 class="name"></h4>
            <div class="type"></div>
            <p class="description"></p>
        </article>
    </div>




    <div>
    <form class="contact-form" action="database/contact.php" method="post">
        <h1>Contact Me</h1>

        <label for="name" class="hidden">Name</label>
        <input class="form-box" type="text" id="name" name="name" placeholder="Name" required>
        <!-- labe for="name" = input id="name ) can help when browser click 
        the label name and related input area will be selected   !!!super important-->

        <label for="email" class="hidden">Email</label>
        <input class="form-box" type="email" id="email" name="email" placeholder="Email" required>

        <label for="subject" class="hidden">Subject</label>
        <input class="form-box" type="text" id="subject" name="subject" placeholder="Subject" required>

        <label for="message" class="hidden">Message</label>
        <textarea id="message" placeholder="Please type your message" name="message" required></textarea>

        <button  class="form-button" type="submit">Submit</button>

    
    </form>
    </div>

    <script src="js/main.js"></script>
</body>
</html>