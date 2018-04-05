$(document).ready(function() {
	$(".my-progress-bar1").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        text: "1200 Успешных операций"
    });
    $(".my-progress-bar2").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        text: "50 Специалистов"
    });
    $(".my-progress-bar3").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        text: "200 Партнеров и спонсоров"
    });
    $(".my-progress-bar4").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 25, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        text: "20 Лет доверии"
    });
    $(window).scroll(function() {
    	if ($(window).scrollTop() > $('.card-spec').offset().top - 50) {
    		$(".my-progress-bar1").circularProgress('animate', 100, 5000);
            $(".my-progress-bar2").circularProgress('animate', 100, 5000);
            $(".my-progress-bar3").circularProgress('animate', 100, 5000);
            $(".my-progress-bar4").circularProgress('animate', 100, 5000);
    	}
    });
});
