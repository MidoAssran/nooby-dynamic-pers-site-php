/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    //jQuery to collapse the navbar on scroll
    $(window).scroll(function () {
        if ($("h1").offset().top > 100) {
            $(".jumbotron").addClass("jumb-collapse");
        } else {
            $(".jumbotron").removeClass("jumb-collapse");
        }
    });

    $(".close").click(function () {
        $(".msge").css("display", "none");
        $(".errMsge").css("display", "none");

    });

});

var PFEEDBACK = PFEEDBACK || (function () {
    return {
        subFeedback: function () {
            $(".msge").css("display", "block");
        },
        errorMsge: function () {
            $(".errMsge").css("display", "block");
        }
    };
}());