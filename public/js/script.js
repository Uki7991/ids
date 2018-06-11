$(document).ready(function() {
	$(".my-progress-bar1").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
    });
    $(".my-progress-bar2").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
    });
    $(".my-progress-bar3").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
    });
    $(".my-progress-bar4").circularProgress({
        line_width: 5,
        color: "#ccc",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
    });
    $(window).scroll(function() {
    	if ($(window).scrollTop() > $('#cirle_benefit-section').offset().top - 250 && $(window).scrollTop() < $('#cirle_benefit-section').offset().top - 245) {
    		$(".my-progress-bar1").circularProgress('animate', 100, 5000);
            $(".my-progress-bar2").circularProgress('animate', 100, 5000);
            $(".my-progress-bar3").circularProgress('animate', 100, 5000);
            $(".my-progress-bar4").circularProgress('animate', 100, 5000);

                var $el1 = $("#el-1"),
                    value1 = 1200;
                
                $({percentage: 0}).stop(true).animate({percentage: value1}, {
                    duration : 2000,
                    // easing: "easeOutExpo",
                    step: function () {
                        // percentage with 1 decimal;
                        var percentageVal = Math.round(this.percentage);
                        
                        $el1.text(percentageVal);
                    }
                }).promise().done(function () {
                    // hard set the value after animation is done to be
                    // sure the value is correct
                    $el1.text(value1);
                });

                var $el2 = $("#el-2"),
                    value2 = 30;
                
                $({percentage: 0}).stop(true).animate({percentage: value2}, {
                    duration : 2000,
                    // easing: "easeOutExpo",
                    step: function () {
                        // percentage with 1 decimal;
                        var percentageVal = Math.round(this.percentage);
                        
                        $el2.text(percentageVal);
                    }
                }).promise().done(function () {
                    // hard set the value after animation is done to be
                    // sure the value is correct
                    $el2.text(value2);
                });

                var $el3 = $("#el-3"),
                    value3 = 200;
                
                $({percentage: 0}).stop(true).animate({percentage: value3}, {
                    duration : 2000,
                    // easing: "easeOutExpo",
                    step: function () {
                        // percentage with 1 decimal;
                        var percentageVal = Math.round(this.percentage);
                        
                        $el3.text(percentageVal);
                    }
                }).promise().done(function () {
                    // hard set the value after animation is done to be
                    // sure the value is correct
                    $el3.text(value3);
                });

                var $el4 = $("#el-4"),
                    value4 = 1200;
                
                $({percentage: 0}).stop(true).animate({percentage: value4}, {
                    duration : 2000,
                    // easing: "easeOutExpo",
                    step: function () {
                        // percentage with 1 decimal;
                        var percentageVal = Math.round(this.percentage);
                        
                        $el4.text(percentageVal);
                    }
                }).promise().done(function () {
                    // hard set the value after animation is done to be
                    // sure the value is correct
                    $el4.text(value4);
                });

    	}
    });
});
