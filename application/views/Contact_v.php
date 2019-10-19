<title>Contact</title>
<link href="./Content/Contact.css" rel="stylesheet" />
<div style="text-align:center; border-radius: 5px;
    background-color: #F7BFD3;
    padding: 10px;">
    <h2>Contact</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
</div>
<div class="mainContainer">
    <ngx-loading [show]="loadingEmail" [config]="{ backdropBorderRadius: '14px' }"></ngx-loading>

    <div class="column">
        <form action="/action_page.php">
            <label for="fname">Name</label>
            <input type="text" [(ngModel)]="name" id="name" name="name" placeholder="Your name..">
            <label for="lname">E-mail</label>
            <input type="text" id="email" [(ngModel)]="email" name="email" placeholder="Your e-mail..">
            <label for="country">Country</label>
            <input type="text" id="country" [(ngModel)]="country" name="country" placeholder="Your country..">
            <label for="subject">Subject</label>
            <br/>
            <textarea id="subject" name="subject" [(ngModel)]="message" placeholder="Write something.." style="height:145px"></textarea>
            <input type="submit" value="Submit" (click)="sendEmail()">
        </form>
    </div>

    <div class="column">
        <iframe style="width:100%;height:300px" allowfullscreen  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3484.060140129107!2d-51.15229!3d-29.1629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDA5JzQ2LjQiUyA1McKwMDknMDguMiJX!5e0!3m2!1spt-BR!2sbr!4v1533093927216"></iframe>
        <div id="map" style="width:100%;height:490px" hidden></div>
    </div>
</div>