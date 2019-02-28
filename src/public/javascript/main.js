 // $(document).on('ready', function() {

 $(document).ready(function(){

    // Determine the status of the "reviews" widget
    if ($("div").hasClass("no-reviews")){
        $("#reviews button")
        .attr('id', 'leave-recall')
        .attr('data-target', '#modal-window-review')
        .attr('data-toggle', 'modal')
        .append("Оставить отзыв <i class='far fa-comment-alt'></i>");
    }
    else if ($("div").hasClass("review")){
        $("#reviews button")
        .attr('id', 'more-recall')
        .append("<i class='far fa-caret-square-down'></i> Больше отзывов");
    }

    $('button[id="more-recall"]').on('click', function(){
        location.href = "reviews.html";
    });

    // Slick.js plugin settings
    $('.slick-center').slick({
  		centerMode: true,
  		centerPadding: '130px',
  		slidesToShow: 3,
  		variableWidth: true,
  		adaptiveHeight: true,
  		speed: 500,
        infinite: true,
        cssEase: 'linear',
  		// autoplay: true,
	});
      
});