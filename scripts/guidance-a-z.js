// jQuery for Records Guidance A-Z.
// Gwyn Jones - May 2012



// $(document).ready(function(){
// 	$("#keywords-holder-list a").click(function(){
// 		$("#instructions-bg").slideUp('slow');
// 		$("#instructions").slideUp('slow');
// 	});						   
// });

	$( "#guidanceLinks li" ).hide();

	$(function () {

        $('ul#keywords-holder-list li a').click(function () {

            $('#guidanceLinks li').show()
        });

    });
		