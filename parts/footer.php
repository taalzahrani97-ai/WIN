
<script src="./js/bootstrap.bundle.min.js" ></script>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
<script>
    var countDownDate = new Date("Jan 5, 2027 15:37:25").getTime();
var x = setInterval(function() {
  var counter = document.querySelector("#countdown");
  counter.style.color = "blue";
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + "يوم " + hours + "ساعة "
  + minutes + "دقيقة " + seconds + "ثانية ";
  if (distance < 0) {
    clearInterval(x);
   counter . innerHTML = "لقد وصلت متاخرا";
  }
}, 1000);

const win = document.querySelector("#winner");
const cards = document.querySelector("#cards");

win.addEventListener('click', function(){

  cards.style.display = 'flex';

});
     
    </script>
</body>

</html>




