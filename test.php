<html>
    <head><title>js test</title></head>
    <body>

        <h1 class="same">Shamim</h1>
        <h1 class="same">Ahmed</h1>

        <h1 class="sh"></h1>
        <input type="button" id="btn" value="click" onclick="f()">

        <script>

            if (confirm('Are you sure you want to save this thing into the database?')) {
                console.log('Thing was saved to the database?');
            } else {
                console.log('Thing was not saved to the database.');
            }

            function f()
            {
                const x = document.querySelector(".sh");
                if(x.textContent === "show")
                {
                    x.textContent = "";
                    document.querySelector('#btn').value = "show";
                }
                else
                {
                    x.textContent = "show";
                    document.querySelector('#btn').value = "hide";
                }
            }
            // const x = document.querySelector(".same");
            // x.textContent = "cool";
            // console.log("hello world");
            // alert("hello world");
            // for(let i = 0; i < 10; i++)
            //     console.log(i);
        </script>
    </body>
</html>