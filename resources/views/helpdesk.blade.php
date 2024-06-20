<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Helpdesk</title>
        <link rel="stylesheet" href="hcss/style3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            const textarea=document.querySelector("textarea");
            textarea.addEventListener("keyup",e =>{
                textarea.style.height="63px";
                let scHeight=e.target.scrollHeight;
                textarea.style.height='$(scHeight)px';
            });
        </script>
</head>
<body>
    <form action="helps" method="POST">
        @csrf
        <div class="wrapper">
            <h2>May I help you?</h2>
            <textarea placeholder="Type something here...." name="question" required></textarea>
            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>