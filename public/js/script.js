$(document).ready(function(){$(window).scroll(function(){if($(window).scrollTop()>($('#cirle_benefit-section').offset().top-450)&&$(window).scrollTop()<($('#cirle_benefit-section').offset().top-435)){console.log('success');var $el1=$("#el-1"),value1=1200;$({percentage:0}).stop(true).animate({percentage:value1},{duration:2000,step:function(){var percentageVal=Math.round(this.percentage);$el1.text(percentageVal);}}).promise().done(function(){$el1.text(value1);});var $el2=$("#el-2"),value2=30;$({percentage:0}).stop(true).animate({percentage:value2},{duration:2000,step:function(){var percentageVal=Math.round(this.percentage);$el2.text(percentageVal);}}).promise().done(function(){$el2.text(value2);});var $el3=$("#el-3"),value3=200;$({percentage:0}).stop(true).animate({percentage:value3},{duration:2000,step:function(){var percentageVal=Math.round(this.percentage);$el3.text(percentageVal);}}).promise().done(function(){$el3.text(value3);});var $el4=$("#el-4"),value4=1200;$({percentage:0}).stop(true).animate({percentage:value4},{duration:2000,step:function(){var percentageVal=Math.round(this.percentage);$el4.text(percentageVal);}}).promise().done(function(){$el4.text(value4);});}});});