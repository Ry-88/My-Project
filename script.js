
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
        if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        } else {
        header.classList.remove("sticky");
         }
        }
        function changeHr() {
            document.getElementById("hr").className = "tow";
            }
            function changeHr1() {
            document.getElementById("hr1").className = "towH";
            }

            function hrlog() {
            document.getElementById("hr").className = "hr_log";
            }

            $('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

    function viewc1() {
      window.location.href = "courses.php";
    }